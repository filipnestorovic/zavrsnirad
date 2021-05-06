<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->modelCoupon = new Coupon();
    }

    public function couponIndex() {
        $this->data['coupons'] = $this->modelCoupon->getAllCoupons();
        return view('admin.coupon',$this->data);
    }

    public function addCoupon(Request $request) {

        $rules = [
            'coupon_name' => ['required','max:30'],
            'coupon_discount' => ['required','digits_between:1,3'],
            'isCouponActive' => ['required'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $this->modelCoupon->coupon = $request->get('coupon_name');
            $this->modelCoupon->discount = $request->get('coupon_discount');
            $this->modelCoupon->is_active = $request->get('isCouponActive');

            $insertResult = $this->modelCoupon->insertCoupon();

            if($insertResult) {
                return redirect()->back()->with('success','Coupon has been added successfully!');
            } else {
                return redirect()->back()->with('error','Error with adding new coupon to database!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Inserting new coupon | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on inserting new coupon!');
        }
    }

    public function getCoupon($id) {
        $singleCoupon = $this->modelCoupon->getCoupon($id);
        if($singleCoupon) {
            return json_encode($singleCoupon, true);
        }
    }

    public function editCoupon(Request $request) {

        $rules = [
            'couponIdModal' => ['required'],
            'couponNameModal' => ['required','max:30'],
            'couponDiscountModal' => ['required','digits_between:1,3'],
            'isCouponActiveModal' => ['required'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $id = $request->get('couponIdModal');
            $this->modelCoupon->coupon = $request->get('couponNameModal');
            $this->modelCoupon->discount = $request->get('couponDiscountModal');
            $this->modelCoupon->is_active = $request->get('isCouponActiveModal');

            $updateResult = $this->modelCoupon->editCoupon($id);

            if($updateResult == 1) {
                return redirect()->back()->with('success','Coupon has been edited successfully!');
            } else if($updateResult == 0) {
                return redirect()->back()->with('info','No changes have been made to the coupon!');
            } else {
                return redirect()->back()->with('error','Error with editing coupon!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing coupon | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on editing coupon!');
        }
    }

    public function deleteCoupon($id) {
        try {
            $deleteResult = $this->modelCoupon->deleteCoupon($id);
            if($deleteResult) {
                return redirect()->back()->with('success','Coupon has been deleted successfully!');
            } else {
                return redirect()->back()->with('error','Error with deleting coupon!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting coupon | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error','Error on deleting coupon!');
        }
    }
}
