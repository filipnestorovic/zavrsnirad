<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Mail\NewOrderEmail;
use App\Models\AbandonedCart;
use App\Models\Brand;
use App\Models\Coupon;
use App\Models\Event;
use App\Models\Order;
use App\Models\Country;
use App\Models\Pixel;
use App\Models\Review;
use App\Models\Test;
use App\Models\Variation;
use App\Models\UserSession;
use GeoIp2\Database\Reader;
use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;
use PragmaRX\Countries\Package\Countries;
use function Sodium\add;
use Stevebauman\Location\Facades\Location;

use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\ServerSide\ActionSource;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Event as FBEvent;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\UserData;

class HomeController extends Controller
{

    private $returnedData = [];
    private $customerData = [];
    private $testId;
    private $variationField;
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
        $this->modelPixel = new Pixel();
        $this->modelCoupon = new Coupon();
        $this->modelReview = new Review();
        $this->modelSession = new UserSession();
        $this->modelEvent = new Event();
        $this->modelCountry = new Country();
        $this->modelBrand = new Brand();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request, $site = null, $domain = null, $slug = null, $coupon = null) {

        $brandUrl = 'https://'.$site.'.'.$domain;
        $country_id = $request->get('countryId');

        if($slug === "purplerelax") {
//            Log::info('From Google with slug *purplerelax* - slug changed to *vratnimasazer*');
            $slug = "vratnimasazer";
        }

        if($slug === "masazer") {
//            Log::info('From Google with slug *masazer* - slug changed to *multifunkcionalnimasazer*');
            $slug = "multifunkcionalnimasazer";
        }

        $brand_id = $this->modelBrand->getBrandByUrl($brandUrl)->id_brand;

        if($brand_id === null) {
//            Log::info('404 - Brand null - '.$brandUrl);
            return abort('404');
        } else {
            $product = $this->modelProduct->getProductBySlugBrandAndCountry($slug, $brand_id, $country_id);
        }

        if($product === null) {
            $agent = new Agent();
            if(!$agent->isRobot()) {
                $info['ip'] = $request->ip();
                $info['user_agent'] = $agent->getUserAgent();
                $info['isRobot'] = $agent->isRobot();
                $info['httpHeaders'] = $agent->getHttpHeaders();
//                Log::info('404 - Product null - Slug: '.$slug.' - Coupon: '.$coupon.' - Brand: '.$brandUrl.' More info: '.json_encode($info, JSON_PRETTY_PRINT));
            }
            return abort('404');
        } else {
            if($product->country_id != $country_id) { //show product for that country if exists
                $productGroup = $this->modelProduct->groupProductBySku($product->sku);
                foreach($productGroup as $singleProduct) {
                    if($singleProduct->id_country === $country_id) {
                        $request->request->add(['redirectToCountry' => $singleProduct->id_country]);
                        $countryUrl = $singleProduct->country_code;
                        $redirectUrl = 'https://'.$countryUrl.'.'.$site.'.'.$domain.'/'.$singleProduct->slug;
                        return redirect($redirectUrl);
                    }
                }
            }

            $this->data['product'] = $product;

            if($request->get('unexistingCountry') != null) {
                return $this->resolveCountry($request);
            }

            $product_id = $product->id_product;
            $variation = null;

            $customerResponse = $this->getCustomerDetails($request);
            $this->customerData['country_id'] = $product->country_id;

            $cookieResponse = $this->checkCustomerCookies($request, $product_id);

            if($cookieResponse === 1) {
                $variation = $this->variationField;
            }

            if($cookieResponse === 0) {
                $getTests = json_decode($this->modelTest->getAllTests(null, $product_id, 1, null), true);
                $activeTests = $this->getMultipleItemsFromQuery($getTests, 'id_test');
                if (count($activeTests) === 0) {
//                    Log::info('Test - Default variation - '. $product->product_name);
                    $variation = $this->modelVariation->getDefaultVariationByProductId($product_id);
                } else {
                    $visitsTotal = 1;
                    $variationVisits = 1;
                    foreach ($activeTests as $test) {
                        foreach ($test as $singleTestVariation) {
                            $test_variation_id = $singleTestVariation['id_tests_variations'];
                            $visits = $this->modelSession->getVariationVisits($test_variation_id);
                            foreach($visits as $visit) {
                                $visitsTotal += $visit->VariationVisits;
                            }
                        }
                        foreach ($test as $singleTestVariation) {
                            $this->testId = $singleTestVariation['id_test'];
                            $percentage = (int)$singleTestVariation['traffic_percentage'] / 100;
                            $variationVisitsCollection = $this->modelSession->getVariationVisits($singleTestVariation['id_tests_variations']);
                            foreach($variationVisitsCollection as $visit) {
                                $variationVisits = $visit->VariationVisits;
                            }
                            $currentPercentage = $variationVisits / $visitsTotal;
                            if ($currentPercentage <= $percentage) {
                                $variation = $this->modelVariation->getAllVariations(null, null, null, null, null, $singleTestVariation['id_variation']);
                                $this->customerData['test_variation_id'] = $singleTestVariation['id_tests_variations'];
//                                Log::info('Test - Test variation - '.$singleTestVariation['id_tests_variations'].' - '. $product->product_name);
                                break;
                            }
                        }
                    }
                }
            }

            if(count($variation)>0) {
                $this->returnedData = $this->prepareVariationForView($variation);

                $countryCode = $request->get('countryShortcode');
                $host = $request->getHost();

                $this->data['discount'] = $this->checkCouponForVariation($request, $this->returnedData['variationId'], $coupon);
                $this->data['pixels'] = $this->getPixelsForView($product->id_product, $product->id_brand);
                $this->data['prices'] = $this->returnedData['prices'];
                $this->data['productReviews'] = $this->getProductReviews($product_id);
                $this->data['variation_id'] = $this->returnedData['variationId'];
//                $this->data['checkoutView'] = route('checkout',['slug' => $product->slug, 'site' => $site, 'domain' => $domain, 'coupon' => $coupon]);
                $this->data['checkoutView'] = '/'.$product->slug.'/checkout';
//                $this->data['orderRoute'] = route('order',['site' => $site, 'domain' => $domain]);
                $this->data['orderRoute'] = '/order';
                $this->customerData['variation_id'] = $this->returnedData['variationId'];

                $this->customerData['uuid'] = $request->session()->get('uuid');

                try {
                    $session_id = $this->insertSession($this->customerData);
                    $this->customerData['session_id'] = $session_id;
                } catch (\Exception $exception) {
                    Log::error("Error: Insert customer in session | Exception: " . $exception->getMessage());
                }

                $this->data['session_id'] = $this->customerData['session_id'];

            } else {
                Log::error("Error: No active variation for this product - Product: ".$product_id);
                return abort('404');
            }
        }
    }

    public function lander(Request $request, $site = null, $domain = null, $slug = null, $coupon = null) {

        $index = $this->index($request, $site, $domain, $slug, $coupon);
        if($request->get('unexistingCountry') != null || $request->get('redirectToCountry') != null) {
            return $index;
        }

        $this->data['fb_event'] = "ViewContent";

        if(isset($this->customerData['session_id'])) {
            try {
                $this->modelEvent->insertSessionEvent($this->customerData['session_id'], 1);
            } catch (\Exception $exception) {
                Log::error("Error: Session - Lander view - DB | Exception: " . $exception->getMessage());
            }
        }
//        Log::info('Test - Lander view - '.$this->customerData['session_id']);
        return view($this->returnedData['landerView'], $this->data);
    }

    public function checkout(Request $request, $site = null, $domain = null, $slug = null, $coupon = null) {
        $index = $this->index($request, $site, $domain, $slug, $coupon);
        if($request->get('unexistingCountry') != null || $request->get('redirectToCountry') != null) {
            return $index;
        }

        $this->data['fb_event'] = "AddToCart";

        if(isset($this->customerData['session_id'])) {
            try {
                $this->modelEvent->insertSessionEvent($this->customerData['session_id'], 2);
            } catch (\Exception $exception) {
                Log::error("Error: Session - Checkout view - DB | Exception: " . $exception->getMessage());
            }
        }
//        Log::info('Test - Checkout view - '.$this->customerData['session_id']);
        return view($this->returnedData['checkoutView'], $this->data);
    }

    public function thankyou(Request $request, $site = null, $domain = null, $slug = null) {
        $this->index($request, $site, $domain, $slug);

        if((session('data') != null)) {
            $this->data['order'] = session('data');
        } else {
            Log::error("Error: Thank you page without Order details in session!");
            return abort('404');
        }

        $this->data['fb_event'] = "Purchase";

//        Log::info('Test - Thankyou view - '.$this->customerData['session_id']);
        $this->data['landerView'] = $this->returnedData['landerView'];
        return view($this->returnedData['thankyouView'], $this->data);
    }

    public function checkCustomerCookies(Request $request, $product_id) {
        $response = 0;
        $generate = 0;
        if(isset($_COOKIE['uuid'])) {
            $cookieUuid = $_COOKIE['uuid'];
            $sessionUuid = $this->modelSession->checkSessionUuid($cookieUuid);
            if(count($sessionUuid)>0) {
                foreach($sessionUuid as $singleSession) {
                    $variation = $this->modelVariation->getAllVariations(null,null,null,null,null,$singleSession->variation_id);
                    if(count($variation)>0) {
                        $variation_product_id = $variation[0]->id_product;
                        if($variation_product_id === $product_id) {
                            $this->variationField = $variation;
                            $response = 1;
                        }
                        $uuid = $_COOKIE['uuid'];
                    }
                }
            } else {
                $generate = 1;
            }
        } else {
            $ipUuid = $this->modelSession->checkSessionIp(request()->ip());
            $i = 0;
            if(count($ipUuid)>0) {
                foreach($ipUuid as $singleSession) {
                    $variation = $this->modelVariation->getAllVariations(null,null,null,null,null,$singleSession->variation_id);
                    if(count($variation)>0) {
                        $variation_product_id = $variation[0]->id_product;
                        if($variation_product_id === $product_id) {
                            $this->variationField = $variation;
                            $response = 1;
                            $uuid = $ipUuid[$i]->uuid;
                            $generate = 0;
                        } else {
                            $generate = 1;
                        }
                    }
                    $i++;
                }
            } else {
                $generate = 1;
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
        $this->modelSession->variation_id = $sessionData['variation_id'];
        if(isset($sessionData['test_variation_id'])) {
            $this->modelSession->test_variation_id = $sessionData['test_variation_id'];
        }

        try {

            $checkUuid = $this->modelSession->checkSessionUuid($this->modelSession->uuid, $this->modelSession->variation_id);

            if(count($checkUuid)>0) {
                $sessionId = $checkUuid[0]->id_session;
            } else {
                $sessionId = $this->modelSession->insertSession();
            }

            return $sessionId;
        } catch (\Exception $exception) {
            Log::error("Error: Insert new customer in session - DB | Exception: " . $exception->getMessage());
        }

    }

    public function prepareVariationForView($variation){
        $returnData = [];
        $variationJson = json_decode($variation, true);
        $variationResult = $this->getMultipleItemsFromQuery($variationJson,'id_variation');
        foreach($variationResult as $singleVariation) {

            $lander_view = $singleVariation[0]['lander_url'];

            $agent = new Agent();

            if($agent->isMobile()) {
                if($singleVariation[0]['mobile_version']) {
                    $lander_view = $singleVariation[0]['lander_url']."_m";
                }
            }

            $returnData['variationId'] = $singleVariation[0]['id_variation'];
            $returnData['landerView'] = $lander_view;
            $returnData['checkoutView'] = $singleVariation[0]['checkout_url'];
            $returnData['thankyouView'] = $singleVariation[0]['thankyou_url'];

            $prices = [];
            foreach($singleVariation as $singlePrice) {
                $i = $singlePrice['quantity'];
                if($singlePrice['variation_price_deleted'] === null) {
                    $prices[$i]['id_variations_prices'] = $singlePrice['id_variations_prices'];
                    $prices[$i]['quantity'] = $singlePrice['quantity'];
                    $prices[$i]['amount'] = $singlePrice['amount'];
                    $prices[$i]['is_default'] = $singlePrice['is_default'];
                    $prices[$i]['is_free_shipping'] = $singlePrice['is_free_shipping'];
                    $prices[$i]['currency'] = $singlePrice['currency_symbol'];

                    $originalPriceMultiply = 0.6;
                    $totalPrice = round(($singlePrice['amount']/$originalPriceMultiply), 0);
                    $originalPrice = (ceil($totalPrice/100))*100-10;
                    $prices[$i]['originalPrice'] = $originalPrice;
                }
            }
            $returnData['prices'] = $prices;
        }
        return $returnData;
    }

    public function getPixelsForView($product_id, $brand_id) {
        $productPixels = $this->modelPixel->getProductPixel($product_id);
        $brandPixels = $this->modelPixel->getBrandPixel($brand_id);
        $pixels = array();
        if(count($productPixels) > 0) {
            foreach($productPixels as $productPixel) {
                $pixels[] = $productPixel->fb_pixel;
            }
        }
        if(count($brandPixels) > 0) {
            foreach($brandPixels as $brandPixel) {
                $pixels[] = $brandPixel->fb_pixel;
            }
        }
        return $pixels;
    }

    public function checkCouponForVariation(Request $request, $variation_id, $coupon) {
        if($coupon === null && $request->session()->has('coupon')) {
            $coupons = $request->session()->pull('coupon');
            $session_coupon = end($coupons);
            $coupon = $session_coupon;
        }
        $discountPercent = 0;
        $allVariationCoupons = $this->modelCoupon->getAllCouponsForVariation($variation_id);
        if(!empty($allVariationCoupons)) {
            foreach($allVariationCoupons as $singleCoupon) {
               if(strtolower($singleCoupon->coupon) === strtolower($coupon)) {
                   $discountMultiply = (100 - $singleCoupon->discount) / 100;
                   if($this->returnedData['prices'] != null) {
                       foreach($this->returnedData['prices'] as $price) {
                           $i = $price['quantity'];
                           $this->returnedData['prices'][$i]['amount'] = $price['amount'] * $discountMultiply;
                           $this->returnedData['prices'][$i]['amountBeforeDiscount'] = $price['amount'];
                           $discountPercent = $singleCoupon->discount;
                       }
                   }
                   $request->session()->push('coupon', $coupon);
                   if(isset($this->customerData['session_id'])) {
                       try {
                           $this->modelEvent->insertSessionEvent($this->customerData['session_id'], 8);
                       } catch (\Exception $exception) {
                           Log::error("Error: Session - Coupon entered - DB | Exception: " . $exception->getMessage());
                       }
                   }
               }
            }
        }
        return $discountPercent;
    }

    public function getProductReviews($product_id) {
        $productReviews = $this->modelReview->getProductReviews($product_id);
        if(count($productReviews) > 0) {
            return $productReviews;
        }
    }

    public function resolveCountry(Request $request) {
        if($request->get('unexistingCountry') != null) {
            $productList = $this->modelProduct->groupProductBySku($this->data['product']->sku);

            $this->data['availableProductCountries'] = $productList;
            $this->data['currentCountryName'] = $request->get('unexistingCountryName');

            if(isset($this->customerData['session_id'])) {
                try {
                    $this->modelEvent->insertSessionEvent($this->customerData['session_id'], 7);
                } catch (\Exception $exception) {
                    Log::error("Error: Session - Unexisting country - DB | Exception: " . $exception->getMessage());
                }
            }

            return view('unexisting_country',$this->data);
        }
    }

    public function selectCountry(Request $request) {
        $selectedCountry = $request->get('countryCodeDdl');
        $productSku = $request->get('skuHidden');
        $host = $request->getHost();

        $product = $this->modelProduct->groupProductBySku($productSku, $selectedCountry);

        $productSlug = $product[0]->slug;

        $redirectUrl = 'https://'.$selectedCountry.'.'.$host.'/'.$productSlug;
        return redirect($redirectUrl);
    }

    public function getCustomerDetails($request) {
        $agent = new Agent();

        $this->customerData['ip'] = $request->ip();
        $this->customerData['user_agent'] = $agent->getUserAgent();

        return $this->customerData;
    }

    public function insertEventDbAjax(Request $request) {
        try {
            $session_id = $request->get('session_id');
            $event_id = $request->get('event_id');

            $insertResult = $this->modelEvent->insertSessionEvent($session_id, $event_id);
        } catch (\Exception $exception) {
            Log::error("Error: Inserting session event with Ajax | Session: ".$session_id." Event: ".$event_id." Exception: " . $exception->getMessage());
        }
    }

    public function generateUuid($onlyNumbers = null) {
        $l=10;
        $str = "";

        for ($x=0;$x<$l;$x++) {
            if($onlyNumbers === null) {
                $str .= substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 1);
            } else {
                $str .= substr(str_shuffle("0123456789"), 0, 1);
            }
        }

        if($onlyNumbers != null) {
            $resultUuid = $this->modelSession->checkSessionUuid($str);

            if (count($resultUuid) > 0) {
                $this->generateUuid();
            }
        }
        return $str;
    }

    public function sendConversionApiFB(Request $request) {

        $session_id = $request->get('session_id');
        $pixel_id = $request->get('pixel_id');
        $fb_event = $request->get('fb_event');

        $domain = $request->getHost();
        if($domain === "dailysharkpena.com") {
            $token = 'EAAHLY93Tf3kBAKElZBZAZBq3BInc0KyZBxOqNZB6ODcCDyJVeZCMnmEPTIhfBnL8He2lYCeaZBglRmOL4CGxXNFHUBZCKrmOnzoQf1ZBJVBLOSvisvO6pdfRdzdP5BIaYJxNXYSzeZBr47rXfPWTofPTTW3bLISMgc1mj6cnYGZCvVFvnBZBy4dJge3JRDe0FSMRZA6mc5AOtLBURxQZDZD';
        } else {
            $token = 'EAACOQyyltp0BAIXMsezZAgrZBZBZCzVUoWjZCH20tK8UphZC2Fs8T4DldoaQTiuqgbrxoWeLBq08heeofvyASFehWNvM44kct7QRclpqrJh03bYzaBTHcsWxoRbZAu25NpDQqP8yHuZBJZBCaazyzxJR45r2zDlzeFqHbJ3mepDbOn8lZBjrC5jVlOZCU9Ogp6zMCRSXIQ7eOfaMwZDZD';
        }

        $current_timestamp = Carbon::now()->unix();
        $random_number = $this->generateUuid(1);
        if(isset($_COOKIE['_fbp'])) {
            $cookie_fbp = $_COOKIE['_fbp'];
        } else {
            $cookie_fbp = "fb.1.".$current_timestamp.".".$random_number;
        }
        if(isset($_COOKIE['_fbc'])) {
            $cookie_fbc = $_COOKIE['_fbc'];
        } else {
            $cookie_fbc = null;
        }

        $access_token = $token;
        $api = Api::init(null, null, $access_token);
        $api->setLogger(new CurlLogger());
        if($fb_event === "Purchase") {
            $user_data = (new UserData())
                ->setFirstName($request->get('name'))
                ->setEmail($request->get('email'))
                ->setPhone($request->get('phone'))
                ->setCity($request->get('city'))
                ->setZipCode($request->get('zip'))
                ->setCountryCode($request->get('country_code'))
                ->setClientIpAddress($_SERVER['REMOTE_ADDR'])
                ->setClientUserAgent($_SERVER['HTTP_USER_AGENT'])
                ->setFbc($cookie_fbc)
                ->setFbp($cookie_fbp);
            $custom_data = (new CustomData())
                ->setCurrency(strtoupper($request->get('currency_symbol')))
                ->setValue($request->get('amount'));
        } else {
            $user_data = (new UserData())
                ->setClientIpAddress($_SERVER['REMOTE_ADDR'])
                ->setClientUserAgent($_SERVER['HTTP_USER_AGENT'])
                ->setFbc($cookie_fbc)
                ->setFbp($cookie_fbp);
            $client = $user_data->getFbp();
            $custom_data = (new CustomData());
        }
        $event = (new FBEvent())
            ->setEventName($fb_event)
            ->setEventId($fb_event.'.'.$session_id)
            ->setActionSource('website')
            ->setEventTime(time())
            ->setEventSourceUrl($request->getHost())
            ->setUserData($user_data)
            ->setCustomData($custom_data);
        $events = array();
        array_push($events, $event);
        $api_request = (new EventRequest($pixel_id))
            ->setTestEventCode('TEST35501')
            ->setEvents($events);
        $response = $api_request->execute();

        if(!empty(json_decode($response, true))) {
            return $response;
        } else {
            return $fb_event;
        }
    }

}
