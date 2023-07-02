<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VariationPrice extends Model
{
    protected $table = 'variations_prices';
    protected $primaryKey = 'id_variations_prices';

    protected $guarded = ['id_variations_prices'];

    use HasFactory;

    public $price;
    public $quantity;
    public $is_default;
    public $is_free_shipping;

    public function product()
    {
        return $this->hasOneThrough(Product::class,Variation::class, 'product_id', 'id_product','variation_id', 'id_variation');
    }

    public function currency()
    {
        return $this->hasOne(Currency::class,'id_currency','currency_id');
    }

    public function variation()
    {
        return $this->belongsTo(Variation::class,'variation_id','id_variation');
    }

    public function deleteVariationPrice($id)
    {
        $result = DB::table('variations_prices')
            ->where('id_variations_prices', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function deleteAllPricesForVariation($variation_id)
    {
        $result = DB::table('variations_prices')
            ->where('variation_id', '=', $variation_id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
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

    public function editVariationPrice($id, $currency_id) {
        $result = DB::table('variations_prices')
            ->where('id_variations_prices', '=',$id)
            ->update([
                'is_default' => $this->is_default,
                'is_free_shipping' => $this->is_free_shipping,
                'price' => $this->price,
                'currency_id' => $currency_id,
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'deleted_by' => null,
            ]);
        return $result;
    }

    public function insertPriceVariation($variation_id, $currency_id) {
        $result = DB::table('variations_prices')
            ->insertGetId([
                'variation_id' => $variation_id,
                'quantity' => $this->quantity,
                'is_default' => $this->is_default,
                'is_free_shipping' => $this->is_free_shipping,
                'price' => $this->price,
                'currency_id' => $currency_id,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }
}
