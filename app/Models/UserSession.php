<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserSession extends Model
{
    use HasFactory;

    protected $table = 'session';
    protected $primaryKey = 'id_session';

    public $session_id;
    public $uuid;
    public $customer_ip;
    public $user_agent;
    public $country_id;
    public $event_id;

    public function variation()
    {
        return $this->hasOne(Variation::class,'id_variation','variation_id');
    }

    public function insertSession($variation_id,$test_variation_id) {
        $result = DB::table('session')
            ->insertGetId([
                'customer_ip' => $this->customer_ip,
                'uuid' => $this->uuid,
                'user_agent' => $this->user_agent,
                'country_id' => $this->country_id,
                'test_variation_id' => $test_variation_id,
                'variation_id' => $variation_id,
            ]);
        return $result;
    }

    public function getSingleSession($session_id) {
        $result = DB::table('session')
            ->where([
                ['id_session','=',$session_id]
            ])
            ->first();
        return $result;
    }

}
