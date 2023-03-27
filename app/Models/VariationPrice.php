<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationPrice extends Model
{
    protected $table = 'variations_prices';
    protected $primaryKey = 'id_variations_prices';

    use HasFactory;

    public function price()
    {
        return $this->hasOne(Price::class, 'id_price', 'price_id');
    }

    public function product()
    {
        return $this->hasOneThrough(Product::class,Variation::class, 'product_id', 'id_product','variation_id', 'id_variation');
    }
}
