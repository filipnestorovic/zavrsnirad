<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Country;
use App\Models\Product;
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

        $this->modelVariation = new Variation();

        foreach($productsList as $key => $product) {
            $product_id = $product['id_product'];
            $productData = $this->modelVariation->getDataForProductPreview($product_id);
            if($productData) {
                $urlHost = parse_url($productData->domain_url)['host'];

                $urlPreview = "https://".$productData->country_code.".".$urlHost."/".$productData->slug;

                $productsList[$key]['urlPreview'] = $urlPreview;
            }
        }

        $paginatedData = $this->prepareDataForTableAjax($request, $productsList,'id_product', true, $perPage, $currentPage, 'productTable');

        if(!$request->ajax()) {
            dd($paginatedData);
        }

        return $paginatedData;
    }

    public function productIndex() {
        $this->data['countriesDdl'] = $this->modelCountry->getAllCountries();
        $this->data['brandsDdl'] = $this->modelBrand->getAllBrands();
        $this->data['products'] = $this->modelProduct->getAllProduct();

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
                if ($request->hasFile('product_image')) {
                    $image = $request->file('product_image');
                    $name = pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME);
                    $folder = strtolower($productBrand->brand_name).'Files/'.$request->get('product_slug').'/';
                    $filePath = $folder . $name .'.'.$image->getClientOriginalExtension();
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
                $this->modelProduct->default = $request->get('defaultProduct');
                $this->modelProduct->woocommerce_id = $request->get('product_woocommerce_id');
                $this->modelProduct->product_image = $filePath;

                $this->modelProduct->brand_id = $request->get('brandDdl');
                $this->modelProduct->country_id = $request->get('countryDdl');

                try {
                    $insertProduct = $this->modelProduct->insertProduct();
                } catch (\Exception $exception) {
                    Log::error("Error: Inserting new product | Exception: " . $exception->getMessage());
                    return redirect()->back()->with('error','Error on inserting new product in DB!' . $exception->getMessage());
                }

                $insertResult = 0;
                if($insertProduct && $this->modelProduct->default==="1") {
                    try {
                        $insertResult = $this->modelProduct->makeProductDefault($insertProduct, $this->modelProduct->country_id, $this->modelProduct->brand_id);
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
                if ($request->hasFile('productImageModal')) {
                    $image = $request->file('productImageModal');
                    $name = pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME);
                    $folder = strtolower($productBrand->brand_name).'Files/'.$request->get('productSlugModal').'/';
                    $filePath = $folder . $name .'.'.$image->getClientOriginalExtension();
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
            $this->modelProduct->default = $request->get('defaultProductModal');
            $this->modelProduct->woocommerce_id = $request->get('woocommerceIdModal');

            $this->modelProduct->brand_id = $request->get('brandDdlModal');
            $this->modelProduct->country_id = $request->get('countryDdlModal');

            try {
                $updateProduct = $this->modelProduct->editProduct($id);
            } catch (\Exception $exception) {
                Log::error("Error: Editing product - DB | Exception: " . $exception->getMessage());
                return redirect()->back()->with('error','Error on editing product in DB!' . $exception->getMessage());
            }

            $updateDefault = 0;
            if($updateProduct === 1 && $this->modelProduct->default === "1") {
                try {
                    $updateDefault = $this->modelProduct->makeProductDefault($id, $this->modelProduct->country_id, $this->modelProduct->brand_id);
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
}
