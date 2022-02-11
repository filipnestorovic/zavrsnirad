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
    public $order_note;
    public $coupon_used;
    public $variation_id;
    public $test_variation_id;
    public $country_id;
    public $session_id;
    public $is_up_sell;
    public $is_cross_sell;
    public $product_id;

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
                'coupon_used' => $this->coupon_used,
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
            ->leftJoin('session', 'order.session_id', '=', 'session.id_session')
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

    public function upCrossSellOrderInsert($order_id) {
        $result = DB::table('up_cross_sell')
            ->insertGetId([
                'variation_id' => $this->variation_id,
                'test_variation_id' => $this->test_variation_id,
                'upcrosssell_product_id' => $this->product_id,
                'quantity' => $this->quantity,
                'price' => $this->price,
                'free_shipping_upcrosssell' => $this->is_order_with_free_shipping,
                'is_up_sell' => $this->is_up_sell,
                'is_cross_sell' => $this->is_cross_sell,
                'order_id' => $order_id,
                'country_id' => $this->country_id,
                'session_id' => $this->session_id,
            ]);

        return $result;
    }

    public function getupCrossSellOrder($upcrosssell_id) {
        $result = DB::table('up_cross_sell')
            ->leftJoin('order', 'up_cross_sell.order_id', '=', 'order.id_order')
            ->join('product','up_cross_sell.upcrosssell_product_id','=','product.id_product')
            ->selectRaw('*, up_cross_sell.price as UpCrossSellPrice, up_cross_sell.quantity as UpCrossSellQuantity, product.product_name as uc_product_name')
            ->where('id_up_cross_sell','=',$upcrosssell_id)
            ->first();

        return $result;
    }

    public function getUpCrossSellByVariationOrTest($variation_id = null, $test_variation_id = null, $dateFrom, $dateTo, $country_id = null) {
        $result = DB::table('up_cross_sell');

        if(!empty($variation_id)){
            $result->where('variation_id','=',$variation_id);
        }

        if(!empty($test_variation_id)){
            $result->where('test_variation_id','=',$test_variation_id);
        }

        if(!empty($country_id)){
            $result->where('country_id','=',$country_id);
        }

        if(!empty($dateFrom)){
            if(!empty($dateTo)) {
                $result->whereBetween('up_cross_sell.created_at', [$dateFrom, $dateTo]);
            } else {
                $result->whereDate('up_cross_sell.created_at', '=', $dateFrom);
            }
        }

        return $result->get();
    }

    public function getLastOrderForVariation($variation_id) {
        $result = DB::table('order')
            ->where([
                ['variation_id','=',$variation_id],
                ['order.name','NOT LIKE','%TEST%']
            ])
            ->orderByDesc('order.created_at');

        return $result->first();
    }

    public function updateOrderNote($id) {
        $result = DB::table('order')
            ->where('id_order', '=',$id)
            ->update([
                'note' => $this->order_note,
            ]);
        return $result;
    }
}
