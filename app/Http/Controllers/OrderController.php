<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Mail\NewOrderEmail;
use App\Models\AbandonedCart;
use App\Models\Event;
use App\Models\Order;
use App\Models\UserSession;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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

                $session_id = $request->get('session_id');
                $userSession = $this->modelSession->getSingleSession($session_id);
                $test_variation_id = 0;
                if($userSession) {
                    if($userSession->test_variation_id) $test_variation_id = $userSession->test_variation_id;
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
                    $price =  $variation->amount * $multiplyDiscount;
                } else {
                    $price =  $variation->amount;
                }

                if($variation->currency_symbol === "RSD") {
                    $price = round($price,0);
                }

                $this->modelOrder->price = $price;

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

                    try {
                        //webhooks
                        if($orderDetails->woocommerce_product_id === null) {
                            try {
                                $webhookResult = $this->sendWebhook($orderDetails, $brandUrl);
                            } catch(\Exception $exception){
                                Log::error("Error: ServerWombat Webhook \nMessage: " . $exception->getMessage() . "\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                                return redirect()->back()->withErrors([$this->customerErrorMessage]);
                            }
                        } else {
                            try {
                                $webhookResult = $this->createNewOrderWoocommerce($orderDetails);
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

    public function sendWebhook($orderDetails, $brandUrl){

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

        if($orderDetails->is_free_shipping===1) {
            $jsonArray['shipping_lines'] = array([
                "method_id" => "free_shipping"
            ]);
        } else {
            $jsonArray['shipping_lines'] = array([
                "method_id" => "flat_rate"
            ]);
        }

        $jsonArray['customer_note'] = "";

        $jsonArray['line_items'] = array([
            'sku' => $orderDetails->sku,
            'quantity' => $orderDetails->quantity,
            'subtotal' => $orderDetails->price,
            'total' =>  $orderDetails->price,
            'meta_data' => []
        ]);


        $webhookUrl = "";
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

        try {
            $response = $client->post($webhookUrl, ['body' => json_encode($jsonArray)]);
            return $response;
        } catch(\Exception $exception) {
            Log::critical("Error: Webhook accepting error \nServer message: " . $exception->getMessage() . "\nJSON: " . json_encode($jsonArray, JSON_PRETTY_PRINT));
        }
    }

    public function createNewOrderWoocommerce($orderDetails) {

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
                "country"=> (string)$orderDetails->country_name,
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
                "country"=> (string)$orderDetails->country_name
            ],
            "line_items" => [
                [
                    "product_id"=> (string)$orderDetails->woocommerce_product_id,
                    "quantity"=> (string)$orderDetails->quantity,
                    "total" => (string)$orderDetails->price
                ]
            ],
            "lang" => $language,
            "shipping_lines" => $shipping,
            "currency" => $orderDetails->currency_code,
        ];

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
            $this->modelOrder->session_id = $request->get('sessionIdUpCrossSell');
            $this->modelOrder->country_id = $request->get('countryId');
            $upcrosssell_id = $request->get('upCrossSellId');
            $firstOrderQuantity = $request->get('firstOrderQuantity');
            ($request->get('isUpSell') != null) ? $this->modelOrder->is_up_sell = $request->get('isUpSell') : $this->modelOrder->is_up_sell = 0;
            ($request->get('isCrossSell') != null) ? $this->modelOrder->is_cross_sell = $request->get('isCrossSell') : $this->modelOrder->is_cross_sell = 0;

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
                    $upCrossSellDetails['amount'] = $upCrossSellDetails['UpCrossSellPrice'];
                    $upCrossSellDetails = (object)$upCrossSellDetails;

                    try {
                        $webhookResult = $this->sendWebhookUpCrossSell($upCrossSellDetails);
                        if($webhookResult) {
                            if(isset($session_id)) {
                                try {
                                    $this->modelEvent->insertSessionEvent($session_id, 10);
                                } catch (\Exception $exception) {
                                    Log::error("Error: Session -  UpCrossSellPurchase - DB | Exception: " . $exception->getMessage());
                                }
                            }
                            return redirect()->back()->with('data', $upCrossSellDetails);
                        } else {
                            //vidi response code, ukoliko treba prikazi gresku korisniku
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
        $client = new GuzzleHttp\Client([
//            'headers' => [ 'Content-Type' => 'application/json' ]
        ]);

//        $jsonArray = array();
//
//        $jsonArray['wToken'] = "AlI5hHY4Y4FaUgIDoMMSubRBCvlLCNQyJVfmHfMG";
//        $jsonArray['id_product_crossupsell'] = $upCrossSellDetails->id_upcrossell;
//        $jsonArray['brandOrderId'] = $upCrossSellDetails->order_id;
//        $jsonArray['sku'] = $upCrossSellDetails->sku;
//        $jsonArray['price'] = $upCrossSellDetails->pricePerPiece;
//        $jsonArray['quantity'] = $upCrossSellDetails->UpCrossSellQuantity;
//        $jsonArray['isFreeShippingClaimed'] = $upCrossSellDetails->free_shipping_upcrosssell;
//        $jsonArray['site'] = $upCrossSellDetails->site;

        $queryParams = [
            'wToken=AlI5hHY4Y4FaUgIDoMMSubRBCvlLCNQyJVfmHfMG',
            'id_product_crossupsell='.$upCrossSellDetails->id_upcrossell,
            'brandOrderId='.$upCrossSellDetails->order_id,
            'sku='.$upCrossSellDetails->sku,
            'price='.$upCrossSellDetails->pricePerPiece,
            'quantity='.$upCrossSellDetails->UpCrossSellQuantity,
            'isFreeShippingClaimed='.$upCrossSellDetails->free_shipping_upcrosssell,
            'site='.$upCrossSellDetails->site,
        ];

        try {
//            $response = $client->post("https://new.serverwombat.com/api/insertOrderCrossUpSellData", ['body' => json_encode($jsonArray)]);
            $content = implode('&', $queryParams);
            $response = $client->request('POST', 'ttps://new.serverwombat.com/api/insertOrderCrossUpSellData', [], [], ['HTTP_CONTENT_TYPE' => 'application/x-www-form-urlencoded'], $content);
            return $response;
        } catch(\Exception $exception) {
            Log::critical("Error: UpCrossSell Webhook error \nServer message: " . $exception->getMessage() . "\nDETAILS: " .$queryParams);
        }
    }

}
