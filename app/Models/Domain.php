<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Domain extends Model
{
    use HasFactory;

    public $domain_url;
    public $brand_id;

    public function getAllDomains() {
        $result = DB::table('domain')
            ->leftJoin('brand', 'domain.brand_id', '=', 'brand.id_brand')
            ->whereNull('domain.deleted_at')
            ->get();
        return $result;
    }

    public function insertDomain() {
        $result = DB::table('domain')
            ->insertGetId([
                'domain_url' => $this->domain_url,
                'brand_id' => $this->brand_id,
            ]);
        return $result;
    }

    public function editDomain($id) {
        $result = DB::table('domain')
            ->where('id_domain', '=',$id)
            ->update([
                'domain_url' => $this->domain_url,
                'brand_id' => $this->brand_id,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function getBrandDomains($brand_id, $domain_id) {
        $result = DB::table('domain')
            ->leftJoin('brand', 'domain.brand_id', '=', 'brand.id_brand')
            ->whereNull('domain.deleted_at');

        if(!empty($brand_id)){
            $result->where('domain.brand_id','=',$brand_id);
        }

        if(!empty($domain_id)){
            $result->where('domain.id_domain','=',$domain_id);
        }

        return $result->get();
    }

    public function deleteDomain($id) {
        $result = DB::table('domain')
            ->where('id_domain', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function getDomainByBrand($brand_id) {
        $result = DB::table('domain')
            ->whereNull('deleted_at')
            ->where('brand_id','=',$brand_id);
        return $result->first();
    }
}
