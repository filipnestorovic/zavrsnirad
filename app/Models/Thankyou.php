<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Thankyou extends Model
{
    use HasFactory;

    protected $table = 'thankyou';
    protected $primaryKey = 'id_thankyou';

    public $thankyou_name;
    public $thankyou_path;
    public $country_id;

    public function getAllThankyous(){
        $result = DB::table('thankyou')
            ->leftJoin('country', 'thankyou.country_id', '=', 'country.id_country')
            ->whereNull('thankyou.deleted_at')
            ->get();
        return $result;
    }

    public function getSingleThankyou($id){
        $result = DB::table('thankyou')
            ->where('id_thankyou','=',$id)
            ->whereNull('thankyou.deleted_at')
            ->first();
        return $result;
    }

    public function getThankyousByCountry($id) {
        $result = DB::table('thankyou')
            ->where('country_id','=',$id)
            ->whereNull('thankyou.deleted_at')
            ->get();
        return $result;
    }

    public function insertThankyou() {
        $result = DB::table('thankyou')
            ->insertGetId([
                'thankyou_name' => $this->thankyou_name,
                'thankyou_path' => $this->thankyou_path,
                'country_id' => $this->country_id,
            ]);
        return $result;
    }

    public function editThankyou($id) {
        $result = DB::table('thankyou')
            ->where('id_thankyou', '=',$id)
            ->update([
                'thankyou_name' => $this->thankyou_name,
                'thankyou_path' => $this->thankyou_path,
                'country_id' => $this->country_id,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteThankyou($id) {
        $result = DB::table('thankyou')
            ->where('id_thankyou', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }
}
