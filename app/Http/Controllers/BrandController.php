<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Country;
use App\Models\Domain;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class BrandController extends Controller
{
    use UploadTrait;

    private $imageTrait;

    public function __construct()
    {
        $this->modelBrand = new Brand();
        $this->modelCountry = new Country();
        $this->modelProduct = new Product();
        $this->modelDomain = new Domain();
    }

    public function brandIndex() {
        $this->data['countriesDdl'] = $this->modelCountry->getAllCountries();
        $this->data['brands'] = $this->modelBrand->getAllBrands();
        $this->data['domains'] = $this->modelDomain->getAllDomains();

        return view('admin.brand',$this->data);
    }

    public function getBrand($id) {
        $singleBrand = $this->modelBrand->getBrand($id);
        if($singleBrand != null) {
            return json_encode($singleBrand, true);
        }
    }

    public function addBrand(Request $request) {

        $rules = [
            'brand_name' => ['required','max:30'],
            'brand_logo' => ['required','image'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
            'brand_logo.image' => 'Uploaded file must be an image',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {

            $uploadResult = null;
            $filePath = null;

            try {
                if ($request->hasFile('brand_logo')) {
                    $image = $request->file('brand_logo');
                    $name = $request->get('brand_name').'_logo';
                    $folder = strtolower($request->get('brand_name')).'Files/shared_files/';
                    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                    $uploadResult = $this->uploadOne($image, $folder, 'logo', $name);
                }
            } catch (\Exception $exception) {
                Log::error("Error: Uploading brand logo image | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Problem with uploading logo image!');
            }

            if($uploadResult != null) {
                $this->modelBrand->brand_name = $request->get('brand_name');
                $this->modelBrand->logo_url = $filePath;

                $insertResult = $this->modelBrand->insertBrand();

                if($insertResult) {
                    return redirect()->back()->with('success','Brand has been added successfully!');
                }
            }

        } catch (\Exception $exception) {
            Log::error("Error: Inserting new brand | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new brand!');
        }
    }

    public function editBrand(Request $request) {

        $rules = [
            'brandNameModal' => ['required','max:30'],
            'brandLogoModal' => ['image','nullable'],
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

            $uploadResult = null;
            $filePath = null;

            try {
                if ($request->hasFile('brandLogoModal')) {
                    $image = $request->file('brandLogoModal');
                    $name = $request->get('brandNameModal').'_logo';
                    $folder = strtolower($request->get('brandNameModal')).'Files/shared_files/';
                    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                    $uploadResult = $this->uploadOne($image, $folder, 'logo', $name);

                    if($uploadResult != null) {
                        $this->modelBrand->logo_url = $filePath;
                    }
                } else {
                    $this->modelBrand->logo_url = $request->get('logoHiddenModal');
                }
            } catch (\Exception $exception) {
                Log::error("Error: Uploading brand logo image | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Problem with uploading logo image!');
            }

            $id = $request->get('brandIdModal');
            $this->modelBrand->brand_name = $request->get('brandNameModal');

            $updateResult = $this->modelBrand->editBrand($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Brand has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the brand!');
            } else {
                return redirect()->back()->with('error','Error with editing brand!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing brand | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing brand! - ' . $exception->getMessage());
        }
    }

    public function deleteBrand($id) {
        try {
            $deleteResult = $this->modelBrand->deleteBrand($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Brand has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting brand!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting brand | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting brand!');
        }
    }

}
