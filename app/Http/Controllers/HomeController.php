<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Event;
use App\Models\Order;
use App\Models\Country;
use App\Models\Test;
use App\Models\Variation;
use App\Models\UserSession;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Jenssegers\Agent\Agent;

use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Event as FBEvent;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\UserData;

class HomeController extends Controller
{

    private $returnedData = [];
    private $customerData = [];
    private $variation;
    private $variationField;
    private $api;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('countryCheck');
        $this->modelProduct = new Product();
        $this->modelTest = new Test();
        $this->modelVariation = new Variation();
        $this->modelSession = new UserSession();
        $this->modelEvent = new Event();
        $this->modelCountry = new Country();
        $this->modelBrand = new Brand();
        $this->api = new ApiController();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request, $site = null, $domain = null, $slug = null, $coupon = null) {

        $brandUrl = 'https://'.$site.'.'.$domain;
        $country_id = $request->get('countryId');

        $brand = $this->modelBrand->getBrandByUrl($brandUrl);

        if($brand === null) return abort('404');

        $brand_id = $brand->id_brand;
        $domain_id = $brand->id_domain;

        $product = $this->modelProduct->findProduct($slug, $brand_id, $country_id);
        $product_id = $product->id_product;
        $this->data['product'] = $product;

        if($product === null) return abort('404');

        $this->variation = null;

        $request->request->add(['product_id' => $product_id]);
        $cookieResponse = $this->checkCustomerCookies($request);

        if($cookieResponse) {
            $this->variation = $this->variationField;
        } else {
            $activeTest = $this->modelTest->testForProduct($product_id);

            if($activeTest) {
                $testVisits = 1;

                $activeTest->testVariations->each(function ($testVariation) use(&$testVisits) {
                    $testVisits += $testVariation->loadCount('userSessions')->getAttribute('user_sessions_count');
                });

                $activeTest->testVariations->each(function ($testVariation) use($testVisits) {
                    $percentage = $testVariation->traffic_percentage / 100;
                    $variationVisits = $testVariation->loadCount('userSessions')->getAttribute('user_sessions_count');
                    $currentPercentage = $variationVisits / $testVisits;
                    if($currentPercentage <= $percentage) {
                        $this->variation = Variation::with('prices.currency','product.country','lander','checkout','thankyou')->find($testVariation->getAttribute('variation_id'));
                        $this->customerData['test_variation_id'] = $testVariation->getAttribute('id_tests_variations');
                    }
                });

            } else {
                $this->variation = Variation::with('prices.currency','product.country','lander','checkout','thankyou')
                    ->where([
                        ['product_id',$product_id],
                        ['is_variation_default',1]
                    ])
                    ->first();
            }
        }

        if($this->variation) {
            $this->returnedData = $this->prepareVariationForView($this->variation);

            $this->data['prices'] = $this->returnedData['prices'];
            $this->data['variation_id'] = $this->returnedData['variationId'];
            $this->data['checkoutView'] = '/'.$product->slug.'/checkout';;
            $this->data['orderRoute'] = '/order';

            $this->customerData['variation_id'] = $this->returnedData['variationId'];

            $this->data['upCrossSells'] = $this->api->getProductUpAndCrossSells('GP-ST-STEZNIKKOLENO', $country_id);

            $this->customerData['uuid'] = $request->session()->get('uuid');

            $this->data['test_variation_id'] = $this->customerData['test_variation_id'] ?? null;

            $this->data['brandUrl'] = $brandUrl;

            try {
                $session_id = $this->insertSession($this->customerData);
                $this->customerData['session_id'] = $session_id;
            } catch (\Exception $exception) {
                Log::error("Error: Insert customer in session | Exception: " . $exception->getMessage());
            }

            $this->data['session_id'] = $this->customerData['session_id'];

            $singleSession = UserSession::find($this->data['session_id']);
            $this->data['test_variation_id'] = $singleSession->test_variation_id;

        } else {
            Log::error("Error: No active variation for this product - Product: ".$product_id);
            return abort('404');
        }
    }

    public function lander(Request $request, $site = null, $domain = null, $slug = null, $coupon = null) {

        $this->index($request, $site, $domain, $slug, $coupon);

        $this->data['event'] = "ViewContent";

        if(isset($this->customerData['session_id'])) {
            try {
                $this->modelEvent->insertSessionEvent($this->customerData['session_id'], 1);
            } catch (\Exception $exception) {
                Log::error("Error: Session - Lander view - DB | Exception: " . $exception->getMessage());
            }
        }

        return view($this->returnedData['landerView'], $this->data);
    }

    public function checkout(Request $request, $site = null, $domain = null, $slug = null, $coupon = null) {
        $this->index($request, $site, $domain, $slug, $coupon);

        $this->data['event'] = "AddToCart";

        if(isset($this->customerData['session_id'])) {
            try {
                $this->modelEvent->insertSessionEvent($this->customerData['session_id'], 2);
            } catch (\Exception $exception) {
                Log::error("Error: Session - Checkout view - DB | Exception: " . $exception->getMessage());
            }
        }

        return view($this->returnedData['checkoutView'], $this->data);
    }

    public function thankyou(Request $request, $site = null, $domain = null, $slug = null) {
        $this->index($request, $site, $domain, $slug);

        if((session('data') != null)) {
            $this->data['order'] = session('data');
        }

        if(isset($this->data['order']->id_up_cross_sell)) {
            $this->data['event'] = "Purchase2";
            $this->data['successUpCrossSell'] = $this->data['order'];
        } else {
            $this->data['event'] = "Purchase";
        }

        switch ($this->returnedData['thankyouView']) {
            case "thankyou.rs.thankyouupsell":
            case "thankyou.rs.thankyoucrosssell":
                if(isset($this->customerData['session_id'])) {
                    try {
                        $this->modelEvent->insertSessionEvent($this->customerData['session_id'], 9);
                    } catch (\Exception $exception) {
                        Log::error("Error: Session - UpCrossSell view - DB | Exception: " . $exception->getMessage());
                    }
                }
                break;
        }

        $this->data['landerView'] = $this->returnedData['landerView'];
        return view($this->returnedData['thankyouView'], $this->data);
    }

    public function checkCustomerCookies(Request $request) {

        $product_id = $request->get('product_id');

        $this->getCustomerDetails($request);

        $response = 0;
        $generate = 1;
        if(isset($_COOKIE['uuid'])) {
            $cookieUuid = $_COOKIE['uuid'];
            $sessionUuid = UserSession::whereHas('variation',function($query) use($product_id){
                $query->where('product_id','=',$product_id);
            })->where('uuid',$cookieUuid)->first();

            if($sessionUuid) {
                $variation = Variation::with('prices.currency','product.country','lander','checkout','thankyou')->find($sessionUuid->getAttribute('variation_id'));
                if($variation) {
                    $this->variationField = $variation;
                    $generate = 0;
                    $response = 1;
                    $uuid = $_COOKIE['uuid'];
                }
            }
        }

        if($generate === 1) {
            $uuid = $this->generateUuid();
            setcookie('uuid',$uuid,time() + (86400 * 90), '/');
        }

        if(isset($uuid)) {
            $request->session()->put('uuid', $uuid);
        }

        return $response;
    }

    public function insertSession($sessionData) {

        $this->modelSession->uuid = $sessionData['uuid'];
        $this->modelSession->customer_ip = $sessionData['ip'];
        $this->modelSession->user_agent = $sessionData['user_agent'];
        $this->modelSession->country_id = $sessionData['country_id'];
        $variation_id = $sessionData['variation_id'];
        if(isset($sessionData['test_variation_id'])) {
            $test_variation_id = $sessionData['test_variation_id'];
        }

        try {

            $checkUuid = UserSession::where('uuid',$this->modelSession->uuid)->where('variation_id',$variation_id)->first();

            if($checkUuid) {
                $sessionId = $checkUuid->id_session;
            } else {
                $sessionId = $this->modelSession->insertSession($variation_id,$test_variation_id ?? null);
            }


            return $sessionId;
        } catch (\Exception $exception) {
            Log::error("Error: Insert new customer in session - DB | Exception: " . $exception->getMessage());
        }

    }

    public function prepareVariationForView($variation)
    {
        $returnData = [];

        $returnData['variationId'] = $variation->getAttribute('id_variation');
        $returnData['landerView'] =  $variation->lander->getAttribute('lander_path');
        $returnData['checkoutView'] = $variation->checkout->getAttribute('checkout_path');
        $returnData['thankyouView'] = $variation->thankyou->getAttribute('thankyou_path');

        $prices = [];
        foreach($variation->prices as $price) {
            if($price->getAttribute('deleted_at') === null) $prices[$price->getAttribute('quantity')] = $price->toArray();
        }

        $returnData['prices'] = $prices;
        return $returnData;
    }

    public function getCustomerDetails($request) : void {
        $agent = new Agent();

        $this->customerData['ip'] = $request->ip();
        $this->customerData['user_agent'] = $agent->getUserAgent();
        $this->customerData['country_id'] = $request->get('countryId');
    }

    public function generateUuid() {
        $l=10;
        $str = "";

        for ($x=0;$x<$l;$x++) {
            $str .= substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 1);
        }

        $resultUuid = UserSession::where('uuid',$str)->first();
        if($resultUuid) $this->generateUuid();

        return $str;
    }

}
