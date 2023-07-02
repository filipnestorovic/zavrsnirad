<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Lander extends Model
{
    use HasFactory;

    protected $table = 'lander';
    protected $primaryKey = 'id_lander';

    public $lander_name;
    public $brand_id;
    public $product_id;
    public $lander_path;

    public function getAllLanders(){
        $result = DB::table('lander')
            ->leftJoin('brand', 'lander.brand_id', '=', 'brand.id_brand')
            ->leftJoin('product', 'lander.product_id', '=', 'product.id_product')
            ->whereNull('lander.deleted_at')
            ->get();
        return $result;
    }

    public function getAllLandersAjax($searchFilter, $brandFilter, $productFilter, $countryFilter) {
        $result = DB::table('lander')
            ->leftJoin('brand', 'lander.brand_id', '=', 'brand.id_brand')
            ->leftJoin('product', 'lander.product_id', '=', 'product.id_product')
            ->leftJoin('country', 'product.country_id', '=', 'country.id_country')
            ->select('*','lander.deleted_at as lander_deleted');

        if(!empty($searchFilter)){
            $result->where(function ($query) use($searchFilter) {
                $query->where('lander.lander_name', 'LIKE', '%'.$searchFilter.'%')
                    ->orWhere('product.product_name', 'LIKE', '%'.$searchFilter.'%');
            });
        }

        if(!empty($brandFilter)){
            $result->where('lander.brand_id', '=', $brandFilter);
        }
        if(!empty($productFilter)){
            $result->where('lander.product_id', '=', $productFilter);
        }
        if(!empty($countryFilter)){
            $result->where('product.country_id', '=', $countryFilter);
        }

        return $result->get();
    }

    public function getSingleLander($id){
        $result = DB::table('lander')
            ->where('id_lander','=',$id)
            ->whereNull('lander.deleted_at')
            ->first();
        return $result;
    }

    public function getLandersByProduct($id){
        $result = DB::table('lander')
            ->where('product_id','=',$id)
            ->whereNull('lander.deleted_at')
            ->get();
        return $result;
    }

    public function insertLander() {
        $result = DB::table('lander')
            ->insertGetId([
                'lander_name' => $this->lander_name,
                'lander_path' => $this->lander_path,
                'brand_id' => $this->brand_id,
                'product_id' => $this->product_id,
            ]);
        return $result;
    }

    public function editLander($id) {
        $result = DB::table('lander')
            ->where('id_lander', '=',$id)
            ->update([
                'lander_name' => $this->lander_name,
                'lander_path' => $this->lander_path,
                'brand_id' => $this->brand_id,
                'product_id' => $this->product_id,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteLander($id) {
        $result = DB::table('lander')
            ->where('id_lander', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function restoreLander($id) {
        $result = DB::table('lander')
            ->where('id_lander', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'deleted_by' => null,
            ]);
        return $result;
    }

    public function checkIfLanderAlreadyExist($lander_path) {
        $result = DB::table('lander')
            ->where('lander_path','=',$lander_path)
            ->whereNull('lander.deleted_at')
            ->first();
        return $result;
    }

}
