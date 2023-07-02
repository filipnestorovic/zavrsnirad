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

    protected $table = 'test';
    protected $primaryKey = 'id_test';

    protected $guarded = ['id_test'];

    public $traffic_percentage;

    public function testVariations()
    {
        return $this->hasMany(TestVariation::class, "test_id", "id_test")->with('variation');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id_product')->with('country');
    }

    public function testForProduct($product_id)
    {
        return Test::with('testVariations.variation','product')
                ->where('product_id',$product_id)
                ->where('is_active',1)
                ->first();
    }

    public function allTests($searchFilter = null, $productFilter = null, $activeFilter = null, $test_id = null) {
        return Test::with('testVariations.variation','product')
            ->when($productFilter, function ($q) use ($productFilter) {
                return $q->where('product_id', $productFilter);
            })
            ->when($test_id, function ($q) use ($test_id) {
                return $q->where('test_id', $test_id);
            })
            ->when($activeFilter, function ($q) use (&$activeFilter) {
                $activeFilter = (int)$activeFilter;
                if($activeFilter === 1) {
                    return $q->where('is_active', 1);
                } elseif($activeFilter === 2) {
                    return $q->where('is_active', 0)->whereNull('ended_at');
                } elseif($activeFilter === 3) {
                    return $q->where('is_active', 0)->whereNotNull('ended_at');
                }
            })
            ->when($searchFilter, function ($q) use ($searchFilter) {
                return $q->where(function ($query) use ($searchFilter) {
                    $query->where('id_test', '=', $searchFilter);
                })->orWhereHas('variations.product', function ($productQuery) use ($searchFilter) {
                    $productQuery->where('product_name', 'LIKE', '%' . $searchFilter . '%');
                });
            })
            ->orderBy('is_active', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
    }

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
            if((int)$activeFilter === 3) {
                $result->whereNotNull('test.ended_at');
                $result->where('test.is_active', '=', 0);
            } else if((int)$activeFilter === 1) {
                $result->where('test.is_active', '=', 1);
            }
            else if((int)$activeFilter === 2) {
                $result->where('test.is_active', '=', 0);
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

    public function insertTest($product_id) {
        $result = DB::table('test')
            ->insertGetId([
                'product_id' => $product_id,
                'is_active' => 0,
                'created_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function addVariationToTest($test_id, $variation_id) {
        $result = DB::table('tests_variations')
            ->insertGetId([
                'test_id' => $test_id,
                'variation_id' => $variation_id,
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
