<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calendar;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dates = array(
            [
                'days'         => 1,
                'day'         => 'Sun'
            ],
            [
                'days'         => 2,
                'day'         => 'Mon'
            ],
            [
                'days'         => 3,
                'day'         => 'Tue'
            ],
            [
                'days'         => 4,
                'day'         => 'Wed'
            ],
            [
                'days'         => 5,
                'day'         => 'Thu'
            ],
            [
                'days'         => 6,
                'day'         => 'Fri'
            ],
            [
                'days'         => 7,
                'day'         => 'Sat'
            ],
            [
                'days'         => 8,
                'day'         => 'Sun'
            ],
            [
                'days'         => 9,
                'day'         => 'Mon'
            ],
            [
                'days'         => 10,
                'day'         => 'Tue'
            ],
            [
                'days'         => 11,
                'day'         => 'Wed'
            ],
            [
                'days'         => 12,
                'day'         => 'Thu'
            ],
            [
                'days'         => 13,
                'day'         => 'Fri'
            ],
            [
                'days'         => 14,
                'day'         => 'Sat'
            ],
            [
                'days'         => 15,
                'day'         => 'Sun'
            ],
            [
                'days'         => 16,
                'day'         => 'Mon'
            ],
            [
                'days'         => 17,
                'day'         => 'Tue'
            ],
            [
                'days'         => 18,
                'day'         => 'Wed'
            ],
            [
                'days'         => 19,
                'day'         => 'Thu'
            ],
            [
                'days'         => 20,
                'day'         => 'Fri'
            ],
            [
                'days'         => 21,
                'day'         => 'Sat'
            ],
            [
                'days'         => 22,
                'day'         => 'Sun'
            ],
            [
                'days'         => 23,
                'day'         => 'Mon'
            ],
            [
                'days'         => 24,
                'day'         => 'Tue'
            ],
            [
                'days'         => 25,
                'day'         => 'Wed'
            ],
            [
                'days'         => 26,
                'day'         => 'Thu'
            ],
            [
                'days'         => 27,
                'day'         => 'Fri'
            ],
            [
                'days'         => 28,
                'day'         => 'Sat'
            ],
            [
                'days'         => 29,
                'day'         => 'Sun'
            ],
            [
                'days'         => 30,
                'day'         => 'Mon'
            ],
            [
                'days'         => 31,
                'day'         => 'Tue'
            ],
        );
            
        Calendar::insert($dates);
    }
}
