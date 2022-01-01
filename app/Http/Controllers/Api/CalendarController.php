<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calendar;
use Response;
use DatePeriod;
use DateTime;
use DateInterval;

class CalendarController extends Controller
{
    public function showCalendar(){
        $event = Calendar::all(); //get all the calendar event record
        $dateHeader = Calendar::take(1)->get(); //take only 1 record from calendar event
        return Response::json(array(
            'event'      => $event,
            'dateHeader' => $dateHeader,
        ));
    }

    public function addCalendar(Request $request) {
        $period = new DatePeriod(new DateTime($request->date_from), new DateInterval('P1D'), new DateTime($request->date_to.' +1 day')); // get the date year, month and day from day 1 to day end of specific date range
        foreach ($period as $date) {
            $dates      = $date->format("Y-m-d");
            $day_number = $date->format("d");
            $day_string = $date->format("D");
            Calendar::updateOrCreate([
                'date'        => $dates,
                'day_number'  => $day_number,
                'day_string'  => $day_string
            ]);
        }

        if($request->has('checkboxval')){
            Calendar::whereIn('day_string',$request->checkboxval)->update(['event' =>  $request->event]); //check and update event if calendar day is present from the checkbox value
            Calendar::whereNotIn('day_string',$request->checkboxval)->update(['event' =>  null]); // check and update event to null if calendar day is not present from the checkbox value
        }
        else{
            Calendar::whereBetween('date', [$request->date_from,$request->date_to])->update(['event' => null]); // check and update event to null if checkbox value is null on the specific date range
        }
        
        return Response::json("success");

    }
}
