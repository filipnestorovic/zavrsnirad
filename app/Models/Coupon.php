<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Coupon extends Model
{
    use HasFactory;

    public $coupon;
    public $discount;
    public $is_active;
    public $variation_id;
    public $coupon_id;

    public function getAllCoupons(){
        $result = DB::table('coupon')
            ->whereNull('coupon.deleted_at')
            ->get();
        return $result;
    }

    public function getAllActiveCoupons(){
        $result = DB::table('coupon')
            ->whereNull('coupon.deleted_at')
            ->where('is_active','=','1')
            ->get();
        return $result;
    }

    public function getCoupon($id) {
        $result = DB::table('coupon')
            ->where('id_coupon','=',$id)
            ->whereNull('coupon.deleted_at')
            ->first();
        return $result;
    }

    public function insertCoupon() {
        $result = DB::table('coupon')
            ->insertGetId([
                'coupon' => $this->coupon,
                'discount' => $this->discount,
                'is_active' => $this->is_active,
            ]);
        return $result;
    }

    public function editCoupon($id) {
        $result = DB::table('coupon')
            ->where('id_coupon', '=',$id)
            ->update([
                'coupon' => $this->coupon,
                'discount' => $this->discount,
                'is_active' => $this->is_active,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteCoupon($id) {
        $result = DB::table('coupon')
            ->where('id_coupon', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function getAllCouponsForVariation($variation_id) {
        $result = DB::table('variations_coupons')
            ->leftJoin('coupon', 'variations_coupons.coupon_id', '=', 'coupon.id_coupon')
            ->where('variation_id','=',$variation_id)
            ->get()
            ->toArray();
        return $result;
    }

    public function addVariationCoupon() {
        $result = DB::table('variations_coupons')
            ->insertGetId([
                'variation_id' => $this->variation_id,
                'coupon_id' => $this->coupon_id,
            ]);
        return $result;
    }

    public function deleteVariationCoupon($id) {
        $result = DB::table('variations_coupons')
            ->where('id_variations_coupons', '=', $id)
            ->delete();
        return $result;
    }
}
