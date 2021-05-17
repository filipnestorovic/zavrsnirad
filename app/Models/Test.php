<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Test extends Model
{
    use HasFactory;

    public $test_id;
    public $product_id;
    public $is_test_active;
    public $variation_id;
    public $traffic_percentage;

    public function getAllTests($searchFilter = null, $productFilter = null, $activeFilter = null, $test_id = null) {
        $result = DB::table('test')
            ->leftJoin('tests_variations', function($query) {
                $query->on('test.id_test','=','tests_variations.test_id')
                    ->whereRaw('tests_variations.id_tests_variations IN (select tv.id_tests_variations from tests_variations as tv join `test` t on t.id_test = tv.test_id)');
            })
            ->leftJoin('variation', 'tests_variations.variation_id', '=', 'variation.id_variation')
            ->leftJoin('product', 'test.product_id', '=', 'product.id_product')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->select('*','test.is_active as is_test_active')
            ->orderBy('test.is_active', 'desc')
            ->orderBy('test.created_at', 'desc');

        if(!empty($searchFilter)){
            $result->where(function ($query) use($searchFilter) {
                $query->where('product.product_name', 'LIKE', '%'.$searchFilter.'%')
                    ->orWhere('country.country_name', 'LIKE', '%'.$searchFilter.'%')
                    ->orWhere('test.id_test', 'LIKE', '%'.$searchFilter.'%');
            });
        }
        if(!empty($productFilter)){
            $result->where('test.product_id', '=', $productFilter);
        }
        if(!empty($activeFilter)){
            if($activeFilter === 2) {
                $result->whereNotNull('test.ended_at');
                $result->where('test.is_active', '=', 0);
            } else if($activeFilter === 1) {
                $result->where('test.is_active', '=', $activeFilter);
            }
            else if($activeFilter === 0) {
                $result->where('test.is_active', '=', $activeFilter);
                $result->whereNull('test.ended_at');
            }
        }
        if(!empty($test_id)){
            $result->where('test.id_test', '=', $test_id);
        }

        return $result->get();
    }

    public function getSingleTest($id) {
        $result = DB::table('test')
            ->where('id_test','=',$id)
            ->first();
        return $result;
    }

    public function insertTest() {
        $result = DB::table('test')
            ->insertGetId([
                'product_id' => $this->product_id,
                'is_active' => 0,
                'created_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function addVariationToTest() {
        $result = DB::table('tests_variations')
            ->insertGetId([
                'test_id' => $this->test_id,
                'variation_id' => $this->variation_id,
                'traffic_percentage' => $this->traffic_percentage,
                'added_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function getSingleTestVariation($id) {
        $result = DB::table('tests_variations')
            ->where('id_tests_variations','=',$id)
            ->first();
        return $result;
    }

    public function editTestVariationTraffic($id) {
        $result = DB::table('tests_variations')
            ->where('id_tests_variations', '=', $id)
            ->update([
                'traffic_percentage' => $this->traffic_percentage,

            ]);
        return $result;
    }

    public function deleteTestVariation($id) {
        $result = DB::table('tests_variations')
            ->where('id_tests_variations', '=', $id)
            ->update([
                'removed_at' => Carbon::now(),
                'removed_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function restoreVariationTest($id) {
        $result = DB::table('tests_variations')
            ->where('id_tests_variations', '=', $id)
            ->update([
                'added_at' => Carbon::now(),
                'removed_at' => null,
                'removed_by' => null,
            ]);
        return $result;
    }

    public function startTest($id, $start) {
        if($start === 1) {
            $result = DB::table('test')
                ->where('id_test', '=', $id)
                ->update([
                    'is_active' => 1,
                    'started_at' => Carbon::now(),
                    'started_by' => Auth::user()->id,
                ]);
        } else {
            $result = DB::table('test')
                ->where('id_test', '=', $id)
                ->update([
                    'is_active' => 1,
                ]);
        }
        return $result;
    }

    public function pauseTest($id) {
        $result = DB::table('test')
            ->where('id_test', '=', $id)
            ->update([
                'is_active' => 0,
            ]);
        return $result;
    }

    public function endTest($id) {
        $result = DB::table('test')
            ->where('id_test', '=', $id)
            ->update([
                'is_active' => 0,
                'ended_at' => Carbon::now(),
                'ended_by' => Auth::user()->id,
            ]);
        return $result;
    }

}
