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
        $event = Calendar::all();
        $heada = Calendar::take(1)->get();
        return Response::json(array(
            'event' => $event,
            'heada' => $heada,
        ));
    }

    public function addEvent(Request $request) {
        $period = new DatePeriod(new DateTime($request->date_from), new DateInterval('P1D'), new DateTime($request->date_to.' +1 day'));
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
            Calendar::whereIn('day',$request->checkboxval)->update(['event' =>  $request->event]);
            Calendar::whereNotIn('day',$request->checkboxval)->update(['event' =>  null]);
        }
        else{
            Calendar::whereBetween('date', [$request->date_from,$request->date_to])->update(['event' => null]);
        }
        
        return Response::json("success");

    }
}
