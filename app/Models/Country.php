<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Country extends Model
{
    use HasFactory;

    protected $table = 'country';
    protected $primaryKey = 'id_country';

    public $country_name;
    public $country_code;
    public $currency_id;
    public $is_active;
    public $shipping_cost;

    public function currency()
    {
        return $this->hasOne(Currency::class, 'id_currency', 'currency_id');
    }

    public function getAllCountries(){
        $result = DB::table('country')
            ->leftJoin('currency', 'country.currency_id', '=', 'currency.id_currency')
            ->whereNull('country.deleted_at')
            ->get();
        return $result;
    }

    public function getCountry($id) {
        $result = DB::table('country')
            ->leftJoin('currency', 'country.currency_id', '=', 'currency.id_currency')
            ->where('id_country','=',$id)
            ->whereNull('country.deleted_at')
            ->first();
        return $result;
    }

    public function insertCountry() {
        $result = DB::table('country')
            ->insertGetId([
                'country_name' => $this->country_name,
                'country_code' => $this->country_code,
                'shipping_cost' => $this->shipping_cost,
                'currency_id' => $this->currency_id,
                'is_active' => $this->is_active,
            ]);
        return $result;
    }

    public function editCountry($id) {
        $result = DB::table('country')
            ->where('id_country', '=',$id)
            ->update([
                'country_name' => $this->country_name,
                'country_code' => $this->country_code,
                'shipping_cost' => $this->shipping_cost,
                'currency_id' => $this->currency_id,
                'is_active' => $this->is_active,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteCountry($id) {
        $result = DB::table('country')
            ->where('id_country', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function getActiveCountryByShortcode($shortcode) {
        $result = DB::table('country')
            ->where([
                'country_code' => $shortcode,
                'is_active' => 1,
            ])
            ->whereNull('country.deleted_at')
            ->first();
        return $result;
    }
}
