<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Checkout extends Model
{
    use HasFactory;

    public $checkout_name;
    public $checkout_url;
    public $country_id;

    public function getAllCheckouts(){
        $result = DB::table('checkout')
            ->leftJoin('country', 'checkout.country_id', '=', 'country.id_country')
            ->whereNull('checkout.deleted_at')
            ->get();
        return $result;
    }

    public function getSingleCheckout($id){
        $result = DB::table('checkout')
            ->where('id_checkout','=',$id)
            ->whereNull('checkout.deleted_at')
            ->first();
        return $result;
    }

    public function getCheckoutsByCountry($id) {
        $result = DB::table('checkout')
            ->where('country_id','=',$id)
            ->whereNull('checkout.deleted_at')
            ->orderByDesc('id_checkout')
            ->get();
        return $result;
    }

    public function insertCheckout() {
        $result = DB::table('checkout')
            ->insertGetId([
                'checkout_name' => $this->checkout_name,
                'checkout_url' => $this->checkout_url,
                'country_id' => $this->country_id,
            ]);
        return $result;
    }

    public function editCheckout($id) {
        $result = DB::table('checkout')
            ->where('id_checkout', '=',$id)
            ->update([
                'checkout_name' => $this->checkout_name,
                'checkout_url' => $this->checkout_url,
                'country_id' => $this->country_id,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteCheckout($id) {
        $result = DB::table('checkout')
            ->where('id_checkout', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }
}
