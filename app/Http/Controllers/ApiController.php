<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Order;
use App\Models\Product;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

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

    public function stripePay(Request $request)
    {

        dd($request->all());

        Stripe\Stripe::setApiKey(config('services.stripe.secret_key'));

        Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from localhost"
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }


}
