<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function __construct()
    {
        $this->modelEvent = new Event();
    }

    public function eventIndex() {
        $this->data['events'] = $this->modelEvent->getAllEvents();
        return view('admin.event', $this->data);
    }

    public function addEvent(Request $request) {

        $rules = [
            'event_name' => ['required', 'max:50'],
            'isFbEvent' => ['required'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $this->modelEvent->event_name = $request->get('event_name');
            $this->modelEvent->is_fb_event = $request->get('isFbEvent');

            $insertResult = $this->modelEvent->insertEvent();

            if ($insertResult) {
                return redirect()->back()->with('success', 'Event has been added successfully!');
            } else {
                return redirect()->back()->with('error', 'Error with adding new event to database!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Inserting new event | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error', 'Error on inserting new event!');
        }
    }

    public function getEvent($id) {
        $singleEvent = $this->modelEvent->getEvent($id);
        if ($singleEvent) {
            return json_encode($singleEvent, true);
        }
    }

    public function editEvent(Request $request) {

        $rules = [
            'eventIdModal' => ['required'],
            'eventNameModal' => ['required', 'max:50'],
            'isFbEventModal' => ['required'],
        ];

        $messages = [
            'required' => 'Field :attribute is required!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $id = $request->get('eventIdModal');
            $this->modelEvent->event_name = $request->get('eventNameModal');
            $this->modelEvent->is_fb_event = $request->get('isFbEventModal');

            $updateResult = $this->modelEvent->editEvent($id);

            if ($updateResult == 1) {
                return redirect()->back()->with('success', 'Event has been edited successfully!');
            } else if ($updateResult == 0) {
                return redirect()->back()->with('info', 'No changes have been made to the event!');
            } else {
                return redirect()->back()->with('error', 'Error with editing event!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Editing event | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error', 'Error on editing event!');
        }
    }

    public function deleteEvent($id) {
        try {
            $deleteResult = $this->modelEvent->deleteEvent($id);
            if($deleteResult) {
                return redirect()->back()->with('success', 'Event has been deleted successfully!');
            } else {
                return redirect()->back()->with('error', 'Error with deleting event!');
            }
        } catch (\Exception $exception) {
            Log::error("Error: Deleting event | Exception: " . $exception->getMessage());
            return redirect()->back()->with('error', 'Error on deleting event!');
        }
    }
}
