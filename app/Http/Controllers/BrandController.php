<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Country;
use App\Models\Pixel;
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
        $this->modelPixel = new Pixel();
        $this->modelProduct = new Product();
    }

    public function brandIndex(Request $request) {

        $brandsList = json_decode($this->modelBrand->getAllBrandsWithPixels(), true);

        $groupedBrands = $this->getMultipleItemsFromQuery($brandsList,'id_brand');

        $this->data['pixelsDdl'] = $this->modelPixel->getAllPixels();
        $this->data['countriesDdl'] = $this->modelCountry->getAllCountries();
        $this->data['brands'] = $this->modelBrand->getAllBrands();
        $this->data['brandsPixels'] = $groupedBrands;
        return view('admin.brand',$this->data);
    }

    public function getBrand($id) {
        $singleBrand = $this->modelBrand->getBrand($id);

        $products = $this->modelProduct->getAllProductsAjax(null,$id,null);
        $singleBrand->products = $products;
        if($singleBrand != null) {
            return json_encode($singleBrand, true);
        }
    }

    public function addBrand(Request $request) {

        $rules = [
            'brand_name' => ['required','max:30'],
            'brand_url' => ['required','unique:brand,brand_url'],
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
                // Check if a profile image has been uploaded
                if ($request->hasFile('brand_logo')) {
                    // Get image file
                    $image = $request->file('brand_logo');
                    // Make a image name based on user name and current timestamp
                    $name = $request->get('brand_name').'_logo';
                    // Define folder path
                    $folder = strtolower($request->get('brand_name')).'Files/shared_files/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                    // Upload image
                    $uploadResult = $this->uploadOne($image, $folder, 'logo', $name);
                }
            } catch (\Exception $exception) {
                Log::error("Error: Uploading brand logo image | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Problem with uploading logo image!');
            }

            if($uploadResult != null) {
                $this->modelBrand->brand_name = $request->get('brand_name');
                $this->modelBrand->brand_url = $request->get('brand_url');
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
            'brandUrlModal' => ['required'],
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
                // Check if a profile image has been uploaded
                if ($request->hasFile('brandLogoModal')) {
                    // Get image file
                    $image = $request->file('brandLogoModal');
                    // Make a image name based on user name and current timestamp
                    $name = $request->get('brandNameModal').'_logo';
                    // Define folder path
                    $folder = strtolower($request->get('brandNameModal')).'Files/shared_files/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                    // Upload image
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
            $this->modelBrand->brand_url = $request->get('brandUrlModal');

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
