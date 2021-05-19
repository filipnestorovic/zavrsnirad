<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Price extends Model
{
    use HasFactory;

    public $amount;
    public $quantity;
    public $is_default;
    public $is_free_shipping;
    public $currency_id;
    public $variation_id;
    public $price_id;

    public function getPricesForVariation($id) {
        $result = DB::table('variation')
            ->leftJoin('variations_prices', function($query) {
                $query->on('variation.id_variation','=','variations_prices.variation_id')
                    ->whereRaw('variations_prices.id_variations_prices IN (select vp.id_variations_prices from variations_prices as vp join `variation` v on v.id_variation = vp.variation_id)');
            })
            ->leftJoin('price', 'variations_prices.price_id', '=', 'price.id_price')
            ->leftJoin('currency', 'price.currency_id', '=', 'currency.id_currency')
            ->leftJoin('lander', 'variation.lander_id', '=', 'lander.id_lander')
            ->leftJoin('checkout', 'variation.checkout_id', '=', 'checkout.id_checkout')
            ->leftJoin('thankyou', 'variation.thankyou_id', '=', 'thankyou.id_thankyou')
            ->selectRaw("*, (variations_prices.deleted_at) AS PriceDeleted")
            ->where('variation.id_variation',$id)
            ->whereNull('variation.deleted_at')
            ->whereNull('variations_prices.deleted_at');

        return $result->get();
    }

    public function checkIfPriceExists($amount, $currency_id) {
        $result = DB::table('price')
            ->where([
                ['amount','=',$amount],
                ['currency_id','=',$currency_id],
            ])
            ->first();
        return $result;
    }

    public function insertPrice() {
        $priceId = DB::table('price')
            ->insertGetId([
                'amount' => $this->amount,
                'currency_id' => $this->currency_id,
            ]);
        return $priceId;
    }

    public function checkVariationQuantity($variation_id, $quantity) {
        $result = DB::table('variations_prices')
            ->where([
                ['variation_id','=',$variation_id],
                ['quantity','=',$quantity],
            ])
            ->first();
        return $result;
    }

    public function editVariationPrice($id) {
        $result = DB::table('variations_prices')
            ->where('id_variations_prices', '=',$id)
            ->update([
                'is_default' => $this->is_default,
                'is_free_shipping' => $this->is_free_shipping,
                'price_id' => $this->price_id,
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'deleted_by' => null,
            ]);
        return $result;
    }

    public function insertPriceVariation() {
        $result = DB::table('variations_prices')
            ->insertGetId([
                'variation_id' => $this->variation_id,
                'quantity' => $this->quantity,
                'is_default' => $this->is_default,
                'is_free_shipping' => $this->is_free_shipping,
                'price_id' => $this->price_id,
            ]);
        return $result;
    }

    public function deletePriceVariation($id) {
        $result = DB::table('variations_prices')
            ->where('id_variations_prices', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function deleteAllPricesForVariation($id) {
        $result = DB::table('variations_prices')
            ->where('variation_id', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }


}
