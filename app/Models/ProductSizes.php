<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSizes extends Model
{
    use HasFactory;

    protected $table = 'product_sizes';
    protected $fillable = [
        'product_size',
        'description',
        'product_id',
        'priority',
        'woo_variation_id'
    ];

    public function product() {
        return $this->hasOne(Product::class,'id_product','product_id');
    }
}
