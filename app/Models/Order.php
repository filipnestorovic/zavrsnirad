<?php


namespace App\Models;

use Illuminate\Support\Facades\DB;

class Order
{
    public $name;
    public $email;
    public $phone;
    public $street;
    public $city;
    public $zip;
    public $quantity;
    public $price;
    public $is_order_with_free_shipping;
    public $variation_id;
    public $test_variation_id;
    public $country_id;
    public $session_id;

    public function insertOrder(){
        $result = DB::table('order')
            ->insertGetId([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'street' => $this->street,
                'city' => $this->city,
                'zip' => $this->zip,
                'quantity' => $this->quantity,
                'price' => $this->price,
                'is_free_shipping' => $this->is_order_with_free_shipping,
                'variation_id' => $this->variation_id,
                'test_variation_id' => $this->test_variation_id,
                'country_id' => $this->country_id,
                'session_id' => $this->session_id,
            ]);

        return $result;
    }

    public function getOrderById($id, $quantity){
        $result = DB::table('order')
            ->leftJoin('variation', 'order.variation_id', '=', 'variation.id_variation')
            ->leftJoin('variations_prices', function($query) {
                $query->on('variation.id_variation','=','variations_prices.variation_id')
                    ->whereRaw('variations_prices.id_variations_prices IN (select vp.id_variations_prices from variations_prices as vp join `variation` v on v.id_variation = vp.variation_id)');
            })
            ->leftJoin('price', 'variations_prices.price_id', '=', 'price.id_price')
            ->leftJoin('currency', 'price.currency_id', '=', 'currency.id_currency')
            ->leftJoin('product', 'variation.product_id', '=', 'product.id_product')
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.id_brand')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->where([
                ['id_order', '=', $id],
                ['variations_prices.quantity','=',$quantity]
            ])
            ->first();

        return $result;
    }

    public function getOrderByEmailAndProductId($email, $product_id) {
        $result = DB::table('orders')
            ->where([
                ['email', '=', $email],
                ['product_id','=',$product_id]
            ])
            ->first();

        return $result;
    }

    public function getOrderByEmailAndProductIdByDate($email, $product_id) {
        $result = DB::table('orders')
            ->where([
                ['email', '=', $email],
                ['product_id','=',$product_id]
            ])
            ->get();

        return $result;
    }


    public function getOrderByPhoneAndProductId($phone, $product_id) {
        $result = DB::table('orders')
            ->where('phone', '=', $phone)
            ->where('product_id','=',$product_id)
            ->first();

        return $result;
    }

}
