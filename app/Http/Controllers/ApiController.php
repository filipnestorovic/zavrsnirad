<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Order;
use App\Models\Product;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Log;
use Propaganistas\LaravelPhone\PhoneNumber;
use GuzzleHttp;

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

    public function validatePhoneNumber(Request $request){

        $number = $request->get('phone');
        $countryCode =  $request->get('country');

        $name = $request->get('name');
        $email = $request->get('email');
        $address = $request->get('address');
        $city = $request->get('city');
        $zip = $request->get('zip');
        $quantity = $request->get('quantity');
        $variation_id = $request->get('variation_id');

        try {
            if($number != null) {
                $result = PhoneNumber::make($number, $countryCode)->isOfCountry($countryCode);
                if($result){
                    return 1;
                } else {
                    return 0;
                }
            } else {
                Log::warning("Validation - Phone is null - Request: ".$request);
            }
        } catch (\Exception $exception){
            $customer_data = "Phone: ".$number."\nName: ".$name."\nEmail: ".$email."\nAddress: ".$address."\nCity: ".$city."\nZip: ".$zip."\nQuantity: ".$quantity."\nVariation: ".$variation_id;
            Log::warning("Validation - Country: ".$countryCode."\nError: ".$exception->getMessage()."\n".$customer_data);
            return 0;
        }
    }

    public function getProductUpAndCrossSells($sku, $country_id) {
        if($country_id === 1) {
            $client = new GuzzleHttp\Client([
                'headers' => [ 'Content-Type' => 'application/json' ]
            ]);
            try {
                $response = $client->get('https://new.serverwombat.com/api/getProductCrossUpSellData?SKU='.$sku);
                $upCrossSellData = array();
                $productUpCrossResponse = json_decode($response->getBody());
            } catch(\Exception $exception) {
                Log::critical("Connection error: " . $exception->getMessage());
            }
            try {
                if($productUpCrossResponse->code === 200) {
                    if(isset($productUpCrossResponse->up) || isset($productUpCrossResponse->cross)) {
                        $productUpSells = $productUpCrossResponse->up;
                        $productCrossSells = $productUpCrossResponse->cross;
                        $i = 1;
                        $upSellCount = 0;
                        $crossSellCount = 0;
                        if (count($productUpSells) > 0) {
                            foreach ($productUpSells as $singlesell) {
                                if($singlesell->isActive) {
                                    $upSellProduct = $this->modelProduct->groupProductBySku($singlesell->SKU, null, $country_id);
                                    if(count($upSellProduct)>0) {
                                        $upCrossSellData[$i]['sku'] = $singlesell->SKU;
                                        $upCrossSellData[$i]['product_name'] = $upSellProduct[0]->product_name;
                                        $upCrossSellData[$i]['upcrosssell_product_id'] = $upSellProduct[0]->id_product;
                                        $upCrossSellData[$i]['product_image'] = $upSellProduct[0]->product_image;
                                        $upCrossSellData[$i]['id_upcrosssell'] = $singlesell->id_product_crossupsell;
                                        $upCrossSellData[$i]['quantity'] = $singlesell->quantity;
                                        $upCrossSellData[$i]['pricePerPiece'] = $singlesell->price;
                                        $upCrossSellData[$i]['isBestOption'] = $singlesell->isBestOption;
                                        $upCrossSellData[$i]['description'] = $singlesell->description;
                                        $upCrossSellData[$i]['is_upSell'] = $singlesell->is_upSell;
                                        $upCrossSellData[$i]['is_crossSell'] = $singlesell->is_crossSell;
                                        $upCrossSellData[$i]['isFreeShipping'] = $singlesell->isFreeShippingClaimed;
                                        $i++;
                                        $upSellCount++;
                                    } else {
                                        Log::error("Error: DB - Unexisting UpSell Product - SKU: ".$singlesell->SKU);
                                    }
                                }
                            }
                        }
                        if (count($productCrossSells) > 0) {
                            foreach ($productCrossSells as $singlesell) {
                                if($singlesell->isActive) {
                                    $crossSellProduct = $this->modelProduct->groupProductBySku($singlesell->SKU, null, $country_id);
                                    if (count($crossSellProduct) > 0) {
                                        $upCrossSellData[$i]['sku'] = $singlesell->SKU;
                                        $upCrossSellData[$i]['product_name'] = $crossSellProduct[0]->product_name;
                                        $upCrossSellData[$i]['upcrosssell_product_id'] = $crossSellProduct[0]->id_product;
                                        $upCrossSellData[$i]['product_image'] = $crossSellProduct[0]->product_image;
                                        $upCrossSellData[$i]['id_upcrosssell'] = $singlesell->id_product_crossupsell;
                                        $upCrossSellData[$i]['quantity'] = $singlesell->quantity;
                                        $upCrossSellData[$i]['pricePerPiece'] = $singlesell->price;
                                        $upCrossSellData[$i]['isBestOption'] = $singlesell->isBestOption;
                                        $upCrossSellData[$i]['description'] = $singlesell->description;
                                        $upCrossSellData[$i]['is_upSell'] = $singlesell->is_upSell;
                                        $upCrossSellData[$i]['is_crossSell'] = $singlesell->is_crossSell;
                                        $upCrossSellData[$i]['isFreeShipping'] = $singlesell->isFreeShippingClaimed;
                                        $i++;
                                        $crossSellCount++;
                                    } else {
                                        Log::error("Error: DB - Unexisting CrossSell Product - SKU: " . $singlesell->SKU);
                                    }
                                }
                            }
                        }
                        $upCrossSellData[0]['upSellCount'] = $upSellCount;
                        $upCrossSellData[0]['crossSellCount'] = $crossSellCount;
                        return $upCrossSellData;
                    }
                }
            } catch (\Exception $exception) {
                Log::error("Error: Gettings Up/Cross Sells | Exception: " . $exception->getMessage());
            }
        }
    }


}
