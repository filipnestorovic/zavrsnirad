<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Variation extends Model
{
    use HasFactory;

    public $variation_name;
    public $variation_description;
    public $lander_id;
    public $checkout_id;
    public $thankyou_id;
    public $product_id;
    public $default;
    public $active;

    public function getAllVariations($searchFilter, $landerFilter, $checkoutFilter, $thankyouFilter, $productFilter, $variation_id = null) {
        $result = DB::table('variation')
            ->leftJoin('variations_prices', function($query) {
                $query->on('variation.id_variation','=','variations_prices.variation_id')
                    ->whereRaw('variations_prices.id_variations_prices IN (select vp.id_variations_prices from variations_prices as vp join `variation` v on v.id_variation = vp.variation_id)');
            })
            ->leftJoin('price', 'variations_prices.price_id', '=', 'price.id_price')
            ->leftJoin('currency', 'price.currency_id', '=', 'currency.id_currency')
            ->leftJoin('product', 'variation.product_id', '=', 'product.id_product')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->leftJoin('lander', 'variation.lander_id', '=', 'lander.id_lander')
            ->leftJoin('checkout', 'variation.checkout_id', '=', 'checkout.id_checkout')
            ->leftJoin('thankyou', 'variation.thankyou_id', '=', 'thankyou.id_thankyou')
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.id_brand')
            ->select('*','variation.deleted_at as variation_deleted','variations_prices.deleted_at as variation_price_deleted')
            ->orderBy('variation.product_id', 'asc')
            ->orderBy('variation.is_variation_default', 'desc')
            ->orderBy('variation_deleted', 'asc')
            ->orderBy('variations_prices.is_default', 'desc')
            ->orderBy('variations_prices.quantity', 'asc');

        if(!empty($variation_id)){
            $result->where('variation.id_variation', '=', $variation_id);
        }

        if(!empty($searchFilter)){
            $result->where(function ($query) use($searchFilter) {
                $query->where('variation.variation_name', 'LIKE', '%'.$searchFilter.'%')
                    ->orWhere('variation.variation_description', 'LIKE', '%'.$searchFilter.'%')
                    ->orWhere('brand.brand_name', 'LIKE', '%'.$searchFilter.'%')
                    ->orWhere('product.product_name', 'LIKE', '%'.$searchFilter.'%');
            });
        }

        if(!empty($landerFilter)){
            $result->where('variation.lander_id', '=', $landerFilter);
        }
        if(!empty($checkoutFilter)){
            $result->where('variation.checkout_id', '=', $checkoutFilter);
        }
        if(!empty($thankyouFilter)){
            $result->where('variation.thankyou_id', '=', $thankyouFilter);
        }
        if(!empty($productFilter)){
            $result->where('variation.product_id', '=', $productFilter);
        }

        return $result->get();
    }

    public function getAvailableVariationsByProductId($id) {
        $result = DB::table('variation')
            ->where('product_id','=',$id)
            ->whereNotIn('id_variation', function($q){
                $q->select('variation_id')->from('tests_variations');
            })
            ->whereNull('variation.deleted_at')
            ->get();
        return $result;
    }

    public function getDefaultVariationByProductId($id) {
        $result = DB::table('variation')
            ->leftJoin('variations_prices', function($query) {
                $query->on('variation.id_variation','=','variations_prices.variation_id')
                    ->whereRaw('variations_prices.id_variations_prices IN (select vp.id_variations_prices from variations_prices as vp join `variation` v on v.id_variation = vp.variation_id)');
            })
            ->leftJoin('price', 'variations_prices.price_id', '=', 'price.id_price')
            ->leftJoin('currency', 'price.currency_id', '=', 'currency.id_currency')
            ->leftJoin('product', 'variation.product_id', '=', 'product.id_product')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->leftJoin('lander', 'variation.lander_id', '=', 'lander.id_lander')
            ->leftJoin('checkout', 'variation.checkout_id', '=', 'checkout.id_checkout')
            ->leftJoin('thankyou', 'variation.thankyou_id', '=', 'thankyou.id_thankyou')
            ->select('*','variation.deleted_at as variation_deleted','variations_prices.deleted_at as variation_price_deleted')
            ->orderBy('variations_prices.is_default', 'desc')
            ->orderBy('variations_prices.quantity', 'asc')
            ->where([
                ['variation.product_id','=',$id],
                ['variation.is_variation_default','=','1']
            ])
            ->whereNull('variation.deleted_at')
            ->get();
        return $result;
    }

    public function insertVariations() {
        $result = DB::table('variation')
            ->insertGetId([
                'variation_name' => $this->variation_name,
                'variation_description' => $this->variation_description,
                'lander_id' => $this->lander_id,
                'checkout_id' => $this->checkout_id,
                'thankyou_id' => $this->thankyou_id,
                'product_id' => $this->product_id,
                'is_variation_default' => $this->default,
                'is_active' => $this->active,
            ]);
        return $result;
    }

    public function editVariation($id) {
        $result = DB::table('variation')
            ->where('id_variation', '=',$id)
            ->update([
                'variation_name' => $this->variation_name,
                'variation_description' => $this->variation_description,
                'lander_id' => $this->lander_id,
                'checkout_id' => $this->checkout_id,
                'thankyou_id' => $this->thankyou_id,
                'is_variation_default' => $this->default,
                'is_active' => $this->active,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function getVariation($id) {
        $result = DB::table('variation')
            ->where('id_variation','=',$id)
            ->first();
        return $result;
    }

    public function makeVariationDefault($product_id, $variation_id) {
        DB::beginTransaction();
        try {
            DB::table('variation')
                ->where('product_id', '=',$product_id)
                ->update([
                    'is_variation_default' => 0,
                ]);
            DB::table('variation')
                ->where('id_variation', '=',$variation_id)
                ->update([
                    'is_variation_default' => 1,
                ]);
            DB::commit();
            return 1;
        } catch (\Exception $e) {
            DB::rollback();
            return 0;
        }
    }

    public function deleteVariation($id) {
        $result = DB::table('variation')
            ->where('id_variation', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function restoreVariation($id) {
        DB::beginTransaction();
        try {
            DB::table('variations_prices')
                ->where('variation_id', '=', $id)
                ->update([
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'deleted_by' => null,
                ]);
            DB::table('variation')
                ->where('id_variation', '=', $id)
                ->update([
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'deleted_by' => null,
                ]);
            DB::commit();
            return 1;
        } catch (\Exception $e) {
            DB::rollback();
            Log::debug('Error restoring variation: '.$e->getMessage());
        }
    }

    public function increaseTestVariationLanderVisits($variation_id, $test_id) {
        $result = DB::table('tests_variations')
            ->leftJoin('test', 'tests_variations.test_id', '=', 'test.id_test')
            ->where([
                ['variation_id','=',$variation_id],
                ['test_id','=',$test_id],
                ['is_active','=',1]
            ])
            ->increment('visits');
        return $result;
    }

    public function checkIfVariationIsInActiveTest($variation_id) {
        $result = DB::table('tests_variations')
            ->leftJoin('test', 'tests_variations.test_id', '=', 'test.id_test')
            ->where([
                ['variation_id','=',$variation_id],
                ['is_active','=',1]
            ])
            ->get();
        return $result;
    }

    public function getVariationByIdAndQuantity($variation_id, $quantity) {
        $result = DB::table('variation')
            ->leftJoin('variations_prices', function($query) {
                $query->on('variation.id_variation','=','variations_prices.variation_id')
                    ->whereRaw('variations_prices.id_variations_prices IN (select vp.id_variations_prices from variations_prices as vp join `variation` v on v.id_variation = vp.variation_id)');
            })
            ->leftJoin('price', 'variations_prices.price_id', '=', 'price.id_price')
            ->leftJoin('currency', 'price.currency_id', '=', 'currency.id_currency')
            ->leftJoin('product', 'variation.product_id', '=', 'product.id_product')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->leftJoin('lander', 'variation.lander_id', '=', 'lander.id_lander')
            ->leftJoin('checkout', 'variation.checkout_id', '=', 'checkout.id_checkout')
            ->leftJoin('thankyou', 'variation.thankyou_id', '=', 'thankyou.id_thankyou')
            ->select('*','variation.deleted_at as variation_deleted','variations_prices.deleted_at as variation_price_deleted');

        $result->where([
            ['variation.id_variation','=',$variation_id],
            ['variations_prices.quantity','=',$quantity],
        ]);

        return $result->first();
    }

    public function getAllOrdersForVariation($variation_id) {
        $result = DB::table('order')
            ->where('variation_id','=',$variation_id)
            ->get();
        return $result;
    }

    public function countOrdersForVariation($variation_id) {
        $result = DB::table('order')
            ->where('variation_id','=',$variation_id)
            ->groupBy('quantity')
            ->selectRaw('count(*) as order_count, quantity')
            ->get();
        return $result;
    }
}
