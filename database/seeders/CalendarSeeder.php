<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CalendarDates;

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
                'days_num'         => 1,
                'days_str'         => 'Sun'
            ],
            [
                'days_num'         => 2,
                'days_str'         => 'Mon'
            ],
            [
                'days_num'         => 3,
                'days_str'         => 'Tue'
            ],
            [
                'days_num'         => 4,
                'days_str'         => 'Wed'
            ],
            [
                'days_num'         => 5,
                'days_str'         => 'Thu'
            ],
            [
                'days_num'         => 6,
                'days_str'         => 'Fri'
            ],
            [
                'days_num'         => 7,
                'days_str'         => 'Sat'
            ],
            [
                'days_num'         => 8,
                'days_str'         => 'Sun'
            ],
            [
                'days_num'         => 9,
                'days_str'         => 'Mon'
            ],
            [
                'days_num'         => 10,
                'days_str'         => 'Tue'
            ],
            [
                'days_num'         => 11,
                'days_str'         => 'Wed'
            ],
            [
                'days_num'         => 12,
                'days_str'         => 'Thu'
            ],
            [
                'days_num'         => 13,
                'days_str'         => 'Fri'
            ],
            [
                'days_num'         => 14,
                'days_str'         => 'Sat'
            ],
            [
                'days_num'         => 15,
                'days_str'         => 'Sun'
            ],
            [
                'days_num'         => 16,
                'days_str'         => 'Mon'
            ],
            [
                'days_num'         => 17,
                'days_str'         => 'Tue'
            ],
            [
                'days_num'         => 18,
                'days_str'         => 'Wed'
            ],
            [
                'days_num'         => 19,
                'days_str'         => 'Thu'
            ],
            [
                'days_num'         => 20,
                'days_str'         => 'Fri'
            ],
            [
                'days_num'         => 21,
                'days_str'         => 'Sat'
            ],
            [
                'days_num'         => 22,
                'days_str'         => 'Sun'
            ],
            [
                'days_num'         => 23,
                'days_str'         => 'Mon'
            ],
            [
                'days_num'         => 24,
                'days_str'         => 'Tue'
            ],
            [
                'days_num'         => 25,
                'days_str'         => 'Wed'
            ],
            [
                'days_num'         => 26,
                'days_str'         => 'Thu'
            ],
            [
                'days_num'         => 27,
                'days_str'         => 'Fri'
            ],
            [
                'days_num'         => 28,
                'days_str'         => 'Sat'
            ],
            [
                'days_num'         => 29,
                'days_str'         => 'Sun'
            ],
            [
                'days_num'         => 30,
                'days_str'         => 'Mon'
            ],
            [
                'days_num'         => 31,
                'days_str'         => 'Tue'
            ],
        );
            
        CalendarDates::insert($dates);
    }
}
