<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Checkout;
use App\Models\Country;
use App\Models\Lander;
use App\Models\Order;
use App\Models\Product;
use App\Models\Statistic;
use App\Models\Thankyou;
use App\Models\Variation;
use App\Models\VariationPrice;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class VariationController extends Controller
{
    public function __construct() {
        $this->modelVariation = new Variation();
        $this->modelProduct = new Product();
        $this->modelBrand = new Brand();
        $this->modelLander = new Lander();
        $this->modelCheckout = new Checkout();
        $this->modelThankyou = new Thankyou();
        $this->modelCountry = new Country();
        $this->modelStatistic = new Statistic();
        $this->modelOrder = new Order();
        $this->modelVariationPrice = new VariationPrice();
    }

    public function variationsIndex() {
        $this->data['products'] = $this->modelProduct->getAllProduct();
        $this->data['brands'] = $this->modelBrand->getAllBrands();
        $this->data['landers'] = $this->modelLander->getAllLanders();
        $this->data['checkouts'] = $this->modelCheckout->getAllCheckouts();
        $this->data['thankyous'] = $this->modelThankyou->getAllThankyous();
        return view('admin.variations',$this->data);
    }

    public function getVariationsAjax(Request $request) {
        $searchFilter = $request->get('searchFilter');
        $landerFilter = $request->get('landerFilter');
        $checkoutFilter = $request->get('checkoutFilter');
        $thankyouFilter = $request->get('thankyouFilter');
        $productFilter = $request->get('productFilter');
        $brandFilter = $request->get('brandFilter');

        $currentPage = $request->get('page');

        if($currentPage==null||$currentPage==""||$currentPage<1){
            $currentPage = 1;
        }

        $perPage = 10;

        $variations = $this->modelVariation->allVariations($searchFilter, $landerFilter, $checkoutFilter, $thankyouFilter, $productFilter, $brandFilter);

        $paginatedData = $this->paginateDataWithTable($request, $variations,$perPage, $currentPage, 'variationTable');

        if(!$request->ajax()) {
            dd($paginatedData);
        }

        return $paginatedData;

    }

    public function newVariation(Request $request) {

        $product_id = $request->get('productDdlModal');
        $singleProduct = $this->modelProduct->getProduct($product_id);
        $country_id = $singleProduct->country_id;

        $this->data['product_id'] = $product_id;
        $this->data['landers'] = $this->modelLander->getLandersByProduct($product_id);
        $this->data['checkouts'] = $this->modelCheckout->getCheckoutsByCountry($country_id);
        $this->data['thankyous'] = $this->modelThankyou->getThankyousByCountry($country_id);

        return view('admin.newVariation', $this->data);
    }

    public function variation($id = null, Request $request) {

        $singleVariation = Variation::with('prices','product.country.currency','lander','checkout','thankyou')->findOrFail($id);
        $product_id = $singleVariation->getAttribute('product_id');
        $country_id = $singleVariation->product->getAttribute('country_id');

        if($request->ajax()) {
            return json_decode($singleVariation, true);
        }

        $groupedOrders = $this->modelVariation->countOrdersForVariation($id);
        $allOrders = $this->modelVariation->getAllOrdersForVariation($id);
        $allOrdersCount = 0;
        $revenueTotal = 0;
        foreach($allOrders as $order) {
            $allOrdersCount++;
            $revenueTotal += $order->price;
        }

        $singleVariationVisits = $this->modelStatistic->getSingleTestStatistic(null, null, $id);

        $newArray = [];
        foreach ($singleVariationVisits as $key => $value) {
            $newArray[$value->event_name] = $value->VariationVisits;
        }

        $prices = [];
        foreach($singleVariation->prices as $price) {
            if($price->getAttribute('deleted_at') === null) $prices[$price->getAttribute('quantity')] = $price->toArray();
        }

        $this->data['landerVisits'] = $newArray['LanderView'] ?? 0;
        $this->data['checkoutVisits'] = $newArray['CheckoutView'] ?? 0;
        $this->data['thankyouVisits'] = $newArray['Purchase'] ?? 0;

        $this->data['product_id'] = $product_id;
        $this->data['landers'] = Lander::where('product_id',$product_id)->get();
        $this->data['checkouts'] = Checkout::where('country_id',$country_id)->get();
        $this->data['thankyous'] = Thankyou::where('country_id',$country_id)->get();

        $this->data['currency_symbol'] = $singleVariation->product->country->currency->getAttribute('currency_symbol');
        $this->data['currency_id'] = $singleVariation->product->country->getAttribute('currency_id');
        $this->data['variation'] = $singleVariation;
        $this->data['prices'] = $prices;

        $this->data['groupedOrders'] = $groupedOrders;
        $this->data['allOrders'] = $allOrdersCount;
        $this->data['totalRevenue'] = $revenueTotal;

        $disableButtons = 0;
        if($singleVariation->getAttribute('deleted_at')) {
            $disableButtons = 1;
        }
        $activeVariation = $this->modelVariation->checkIfVariationIsInActiveTest($id);
        if(count($activeVariation)>0) {
            $disableButtons = 1;
        }
        $this->data['disableButtons'] = $disableButtons;

        return view('admin.singleVariation', $this->data);
    }

    public function getVariationStatisticByDate(Request $request) {
        $dateFrom = $request->get('dateFrom');
        $dateTo = $request->get('dateTo');
        $variation_id = $request->get('variationId');

        if($dateFrom){
            $dateFrom = DateTime::createFromFormat('d.m.Y', $dateFrom);
            $dateFrom = $dateFrom->format('Y-m-d');
        }
        if($dateTo){
            $dateTo = DateTime::createFromFormat('d.m.Y', $dateTo);
            $dateTo = $dateTo->format('Y-m-d');
        }

        $allOrders = $this->modelVariation->getAllOrdersForVariation($variation_id, $dateFrom, $dateTo);
        $allOrdersCount = 0;
        $revenueTotal = 0;
        foreach($allOrders as $order) {
            $allOrdersCount++;
            $revenueTotal += $order->price;
        }

        if(count($allOrders)>0) {
            $this->data['currency_symbol'] = $allOrders[0]->currency_symbol;
        } else {
            $this->data['currency_symbol'] = "NaN";
        }

        $upCrossSellOrders = $this->modelOrder->getUpCrossSellByVariationOrTest($variation_id, null, $dateFrom, $dateTo);
        $upCrossSellCount = 0;
        $upCrossSellRevenue = 0;
//        $quantityCount[1] = 0;
//        $quantityCount[2] = 0;
//        $quantityCount[3] = 0;
        $quantityCount = [];
        foreach($upCrossSellOrders as $order) {
            $quantityCount[$order->quantity] = 0;
            $upCrossSellCount++;
            $upCrossSellRevenue += $order->price;
        }

        foreach($quantityCount as $key => $value) {
            foreach($upCrossSellOrders as $order) {
                if($order->quantity === $key) {
                    $quantityCount[$key] = $quantityCount[$key] + 1;
                }
            }
        }

        $quantityText = "";
        foreach($quantityCount as $key => $value) {
            $quantityText .= "Quantity ".$key.": ".$value." Orders<br/>";
        }

        $singleVariationVisits = $this->modelStatistic->getSingleTestStatistic(null, null, $variation_id, $dateFrom, $dateTo);

        $newArray = [];
        foreach ($singleVariationVisits as $key => $value) {
            $newArray[$value->event_name] = $value->VariationVisits;
        }

        $this->data['landerVisits'] = isset($newArray['LanderView']) ? $newArray['LanderView'] : 0;
        $this->data['checkoutVisits'] = isset($newArray['CheckoutView']) ? $newArray['CheckoutView'] : 0;
        $this->data['thankyouVisits'] = isset($newArray['Purchase']) ? $newArray['Purchase'] : 0;
        $this->data['upcrossSellViews'] = isset($newArray['UpCrossSellShown']) ? $newArray['UpCrossSellShown'] : 0;
        $this->data['upcrossSellCancelled'] = isset($newArray['UpCrossSellCancelled']) ? $newArray['UpCrossSellCancelled'] : 0;
        $this->data['upcrossSellPurchase'] = isset($newArray['Purchase2']) ? $newArray['Purchase2'] : 0;
        $this->data['allOrders'] = $allOrdersCount;
        $this->data['totalRevenue'] = $revenueTotal;
        $this->data['upCrossSellOrders'] = $upCrossSellCount;
        $this->data['upCrossSellRevenue'] = $upCrossSellRevenue;

        $tableContent = "<table class='table table-bordered table-responsive-lg table-striped text-center'>";
        $tableContent .= "<tbody>";
        $tableContent .= "<tr><th>Lander</th><th>Checkout</th><th>Thankyou</th><th>CTR</th><th>CR</th><th>Orders</th><th>Revenue</th></tr><tr>";
        $tableContent .= "<td>".$this->data['landerVisits']."</td>";
        $tableContent .= "<td>".$this->data['checkoutVisits']."</td>";
        $tableContent .= "<td>".$this->data['thankyouVisits']."</td>";
        $tableContent .= "<td>".($this->data['landerVisits'] != 0 ? number_format(($this->data['checkoutVisits']/$this->data['landerVisits'])*100, 2) : 0)."%</td>";
        $tableContent .= "<td>".($this->data['landerVisits'] != 0 ? number_format(($this->data['thankyouVisits']/$this->data['landerVisits'])*100, 2) : 0)."%</td>";
        $tableContent .= "<td>".$this->data['allOrders']."</td>";
        $tableContent .= "<td>".$this->data['totalRevenue']." ".$this->data['currency_symbol']."</td>";
        $tableContent .= "</tr></tbody></table>";

        if($this->data['upcrossSellViews']) {
            $tableContent .= "<div class='p-2 text-center'><h4 class='mb-3'>Up/Cross Sells</h4></div>";
            $tableContent .= "<table class='table table-bordered table-responsive-lg table-striped text-center'>";
            $tableContent .= "<tbody>";
            $tableContent .= "<tr><th>Views</th><th>Cancelled</th><th><a data-toggle='popover' data-placement='right' title='Quantity' data-content='".$quantityText."'>Purchase <i class='fas fa-info-circle'></i></a></th><th>CR</th><th>Revenue</th><th>AOV</th></tr><tr>";
            $tableContent .= "<td>".$this->data['upcrossSellViews']."</td>";
            $tableContent .= "<td>".$this->data['upcrossSellCancelled']."</td>";
            $tableContent .= "<td>".$this->data['upcrossSellPurchase']."</td>";
            $tableContent .= "<td>".($this->data['upcrossSellViews'] != 0 ? number_format(($this->data['upcrossSellPurchase']/$this->data['upcrossSellViews'])*100, 2) : 0)."%</td>";
            $tableContent .= "<td>".$this->data['upCrossSellRevenue']." ".$this->data['currency_symbol']."</td>";
            $tableContent .= "<td>".($this->data['upCrossSellOrders'] != 0 ? number_format($this->data['upCrossSellRevenue']/$this->data['upCrossSellOrders'], 2) : 0)." ".$this->data['currency_symbol']."</td>";
            $tableContent .= "</tr></tbody></table>";
        }

        return $tableContent;

    }

    public function addVariation(Request $request) {

        $rules = [
            'productIdVariation' => ['required'],
            'variation_name' => ['required','max:100'],
            'variation_description' => ['nullable','max:255'],
            'landerIdVariation' => ['required'],
            'checkoutIdVariation' => ['required'],
            'thankyouIdVariation' => ['required'],
            'defaultVariation' => ['required'],
            'isVariationActive' => ['required'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $this->modelVariation->product_id = $request->get('productIdVariation');
            $this->modelVariation->variation_name = $request->get('variation_name');
            $this->modelVariation->variation_description = $request->get('variation_description');
            $this->modelVariation->lander_id = $request->get('landerIdVariation');
            $this->modelVariation->checkout_id = $request->get('checkoutIdVariation');
            $this->modelVariation->thankyou_id = $request->get('thankyouIdVariation');
            $this->modelVariation->default = $request->get('defaultVariation');
            $this->modelVariation->active = $request->get('isVariationActive');

            $insertIdVariation = $this->modelVariation->insertVariations();

            if($insertIdVariation && $this->modelVariation->default==="1") {
                $insertResult = $this->modelVariation->makeVariationDefault($this->modelVariation->product_id,$insertIdVariation);
                if(!$insertResult) {
                    return redirect()->route('variationsIndex')->with('error','Error on making variation default!');
                }
            }

            if($insertIdVariation) {
                return redirect()->route('variation',['id' => $insertIdVariation])->with('success','Variation has been added successfully, please add prices now!');
            } else {
                return redirect()->route('variationsIndex')->with('error','Error with adding new variation to database!');
            }

        } catch (\Exception $exception) {
            Log::error("Error: Inserting new variation | Exception: " . $exception->getMessage());
            return redirect()->route('variationsIndex')->with('error','Error on inserting new variation!');
        }
    }

    public function editVariation(Request $request) {

        $rules = [
            'variationIdEdit' => ['required'],
            'productIdVariationEdit' => ['required'],
            'variationNameEdit' => ['required','max:100'],
            'variationDescriptionEdit' => ['nullable','max:255'],
            'landerIdVariationEdit' => ['required'],
            'checkoutIdVariationEdit' => ['required'],
            'thankyouIdVariationEdit' => ['required'],
            'defaultVariationEdit' => ['required'],
            'isVariationActiveEdit' => ['required'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $id = $request->get('variationIdEdit');
            $this->modelVariation->variation_name = $request->get('variationNameEdit');
            $this->modelVariation->variation_description = $request->get('variationDescriptionEdit');
            $this->modelVariation->lander_id = $request->get('landerIdVariationEdit');
            $this->modelVariation->checkout_id = $request->get('checkoutIdVariationEdit');
            $this->modelVariation->thankyou_id = $request->get('thankyouIdVariationEdit');
            $this->modelVariation->default = $request->get('defaultVariationEdit');
            $this->modelVariation->active = $request->get('isVariationActiveEdit');
            $this->modelVariation->product_id = $request->get('productIdVariationEdit');

            $updateResult = $this->modelVariation->editVariation($id);

            if($updateResult && $this->modelVariation->default==="1") {
                $result = $this->modelVariation->makeVariationDefault($this->modelVariation->product_id,$id);
                if(!$result) {
                    return redirect()->back()->with('error','Error on making variation default!');
                }
            }

            if($updateResult == 1) {
                return redirect()->back()->with('success','Variation has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the variation!');
            } else {
                return redirect()->back()->with('error','Error with editing variation!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing variation!');
        }
    }

    public function addPricesToVariation(Request $request) {

        $rules = [
            'variationIdPrices' => ['required'],
            'currencyIdPrices' => ['required'],
            'isPriceDefault' => ['required'],
            'isFreeShipping' => ['nullable'],
            'priceFor1' => ['nullable','numeric'],
            'priceFor2' => ['nullable','numeric'],
            'priceFor3' => ['nullable','numeric'],
            'priceFor4' => ['nullable','numeric'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {

            $variation_id = $request->get('variationIdPrices');
            $currency_id = $request->get('currencyIdPrices');

            $data = $request->except('_token','variationIdPrices','currencyIdPrices');

            $i = 0;
            $j = 0;
            $k = 0;
            $l = 0;
            foreach($data as $key => $value) {
                if(str_contains($key, 'priceFor') && $value != null) {
                    $i++;
                    $singlePrice = $request->get($key);
                    $this->modelVariationPrice->price = $singlePrice;
                    $quantity = substr($key, -1);
                    $this->modelVariationPrice->quantity = $quantity;

                    if($request->get('isPriceDefault') === $this->modelVariationPrice->quantity) {
                        $this->modelVariationPrice->is_default = 1;
                    } else {
                        $this->modelVariationPrice->is_default = 0;
                    }
                    if(isset($request->get('isFreeShipping')[$i]) && ($request->get('isFreeShipping')[$i] === $this->modelVariationPrice->quantity)) {
                        $this->modelVariationPrice->is_free_shipping = 1;
                    } else {
                        $this->modelVariationPrice->is_free_shipping = 0;
                    }

                    $variationPriceExists = $this->modelVariationPrice->checkVariationQuantity($variation_id,$this->modelVariationPrice->quantity);
                    if($variationPriceExists) {
                        if($variationPriceExists->quantity === (int)$this->modelVariationPrice->quantity) {
                            if($variationPriceExists->is_default != $this->modelVariationPrice->is_default || $variationPriceExists->is_free_shipping != $this->modelVariationPrice->is_free_shipping || $variationPriceExists->price != $this->modelVariationPrice->price) {
                                $updateResult = $this->modelVariationPrice->editVariationPrice($variationPriceExists->id_variations_prices, $currency_id);
                                if($updateResult) {
                                    $result[$i] = 2;
                                } else {
                                    return redirect()->back()->with('error','Error on updating variation price!');
                                }
                            } else {
                                $result[$i] = 0;
                            }
                        }
                    } else {
                        $insertPriceForVariation = $this->modelVariationPrice->insertPriceVariation($variation_id, $currency_id);
                        if($insertPriceForVariation) {
                            $result[$i] = 1;
                        } else {
                            return redirect()->back()->with('error','Error on inserting price for variation!');
                        }
                    }
                }
            }
            if(isset($result)) {
                foreach($result as $key => $value) {
                    if($value === 1) {
                        $j++;
                    } else if($value === 0) {
                        $k++;
                    } else if($value === 2) {
                        $l++;
                    }
                }
                return redirect()->back()->with('success','Inserted: '.$j.' of '.$i.' Updated: '.$l.' of '.$i.' Already inserted: '.$k.' of '.$i);
            }

        } catch (\Exception $exception) {
            Log::error("Error: Inserting prices to variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting prices to variation!');
        }
    }

    public function deleteVariation($variation_id) {
        try {
            $deleteVariationsPrices = $this->modelVariationPrice->deleteAllPricesForVariation($variation_id);

            if($deleteVariationsPrices >= 0) {
                $deleteResult = $this->modelVariation->deleteVariation($variation_id);
            }

            if($deleteResult === 1) {
                return redirect()->route('variationsIndex')->with('success','Variation has been deleted successfully!');
            } else if($deleteResult === 0) {
                return redirect()->back()->with('info','Variation has been deleted already!');
            } else {
                return redirect()->back()->with('error','Error with deleting variation!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting variation!');
        }
    }

    public function deleteVariationPrice($variation_price_id = null) {
        try {
            $deleteResult = $this->modelVariationPrice->deleteVariationPrice($variation_price_id);

            if($deleteResult) {
                return redirect()->back()->with('success','Price variation has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting price variation!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting price variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting price variation!');
        }
    }

    public function restoreVariation($id = null) {

        if($id === null) {
            return redirect()->back()->with('error','You must enter Variation ID!');
        }

        try {
            $restoreResult = $this->modelVariation->restoreVariation($id);
            if($restoreResult) {
                return redirect()->back()->with('success','Variation has been restored successfully!');
            } else {
                return redirect()->back()->with('error','Error with restoring variation!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Restoring variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error with restoring variation!');
        }
    }
}
