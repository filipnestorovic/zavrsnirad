<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Currency extends Model
{
    use HasFactory;

    public $currency;
    public $currency_symbol;

    public function getAllCurrencies(){
        $result = DB::table('currency')
            ->whereNull('currency.deleted_at')
            ->get();
        return $result;
    }

    public function getCurrency($id) {
        $result = DB::table('currency')
            ->where('id_currency','=',$id)
            ->whereNull('currency.deleted_at')
            ->first();
        return $result;
    }

    public function insertCurrency() {
        $result = DB::table('currency')
            ->insertGetId([
                'currency' => $this->currency,
                'currency_symbol' => $this->currency_symbol,
            ]);
        return $result;
    }

    public function editCurrency($id) {
        $result = DB::table('currency')
            ->where('id_currency', '=',$id)
            ->update([
                'currency' => $this->currency,
                'currency_symbol' => $this->currency_symbol,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteCurrency($id) {
        $result = DB::table('currency')
            ->where('id_currency', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }
}
