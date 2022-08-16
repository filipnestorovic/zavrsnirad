<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Mail\NewOrderEmail;
use App\Models\AbandonedCart;
use App\Models\Event;
use App\Models\Order;
use App\Models\ProductSizes;
use App\Models\UserSession;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Automattic\WooCommerce\Client as WooClient;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public $customerErrorMessage = "An error has occurred during checkout, please contact us at info@wombatsbrand.com!";

    public function __construct()
    {
        $this->middleware('guest');
        $this->modelOrder = new Order();
        $this->modelProduct = new Product();
        $this->modelVariation = new Variation();
        $this->modelEvent = new Event();
        $this->modelSession = new UserSession();
    }

    public function order(Request $request, $site = null, $domain = null){

//        dd($request->all());

        $rules = [
            'name' => ['required'],
            'phone' => ['required'],
//          'email' => 'required|email',
//          'shipping_address' => 'required',
//          'shipping_city' => 'required',
//          'shipping_zip' => 'required|int|digits:5',
//          'quantity' => 'required',
        ];

        $messages = [
//            'required' => 'Polje :attribute je obavezno!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        if($request->get('countryShortcode') == "bg") {
            $this->customerErrorMessage = "Грешка при поръчката, моля свържете се с нас по имейл info@wombatshop.eu!";
        } else if($request->get('countryShortcode') == "ro") {
            $this->customerErrorMessage = "Eroare la comandă, vă rugăm să ne contactați prin e-mail info@wombatshop.eu!";
        } else if($request->get('countryShortcode') == "gr") {
            $this->customerErrorMessage = "Σφάλμα παραγγελίας, επικοινωνήστε μαζί μας μέσω email info@wombatshop.eu!";
        } else if($request->get('countryShortcode') == "pl") {
            $this->customerErrorMessage = "Błąd zamówienia, prosimy o kontakt mailowy info@wombatshop.eu!";
        } else if($request->get('countryShortcode') == "sk") {
            $this->customerErrorMessage = "Pri pokladni sa vyskytla chyba, kontaktujte nás na info@wombatshop.eu!";
        } else if($request->get('countryShortcode') == "cz") {
            $this->customerErrorMessage = "Při placení došlo k chybě, kontaktujte nás prosím na info@wombatshop.eu!";
        } else if($request->get('countryShortcode') == "rs" || $request->get('countryShortcode') == "ba") {
            $this->customerErrorMessage = "Greška prilikom porudžbine, molimo da nas kontaktirate putem emaila info@wombatsbrand.com!";
        } else {
            $this->customerErrorMessage = "An error has occurred during checkout, please contact us at info@wombatsbrand.com!";
        }

        try {

            $variation_id = $request->get('variation_id');

            $this->modelOrder->name = $request->get('name');
            $this->modelOrder->phone = $request->get('phone');
            $this->modelOrder->email = $request->get('email');
            $this->modelOrder->street = $request->get('shipping_address');
            $this->modelOrder->city = $request->get('shipping_city');
            $this->modelOrder->zip = $request->get('shipping_zip');
            $this->modelOrder->quantity = (int)$request->get('quantity');
            $this->modelOrder->variation_id = $variation_id;

            if($this->modelOrder->email == null) {
                $this->modelOrder->email = "nemaemail@gmail.com";
            }
            if($this->modelOrder->street == null) {
                $this->modelOrder->street = "Uneti rucno";
            }
            if($this->modelOrder->city == null) {
                $this->modelOrder->city = "Uneti rucno";
            }
            if($this->modelOrder->zip == null) {
                $this->modelOrder->zip = "0";
            }

            if($this->modelOrder->quantity === 0) {
                Log::error("Error: Quantity not set");
                return redirect()->back()->withErrors([$this->customerErrorMessage]);
            }

            $variation = $this->modelVariation->getVariationByIdAndQuantity($variation_id, $this->modelOrder->quantity);

            if($variation === null) {
                Log::error("Error: Variation with this quantity not found - DB");
                return redirect()->back()->withErrors([$this->customerErrorMessage]);
            } else {

                if($variation->sku === "RB-ST-BASTENSKOCREVO" && $request->get('length')) {
                    $lengthArray = explode(":",$request->get('length'));
                    $quantityIndex = $lengthArray[0];
                    $length = $lengthArray[1];

                    $variation = $this->modelVariation->getVariationByIdAndQuantity($variation_id, $quantityIndex);
                    $this->modelOrder->order_note = $length;
                    $variation->quantity = 1;
                }

                $session_id = $request->get('session_id');
                $userSession = $this->modelSession->getSingleSession($session_id);
                if(isset($userSession->test_variation_id)) {
                   $test_variation_id = $userSession->test_variation_id;
                } else {
                    $test_variation_id = null;
                }

                $this->modelOrder->is_order_with_free_shipping = (int)$variation->is_free_shipping;
                $this->modelOrder->country_id = $variation->country_id;
                $this->modelOrder->test_variation_id = $test_variation_id;

                if($session_id != null) {
                    $this->modelOrder->session_id = $session_id;
                } else {
                    Log::error("Error: Order without session_id!");
                }

                $discount = $request->get('discount');
                $multiplyDiscount = (100 - $discount) / 100;

                if($discount) {
                    $couponCode = $request->get('couponCode');
                    $this->modelOrder->coupon_used = $couponCode;
                    if($couponCode === "blackfriday") {
                        $originalPriceMultiply = 0.6;
                        $totalPrice = round(($variation->amount/$originalPriceMultiply), 0);
                        $originalPrice = (ceil($totalPrice/100))*100-10;
                        $price = $originalPrice * $multiplyDiscount;
                    } else {
                        $price =  $variation->amount * $multiplyDiscount;
                    }
                } else {
                    $price =  $variation->amount;
                }

                if($variation->currency_symbol === "RSD") {
                    $price = round($price,0);
                }

                $this->modelOrder->price = $price;

                $customerNote = null;

                $size = $request->get('size');
                if($size != null && $size != "0") {
                    $this->modelOrder->order_note = "Veličina: ".$size;
                }

                try {
                    $orderId = $this->modelOrder->insertOrder();
                } catch (\Exception $exception) {
                    Log::error("Error: Inserting new order - DB \nMessage: " . $exception->getMessage() . "\nDetails:". json_encode($this->modelOrder, JSON_PRETTY_PRINT));
                    return redirect()->back()->withErrors([$this->customerErrorMessage]);
                }

                if($orderId) {
                    $orderDetails = $this->modelOrder->getOrderById($orderId, $this->modelOrder->quantity);
                    $brandUrl = 'https://'.$site.'.'.$domain;
                    //delete from abandoned if exist
//                    try {
//                        $resultAbandonDelete = $this->checkAndDeleteAbandonedIfOrderExists($orderDetails->email, $orderDetails->product_id);
//                    }
//                    catch(\Exception $exception){
//                        Log::error('Error: Deleting from abandoned cart \n Message: ' . $exception->getMessage() . '\n Details:'. json_encode($modelOrders, JSON_PRETTY_PRINT) . '\n orderDetails'. json_encode($orderDetails, JSON_PRETTY_PRINT));
//                    }

                    $gratisProduct = null;
                    if($request->get('gpid') != null) {
                        $gpid = $request->get('gpid');
                        $gratisProduct = $this->modelProduct->getProduct($gpid);
                    } else {
                        foreach($request->all() as $key => $value) {
                            if(str_contains($key, 'gpid') && $value != null) {
                                $gpid_quantity = substr($key, strpos($key, "-") + 1);
                                if($gpid_quantity === $request->get('quantity')) {
                                    $gratisProduct = $this->modelProduct->getProduct($value);
                                }
                            }
                        }
                    }

                    if($orderDetails->sku === "RB-ST-BASTENSKOCREVO" && $orderDetails->note) {
                        $orderDetails->sku = $orderDetails->sku.$orderDetails->note;
                    }

                    try {
                        //webhooks
                        if($orderDetails->woocommerce_product_id === null) {
                            try {
                                $webhookResult = $this->sendWebhook($orderDetails, $brandUrl, $gratisProduct, $customerNote, $size);
                            } catch(\Exception $exception){
                                Log::error("Error: ServerWombat Webhook \nMessage: " . $exception->getMessage() . "\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                                return redirect()->back()->withErrors([$this->customerErrorMessage]);
                            }
                        } else {
                            try {
                                $webhookResult = $this->createNewOrderWoocommerce($orderDetails, $size);
                            } catch(\Exception $exception){
                                Log::error("Error: Woocommerce Webhook \nMessage: " . $exception->getMessage() . "\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                                return redirect()->back()->withErrors([$this->customerErrorMessage]);
                            }
                        }

                        if($webhookResult) {
                            if(isset($session_id)) {
                                try {
                                    $this->modelEvent->insertSessionEvent($session_id, 3);
                                } catch (\Exception $exception) {
                                    Log::error("Error: Session - Purchase - DB | Exception: " . $exception->getMessage());
                                }
                            }
                            return redirect()->to('/'.$orderDetails->slug.'/thankyou')->with('data', $orderDetails);
                        } else {
//                            Log::error("Error: Empty webhook result \nResult: " . $webhookResult . "\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                            return redirect()->back()->withErrors([$this->customerErrorMessage]);
                        }
                    } catch(\Exception $exception) {
                        Log::error("Error: Triggering new order -  Webhook \nMessage: " . $exception->getMessage() . "\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                        return redirect()->back()->withErrors([$this->customerErrorMessage]);
                    }
                }
            }
        } catch (\Exception $ex) {
            Log::error("An error has occurred during checkout - " . $ex->getMessage());
            return redirect()->back()->withErrors([$this->customerErrorMessage]);
        }
    }

    public function sendWebhook($orderDetails, $brandUrl, $gratisProduct = null, $customerNote = null, $size = null){

        $client = new GuzzleHttp\Client([
            'headers' => [ 'Content-Type' => 'application/json' ]
        ]);

        $jsonArray = array();

        $jsonArray['site'] = $brandUrl;

        $jsonArray['number'] = $orderDetails->id_order;
        $jsonArray['date_created'] = $orderDetails->created_at;
        $jsonArray['total'] = $orderDetails->price;
        $jsonArray['shipping']['first_name'] = $orderDetails->name;
        $jsonArray['shipping']['last_name'] = "";
        $jsonArray['shipping']['address_1'] =  $orderDetails->street;
        $jsonArray['shipping']['address_2'] =  "";
        $jsonArray['shipping']['city'] = $orderDetails->city;
        $jsonArray['shipping']['postcode'] = $orderDetails->zip;
        $jsonArray['billing']['email'] = $orderDetails->email;
        $jsonArray['billing']['phone'] = $orderDetails->phone;

        $jsonArray['countryCode'] = strtoupper($orderDetails->country_code);
        $jsonArray['currency'] = strtoupper($orderDetails->currency_code);

        $jsonArray['wb_campaign'] = $orderDetails->wb_campaign;
        $jsonArray['wb_adset'] = $orderDetails->wb_adset;
        $jsonArray['wb_ad'] = $orderDetails->wb_ad;

        $jsonArray['session_id'] = $_COOKIE['wbSessionId'] ?? null;

        $jsonArray['variation_id'] = $orderDetails->variation_id ?? null;

        $jsonArray['affiliate_id'] = $_COOKIE['affid'] ?? null;
        $jsonArray['network_id'] = $_COOKIE['netid'] ?? null;
        $jsonArray['click_id'] = $_COOKIE['clid'] ?? null;
        $jsonArray['offer_id'] = $_COOKIE['offid'] ?? null;
        $jsonArray['utm_medium'] = $_COOKIE['utm_medium'] ?? null;

        if($orderDetails->is_free_shipping===1) {
            $jsonArray['shipping_lines'] = array([
                "method_id" => "free_shipping"
            ]);
        } else {
            $jsonArray['shipping_lines'] = array([
                "method_id" => "flat_rate"
            ]);
        }

        if($orderDetails->coupon_used != null) {
            $jsonArray['coupon_used'] = 'Kupon: '.$orderDetails->coupon_used;
        }

        $meta_size = [];
        if($size != null && $size != "0") {
            $meta_size = [
                [
                    "key" => "velicina",
                    "value" => $size,
                ],
            ];
//            $customerNote = $customerNote.' '.$size;
        }

        $jsonArray['customer_note'] = $customerNote;

        $jsonArray['line_items'] = array([
            'sku' => $orderDetails->sku,
            'quantity' => $orderDetails->quantity,
            'subtotal' => $orderDetails->price,
            'total' =>  $orderDetails->price,
            'meta_data' => $meta_size,
        ]);

        if($gratisProduct != null) {
            array_push($jsonArray['line_items'],[
                'sku' => $gratisProduct->sku,
                'quantity' => 1,
                'subtotal' => 0,
                'total' =>  0,
                'meta_data' => []
            ]);
        }

        $webhookUrl = "";
//        $webhookBackupUrl = "https://webhook.site/433c4a77-cc04-4130-8ca5-0a6d56dd3ec9";

        switch($orderDetails->country_code) {
            case "rs":
                $webhookUrl = "https://new.serverwombat.com/api/orderWebhook";
                break;
            case "ba":
                $webhookUrl = "https://ba.serverwombat.com/api/orderWebhook";
                break;
            default:
                $webhookUrl = "https://new.serverwombat.com/api/orderWebhook";
        }

//        try {
//            $client->post($webhookBackupUrl, ['body' => json_encode($jsonArray)]);
//        } catch(\Exception $exception) {
//            Log::critical("Error: Webhook accepting BACKUP route error \nServer message: " . $exception->getMessage() . "\nJSON: " . json_encode($jsonArray, JSON_PRETTY_PRINT));
//        }

        try {
            $response = $client->post($webhookUrl, ['body' => json_encode($jsonArray)]);
            return $response;
        } catch(\Exception $exception) {
            Log::critical("Error: Webhook accepting error \nServer message: " . $exception->getMessage() . "\nJSON: " . json_encode($jsonArray, JSON_PRETTY_PRINT));
        }

    }

    public function createNewOrderWoocommerce($orderDetails, $size = null) {

        $language = "";
        switch ($orderDetails->country_code) {
            case "bg":
                $language = "bg_BG";
                break;
            case "ro":
                $language = "ro_RO";
                break;
            case "gr":
                $language = "el";
                break;
            case "pl":
                $language = "pl_PL";
                break;
            case "sk":
                $language = "sk_SK";
                break;
            case "cz":
                $language = "cs_CZ";
                break;
        }

        if($orderDetails->is_free_shipping == 0) {
            $shipping = [
                [
                    "method_title" => "Flat rate",
                    "method_id" => "flat_rate",
                    "total"=> (string)$orderDetails->shipping_cost,
                ],
            ];
        } else {
            $shipping = [
                [
                    "method_title" => "Free shipping",
                    "method_id" => "free_shipping",
                    "total"=> "0.00"
                ],
            ];
        }

        if($size != null) {
            try {
                $productSize = ProductSizes::where([['product_size', $size], ['product_id', $orderDetails->product_id]])->first();
            } catch(\Exception $exception){
                Log::error("Error: Woocommerce Webhook - Product Size - \nMessage: " . $exception->getMessage() . "\nSize: ".$size."\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                return redirect()->back()->withErrors([$this->customerErrorMessage]);
            }
        }

        $woocommerce = new WooClient(
            'https://wombatshop.eu',
            'ck_9fd314e0b1342eb7550928b54fa3e3c63349b427',
            'cs_fdc71728a01eb53f7712f474bd23f1b5b2e8cd15',
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true
            ]
        );

        $data = [
            "payment_method"=> "cod",
            "status" => "processing",
            "billing" => [
                "first_name"=> (string)$orderDetails->name,
                "last_name"=> "",
                "address_1"=> (string)$orderDetails->street,
                "address_2"=> "",
                "city"=> (string)$orderDetails->city,
                "state"=> "",
                "postcode"=> (string)$orderDetails->zip,
                "country"=> strtoupper((string)$orderDetails->country_code),
                "email"=> (string)$orderDetails->email,
                "phone"=> (string)$orderDetails->phone
            ],
            "shipping" => [
                "first_name"=> (string)$orderDetails->name,
                "last_name"=> "",
                "address_1"=> (string)$orderDetails->street,
                "address_2"=> "",
                "city"=> (string)$orderDetails->city,
                "state"=>"",
                "postcode"=> (string)$orderDetails->zip,
                "country"=> strtoupper((string)$orderDetails->country_code)
            ],
            "line_items" => [
                [
                    "product_id"=> (string)$orderDetails->woocommerce_product_id,
                    "quantity"=> (string)$orderDetails->quantity,
                    "total" => (string)$orderDetails->price,
                    "variation_id" => $productSize->woo_variation_id ?? '0',
                ]
            ],
            "lang" => $language,
            "shipping_lines" => $shipping,
            "currency" => $orderDetails->currency_code,
        ];

//        Log::debug("WooOrder: ".json_encode($data));

//        dd($result = $woocommerce->get('orders/6639'));

        $result = $woocommerce->post('orders/', $data);

        return $result;

    }

    public function upCrossSellOrder(Request $request) {

//        dd($request->all());

        $rules = [
            'orderIdUpCrossSell' => ['required'],
            'variationIdUpCrossSell' => ['required'],
            'upCrossSellId' => ['required'],
        ];

        $messages = [
//            'required' => 'Polje :attribute je obavezno!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $order_id = $request->get('orderIdUpCrossSell');
            $this->modelOrder->variation_id = $request->get('variationIdUpCrossSell');
            $session_id = $request->get('sessionIdUpCrossSell');
            $this->modelOrder->country_id = $request->get('countryId');
            $upcrosssell_id = $request->get('upCrossSellId');
            $firstOrderQuantity = $request->get('firstOrderQuantity');
            ($request->get('isUpSell') != null) ? $this->modelOrder->is_up_sell = $request->get('isUpSell') : $this->modelOrder->is_up_sell = 0;
            ($request->get('isCrossSell') != null) ? $this->modelOrder->is_cross_sell = $request->get('isCrossSell') : $this->modelOrder->is_cross_sell = 0;
            if($request->get('testVariationIdUpCrossSell') != null) $this->modelOrder->test_variation_id = $request->get('testVariationIdUpCrossSell');
            $this->modelOrder->session_id = $session_id;

            $data = $request->except('_token','orderIdUpCrossSell','variationIdUpCrossSell','upCrossSellId','sessionIdUpCrossSell','countryShortcode','countryId');
            $sku = "";
            foreach($data as $key => $value) {
                if(str_contains($key, 'hiddenPriceUpCrossSell') && $value != null) {
                    $crossupPrice = substr($key, strpos($key, "-") + 1);
                    if($upcrosssell_id === $crossupPrice) {
                        $this->modelOrder->price = $value;
                    }
                }
                if(str_contains($key, 'isFreeShippingUpCrossSell') && $value != null) {
                    $crossupShipping = substr($key, strpos($key, "-") + 1);
                    if($upcrosssell_id === $crossupShipping) {
                        $this->modelOrder->is_order_with_free_shipping = $value;
                    }
                }
                if(str_contains($key, 'quantityUpCrossSell') && $value != null) {
                    $crossupQuantity = substr($key, strpos($key, "-") + 1);
                    if($upcrosssell_id === $crossupQuantity) {
                        $this->modelOrder->quantity = $value;
                    }
                }
                if(str_contains($key, 'productIdUpCrossSell') && $value != null) {
                    $crossupProductId = substr($key, strpos($key, "-") + 1);
                    if($upcrosssell_id === $crossupProductId) {
                        $this->modelOrder->product_id = $value;
                    }
                }
                if(str_contains($key, 'skuUpCrossSell') && $value != null) {
                    $crossupSku = substr($key, strpos($key, "-") + 1);
                    if($upcrosssell_id === $crossupSku) {
                        $sku = $value;
                    }
                }
            }

            try {
                $upCrossSellId = $this->modelOrder->upCrossSellOrderInsert($order_id);
                if($upCrossSellId) {
                    $originalOrder = $this->modelOrder->getOrderById($order_id, $firstOrderQuantity);
                    $upCrossSellDetails = $this->modelOrder->getupCrossSellOrder($upCrossSellId);
                    $pricePerPiece = $upCrossSellDetails->UpCrossSellPrice/$upCrossSellDetails->UpCrossSellQuantity;
                    $upCrossSellDetails = (array)$upCrossSellDetails;
                    $upCrossSellDetails['id_upcrossell'] = $upcrosssell_id;
                    $upCrossSellDetails['pricePerPiece'] = $pricePerPiece;
                    $upCrossSellDetails['sku'] = $sku;
                    $upCrossSellDetails['site'] = 'https://'.$request->getHost();
                    $upCrossSellDetails['product_name'] = $originalOrder->product_name;
                    $upCrossSellDetails['brand_name'] = $originalOrder->brand_name;
                    $upCrossSellDetails['country_code'] = $originalOrder->country_code;
                    $upCrossSellDetails['currency_code'] = $originalOrder->currency_code;
                    $upCrossSellDetails['currency_symbol'] = $originalOrder->currency_symbol;
                    $upCrossSellDetails['shipping_cost'] = $originalOrder->shipping_cost;
                    $upCrossSellDetails['amount'] = $upCrossSellDetails['UpCrossSellPrice'];
                    $upCrossSellDetails = (object)$upCrossSellDetails;

                    try {
                        $webhookResult = $this->sendWebhookUpCrossSell($upCrossSellDetails);
                        if($webhookResult === 200) {
                            if(isset($session_id)) {
                                try {
                                    $this->modelEvent->insertSessionEvent($session_id, 10);
                                } catch (\Exception $exception) {
                                    Log::error("Error: Session -  UpCrossSellPurchase - DB | Exception: " . $exception->getMessage());
                                }
                            }

                            if($request->ajax()) {
                                return Response::json($upCrossSellDetails);
                            } else {
                                return redirect()->to('/'.$originalOrder->slug.'/thankyou')->with('data', $upCrossSellDetails);
                            }

//                            return redirect()->back()->with('data', $upCrossSellDetails);
                        } else {
                            return redirect()->back()->withErrors([$this->customerErrorMessage]);
                        }
                    } catch (\Exception $exception) {
                        Log::error("Error: UpCrossSell Webhook \nMessage: " . $exception->getMessage() . "\nDetails:". $upCrossSellId);
                        return redirect()->back()->withErrors([$this->customerErrorMessage]);
                    }
                }
            } catch (\Exception $exception) {
                Log::error("Error: Inserting UpCrossSell - DB \nMessage: " . $exception->getMessage() . "\nDetails:". json_encode($this->modelOrder, JSON_PRETTY_PRINT));
                return redirect()->back()->withErrors([$this->customerErrorMessage]);
            }

        } catch (\Exception $ex) {
            Log::error("UpCrossSell Error - " . $ex->getMessage());
            return redirect()->back()->withErrors([$this->customerErrorMessage]);
        }
    }

    public function sendWebhookUpCrossSell($upCrossSellDetails){
//        $client = new GuzzleHttp\Client([
////            'headers' => [ 'Content-Type' => 'application/json' ]
//        ]);

        $client = new \GuzzleHttp\Client();
        $url = "https://new.serverwombat.com/api/insertOrderCrossUpSellData";
        $response = $client->post($url, [
            'form_params' => [
                'wToken' => 'AlI5hHY4Y4FaUgIDoMMSubRBCvlLCNQyJVfmHfMG',
                'id_product_crossupsell' => $upCrossSellDetails->id_upcrossell,
                'brandOrderId' => $upCrossSellDetails->order_id,
                'sku' => $upCrossSellDetails->sku,
                'price' => $upCrossSellDetails->pricePerPiece,
                'quantity' => $upCrossSellDetails->UpCrossSellQuantity,
                'isFreeShippingClaimed' => $upCrossSellDetails->free_shipping_upcrosssell,
                'site' => $upCrossSellDetails->site,
            ]
        ]);

        try {
            if($response->getStatusCode() === 200) {
                return 200;
            } else {
                return 400;
            }
        } catch(\Exception $exception) {
            Log::critical("Error: UpCrossSell Webhook error \nServer message: " . $exception->getMessage() . "\nDETAILS: " .$upCrossSellDetails);
        }
    }

    public function selectProductSize(Request $request) {

        $rules = [
            'orderId' => ['required'],
            'productQuantity' => ['required'],
            'productSku' => ['required'],
            'size' => ['required'],
        ];

        $messages = [
//            'required' => 'Polje :attribute je obavezno!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $orderId = $request->get('orderId');
            $quantity = $request->get('productQuantity');
            $sku = $request->get('productSku');
            $size = $request->get('size');

            if($size != null && $size != "0") {
                $this->modelOrder->order_note = "Veličina: ".$size;
                $updateResult = $this->modelOrder->updateOrderNote($orderId);

                if($updateResult === 1) {
                    try {
                        return $this->webhookSelectProductSize($orderId,$quantity,$sku,$size);
                    } catch (\Exception $exception) {
                        Log::error("InsertProductSize Webhook Error - " . $exception->getMessage());
                        return 0;
                    }
                } else {
                    Log::error("InsertProductSize Error - " . $updateResult);
                    return 0;
                }
            }
        } catch (\Exception $exception) {
            Log::error("InsertProductSize Error - " . $exception->getMessage());
            return 0;
        }
    }

    public function webhookSelectProductSize($orderId,$quantity,$sku,$size) {
        $client = new \GuzzleHttp\Client();
        $url = "https://new.serverwombat.com/api/selectProductSize";

        $data = [
            'wToken' => 'AlI5hHY4Y4FaUgIDoMMSubRBCvlLCNQyJVfmHfMG',
            'orderId' => $orderId,
            'quantity' => $quantity,
            'sku' => $sku,
            'key' => 'velicina',
            'size' => $size,
        ];

        try {
            $response = $client->post($url, [
                'form_params' => $data,
            ]);

            $responseJson = json_decode((string) $response->getBody());

            if($responseJson->code === 200) {
                return 1;
            } else {
                Log::critical("Error: Product size Webhook error \nServer response: " . $responseJson->status . "\nData: " .json_encode($data, JSON_PRETTY_PRINT));
                return 0;
            }
        } catch(\Exception $exception) {
            Log::critical("Error: Product size Webhook error \nServer message: " . $exception->getMessage() . "\nDETAILS: " .json_encode($data, true));
        }
    }

}
