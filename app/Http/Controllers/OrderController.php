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

    public function __construct()
    {
        $this->middleware('guest');
        $this->modelOrder = new Order();
        $this->modelProduct = new Product();
        $this->modelVariation = new Variation();
        $this->modelEvent = new Event();
        $this->modelSession = new UserSession();
    }

    public function order(Request $request){

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

        if($request->session()->get('country') == "bg") {
            $customerErrorMessage = "Грешка при поръчката, моля свържете се с нас по имейл info@wombatshop.eu!";
        } else if($request->session()->get('country') == "ro") {
            $customerErrorMessage = "Eroare la comandă, vă rugăm să ne contactați prin e-mail info@wombatshop.eu!";
        } else if($request->session()->get('country') == "gr") {
            $customerErrorMessage = "Σφάλμα παραγγελίας, επικοινωνήστε μαζί μας μέσω email info@wombatshop.eu!";
        } else if($request->session()->get('country') == "pl") {
            $customerErrorMessage = "Błąd zamówienia, prosimy o kontakt mailowy info@wombatshop.eu!";
        } else if($request->session()->get('country') == "rs" || $request->session()->get('country') == "ba") {
            $customerErrorMessage = "Greška prilikom porudžbine, molimo da nas kontaktirate putem emaila info@wombatsbrand.com!";
        } else {
            $customerErrorMessage = "An error has occurred during checkout, please contact us at info@wombatsbrand.com!";
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
                return redirect()->back()->withErrors([$customerErrorMessage]);
            }

            $variation = $this->modelVariation->getVariationByIdAndQuantity($variation_id, $this->modelOrder->quantity);

            if($variation === null) {
                Log::error("Error: Variation with this quantity not found - DB");
                return redirect()->back()->withErrors([$customerErrorMessage]);
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
                    return redirect()->back()->withErrors([$customerErrorMessage]);
                }

                if($orderId) {
                    $orderDetails = $this->modelOrder->getOrderById($orderId, $this->modelOrder->quantity);

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
                                $webhookResult = $this->sendWebhook($orderDetails);
                            } catch(\Exception $exception){
                                Log::error("Error: ServerWombat Webhook \nMessage: " . $exception->getMessage() . "\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                                return redirect()->back()->withErrors([$customerErrorMessage]);
                            }
                        } else {
                            try {
                                $webhookResult = $this->createNewOrderWoocommerce($orderDetails);
                            } catch(\Exception $exception){
                                Log::error("Error: Woocommerce Webhook \nMessage: " . $exception->getMessage() . "\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                                return redirect()->back()->withErrors([$customerErrorMessage]);
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
                            Log::error("Error: Empty webhook result \nResult: " . $webhookResult . "\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                            return redirect()->back()->withErrors([$customerErrorMessage]);
                        }
                    } catch(\Exception $exception) {
                        Log::error("Error: Triggering new order -  Webhook \nMessage: " . $exception->getMessage() . "\nDetails: ". json_encode($orderDetails, JSON_PRETTY_PRINT));
                        return redirect()->back()->withErrors([$customerErrorMessage]);
                    }
                }
            }
        } catch (\Exception $ex) {
            Log::error("An error has occurred during checkout - " . $ex->getMessage());
            return redirect()->back()->withErrors([$customerErrorMessage]);
        }
    }

    public function sendWebhook($orderDetails){

        $client = new GuzzleHttp\Client([
            'headers' => [ 'Content-Type' => 'application/json' ]
        ]);

        $jsonArray = array();

        $jsonArray['site'] = $orderDetails->brand_url;

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

        try {
            $response = $client->post('https://new.serverwombat.com/api/orderWebhook', ['body' => json_encode($jsonArray)]);

            return $response;

        } catch(\Exception $exception) {
            Log::critical("Error: Webhook accepting error \nServer message: " . $exception->getMessage() . "\nJSON: " . json_encode($jsonArray, JSON_PRETTY_PRINT));
        }
    }

    public function createNewOrderWoocommerce($orderDetails) {

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
                    "total"=> $orderDetails->shipping_cost,
                ],
            ];
        } else {
            $shipping = [
                [
                    "method_title" => "Free shipping",
                    "method_id" => "free_shipping",
                    "total"=> "0.00",
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
            "billing"=> [
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
            "shipping"=> [
                "first_name"=> (string)$orderDetails->name,
                "last_name"=> "",
                "address_1"=> (string)$orderDetails->street,
                "address_2"=> "",
                "city"=> (string)$orderDetails->city,
                "state"=>"",
                "postcode"=> (string)$orderDetails->zip,
                "country"=> (string)$orderDetails->country_name,
            ],
            "line_items"=> [
                [
                    "product_id"=> (string)$orderDetails->woocommerce_product_id,
                    "quantity"=> (string)$orderDetails->quantity,
                    "total" => (string)$orderDetails->price,
                ]
            ],
            "lang" => $language,
            "shipping_lines" => $shipping,
            "currency" => $orderDetails->currency_symbol,
        ];

//        dd($result = $woocommerce->get('orders/6639'));

        $result = $woocommerce->post('orders/', $data);

        return $result;

    }

//    public function abandonedCartInsert(Request $request) {
//
//        $modelAbandoned = new AbandonedCart();
//
//        $modelAbandoned->name = $request->get('name');
//        $modelAbandoned->email = $request->get('email');
//        $modelAbandoned->phone = $request->get('phone');
//        $modelAbandoned->address = $request->get('address');
//        $modelAbandoned->city = $request->get('city');
//        $modelAbandoned->zip = $request->get('zip');
//        $modelAbandoned->quantity = $request->get('quantity');
//        $modelAbandoned->product_id = $request->get('product_id');
//        $modelAbandoned->country_id = $request->get('country_id');
//
//        $modelAbandoned->uuid = Session::get('uuid');
//
//        if($modelAbandoned->uuid != null) {
//
//            $ifAbandonedExists = $modelAbandoned->getAbandonedUuidWithProduct($modelAbandoned->uuid, $modelAbandoned->product_id);
//
//            if($ifAbandonedExists != null) {
////                Log::info("Abandoned exists - should be updated \nInfo: " . json_encode($ifAbandonedExists, JSON_PRETTY_PRINT));
//                try {
//                    if($modelAbandoned->email != null) {
//                        $resultUpdate = $modelAbandoned->updateAbandoned($ifAbandonedExists->uuid,$ifAbandonedExists->product_id);
////                        Log::info("Abandoned update \nInfo: " . json_encode($resultUpdate, JSON_PRETTY_PRINT));
//                    }
//                } catch (\Exception $exception) {
//                    Log::error("Error: Abandoned cart update \n Message: " . $exception->getMessage() . "\n Data: " . json_encode($modelAbandoned, JSON_PRETTY_PRINT));
//                }
//            }
//            else {
//
//                $rules = [
//                    'email' => 'required|email',
//                ];
//
//                $validator = \Validator::make($request->all(), $rules);
//
//                if ($validator->fails()) {
////                    Log::debug("Email not validate! \nCustomer information: " . json_encode($modelAbandoned, JSON_PRETTY_PRINT));
//                } else {
//                    try {
//                        $insertResult = $modelAbandoned->insertAbandoned();
//
//                        if($insertResult) {
////                            Log::info("Abandoned inserted \nInfo: " . json_encode($modelAbandoned, JSON_PRETTY_PRINT));
//                            $abandonedInfo = $modelAbandoned->getAbandonedId($insertResult);
//                            try {
////                                Log::info("Abandoned info for sending email \nInfo: " . json_encode($abandonedInfo, JSON_PRETTY_PRINT));
//                                $jobObject = (new SendEmail($abandonedInfo, 'abandonedFirst'));
//                                dispatch($jobObject)->delay(Carbon::now()->addMinutes(30));
//                            } catch (\Exception $exception) {
//                                Log::warning("Error: Sending abandon email \nMessage: " . $exception->getMessage() . "\nInfo: " . json_encode($abandonedInfo, JSON_PRETTY_PRINT));
//                            }
//                        } else {
//                            Log::warning("Abandoned not inserted \nInfo: " . json_encode($modelAbandoned, JSON_PRETTY_PRINT));
//                        }
//
//                    } catch(\Exception $ex) {
//                        Log::error("Error: Abandoned cart insert \nMessage: " . $ex->getMessage() . "\nDetails: " . json_encode($modelAbandoned, JSON_PRETTY_PRINT));
//                    }
//                }
//            }
//        } else {
////            Log::info("Uuid is not defined \nInfo: " . json_encode($modelAbandoned, JSON_PRETTY_PRINT));
//        }
//
//        return 1;
//    }

//    public function checkAndDeleteAbandonedIfOrderExists($email, $product_id)
//    {
//        $modelOrder = new Order();
//        $modelAbandoned = new AbandonedCart();
//
//        $resultOrder = $modelOrder->getOrderByEmailAndProductId($email, $product_id);
//
//        if ($resultOrder) {
////            Log::info("Order for deleting \nOrder: " . json_encode($resultOrder, JSON_PRETTY_PRINT));
//            try {
//                $resultDelete = $modelAbandoned->deleteAbandonedAfterPurchase($email, $product_id);
////                Log::info("Order deleting result \nResult: " . json_encode($resultDelete, JSON_PRETTY_PRINT));
//            } catch (\Exception $exception) {
//                Log::error("Error: Delete abandoned \nMessage: " . $exception->getMessage());
//            }
//        } else {
////            Log::info("Order not found for deleting \nOrder: " . json_encode($resultOrder, JSON_PRETTY_PRINT));
//            $resultDelete = 0;
//        }
//
//        return $resultDelete;
//
//    }

}
