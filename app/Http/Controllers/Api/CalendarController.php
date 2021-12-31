<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calendar;
use App\Models\CalendarDates;
use Response;
use DatePeriod;
use DateTime;
use DateInterval;

class CalendarController extends Controller
{
    public function showEvent(){
        //$event = Calendar::leftjoin('calendar_dates','calendar_dates.calendar_id','calendars.id')->select('calendars.event','calendar_dates.days_num','calendar_dates.days_str')->get();
        $event = Calendar::all();
        return Response::json($event);
    }

    public function addEvent(Request $request) {
        
        
        $event = Calendar::create(
                                            [
                                                'event'         => $request->event,
                                                'date_from'     => $request->date_from,
                                                'date_to'       => $request->date_to
                                            ]);
                 
        // $period = new DatePeriod(new DateTime($request->date_from), new DateInterval('P1D'), new DateTime($request->date_to.' +1 day'));
        // foreach ($period as $date) {
        //     CalendarDates::updateOrCreate([
        //         'calendar_id'     => $event->id,
        //         'days_num'        => $date->format("d"),
        //         'days_str'        => $date->format("D"),
        //     ]);
        // }

        return Response::json(true);
       // echo $test2['checkboxval'] = implode(' , ', $request->checkboxval);
    }
}
