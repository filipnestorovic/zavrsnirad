<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Pixel extends Model
{
    use HasFactory;

    public $pixel_id;
    public $pixel_name;

    public $brand_id;
    public $product_id;
    public $domain_id;

    public function getAllPixels(){
        $result = DB::table('pixel')
            ->whereNull('pixel.deleted_at')
            ->get();
        return $result;
    }

    public function getPixel($id) {
        $result = DB::table('pixel')
            ->where('id_pixel','=',$id)
            ->whereNull('pixel.deleted_at')
            ->first();
        return $result;
    }

    public function insertPixel() {
        $result = DB::table('pixel')
            ->insertGetId([
                'fb_pixel' => $this->pixel_id,
                'pixel_name' => $this->pixel_name,
            ]);
        return $result;
    }

    public function editPixel($id) {
        $result = DB::table('pixel')
            ->where('id_pixel', '=',$id)
            ->update([
                'fb_pixel' => $this->pixel_id,
                'pixel_name' => $this->pixel_name,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deletePixel($id) {
        $result = DB::table('pixel')
            ->where('id_pixel', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function checkIfBrandIsConnected($brand_id, $pixel_id) {
        $result = DB::table('pixel_brands')
            ->where([
                ['brand_id','=',$brand_id],
                ['pixel_id','=',$pixel_id],
            ])
            ->get();
        return $result;
    }

    public function checkIfDomainIsConnected($domain_id, $pixel_id) {
        $result = DB::table('pixel_domains')
            ->where([
                ['domain_id','=',$domain_id],
                ['pixel_id','=',$pixel_id],
            ])
            ->get();
        return $result;
    }

    public function checkIfProductIsConnected($product_id, $pixel_id) {
        $result = DB::table('pixel_products')
            ->where([
                ['product_id','=',$product_id],
                ['pixel_id','=',$pixel_id],
            ])
            ->get();
        return $result;
    }

    public function connectBrandPixel() {
        $result = DB::table('pixel_brands')
            ->insertGetId([
                'pixel_id' => $this->pixel_id,
                'brand_id' => $this->brand_id,
            ]);
        return $result;
    }

    public function connectDomainPixel() {
        $result = DB::table('pixel_domains')
            ->insertGetId([
                'pixel_id' => $this->pixel_id,
                'domain_id' => $this->domain_id,
            ]);
        return $result;
    }

    public function connectProductPixel() {
        $result = DB::table('pixel_products')
            ->insertGetId([
                'pixel_id' => $this->pixel_id,
                'product_id' => $this->product_id,
            ]);
        return $result;
    }

    public function disconnectBrandPixel($id) {
        $result = DB::table('pixel_brands')
            ->where('id_pixel_brands',$id)
            ->delete();
        return $result;
    }

    public function disconnectProductPixel($id) {
        $result = DB::table('pixel_products')
            ->where('id_pixel_products',$id)
            ->delete();
        return $result;
    }

    public function disconnectDomainPixel($id) {
        $result = DB::table('pixel_domains')
            ->where('id_pixel_domains',$id)
            ->delete();
        return $result;
    }

    public function getProductPixel($id) {
        $result = DB::table('pixel_products')
            ->leftJoin('pixel', 'pixel_products.pixel_id', '=', 'pixel.id_pixel')
            ->where('product_id',$id)
            ->get();
        return $result;
    }

    public function getBrandPixel($id) {
        $result = DB::table('pixel_brands')
            ->leftJoin('pixel', 'pixel_brands.pixel_id', '=', 'pixel.id_pixel')
            ->where('brand_id',$id)
            ->get();
        return $result;
    }

    public function getDomainPixel($id) {
        $result = DB::table('pixel_domains')
            ->leftJoin('pixel', 'pixel_domains.pixel_id', '=', 'pixel.id_pixel')
            ->where('domain_id',$id)
            ->get();
        return $result;
    }
}
