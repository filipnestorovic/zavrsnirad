<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    use HasFactory;

    public $event_name;
    public $is_fb_event;

    public function getAllEvents(){
        $result = DB::table('event')
            ->whereNull('event.deleted_at')
            ->get();
        return $result;
    }

    public function getEvent($id) {
        $result = DB::table('event')
            ->where('id_event','=',$id)
            ->whereNull('event.deleted_at')
            ->first();
        return $result;
    }

    public function insertEvent() {
        $result = DB::table('event')
            ->insertGetId([
                'event_name' => $this->event_name,
                'is_fb_event' => $this->is_fb_event,
            ]);
        return $result;
    }

    public function editEvent($id) {
        $result = DB::table('event')
            ->where('id_event', '=',$id)
            ->update([
                'event_name' => $this->event_name,
                'is_fb_event' => $this->is_fb_event,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteEvent($id) {
        $result = DB::table('event')
            ->where('id_event', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

    public function insertSessionEvent($session_id, $event_id) {
        $result = DB::table('session_events')
            ->insertGetId([
                'session_id' => $session_id,
                'event_id' => $event_id,
            ]);
        return $result;
    }
}
