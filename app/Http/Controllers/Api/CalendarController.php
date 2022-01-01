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
        $heada = Calendar::take(1)->get(); //take only 1 record from calendar event
        return Response::json(array(
            'event' => $event,
            'heada' => $heada,
        ));
    }

    public function addCalendar(Request $request) {
        $period = new DatePeriod(new DateTime($request->date_from), new DateInterval('P1D'), new DateTime($request->date_to.' +1 day')); // get the date year, month and day from day 1 to day end of specific date range
        foreach ($period as $date) {
            $dates = $date->format("Y-m-d");
            $day = $date->format("d");
            $days = $date->format("D");
            Calendar::updateOrCreate([
                'date'  => $dates,
                'days'  => $day,
                'day'   => $days
            ]);
        }

        if($request->has('checkboxval')){
            Calendar::whereIn('day',$request->checkboxval)->update(['event' =>  $request->event]); //check and update event if calendar day is present from the checkbox value
            Calendar::whereNotIn('day',$request->checkboxval)->update(['event' =>  null]); // check and update event to null if calendar day is not present from the checkbox value
        }
        else{
            Calendar::whereBetween('date', [$request->date_from,$request->date_to])->update(['event' => null]); // check and update event to null if checkbox value is null on the specific date range
        }
        
        return Response::json("success");

    }
}
