<?php
/**
 * Created by PhpStorm.
 * User: Krle-Desktop
 * Date: 11/10/2020
 * Time: 12:30 PM
 */

namespace App\Models;


use Illuminate\Support\Facades\DB;

class AbandonedCart
{
    public $uuid;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $zip;
    public $note;
    public $quantity;
    public $price;
    public $site;
    public $product_id;
    public $country_id;

    public function insertAbandoned() {
        $result = DB::table('abandoned_cart')
            ->insertGetId([
                'uuid' => $this->uuid,
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'city' => $this->city,
                'zip' => $this->zip,
                'note' => $this->note,
                'quantity' => $this->quantity,
                'product_id' => $this->product_id,
                'country_id' => $this->country_id,
                'level' => 1,
            ]);
        return $result;
    }

    public function updateAbandoned($uuid, $product_id) {
        $result = DB::table('abandoned_cart')
            ->where([
                ['uuid','=', $uuid],
                ['product_id','=', $product_id]
            ])
            ->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'city' => $this->city,
                'zip' => $this->zip,
                'quantity' => $this->quantity,
            ]);
        return $result;
    }

    public function increaseAbandonedLevel($uuid) {
        $result = DB::table('abandoned_cart')
            ->where([
                ['uuid','=', $uuid],
            ])
            ->increment('level');
        return $result;
    }

    public function increaseAbandonedLevelByProduct($uuid, $product_id) {
        $result = DB::table('abandoned_cart')
            ->where([
                ['uuid','=', $uuid],
                ['product_id','=', $product_id],
            ])
            ->increment('level');
        return $result;
    }

    public function getAbandonedId($id) {
        $result = DB::table('abandoned_cart')
            ->leftJoin('products', 'abandoned_cart.product_id', '=', 'products.id_product')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id_brand')
            ->where([
                ['abandoned_cart.id','=',$id],
//                ['is_recovered','=','0']
            ])
            ->first();

        return $result;
    }

    public function getAbandonedUuid($uuid) {
        $result = DB::table('abandoned_cart')
            ->leftJoin('products', 'abandoned_cart.product_id', '=', 'products.id_product')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id_brand')
            ->where([
                ['abandoned_cart.uuid','=',$uuid]
            ])
            ->first();
        return $result;
    }

    public function getAbandonedUuidWithProduct($uuid, $product_id) {
        $result = DB::table('abandoned_cart')
            ->leftJoin('products', 'abandoned_cart.product_id', '=', 'products.id_product')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id_brand')
            ->where([
                ['abandoned_cart.uuid','=',$uuid],
                ['abandoned_cart.product_id','=',$product_id],
            ])
            ->first();
        return $result;
    }

    public function getAbandonedUuidIfRecovered($uuid) {
        $result = DB::table('abandoned_cart')
            ->leftJoin('products', 'abandoned_cart.product_id', '=', 'products.id_product')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id_brand')
            ->leftJoin('country','abandoned_cart.country_id','=','country.id_country')
            ->where([
                ['abandoned_cart.uuid','=',$uuid],
                ['abandoned_cart.is_recovered','=','0']
            ])
            ->first();
        return $result;
    }

    public function getAbandonedUuidIfNotRecoveredByProduct($uuid, $product_id) {
        $result = DB::table('abandoned_cart')
            ->leftJoin('products', 'abandoned_cart.product_id', '=', 'products.id_product')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id_brand')
            ->leftJoin('country','abandoned_cart.country_id','=','country.id_country')
            ->where([
                ['abandoned_cart.uuid','=',$uuid],
                ['abandoned_cart.product_id','=',$product_id],
                ['abandoned_cart.is_recovered','=','0'],
            ])
            ->first();
        return $result;
    }

    public function getAbandonForEmailAndProductId($email, $product_id) {
        $result = DB::table('abandoned_cart')
            ->leftJoin('products', 'abandoned_cart.product_id', '=', 'products.id_product')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id_brand')
            ->leftJoin('country','abandoned_cart.country_id','=','country.id_country')
            ->where([
                ['abandoned_cart.email','=',$email],
                ['abandoned_cart.product_id','=',$product_id],
                ['abandoned_cart.is_recovered','=','0'],
            ])
            ->first();
        return $result;
    }

    public function checkAbandonedEmail($email, $product_id) {
        $result = DB::table('abandoned_cart')
            ->where([
                ['email','=',$email],
                ['product_id','=',$product_id],
                ['is_recovered','=','0']
            ])
            ->first();
        return $result;
    }

    public function deleteAbandonedAfterPurchase($email, $product_id) {
        $result = DB::table('abandoned_cart')
            ->where([
                ['email','=',$email],
                ['product_id','=',$product_id]
            ])
            ->update([
                'is_recovered' => 1,
            ]);

        return $result;
    }

    public function insertAbandonedCall() {
        $result = DB::table('abandoned_call')
            ->insert([
                'name' => $this->name,
                'phone' => $this->phone,
                'quantity' => $this->quantity,
                'product_id' => $this->product_id
            ]);
        return $result;
    }

    public function updateAbandonedCall($phone, $product_id) {
        $result = DB::table('abandoned_call')
            ->where([
                ['phone','=', $phone],
                ['product_id','=', $product_id],
                ['is_recovered','=','0']
            ])
            ->update([
                'name' => $this->name,
                'phone' => $this->phone,
                'quantity' => $this->quantity,
            ]);
        return $result;
    }

    public function checkAbandonedCall($phone, $product_id) {
        $result = DB::table('abandoned_call')
            ->where([
                ['phone','=', $phone],
                ['product_id','=', $product_id],
                ['is_recovered','=','0']
            ])
            ->first();
        return $result;
    }

    public function deleteAbandonedCall($phone, $product_id) {
        $result = DB::table('abandoned_call')
            ->where([
                ['phone','=', $phone],
                ['product_id','=', $product_id]
            ])
            ->update([
                'is_recovered' => 1,
            ]);
        return $result;
    }

}