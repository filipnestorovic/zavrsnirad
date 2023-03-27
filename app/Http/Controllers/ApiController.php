<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Order;
use App\Models\Product;
use App\Models\Variation;
use App\Models\VariationPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Log;
use Stripe\Event;
use Stripe\Stripe;
use Stripe\StripeClient;

class ApiController extends Controller
{
    //
    public function __construct() {
        $this->modelProduct = new Product();
        $this->modelVariation = new Variation();
        $this->modelOrder = new Order();
        $this->modelDomain = new Domain();
    }

    public function getProductPrices($country_code, $sku) {
        $allProducts = $this->modelProduct->groupProductBySku($sku, $country_code);
        if(count($allProducts)>0) {
            foreach($allProducts as $product) {
                $allVariations = $this->modelVariation->getVariationsByProductId($product->id_product);
                $domain = $this->modelDomain->getDomainByBrand($product->id_brand);
                if($domain === null) {
                    $product_lander = "No domains";
                } else {
                    $product_lander = $domain->domain_url.'/'.$product->slug;
                }
                if(count($allVariations)>0) {
                    $groupedVariations = $this->getMultipleItemsFromQuery(json_decode($allVariations, true),'id_variation');
                    foreach($groupedVariations as $singleVariation) {
                        foreach($singleVariation as $singlePrice) {
                            if($singlePrice['deleted_price'] === null && $singlePrice['deleted_variation'] === null) {
                                $activeTest = $this->modelVariation->checkIfVariationIsInActiveTest($singlePrice['id_variation']);
                                if(count($activeTest)>0) {
                                    $returnData[$singlePrice['id_variation']][0]['active_test'] = 1;
                                } else {
                                    $returnData[$singlePrice['id_variation']][0]['active_test'] = 0;
                                }
                                $lastOrder = $this->modelOrder->getLastOrderForVariation($singlePrice['id_variation']);
                                if($lastOrder) $returnData[$singlePrice['id_variation']][0]['last_order'] = $lastOrder->created_at;
                                $returnData[$singlePrice['id_variation']][0]['variation_name'] = $singlePrice['variation_name'];
                                $returnData[$singlePrice['id_variation']][0]['is_variation_default'] = $singlePrice['is_variation_default'];
                                $returnData[$singlePrice['id_variation']][0]['product_url'] = $product_lander;

                                $returnData[$singlePrice['id_variation']][$singlePrice['quantity']]['amount'] = $singlePrice['amount'];
                                $returnData[$singlePrice['id_variation']][$singlePrice['quantity']]['currency_symbol'] = $singlePrice['currency_symbol'];
                                $returnData[$singlePrice['id_variation']][$singlePrice['quantity']]['is_free_shipping'] = $singlePrice['is_free_shipping'];

                                $originalPriceMultiply = 0.6;
                                $totalPrice = round(($singlePrice['amount']/$originalPriceMultiply));
                                $originalPrice = (ceil($totalPrice/100))*100-10;
                                $returnData[$singlePrice['id_variation']][$singlePrice['quantity']]['originalPrice'] = $originalPrice;
                            }
                        }
                    }
                }
            }
        }
        if(isset($returnData)) {
            return Response::make(json_encode($returnData, JSON_PRETTY_PRINT))->header('Content-Type', "application/json");
        } else {
            return Response::make(json_encode(null, JSON_PRETTY_PRINT))->header('Content-Type', "application/json");
        }
    }

    public function createPaymentIntent(Request $request, $site, $domain, $variation_id, $selectedQuantity)
    {
        $variation = $this->modelVariation->getVariationByIdAndQuantity($variation_id, $selectedQuantity);

        if(!$variation) {
            return abort('404');
        }

        $amountToPay = $variation->amount*100; //moze biti drugacije u zavisnosti od zemlje

        $stripe = new \Stripe\StripeClient(config('services.stripe.secret_key'));

        $paymentIntent = $stripe->paymentIntents->create([
            'amount' => $amountToPay,
            'currency' => $variation->currency_code,
            'payment_method_types' => [
                'card',
            ],
            'metadata' => [
                'countryShortcode' => $request->get('countryShortcode'),
                'countryId' => $request->get('countryId'),
                'domain' => $site.'.'.$domain,
            ]
        ]);

        return $paymentIntent;
    }

    public function updatePaymentIntent(Request $request)
    {
        $rules = [
            'name' => ['required'],
            'phone' => ['required'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => 'Missing required fields']);
        }

        $paymentIntentId = $request->get('paymentIntentId');

        $variation_id = $request->get('variation_id');
        $selectedQuantity = $request->get('quantity');
        $variation = $this->modelVariation->getVariationByIdAndQuantity($variation_id, $selectedQuantity);
        $amountToPay = $variation->amount*100; //moze biti drugacije u zavisnosti od zemlje

        $stripe = new \Stripe\StripeClient(config('services.stripe.secret_key'));

        try {
            $paymentIntentUpdated = $stripe->paymentIntents->update(
                $paymentIntentId,
                [
                    'amount' => $amountToPay,
                    'currency' => $variation->currency_code,
                    'metadata' => [
                        'orderData' => json_encode($request->all()),
                    ],
                ]
            );

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function stripeAfterPaymentWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sig_header = $request->header('Stripe-Signature');
        $event = null;

        try {
            $event = Event::constructFrom(
                json_decode($payload, true),
                $sig_header,
                config('services.stripe.webhook_key')
            );
        } catch(\UnexpectedValueException $e) {
            // Invalid payload
            \Log::error('Stripe - Invalid payload: '.$e->getMessage());
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch(\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            \Log::error('Stripe - Invalid signature: '.$e->getMessage());
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        // Handle the event
        switch ($event->type) {
            case 'payment_intent.succeeded':
                $paymentIntent = $event->data->object;
                $metadata = $paymentIntent->metadata;

                $encodedJson = json_decode($metadata);
                $arrayOrderData = json_decode($encodedJson->orderData, true);

                $request = new \Illuminate\Http\Request();

                $request->merge(['countryShortcode' => $encodedJson->countryShortcode]);
                $request->merge(['countryId' => $encodedJson->countryId]);
                $request->merge($arrayOrderData);

                $domainArray = explode('.',$encodedJson->domain);

                return (new OrderController)->order($request, $domainArray[0],$domainArray[1]);

                // Handle successful payment
                break;
            case 'payment_intent.payment_failed':
                $paymentIntent = $event->data->object;
                // Handle failed payment
                break;
            // Handle other event types as needed
            default:
                // Unexpected event type
                return response()->json(['error' => 'Unexpected event type'], 400);
        }

        return response()->json(['success' => true]);
    }

//    public function testRoute()
//    {
//        $metadata = '{
//          "countryId": "1",
//          "countryShortcode": "rs",
//          "domain": "flexoval.com",
//          "orderData": "{\"_token\":\"hD0pa9ESdym2ZpGDjDEgvgz3xSjUkU2asXl7L4Eh\",\"discount\":\"0\",\"variation_id\":\"1\",\"session_id\":\"0\",\"quantity\":\"2\",\"totalPrice\":null,\"name\":\"TEST FILIP\",\"email\":null,\"phone\":\"0692833503\",\"shipping_address\":\"Zivka Davidovica 13g\",\"shipping_city\":\"Beograd\",\"shipping_zip\":\"11000\",\"id_product\":\"1\",\"country_id\":\"1\",\"paymentIntentId\":\"pi_3MqFFyCEzic3CBJL14iB0YKv\"}"
//        }';
//
//        $encodedJson = json_decode($metadata);
//        $arrayOrderData = json_decode($encodedJson->orderData, true);
//
//        $request = new \Illuminate\Http\Request();
//
//        $request->merge(['countryShortcode' => $encodedJson->countryShortcode]);
//        $request->merge(['countryId' => $encodedJson->countryId]);
//        $request->merge($arrayOrderData);
//
//        $domainArray = explode('.',$encodedJson->domain);
//
//        return (new OrderController)->order($request, $domainArray[0],$domainArray[1]);
//    }
}
