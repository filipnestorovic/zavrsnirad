<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'brand';

    public $brand_name;
    public $brand_url;
    public $logo_url;
    public $country_id;

    public function getAllBrands() {
        $result = DB::table('brand')
            ->whereNull('brand.deleted_at')
            ->get();
        return $result;
    }

    public function getAllBrandsWithPixels() {
        $result = DB::table('brand')
            ->leftJoin('pixel_brands', function($query) {
                $query->on('brand.id_brand','=','pixel_brands.brand_id')
                    ->whereRaw('pixel_brands.id_pixel_brands IN (select pb.id_pixel_brands from pixel_brands as pb join `brand` b on b.id_brand = pb.brand_id)');
            })
            ->leftJoin('pixel', 'pixel_brands.pixel_id', '=', 'pixel.id_pixel')
            ->whereNull('brand.deleted_at')
            ->get();
        return $result;
    }

    public function getBrand($id) {
        $result = DB::table('brand')
            ->where('id_brand','=',$id)
            ->whereNull('brand.deleted_at')
            ->first();
        return $result;
    }

    public function insertBrand() {
        $result = DB::table('brand')
            ->insertGetId([
                'brand_name' => $this->brand_name,
                'logo_url' => $this->logo_url,
            ]);
        return $result;
    }

    public function editBrand($id) {
        $result = DB::table('brand')
            ->where('id_brand', '=',$id)
            ->update([
                'brand_name' => $this->brand_name,
                'logo_url' => $this->logo_url,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteBrand($id) {
        $result = DB::table('brand')
            ->where('id_brand', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function getBrandByUrl($brand_url) {
        $result = DB::table('brand')
            ->rightJoin('domain', 'domain.brand_id', '=', 'brand.id_brand')
            ->where('domain_url','=',$brand_url)
            ->whereNull('brand.deleted_at')
            ->whereNull('domain.deleted_at')
            ->first();
        return $result;
    }
}
