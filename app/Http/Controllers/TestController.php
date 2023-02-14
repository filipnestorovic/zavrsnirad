<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Price;
use App\Models\Product;
use App\Models\Statistic;
use App\Models\Test;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function __construct() {
        $this->modelTest = new Test();
        $this->modelProduct = new Product();
        $this->modelVariation = new Variation();
        $this->modelStatistic = new Statistic();
        $this->modelPrice = new Price();
        $this->modelOrder = new Order();
    }

    public function testsIndex() {
        $this->data['products'] = $this->modelProduct->getAllProduct();

        $products = $this->modelProduct->getAllProduct();

        foreach($products as $product) {
            $variations = Variation::where('product_id',$product->id_product)->get()->pluck('id_variation')->toArray();
            $product->availableVariations = $variations;
        }

        $this->data['products'] = $products;

        return view('admin.tests', $this->data);
    }

    public function getTestsAjax(Request $request, $test_id = null) {
        $searchFilter = $request->get('searchFilter');
        $productFilter = $request->get('productFilter');
        $activeFilter = $request->get('activeFilter');

        $currentPage = $request->get('page');

        if($currentPage==null||$currentPage==""||$currentPage<1){
            $currentPage = 1;
        }

        $perPage = 10;

        $testsList = json_decode($this->modelTest->getAllTests($searchFilter, $productFilter, $activeFilter, $test_id), true);

        $paginatedData = $this->prepareDataForTableAjax($request, $testsList,'id_test', true, $perPage, $currentPage, 'testTable');

        if(!$request->ajax()) {
            dd($paginatedData);
        }

        return $paginatedData;
    }

    public function createTest(Request $request) {
        $product_id = $request->get('productIdTestCreate');

        $activeTestForProduct = $this->modelTest->getAllTests(null, $product_id, 1, null);

        if(count($activeTestForProduct)>0) {
            return redirect()->route('testsIndex')->with('error','On going test with this product!');
        } else {
            try {
                $this->modelTest->product_id = $product_id;
                $insertedTestId = $this->modelTest->insertTest();
                if($insertedTestId) {
                    return redirect()->route('singleTest',['id' => $insertedTestId])->with('success','Test has been created successfully, you can add variations now!');
                } else {
                    return redirect()->route('testsIndex')->with('error','Error with adding new test to database!');
                }
            } catch (\Exception $exception) {
                Log::error("Error: Inserting new test | Exception: " . $exception->getMessage());
                return redirect()->route('testsIndex')->with('error','Error on inserting new test!');
            }
        }
    }

    public function singleTest($id = null, Request $request) {
        $singleTest = $this->modelTest->getSingleTest($id);

        if($singleTest) {
            $this->data['testId'] = $id;
            $this->data['singleTest'] = $singleTest;
            $this->data['product'] = $this->modelProduct->getProduct($singleTest->product_id);
            $this->data['availableVariationsForProduct'] = $this->modelVariation->getAvailableVariationsByProductId($singleTest->product_id, $id);

            $unformattedTest = json_decode($this->modelTest->getAllTests($id), true);
            $formattedTest = $this->getMultipleItemsFromQuery($unformattedTest, 'id_test');

            $checkIfTrafficSumIsGood = 0;
            $array = [];
            $totalVariationOrders = [];
//            $pricesNotSet = 0;
            foreach($formattedTest as $variations) {
                foreach($variations as $variation) {
                    if($variation['removed_at'] === null) {
                        $checkIfTrafficSumIsGood += $variation['traffic_percentage'];

                        $testVariationId = $variation['id_tests_variations'];

                        if(is_null($testVariationId)) {

                        } else {

                            $testStatistic = $this->modelStatistic->getSingleTestStatistic($testVariationId, $id, null);

                            $newArray = [];
                            foreach ($testStatistic as $key => $value) {
                                $newArray['VariationName'] = $value->variation_name;
                                if (isset($value->TestVariationVisits)) {
                                    $newArray[$value->event_name] = $value->TestVariationVisits;
                                }
                            }

                            $array[$testVariationId] = $newArray;
                            $testOrders = $this->modelStatistic->getOrdersForVariationInActiveTest($testVariationId);
                            $countOrders = 0;
                            $revenueOrders = 0;
                            foreach ($testOrders as $singleOrder) {
                                $countOrders++;
                                $revenueOrders += $singleOrder->price;
                            }
                            $totalVariationOrders[$testVariationId]['orders'] = $countOrders;
                            $totalVariationOrders[$testVariationId]['revenue'] = $revenueOrders;

                            $upcrossSells = $this->modelOrder->getUpCrossSellByVariationOrTest(null, $testVariationId, null, null);
                            $countupcrossSells = 0;
                            $revenueupcrossSells = 0;
                            foreach ($upcrossSells as $singleOrder) {
                                $countupcrossSells++;
                                $revenueupcrossSells += $singleOrder->price;
                            }
                            $totalVariationOrders[$testVariationId]['UpCrossSells'] = $countupcrossSells;
                            $totalVariationOrders[$testVariationId]['RevenueUpCrossSells'] = $revenueupcrossSells;
                        }
                    }
                }
            }

            if($checkIfTrafficSumIsGood != 100) {
                $this->data['wrongSum'] = 1;
            }

//            if($pricesNotSet > 0) {
//                $this->data['pricesNotSet'] = 1;
//            }

            iF($request->ajax()) {
                return $singleTest;
            }

            $this->data['testVariations'] = $formattedTest;
            $this->data['singleVariationStatistic'] = $array;
            $this->data['testOrders'] = $totalVariationOrders;

            return view('admin.singleTest', $this->data);
        } else {
            return redirect()->route('testsIndex')->with('error','Test not found!');
        }
    }

    public function addVariationToTest(Request $request) {

        $rules = [
            'testIdHidden' => ['required'],
            'variationIdTest' => ['required'],
            'trafficPercentage' => ['required','max:100'],
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
            $this->modelTest->test_id = $request->get('testIdHidden');
            $this->modelTest->variation_id = $request->get('variationIdTest');
            $this->modelTest->traffic_percentage = $request->get('trafficPercentage');

            $insertResult = $this->modelTest->addVariationToTest();

            if($insertResult) {
                return redirect()->back()->with('success','Variation has been added to the test successfully!');
            } else {
                return redirect()->back()->with('error','Error with adding variation to the test!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Adding variation to the test | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on adding variation to the test!');
        }
    }

    public function getTestVariation($id) {
        $singleTestVariation = $this->modelTest->getSingleTestVariation($id);
        if($singleTestVariation) {
            return json_encode($singleTestVariation, true);
        }
    }

    public function editTestVariationTraffic(Request $request) {
        $rules = [
            'testVariationIdModal' => ['required'],
            'trafficModal' => ['required','max:100'],
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
            $id = $request->get('testVariationIdModal');
            $this->modelTest->traffic_percentage = $request->get('trafficModal');

            $updateResult = $this->modelTest->editTestVariationTraffic($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Traffic percent has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to test variation!');
            } else {
                return redirect()->back()->with('error','Error with editing test variation!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing test variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing test variation!');
        }
    }

    public function removeVariationFromTest($id) {
        try {
            $deleteResult = $this->modelTest->deleteTestVariation($id);

            if($deleteResult) {
                return redirect()->back()->with('success','Test variation has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting test variation!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting test variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting test variation!');
        }
    }

    public function restoreVariationTest($id) {
        try {
            $restoreResult = $this->modelTest->restoreVariationTest($id);
            if($restoreResult) {
                return redirect()->back()->with('success','Test variation has been restored successfully!');
            } else {
                return redirect()->back()->with('error','Error with restoring test variation!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Restoring test variation | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error with restoring test variation!');
        }
    }

    public function startTest($id, $wrongSum, $pricesNotSet) {
        try {
            if($wrongSum === "1") {
                return redirect()->back()->with('error','Traffic percent sum must be 100!');
            }
            if($pricesNotSet === "1") {
                return redirect()->back()->with('error','One or more variations have no prices!');
            }
            $singleTest = $this->modelTest->getSingleTest($id);
            if($singleTest) {
                if($singleTest->started_at === null && $singleTest->is_active === 0) {
                    $start = 1;
                } else {
                    $start = 0;
                }
                $updateResult = $this->modelTest->startTest($id, $start);
                if($updateResult == 1) {
                    return redirect()->back()->with('success','Test has been started successfully!');
                } else if($updateResult == 0) {
                    return redirect()->back()->with('info','Test has already been started!');
                } else {
                    return redirect()->back()->with('error','Error with starting test!');
                }
            } else {
                return redirect()->back()->with('error','Test not available!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Starting test | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on starting test!');
        }
    }

    public function pauseTest($id) {
        try {
            $singleTest = $this->modelTest->getSingleTest($id);
            if($singleTest) {
                if($singleTest->started_at != null && $singleTest->is_active === 1) {
                    $updateResult = $this->modelTest->pauseTest($id);
                    if($updateResult == 1) {
                        return redirect()->back()->with('success','Test has been paused successfully!');
                    } else if($updateResult == 0) {
                        return redirect()->back()->with('info','Test has already been paused!');
                    } else {
                        return redirect()->back()->with('error','Error with pausing test!');
                    }
                } else {
                    return redirect()->back()->with('error','Test has already been paused or not even started!');
                }
            } else {
                return redirect()->back()->with('error','Test not available!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Pausing test | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on pausing test!');
        }
    }

    public function endTest($id) {
        try {
            $singleTest = $this->modelTest->getSingleTest($id);
            if($singleTest) {
                if($singleTest->started_at != null && $singleTest->is_active === 1) {
                    $updateResult = $this->modelTest->endTest($id);
                    if($updateResult == 1) {
                        return redirect()->back()->with('success','Test has been ended successfully!');
                    } else if($updateResult == 0) {
                        return redirect()->back()->with('info','Test has already been ended!');
                    } else {
                        return redirect()->back()->with('error','Error with ending test!');
                    }
                } else {
                    return redirect()->back()->with('error','Problems with ending test, check if it is started!');
                }
            } else {
                return redirect()->back()->with('error','Test not available!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Ending test | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on ending test!');
        }
    }

}
