<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statistic extends Model
{
    use HasFactory;

    public function getSingleTestStatistic($test_variation_id = null, $test_id = null) {
        $result = DB::table('session_events')
            ->groupBy(['session_events.event_id'])
            ->leftJoin('event', 'session_events.event_id', '=', 'event.id_event')
            ->leftJoin('session', 'session_events.session_id', '=', 'session.id_session')
            ->leftJoin('tests_variations', 'session.test_variation_id', '=', 'tests_variations.id_tests_variations')
            ->leftJoin('test', 'tests_variations.test_id', '=', 'test.id_test')
            ->leftJoin('variation', 'tests_variations.variation_id', '=', 'variation.id_variation');

        if(!empty($test_variation_id)){
            $result->selectRaw("variation.variation_name, event.event_name, session_events.event_id, COUNT(DISTINCT session_events.session_id) AS TestVariationVisits");
            $result->where('tests_variations.id_tests_variations', '=', $test_variation_id);
        }

        if(!empty($test_id)){
            $result->selectRaw("variation.variation_name, event.event_name, session_events.event_id, COUNT(DISTINCT session_events.session_id) AS TestTotalVisits");
            $result->where('test.id_test', '=', $test_id);
        }

        return $result->get();
    }

    public function getOrdersForVariationInActiveTest($test_variation_id) {
        $result = DB::table('order')
            ->where('test_variation_id','=',$test_variation_id)
            ->get();
        return $result;
    }
}
