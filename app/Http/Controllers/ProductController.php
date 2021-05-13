<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Country;
use App\Models\Pixel;
use App\Models\Product;
use App\Models\Review;
use App\Models\Variation;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->modelBrand = new Brand();
        $this->modelCountry = new Country();
        $this->modelProduct = new Product();
        $this->modelReview = new Review();
        $this->modelPixel = new Pixel();
    }

    public function getProductsAjax(Request $request) {
        $searchFilter = $request->get('searchFilter');
        $brandFilter = $request->get('brandFilter');
        $countryFilter = $request->get('countryFilter');

        $currentPage = $request->get('page');

        if($currentPage==null||$currentPage==""||$currentPage<1){
            $currentPage = 1;
        }

        $perPage = 5;

        $productsList = json_decode($this->modelProduct->getAllProductsAjax($searchFilter,$brandFilter,$countryFilter), true);

//        dd($productsList);

        $this->modelVariation = new Variation();
        $this->modelReview = new Review();
        $homeController = new HomeController();
        foreach($productsList as $key => $product) {

            $product_id = $product['id_product'];
            $brand_id = $product['brand_id'];
            $errors = [];

            $defaultVariation = $this->modelVariation->getDefaultVariationByProductId($product_id);
            if(count($defaultVariation) === 0) {
                array_push($errors, 'Default variation');
            }
            $pixels = $homeController->getPixelsForView($product_id, $brand_id);
            if(count($pixels) === 0) {
                array_push($errors, 'Pixel');
            }
            $review = $this->modelReview->getProductReviews($product_id);
            if(count($review) === 0) {
                array_push($errors, 'Reviews');
            }
            $productsList[$key]['errors'] = $errors;
        }

        $paginatedData = $this->prepareDataForTableAjax($request, $productsList,'id_product', true, $perPage, $currentPage, 'productTable');

        if(!$request->ajax()) {
            dd($paginatedData);
        }

        return $paginatedData;
    }

    public function checkProductRequirements() {

    }

    public function productIndex() {
        $this->data['countriesDdl'] = $this->modelCountry->getAllCountries();
        $this->data['brandsDdl'] = $this->modelBrand->getAllBrands();
        $this->data['products'] = $this->modelProduct->getAllProduct();
        $this->data['pixels'] = $this->modelPixel->getAllPixels();
        return view('admin.product',$this->data);
    }

    public function getProduct($id) {
        $singleProduct = $this->modelProduct->getProduct($id);
        if($singleProduct != null) {
            return json_encode($singleProduct, true);
        }
    }

    public function addProduct(Request $request) {

        $rules = [
            'product_name' => ['required','max:100'],
            'product_sku' => ['required','max:100'],
            'product_slug' => ['required','max:30'],
            'brandDdl' => ['required'],
            'countryDdl' => ['required'],
            'product_woocommerce_id' => ['nullable','integer'],
            'product_image' => ['required','image'],
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

            $productBrand = $this->modelBrand->getBrand($request->get('brandDdl'));

            try {
                // Check if a profile image has been uploaded
                if ($request->hasFile('product_image')) {
                    // Get image file
                    $image = $request->file('product_image');
                    // Make a image name based on user name and current timestamp
                    $name = pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME);
                    // Define folder path
                    $folder = strtolower($productBrand->brand_name).'Files/'.$request->get('product_slug').'/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name .'.'.$image->getClientOriginalExtension();
                    // Upload image
                    $uploadResult = $this->uploadOne($image, $folder, 'logo', $name);
                }
            } catch (\Exception $exception) {
                Log::error("Error: Uploading product image | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Problem with uploading product image!');
            }

            if($uploadResult != null) {
                $this->modelProduct->product_name = $request->get('product_name');
                $this->modelProduct->product_sku = $request->get('product_sku');
                $this->modelProduct->product_slug = $request->get('product_slug');
                $this->modelProduct->brand_id = $request->get('brandDdl');
                $this->modelProduct->default = $request->get('defaultProduct');
                $this->modelProduct->country_id = $request->get('countryDdl');
                $this->modelProduct->woocommerce_id = $request->get('product_woocommerce_id');
                $this->modelProduct->product_image = $filePath;

                try {
                    $insertProduct = $this->modelProduct->insertProduct();
                } catch (\Exception $exception) {
                    Log::error("Error: Inserting new product | Exception: " . $exception->getMessage());
                    return redirect()->back()->with('error','Error on inserting new product in DB!' . $exception->getMessage());
                }

                $insertResult = 0;
                if($insertProduct && $this->modelProduct->default==="1") {
                    try {
                        $insertResult = $this->modelProduct->makeProductDefault($insertProduct, $this->modelProduct->country_id);
                    } catch (\Exception $exception) {
                        Log::error("Error: Making product default | Exception: " . $exception->getMessage());
                        return redirect()->route('productIndex')->with('error','Error on making product default!');
                    }
                }

                if($insertResult === 1 || $insertResult === 0) {
                    return redirect()->route('productIndex')->with('success','Product has been added successfully!');
                }
            }

        } catch (\Exception $exception) {
            Log::error("Error: Inserting new product | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new product!' . $exception->getMessage());
        }
    }

    public function editProduct(Request $request) {

        $rules = [
            'productNameModal' => ['required','max:100'],
            'productSkuModal' => ['required','max:100'],
            'productSlugModal' => ['required'],
            'brandDdlModal' => ['required'],
            'countryDdlModal' => ['required'],
            'woocommerceIdModal' => ['nullable','integer'],
            'productImageModal' => ['nullable','image'],
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

            $productBrand = $this->modelBrand->getBrand($request->get('brandDdlModal'));

            $uploadResult = null;
            $filePath = null;

            try {
                // Check if a profile image has been uploaded
                if ($request->hasFile('productImageModal')) {
                    // Get image file
                    $image = $request->file('productImageModal');
                    // Make a image name based on user name and current timestamp
                    $name = pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME);
                    // Define folder path
                    $folder = strtolower($productBrand->brand_name).'Files/'.$request->get('productSlugModal').'/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name .'.'.$image->getClientOriginalExtension();
                    // Upload image
                    $uploadResult = $this->uploadOne($image, $folder, 'logo', $name);

                    if($uploadResult != null) {
                        $this->modelProduct->product_image = $filePath;
                    }
                } else {
                    $this->modelProduct->product_image = $request->get('imageHiddenModal');
                }
            } catch (\Exception $exception) {
                Log::error("Error: Uploading product image | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Problem with uploading product image!');
            }

            $id = $request->get('productIdModal');
            $this->modelProduct->product_name = $request->get('productNameModal');
            $this->modelProduct->product_sku = $request->get('productSkuModal');
            $this->modelProduct->product_slug = $request->get('productSlugModal');
            $this->modelProduct->brand_id = $request->get('brandDdlModal');
            $this->modelProduct->default = $request->get('defaultProductModal');
            $this->modelProduct->country_id = $request->get('countryDdlModal');
            $this->modelProduct->woocommerce_id = $request->get('woocommerceIdModal');

            try {
                $updateProduct = $this->modelProduct->editProduct($id);
            } catch (\Exception $exception) {
                Log::error("Error: Editing product - DB | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Error on editing product in DB!' . $exception->getMessage());
            }

            $updateDefault = 0;
            if($updateProduct === 1 && $this->modelProduct->default === "1") {
                try {
                    $updateDefault = $this->modelProduct->makeProductDefault($id, $this->modelProduct->country_id);
                } catch (\Exception $exception) {
                    Log::error("Error: Making product default | Exception: " . $exception->getMessage());
                    return redirect()->route('productIndex')->with('error','Error on making product default!');
                }
            }

            if($updateProduct == 1 || $updateDefault === 1) {
                return redirect()->back()->with('success','Product has been edited successfully!');
            } else if($updateProduct == 0 && $updateDefault == 0) {
                return redirect()->back()->with('info','No changes have been made to the product!');
            } else {
                return redirect()->back()->with('error','Error with editing product!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing product | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing product! - ' . $exception->getMessage());
        }
    }

    public function deleteProduct($id) {
        try {
            $deleteResult = $this->modelProduct->deleteProduct($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Product has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting product!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting product | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting product!');
        }
    }

    public function restoreProduct($id) {
        try {
            $restoreResult = $this->modelProduct->restoreProduct($id);
            if($restoreResult) {
                return redirect()->back()->with('success','Product has been restored successfully!');
            } else {
                return redirect()->back()->with('error','Error with restoring product!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Restoring product | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error with restoring product!');
        }
    }

    public function productReviews($id) {
        $this->data['reviews'] = $this->modelReview->getProductReviews($id);
        $this->data['product'] = $this->modelProduct->getProduct($id);
        return view('admin.review',$this->data);
    }

    public function getReview($id) {
        $singleReview = $this->modelReview->getReview($id);
        if($singleReview != null) {
            return json_encode($singleReview, true);
        }
    }

    public function addReview(Request $request) {

        $rules = [
            'review_name' => ['required','max:50'],
            'review_text' => ['required','max:255'],
            'reviewStars' => ['required'],
            'productId' => ['required'],
            'review_image' => ['required','image'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
            'review_image.image' => 'Uploaded file must be an image',
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
                if ($request->hasFile('review_image')) {
                    // Get image file
                    $image = $request->file('review_image');
                    // Make a image name based on user name and current timestamp
                    $name = 'reviewImage_'.time();
                    // Define folder path
                    $folder = 'shared_files/review_images/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                    // Upload image
                    $uploadResult = $this->uploadOne($image, $folder, 'logo', $name);
                }
            } catch (\Exception $exception) {
                Log::error("Error: Uploading review image | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Problem with uploading review image!');
            }

            if($uploadResult != null) {
                $this->modelReview->review_name = $request->get('review_name');
                $this->modelReview->review_text = $request->get('review_text');
                $this->modelReview->review_stars = $request->get('reviewStars');
                $this->modelReview->product_id = $request->get('productId');
                $this->modelReview->review_image = $filePath;

                $insertResult = $this->modelReview->insertReview();

                if($insertResult) {
                    return redirect()->back()->with('success','Review has been added successfully!');
                }
            }

        } catch (\Exception $exception) {
            Log::error("Error: Inserting new product review - Product: " . $this->modelReview->product_id . "| Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new product review!' . $exception->getMessage());
        }
    }

    public function editReview(Request $request) {

        $rules = [
            'reviewNameModal' => ['required','max:50'],
            'reviewTextModal' => ['required','max:255'],
            'reviewStarsModal' => ['required'],
            'reviewIdModal' => ['required'],
            'reviewImageModal' => ['nullable','image'],
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
                if ($request->hasFile('reviewImageModal')) {
                    // Get image file
                    $image = $request->file('reviewImageModal');
                    // Make a image name based on user name and current timestamp
                    $name = 'reviewImage_'.time();
                    // Define folder path
                    $folder = 'shared_files/review_images/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                    // Upload image
                    $uploadResult = $this->uploadOne($image, $folder, 'logo', $name);

                    if($uploadResult != null) {
                        $this->modelReview->review_image = $filePath;
                    }
                } else {
                    $this->modelReview->review_image = $request->get('imageHiddenModal');
                }
            } catch (\Exception $exception) {
                Log::error("Error: Uploading review image | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Problem with uploading review image!');
            }

            $id = $request->get('reviewIdModal');
            $this->modelReview->review_name = $request->get('reviewNameModal');
            $this->modelReview->review_stars = $request->get('reviewStarsModal');
            $this->modelReview->review_text = $request->get('reviewTextModal');

            $updateResult = $this->modelReview->editReview($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Review has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the review!');
            } else {
                return redirect()->back()->with('error','Error with editing review!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing review | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing review! - ' . $exception->getMessage());
        }
    }

    public function deleteReview($id) {
        try {
            $deleteResult = $this->modelReview->deleteReview($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Review has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting review!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting review | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting review!');
        }
    }

}
