<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Checkout;
use App\Models\Country;
use App\Models\Lander;
use App\Models\Product;
use App\Models\Thankyou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct() {
        $this->modelLander = new Lander();
        $this->modelCheckout = new Checkout();
        $this->modelThankyou = new Thankyou();
        $this->modelBrand = new Brand();
        $this->modelProduct = new Product();
        $this->modelCountry = new Country();
    }

    //lander

    public function getLandersAjax(Request $request) {
        $searchFilter = $request->get('searchFilter');
        $brandFilter = $request->get('brandFilter');
        $productFilter = $request->get('productFilter');
        $countryFilter = $request->get('countryFilter');

        $currentPage = $request->get('page');
        if($currentPage==null||$currentPage==""||$currentPage<1){
            $currentPage = 1;
        }
        $perPage = 10;

        $landerList = json_decode($this->modelLander->getAllLandersAjax($searchFilter,$brandFilter,$productFilter, $countryFilter), true);

        $paginatedData = $this->prepareDataForTableAjax($request, $landerList,'id_lander', true, $perPage, $currentPage, 'landerTable');

        if(!$request->ajax()) {
            dd($paginatedData);
        }

        return $paginatedData;
    }

    public function landerIndex() {
        $this->data['landers'] = $this->modelLander->getAllLanders();
        $this->data['brands'] = $this->modelBrand->getAllBrands();
        $this->data['products'] = $this->modelProduct->getAllProduct();
        $this->data['countries'] = $this->modelCountry->getAllCountries();
        return view('admin.lander', $this->data);
    }

    public function getLander($id) {
        $singleLander = $this->modelLander->getSingleLander($id);
        if($singleLander) {
            return json_encode($singleLander, true);
        }
    }

    public function addLander(Request $request) {

        $rules = [
            'lander_name' => ['required','max:50'],
            'brandIdLander' => ['required'],
            'productIdLander' => ['required'],
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
            $brand_id = $request->get('brandIdLander');
            $product_id = $request->get('productIdLander');
            $lander_name = $request->get('lander_name');

            $lander_name = preg_replace('/\s*/', '', $lander_name);
            $lander_name = strtolower($lander_name);

            $singleBrand = $this->modelBrand->getBrand($brand_id);
            $singleProduct = $this->modelProduct->getProduct($product_id);

            $brand_name = strtolower(preg_replace('/\s*/', '', $singleBrand->brand_name));
            $country = $singleProduct->country_code;

            $view = 'lander.'.$brand_name.'.'.$country.'.'.$lander_name;

            $checkUrl = $this->modelLander->checkIfLanderAlreadyExist($view);

            if($checkUrl) {
                return redirect()->back()->with('error','Lander already exist, please change lander name!');
            }

            if (!View::exists($view)) {
                return redirect()->back()->with('error','This view does not exists, please create it first!');
            }

        } catch (\Exception $exception) {
            Log::error("Error: Checking if lander view exists | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on checking if lander view exists!');
        }

        try {
            $this->modelLander->lander_name = $request->get('lander_name');
            $this->modelLander->lander_path = $view;
            $this->modelLander->brand_id = $brand_id;
            $this->modelLander->product_id = $product_id;

            $insertResult = $this->modelLander->insertLander();

            if($insertResult) {
                return redirect()->back()->with('success','Lander has been added successfully!');
            } else {
                return redirect()->back()->with('error','Error with adding new lander to database!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Inserting new lander | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new lander!');
        }
    }

    public function editLander(Request $request) {

        $rules = [
            'landerNameModal' => ['required','max:50'],
            'brandIdModal' => ['required'],
            'productIdModal' => ['required'],
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
            $id = $request->get('landerIdModal');
            $brand_id = $request->get('brandIdModal');
            $product_id = $request->get('productIdModal');
            $lander_name = $request->get('landerNameModal');

            $singleBrand = $this->modelBrand->getBrand($brand_id);
            $singleProduct = $this->modelProduct->getProduct($product_id);

            $brand_name = strtolower(preg_replace('/\s*/', '', $singleBrand->brand_name));
            $country = $singleProduct->country_code;

            $view = 'lander.'.$brand_name.'.'.$country.'.'.$lander_name;

            $checkUrl = $this->modelLander->checkIfLanderAlreadyExist($view);

            if($checkUrl) {
                if($checkUrl->id_lander != (int)$id) {
                    return redirect()->back()->with('error','Lander already exist, please change lander name!');
                }
            }

            if (!View::exists($view)) {
                return redirect()->back()->with('error','This view does not exists, please create it first!');
            }

        } catch (\Exception $exception) {
            Log::error("Error: Checking if lander view exists | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on checking if lander view exists!');
        }

        try {
            $this->modelLander->lander_name = $request->get('landerNameModal');
            $this->modelLander->lander_path = $view;
            $this->modelLander->brand_id = $brand_id;
            $this->modelLander->product_id = $product_id;

            $updateResult = $this->modelLander->editLander($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Lander has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the lander!');
            } else {
                return redirect()->back()->with('error','Error with editing lander!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing lander | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing lander!');
        }
    }

    public function deleteLander($id) {
        try {
            $deleteResult = $this->modelLander->deleteLander($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Lander has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting lander!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting lander | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting lander!');
        }
    }

    public function restoreLander($id){
        try {
            $restoreResult = $this->modelLander->restoreLander($id);
            if($restoreResult) {
                return redirect()->back()->with('success','Lander has been restored successfully!');
            } else {
                return redirect()->back()->with('error','Error with restoring lander!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Restoring lander | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error with restoring lander!');
        }
    }

    //checkout

    public function checkoutIndex() {
        $this->data['countries'] = $this->modelCountry->getAllCountries();
        $this->data['checkouts'] = $this->modelCheckout->getAllCheckouts();
        return view('admin.checkout', $this->data);
    }

    public function getCheckout($id) {
        $singleCheckout = $this->modelCheckout->getSingleCheckout($id);
        if($singleCheckout) {
            return json_encode($singleCheckout, true);
        }
    }

    public function addCheckout(Request $request) {

        $rules = [
            'checkout_name' => ['required','max:50'],
            'countryIdCheckout' => ['required'],
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
            $country_id = $request->get('countryIdCheckout');
            $checkout_name = $request->get('checkout_name');

            $singleCountry = $this->modelCountry->getCountry($country_id);
            $country_code = $singleCountry->country_code;

            $checkout_slug = strtolower(preg_replace('/\s*/', '', $checkout_name));
            $view = 'checkout.'.$country_code.'.'.$checkout_slug;

            if (!View::exists($view)) {
                return redirect()->back()->with('error','This view does not exists, please create it first!');
            }

        } catch (\Exception $exception) {
            Log::error("Error: Checking if checkout view exists | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on checking if checkout view exists!');
        }

        try {
            $this->modelCheckout->checkout_name = $checkout_name;
            $this->modelCheckout->checkout_path = $view;
            $this->modelCheckout->country_id = $country_id;

            $insertResult = $this->modelCheckout->insertCheckout();

            if($insertResult) {
                return redirect()->back()->with('success','Checkout page has been added successfully!');
            } else {
                return redirect()->back()->with('error','Error with adding new checkout page to database!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Inserting new checkout page | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new checkout page!');
        }
    }

    public function editCheckout(Request $request) {

        $rules = [
            'checkoutNameModal' => ['required','max:50'],
            'countryIdModal' => ['required'],
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
            $country_id = $request->get('countryIdModal');
            $checkout_name = $request->get('checkoutNameModal');

            $singleCountry = $this->modelCountry->getCountry($country_id);
            $country_code = $singleCountry->country_code;

            $checkout_slug = strtolower(preg_replace('/\s*/', '', $checkout_name));
            $view = 'checkout.'.$country_code.'.'.$checkout_slug;

            if (!View::exists($view)) {
                return redirect()->back()->with('error','This view does not exists, please create it first!');
            }

        } catch (\Exception $exception) {
            Log::error("Error: Checking if checkout view exists | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on checking if checkout view exists!');
        }

        try {
            $id = $request->get('checkoutIdModal');
            $this->modelCheckout->checkout_name = $checkout_name;
            $this->modelCheckout->checkout_path = $view;
            $this->modelCheckout->country_id = $country_id;

            $updateResult = $this->modelCheckout->editCheckout($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Checkout page has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the checkout page!');
            } else {
                return redirect()->back()->with('error','Error with editing checkout page!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing checkout page | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing checkout page!');
        }
    }

    public function deleteCheckout($id) {
        try {
            $deleteResult = $this->modelCheckout->deleteCheckout($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Checkout page has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting checkout page!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting checkout page | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting checkout page!');
        }
    }

    //thankyou

    public function thankyouIndex() {
        $this->data['countries'] = $this->modelCountry->getAllCountries();
        $this->data['thankyous'] = $this->modelThankyou->getAllThankyous();
        return view('admin.thankyou', $this->data);
    }

    public function getThankyou($id) {
        $singleThankyou = $this->modelThankyou->getSingleThankyou($id);
        if($singleThankyou) {
            return json_encode($singleThankyou, true);
        }
    }

    public function addThankyou(Request $request) {

        $rules = [
            'thankyou_name' => ['required','max:50'],
            'countryIdThankyou' => ['required'],
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
            $country_id = $request->get('countryIdThankyou');
            $thankyou_name = $request->get('thankyou_name');

            $singleCountry = $this->modelCountry->getCountry($country_id);
            $country_code = $singleCountry->country_code;

            $thankyou_slug = strtolower(preg_replace('/\s*/', '', $thankyou_name));

            $view = 'thankyou.'.$country_code.'.'.$thankyou_slug;

            if (!View::exists($view)) {
                return redirect()->back()->with('error','This view does not exists, please create it first!');
            }

        } catch (\Exception $exception) {
            Log::error("Error: Checking if thankyou view exists | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on checking if thankyou view exists!');
        }

        try {
            $this->modelThankyou->thankyou_name = $thankyou_name;
            $this->modelThankyou->thankyou_path = $view;
            $this->modelThankyou->country_id = $country_id;

            $insertResult = $this->modelThankyou->insertThankyou();

            if($insertResult) {
                return redirect()->back()->with('success','Thankyou page has been added successfully!');
            } else {
                return redirect()->back()->with('error','Error with adding new thankyou page to database!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Inserting new thankyou page | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new thankyou page!');
        }
    }

    public function editThankyou(Request $request) {

        $rules = [
            'thankyouNameModal' => ['required','max:50'],
            'countryIdModal' => ['required'],
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
            $country_id = $request->get('countryIdModal');
            $thankyou_name = $request->get('thankyouNameModal');

            $singleCountry = $this->modelCountry->getCountry($country_id);
            $country_code = $singleCountry->country_code;

            $thankyou_slug = strtolower(preg_replace('/\s*/', '', $thankyou_name));

            $view = 'thankyou.'.$country_code.'.'.$thankyou_slug;

            if (!View::exists($view)) {
                return redirect()->back()->with('error','This view does not exists, please create it first!');
            }

        } catch (\Exception $exception) {
            Log::error("Error: Checking if thankyou view exists | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on checking if thankyou view exists!');
        }

        try {
            $id = $request->get('thankyouIdModal');
            $this->modelThankyou->thankyou_name = $thankyou_name;
            $this->modelThankyou->thankyou_path = $view;
            $this->modelThankyou->country_id = $country_id;

            $updateResult = $this->modelThankyou->editThankyou($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Thankyou page has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the thankyou page!');
            } else {
                return redirect()->back()->with('error','Error with editing thankyou page!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing thankyou page | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing thankyou page!');
        }
    }

    public function deleteThankyou($id) {
        try {
            $deleteResult = $this->modelThankyou->deleteThankyou($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Thankyou page has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting thankyou page!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting thankyou page | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting thankyou page!');
        }
    }

}
