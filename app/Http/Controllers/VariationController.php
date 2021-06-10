<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Checkout;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Lander;
use App\Models\Price;
use App\Models\Product;
use App\Models\Statistic;
use App\Models\Thankyou;
use App\Models\Variation;
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
        $this->modelPrice = new Price();
        $this->modelCoupon = new Coupon();
        $this->modelStatistic = new Statistic();
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

        $variationList = json_decode($this->modelVariation->getAllVariations($searchFilter,$landerFilter,$checkoutFilter,$thankyouFilter,$productFilter,$brandFilter), true);

        $paginatedData = $this->prepareDataForTableAjax($request, $variationList,'id_variation', true, $perPage, $currentPage, 'variationTable');

        if(!$request->ajax()) {
//            dd($paginatedData);
        }

        return $paginatedData;

    }

    public function newVariation(Request $request) {

        $product_id = $request->get('productDdlModal');
        $singleProduct = $this->modelProduct->getProduct($product_id);
        $country_id = $singleProduct->country_id;

        $country = $this->modelCountry->getCountry($country_id);

        $this->data['product_id'] = $product_id;
        $this->data['landers'] = $this->modelLander->getLandersByProduct($product_id);
        $this->data['checkouts'] = $this->modelCheckout->getCheckoutsByCountry($country_id);
        $this->data['thankyous'] = $this->modelThankyou->getThankyousByCountry($country_id);

        return view('admin.newVariation', $this->data);
    }

    public function variation($id = null, Request $request) {

        $singleVariation = $this->modelVariation->getVariation($id);

        $prices = $this->modelPrice->getPricesForVariation($id);
        $pricesList = json_decode($prices, true);
        $groupedPrices = $this->getMultipleItemsFromQuery($pricesList,'id_variation');

        $prices = [];
        $i = 0;
        foreach($groupedPrices as $price) {
            foreach($price as $p) {
                $i++;
                $prices[$i]['id_variations_prices'] = $p['id_variations_prices'];
                $prices[$i]['quantity'] = $p['quantity'];
                $prices[$i]['amount'] = $p['amount'];
                $prices[$i]['is_default'] = $p['is_default'];
                $prices[$i]['is_free_shipping'] = $p['is_free_shipping'];
            }
        }

        if($request->ajax()) {
            return json_decode($groupedPrices, true);
        }

        $product_id = $singleVariation->product_id;
        $singleProduct = $this->modelProduct->getProduct($product_id);
        $country_id = $singleProduct->country_id;

        $country = $this->modelCountry->getCountry($country_id);

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

        $this->data['landerVisits'] = isset($newArray['LanderView']) ? $newArray['LanderView'] : 0;
        $this->data['checkoutVisits'] = isset($newArray['CheckoutView']) ? $newArray['CheckoutView'] : 0;
        $this->data['thankyouVisits'] = isset($newArray['Purchase']) ? $newArray['Purchase'] : 0;

        $this->data['product_id'] = $product_id;
        $this->data['landers'] = $this->modelLander->getLandersByProduct($product_id);
        $this->data['checkouts'] = $this->modelCheckout->getCheckoutsByCountry($country_id);
        $this->data['thankyous'] = $this->modelThankyou->getThankyousByCountry($country_id);
        $this->data['currency_symbol'] = $country->currency_symbol;
        $this->data['currency_id'] = $country->id_currency;
        $this->data['variation'] = $singleVariation;
        $this->data['prices'] = $prices;
        $this->data['coupons'] = $this->modelCoupon->getAllActiveCoupons();
        $this->data['groupedOrders'] = $groupedOrders;
        $this->data['allOrders'] = $allOrdersCount;
        $this->data['totalRevenue'] = $revenueTotal;

        $couponIds = array();
        $existingCoupons = $this->modelCoupon->getAllCouponsForVariation($id);

        foreach($existingCoupons as $coupon) {
            array_push($couponIds,$coupon->coupon_id);
        }

        $this->data['variationCoupons'] = $couponIds;

        $disableButtons = 0;
        if($singleVariation->deleted_at != null) {
            $disableButtons = 1;
        }
        $activeVariation = $this->modelVariation->checkIfVariationIsInActiveTest($id);
        if(count($activeVariation)>0) {
            $disableButtons = 1;
        }
        $this->data['disableButtons'] = $disableButtons;

        return view('admin.variationProduct', $this->data);
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

            $this->modelPrice->variation_id = $request->get('variationIdPrices');
            $this->modelPrice->currency_id = $request->get('currencyIdPrices');

            $data = $request->except('_token','variationIdPrices','currencyIdPrices');

            $i = 0;
            $j = 0;
            $k = 0;
            $l = 0;
            foreach($data as $key => $value) {
                if(str_contains($key, 'priceFor') && $value != null) {
                    $i++;
                    $singlePrice = $request->get($key);
                    $this->modelPrice->amount = $singlePrice;
                    $quantity = substr($key, -1);
                    $this->modelPrice->quantity = $quantity;
                    if($request->get('isPriceDefault') === $this->modelPrice->quantity) {
                        $this->modelPrice->is_default = 1;
                    } else {
                        $this->modelPrice->is_default = 0;
                    }
                    if(isset($request->get('isFreeShipping')[$i]) && ($request->get('isFreeShipping')[$i] === $this->modelPrice->quantity)) {
                        $this->modelPrice->is_free_shipping = 1;
                    } else {
                        $this->modelPrice->is_free_shipping = 0;
                    }
                    $priceExists = $this->modelPrice->checkIfPriceExists($this->modelPrice->amount,$this->modelPrice->currency_id);
                    if($priceExists) {
                        $price_id = $priceExists->id_price;
                    } else {
                        $insertResult = $this->modelPrice->insertPrice();
                        if($insertResult) {
                            $price_id = $insertResult;
                        } else {
                            return redirect()->back()->with('error','Error on inserting new price!');
                        }
                    }
                    $this->modelPrice->price_id = $price_id;
                    $variationPriceExists = $this->modelPrice->checkVariationQuantity($this->modelPrice->variation_id,$this->modelPrice->quantity);
                    if($variationPriceExists) {
                        if($variationPriceExists->quantity === (int)$this->modelPrice->quantity) {
                            if($variationPriceExists->is_default != $this->modelPrice->is_default || $variationPriceExists->is_free_shipping != $this->modelPrice->is_free_shipping || $variationPriceExists->price_id != $this->modelPrice->price_id) {
                                $updateResult = $this->modelPrice->editVariationPrice($variationPriceExists->id_variations_prices);
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
                        $connectVariationPrice = $this->modelPrice->insertPriceVariation();
                        if($connectVariationPrice) {
                            $result[$i] = 1;
                        } else {
                            return redirect()->back()->with('error','Error on connecting price with variation!');
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

    public function deleteVariation($id) {
        try {
            $deleteVariationsPrices = $this->modelPrice->deleteAllPricesForVariation($id);

            if($deleteVariationsPrices >= 0) {
                $deleteResult = $this->modelVariation->deleteVariation($id);
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

    public function deleteVariationPrice($id = null) {

        if($id === null) {
            return redirect()->back()->with('error','Variation Id is not available!');
        }

        try {
            $deleteResult = $this->modelPrice->deletePriceVariation($id);
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

    public function addCouponsToVariation(Request $request) {

        $rules = [
            'variationIdCoupons' => ['required'],
            'variation_coupons' => ['nullable','array'],
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

        $existingCoupons = array();
        $deleted = 0;
        $existing = 0;
        $inserted = 0;
        try {
            $this->modelCoupon->variation_id = $request->get('variationIdCoupons');
            $selectedCoupons = $request->get('variation_coupons');

            $existingVariationCoupons = $this->modelCoupon->getAllCouponsForVariation($this->modelCoupon->variation_id);


            if($selectedCoupons === null) {
                foreach($existingVariationCoupons as $singleRaw) {
                    try {
                        $deleteResult = $this->modelCoupon->deleteVariationCoupon($singleRaw->id_variations_coupons);
                        if($deleteResult) {
                            $deleted++;
                        } else {
                            return redirect()->back()->with('error','Error on deleting existing variation coupon!');
                        }
                    } catch (\Exception $exception) {
                        Log::error("Error: Deleting all variation coupons | Exception: " . $exception->getMessage());
                        return redirect()->back()->with('error','Error on deleting all variation coupons!');
                    }
                }
            } else {
                foreach($existingVariationCoupons as $singleRaw) {
                    foreach($singleRaw as $key => $value) {
                        if($key === "coupon_id") {
                            if(in_array($value,$selectedCoupons)) {
                                $existing++;
                            } else {
                                try {
                                    $deleteResult = $this->modelCoupon->deleteVariationCoupon($singleRaw->id_variations_coupons);
                                    if($deleteResult) {
                                        $deleted++;
                                    } else {
                                        return redirect()->back()->with('error','Error on deleting existing variation coupon!');
                                    }
                                } catch (\Exception $exception) {
                                    Log::error("Error: Deleting existing variation coupon | Exception: " . $exception->getMessage());
                                    return redirect()->back()->with('error','Error on deleting existing variation coupon!');
                                }
                            }
                            array_push($existingCoupons,$value);
                        }
                    }
                }

                foreach($selectedCoupons as $singleCoupon) {
                    if(!in_array((int)$singleCoupon,$existingCoupons)) {
                        $this->modelCoupon->coupon_id = $singleCoupon;
                        try {
                            $insertResult = $this->modelCoupon->addVariationCoupon();
                            if($insertResult) {
                                $inserted++;
                            } else {
                                return redirect()->back()->with('error','Error on inserting new variation coupon!');
                            }
                        } catch (\Exception $exception) {
                            Log::error("Error: Inserting new variation coupon | Exception: " . $exception->getMessage());
                            return redirect()->back()->with('error','Error on inserting new variation coupon!');
                        }
                    }
                }
            }

            return redirect()->back()->with('success',"Coupons - Inserted: " . $inserted . " Existing: " . $existing . " Deleted: " . $deleted);

        } catch (\Exception $exception) {
            Log::error("Error: Inserting coupons to variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting coupons to variation!');
        }

    }

    public function copyVariation($variation_id = null) {
        $singleVariation = $this->modelVariation->getVariation($variation_id);
        $coupons = $this->modelCoupon->getAllCouponsForVariation($variation_id);
        $prices = $this->modelPrice->getPricesForVariation($variation_id);
        $pricesList = json_decode($prices, true);
        $groupedPrices = $this->getMultipleItemsFromQuery($pricesList,'id_variation');

        $prices = [];
        $i = 0;
        $j = 0;
        foreach($groupedPrices as $price) {
            foreach($price as $p) {
                $i++;
                $prices[$i]['quantity'] = $p['quantity'];
                $prices[$i]['price_id'] = $p['price_id'];
                $prices[$i]['is_default'] = $p['is_default'];
                $prices[$i]['is_free_shipping'] = $p['is_free_shipping'];
            }
        }

        try {
            $this->modelVariation->product_id = $singleVariation->product_id;
            $this->modelVariation->variation_name = $singleVariation->variation_name . " - Copy";
            $this->modelVariation->variation_description = $singleVariation->variation_description . " - Copy";
            $this->modelVariation->lander_id = $singleVariation->lander_id;
            $this->modelVariation->checkout_id = $singleVariation->checkout_id;
            $this->modelVariation->thankyou_id = $singleVariation->thankyou_id;
            $this->modelVariation->default = 0;
            $this->modelVariation->active = $singleVariation->is_active;

            $insertIdVariation = $this->modelVariation->insertVariations();
        } catch (\Exception $exception) {
            Log::error("Error: Copying variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on copying variation!');
        }

        if($insertIdVariation) {
            try {
                foreach($prices as $price) {
                    $this->modelPrice->variation_id = $insertIdVariation;
                    $this->modelPrice->quantity = $price['quantity'];
                    $this->modelPrice->is_default = $price['is_default'];
                    $this->modelPrice->is_free_shipping = $price['is_free_shipping'];
                    $this->modelPrice->price_id = $price['price_id'];

                    $insertPrice = $this->modelPrice->insertPriceVariation();
                    if($insertPrice) $j++;
                }
            } catch (\Exception $exception) {
                Log::error("Error: Adding prices to copied variation | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Error on adding prices to copied variation!');
            }
        }

        $k = 0;
        $l = 0;
        if($i === $j) {
            try {
                foreach($coupons as $coupon) {
                    $k++;
                    $this->modelCoupon->variation_id = $insertIdVariation;
                    $this->modelCoupon->coupon_id = $coupon->id_coupon;

                    $insertCoupon = $this->modelCoupon->addVariationCoupon();
                    if($insertCoupon) $l++;
                }
            } catch (\Exception $exception) {
                Log::error("Error: Adding coupons to copied variation | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Error on adding coupons to copied variation!');
            }
        }

        if($k === $l) {
            return redirect()->route('variation',['id' => $insertIdVariation])->with('success','Variation copied successfully!');
        } else {
            return redirect()->back()->with('error','Error on copying variation!');
        }

    }
}
