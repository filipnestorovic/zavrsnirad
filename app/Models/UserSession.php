<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserSession extends Model
{
    use HasFactory;

    public $session_id;
    public $uuid;
    public $customer_ip;
    public $user_agent;
    public $test_variation_id;
    public $variation_id;
    public $country_id;
    public $event_id;
    public $wb_campaign;
    public $wb_adset;
    public $wb_ad;

    public function insertSession() {
        $result = DB::table('session')
            ->insertGetId([
                'customer_ip' => $this->customer_ip,
                'uuid' => $this->uuid,
                'user_agent' => $this->user_agent,
                'country_id' => $this->country_id,
                'test_variation_id' => $this->test_variation_id,
                'variation_id' => $this->variation_id,
                'wb_campaign' => $this->wb_campaign,
                'wb_adset' => $this->wb_adset,
                'wb_ad' => $this->wb_ad,
            ]);
        return $result;
    }

    public function checkSessionUuid($uuid, $variation_id = null) {
        $result = DB::table('session')
            ->where([
                ['uuid','=',$uuid]
            ]);

        if(!empty($variation_id)){
            $result->where('session.variation_id', '=', $variation_id);
        }

        return $result->get();
    }

    public function checkSessionIp($ip) {
        $result = DB::table('session')
            ->where([
                ['customer_ip','=',$ip]
            ])
            ->get();
        return $result;
    }

    public function insertSessionEvent() {
        $result = DB::table('session')
            ->insertGetId([
                'session_id' => $this->session_id,
                'event_id' => $this->event_id,
            ]);
        return $result;
    }

    public function getVariationVisits($test_variation_id) {
        $result = DB::table('session')
            ->leftJoin('session_events', 'session.id_session', '=', 'session_events.session_id')
            ->selectRaw("COUNT(session.test_variation_id) AS VariationVisits")
            ->where([
                ['session.test_variation_id','=',$test_variation_id]
            ])
            ->get();
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
