<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'id_product';

    public $product_name;
    public $product_sku;
    public $product_slug;
    public $product_image;
    public $brand_id;
    public $default;
    public $country_id;
    public $woocommerce_id;

    public function country()
    {
        return $this->hasOne(Country::class,'id_country','country_id');
    }

    public function brand()
    {
        return $this->hasOne(Brand::class,'id_brand','brand_id');
    }

    public function getAllProduct() {
        $result = DB::table('product')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.id_brand')
            ->whereNull('product.deleted_at')
            ->get();
        return $result;
    }

    public function getAllProductsAjax($searchFilter, $brandFilter, $countryFilter) {
        $result = DB::table('product')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.id_brand')
            ->select('*','product.deleted_at as product_deleted','product.updated_at as product_updated');

        if(!empty($searchFilter)){
            $result->where(function ($query) use($searchFilter) {
                $query->where('product.product_name', 'LIKE', '%'.$searchFilter.'%')
                    ->orWhere('product.slug', 'LIKE', '%'.$searchFilter.'%')
                    ->orWhere('product.sku', 'LIKE', '%'.$searchFilter.'%');
            });
        }

        if(!empty($brandFilter)){
            $result->where('product.brand_id', '=', $brandFilter);
        }
        if(!empty($countryFilter)){
            $result->where('product.country_id', '=', $countryFilter);
        }

        return $result->get();
    }

    public function getProduct($id) {
        $result = DB::table('product')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->where('id_product','=',$id)
            ->whereNull('product.deleted_at')
            ->first();
        return $result;
    }

    public function insertProduct() {
        $result = DB::table('product')
            ->insertGetId([
                'product_name' => $this->product_name,
                'sku' => $this->product_sku,
                'slug' => $this->product_slug,
                'product_image' => $this->product_image,
                'brand_id' => $this->brand_id,
                'is_default_product' => $this->default,
                'country_id' => $this->country_id,
                'woocommerce_product_id' => $this->woocommerce_id,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function editProduct($id) {
        $result = DB::table('product')
            ->where('id_product', '=',$id)
            ->update([
                'product_name' => $this->product_name,
                'sku' => $this->product_sku,
                'slug' => $this->product_slug,
                'product_image' => $this->product_image,
                'brand_id' => $this->brand_id,
                'is_default_product' => $this->default,
                'country_id' => $this->country_id,
                'woocommerce_product_id' => $this->woocommerce_id,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteProduct($id) {
        $result = DB::table('product')
            ->where('id_product', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function restoreProduct($id) {
        $result = DB::table('product')
            ->where('id_product', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'deleted_by' => null,
            ]);
        return $result;
    }

    public function makeProductDefault($product_id, $country_id, $brand_id) {
        DB::beginTransaction();
        try {
            DB::table('product')
                ->where([
                    ['country_id', '=',$country_id],
                    ['brand_id', '=',$brand_id],
                ])
                ->update([
                    'is_default_product' => 0,
                ]);
            DB::table('product')
                ->where('id_product', '=',$product_id)
                ->update([
                    'is_default_product' => 1,
                ]);
            DB::commit();
            return 1;
        } catch (\Exception $e) {
            DB::rollback();
            return 0;
        }
    }

    public function findProduct($slug = null, $brand_id = null, $country_id = null)
    {
        $result = Product::with('country','brand')
                ->whereNull('deleted_at')
                ->where('country_id',$country_id)
                ->where('brand_id',$brand_id);

        if(empty($slug)) {
            $result->where('is_default_product',1);
        } else {
            $result->where('slug','LIKE',$slug);
        }

        if(!$result->exists()) {
            return $this->findProduct(null,$brand_id,$country_id);
        }

        return $result->first();
    }

//    public function getProductBySlugBrandAndCountry($slug = null, $brand_id, $country_id) {
//
//        $result = DB::table('product')
//            ->join('country', 'product.country_id', '=', 'country.id_country')
//            ->join('lander', 'product.id_product', '=', 'lander.product_id')
//            ->join('brand', 'lander.brand_id', '=', 'brand.id_brand')
//            ->join('domain', 'domain.brand_id', '=', 'brand.id_brand')
//            ->whereNull('brand.deleted_at')
//            ->whereNull('product.deleted_at');
//
//        if(empty($slug)){ //find default if slug is null
//            $tempResult = $result->get();
//            foreach($tempResult as $temp) {
//                if($country_id != null) {
//                    if($temp->is_default_product === 1 && $temp->country_id === $country_id) {
//                        $result->where('product.id_product','=',$temp->id_product);
//                        break;
//                    }
//                } else {
//                    if($temp->is_default_product === 1) {
//                        $result->where('product.id_product','=',$temp->id_product);
//                        break;
//                    }
//                }
//            }
//        } else {
//
//            $result->where('slug', 'LIKE', '%'.$slug.'%');
//            if($country_id != null) {
//                $result->where('product.country_id', '=', $country_id); //ne pusti ga
//            }
//        }
//
//        return $result->first();
//    }

    public function groupProductBySku($sku, $country_code = null, $country_id = null) {
        $result = DB::table('product')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.id_brand')
            ->whereNull('product.deleted_at')
            ->whereNull('brand.deleted_at')
            ->where([
                ['product.sku',$sku]
            ]);

        if(!empty($country_code)){
            $result->where('country.country_code', '=', $country_code);
        }

        if(!empty($country_id)){
            $result->where('country.id_country', '=', $country_id);
        }

        return $result->get();
    }
}
