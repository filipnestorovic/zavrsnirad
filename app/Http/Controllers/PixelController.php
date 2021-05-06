<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Pixel;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PixelController extends Controller
{
    //

    public function __construct()
    {
//        $this->middleware('countryCheck');
        $this->modelPixel = new Pixel();
        $this->modelBrand = new Brand();
        $this->modelProduct = new Product();
    }

    public function getPixels() {
        $pixels = $this->modelPixel->getAllPixels();
        if(count($pixels)>0) {
            return json_encode($pixels, true);
        }
    }

    public function getPixel($id) {
        $singlePixel = $this->modelPixel->getPixel($id);
        if($singlePixel != null) {
            return json_encode($singlePixel, true);
        }
    }

    public function addPixel(Request $request) {
        $rules = [
            'pixel_id' => ['required','max:30','unique:pixel,id_pixel'],
            'pixel_name' => ['required','max:50'],
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
            $this->modelPixel->pixel_id = $request->get('pixel_id');
            $this->modelPixel->pixel_name = $request->get('pixel_name');

            $insertResult = $this->modelPixel->insertPixel();

            if($insertResult) {
                return redirect()->back()->with('success','Pixel has been added successfully!');
            } else {
                return redirect()->back()->with('error','Error with adding new pixel to database!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Inserting new pixel | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new pixel!' . $exception->getMessage() );
        }
    }

    public function editPixel(Request $request) {
        $rules = [
            'pixelIdModal' => ['required','max:30'],
            'pixelNameModal' => ['required','max:50'],
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
            $id = $request->get('pixelIdHiddenModal');
            $this->modelPixel->pixel_id = $request->get('pixelIdModal');
            $this->modelPixel->pixel_name = $request->get('pixelNameModal');

            $updateResult = $this->modelPixel->editPixel($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Pixel has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the pixel!');
            } else {
                return redirect()->back()->with('error','Error with editing pixel!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing pixel | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing pixel!');
        }
    }

    public function deletePixel(Request $request) {
        $id = $request->get('pixelIdHidden');
        try {
            $deleteResult = $this->modelPixel->deletePixel($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Pixel has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting pixel!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting pixel | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting pixel!');
        }
    }

    public function checkIfBrandIsConnected($brand_id,$pixel_id) {
        $checkResult = $this->modelPixel->checkIfBrandIsConnected($brand_id,$pixel_id);

        if(count($checkResult)>0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function connectBrandPixel(Request $request) {

        $rules = [
            'brandDdl' => ['required'],
            'pixelDdl' => ['required'],
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

            $brand_id = $request->get('brandDdl');
            $pixel_id = $request->get('pixelDdl');

            if($this->checkIfBrandIsConnected($brand_id,$pixel_id)) {
                return redirect()->back()->with('error','This pixel has already been connected!');
            }

            $this->modelPixel->brand_id = $brand_id;
            $this->modelPixel->pixel_id = $pixel_id;

            $insertResult = $this->modelPixel->connectBrandPixel();

            if($insertResult) {
                return redirect()->back()->with('success','Connected successfully!');
            } else {
                return redirect()->back()->with('error','Error with connecting pixel and brand!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Connecting pixel and brand | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on connecting pixel and brand!');
        }
    }

    public function disconnectBrandPixel($id) {
        try {
            $deleteResult = $this->modelPixel->disconnectBrandPixel($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Pixel has been disconnected successfully!');
            } else {
                return redirect()->back()->with('error','Error with disconnecting pixel!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Disconnecting pixel | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on disconnecting pixel!');
        }
    }

    public function disconnectProductPixel($id) {
        try {
            $deleteResult = $this->modelPixel->disconnectProductPixel($id);

            return $deleteResult;

        } catch (\Exception $exception) {
            Log::error("Error: Disconnecting pixel | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on disconnecting pixel!');
        }
    }

    public function getBrandPixelForSingleProduct($id) {

        $brand = $this->modelProduct->getProductBrand($id);

        $brandsList = json_decode($this->modelBrand->getAllBrandsWithPixels(), true);

        $groupedBrands = $this->getMultipleItemsFromQuery($brandsList,'id_brand');

        if($groupedBrands[$brand->id_brand] != null) {
            return json_encode($groupedBrands[$brand->id_brand], true);
        }
    }

    public function getProductPixel($id) {
        $productPixel = $this->modelPixel->getProductPixel($id);

        if(count($productPixel)>0) {
            return json_encode($productPixel, true);
        }
    }

    public function checkIfProductIsConnected($product_id,$pixel_id) {
        $checkResult = $this->modelPixel->checkIfProductIsConnected($product_id,$pixel_id);

        if(count($checkResult)>0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function connectProductPixel(Request $request) {

        $selectedPixel = $request->get('pixelDdlModal');

        $data = $request->except('_token');

        foreach($data as $key => $value) {
            if(str_contains($key, 'brandHiddenPixel')) {
                if($value == $selectedPixel) {
                    return redirect()->back()->with('error','This pixel has already been connected to the brand!');
                }
            }
        }

        try {
            $product_id = $request->get('productIdHidden');
            $pixel_id = $request->get('pixelDdlModal');

            if($this->checkIfProductIsConnected($product_id,$pixel_id)) {
                return redirect()->back()->with('error','This pixel has already been connected to the product!');
            }

            $this->modelPixel->product_id = $product_id;
            $this->modelPixel->pixel_id = $pixel_id;

            $insertResult = $this->modelPixel->connectProductPixel();

            if($insertResult) {
                return redirect()->back()->with('success','Connected successfully!');
            } else {
                return redirect()->back()->with('error','Error with connecting pixel and product!');
            }

        } catch (\Exception $exception) {
            Log::error("Error: Connecting pixel and product | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on connecting pixel and product!');
        }

    }

}
