<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->modelCountry = new Country();
        $this->modelCurrency = new Currency();
    }

    public function countryIndex() {
        $this->data['currencies'] = $this->modelCurrency->getAllCurrencies();
        $this->data['countries'] = $this->modelCountry->getAllCountries();
        return view('admin.country',$this->data);
    }

    public function getCountry($id) {
        $singleCountry = $this->modelCountry->getCountry($id);
        if($singleCountry) {
            return json_encode($singleCountry, true);
        }
    }

    public function addCountry(Request $request) {

        $rules = [
            'country_name' => ['required','max:30'],
            'country_shortcode' => ['required','max:3','unique:country,country_code'],
            'currencyIdCountry' => ['required'],
            'enabledCOD' => ['required'],
            'enabledStripe' => ['required'],
            'isCountryActive' => ['required'],
            'shipping_cost' => ['required']
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
            $this->modelCountry->country_name = $request->get('country_name');
            $this->modelCountry->country_code = $request->get('country_shortcode');
            $this->modelCountry->currency_id = $request->get('currencyIdCountry');
            $this->modelCountry->enabledCOD = $request->get('enabledCOD');
            $this->modelCountry->enabledStripe = $request->get('enabledStripe');
            $this->modelCountry->is_active = $request->get('isCountryActive');
            $this->modelCountry->shipping_cost = $request->get('shipping_cost');

            $insertResult = $this->modelCountry->insertCountry();

            if($insertResult) {
                return redirect()->back()->with('success','Country has been added successfully!');
            } else {
                return redirect()->back()->with('error','Error with adding new country to database!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Inserting new country | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new country!');
        }
    }

    public function editCountry(Request $request) {

        $rules = [
            'countryNameModal' => ['required','max:30'],
            'countryShortcodeModal' => ['required','max:3'],
            'currencyIdCountryModal' => ['required'],
            'enabledCODModal' => ['required'],
            'enabledStripeModal' => ['required'],
            'isCountryActiveModal' => ['required'],
            'shippingCostModal' => ['required'],
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
            $id = $request->get('countryIdModal');
            $this->modelCountry->country_name = $request->get('countryNameModal');
            $this->modelCountry->country_code = $request->get('countryShortcodeModal');
            $this->modelCountry->currency_id = $request->get('currencyIdCountryModal');
            $this->modelCountry->enabledCOD = $request->get('enabledCODModal');
            $this->modelCountry->enabledStripe = $request->get('enabledStripeModal');
            $this->modelCountry->is_active = $request->get('isCountryActiveModal');
            $this->modelCountry->shipping_cost = $request->get('shippingCostModal');

            $updateResult = $this->modelCountry->editCountry($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Country has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the country!');
            } else {
                return redirect()->back()->with('error','Error with editing country!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing country | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing country!');
        }
    }

    public function deleteCountry($id) {
        try {
            $deleteResult = $this->modelCountry->deleteCountry($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Country has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting country!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting country | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting country!');
        }
    }

    public function addCurrency(Request $request) {

        $rules = [
            'currency_name' => ['required','max:30'],
            'currency_symbol' => ['required','max:5','unique:currency,currency_symbol'],
            'currency_code' => ['required','max:30'],
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
            $this->modelCurrency->currency = $request->get('currency_name');
            $this->modelCurrency->currency_symbol = $request->get('currency_symbol');
            $this->modelCurrency->currency_code = $request->get('currency_code');

            $insertResult = $this->modelCurrency->insertCurrency();

            if($insertResult) {
                return redirect()->back()->with('success','Currency has been added successfully!');
            } else {
                return redirect()->back()->with('error','Error with adding new currency to database!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Inserting new currency | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new currency!');
        }
    }

    public function getCurrency($id) {
        $singleCurrency = $this->modelCurrency->getCurrency($id);
        if($singleCurrency) {
            return json_encode($singleCurrency, true);
        }
    }

    public function editCurrency(Request $request) {

        $rules = [
            'currencyIdModal' => ['required'],
            'currencyNameModal' => ['required','max:30'],
            'currencySymbolModal' => ['required','max:5'],
            'currencyCodeModal' => ['required','max:5'],
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
            $id = $request->get('currencyIdModal');
            $this->modelCurrency->currency = $request->get('currencyNameModal');
            $this->modelCurrency->currency_symbol = $request->get('currencySymbolModal');
            $this->modelCurrency->currency_code = $request->get('currencyCodeModal');

            $updateResult = $this->modelCurrency->editCurrency($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Currency has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the currency!');
            } else {
                return redirect()->back()->with('error','Error with editing currency!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing currency | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing currency!');
        }
    }

    public function deleteCurrency($id) {
        try {
            $deleteResult = $this->modelCurrency->deleteCurrency($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Currency has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting currency!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting currency | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting currency!');
        }
    }

}
