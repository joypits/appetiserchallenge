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
                'date'        => '2018-07-01',
                'days'        => 1,
                'day'         => 'Sun'
            ],
            [
                'date'        => '2018-07-02',
                'days'        => 2,
                'day'         => 'Mon'
            ],
            [
                'date'        => '2018-07-03',
                'days'        => 3,
                'day'         => 'Tue'
            ],
            [
                'date'        => '2018-07-04',
                'days'        => 4,
                'day'         => 'Wed'
            ],
            [
                'date'        => '2018-07-05',
                'days'        => 5,
                'day'         => 'Thu'
            ],
            [
                'date'        => '2018-07-06',
                'days'        => 6,
                'day'         => 'Fri'
            ],
            [
                'date'        => '2018-07-07',
                'days'        => 7,
                'day'         => 'Sat'
            ],
            [
                'date'        => '2018-07-08',
                'days'        => 8,
                'day'         => 'Sun'
            ],
            [
                'date'        => '2018-07-09',
                'days'        => 9,
                'day'         => 'Mon'
            ],
            [
                'date'        => '2018-07-10',
                'days'        => 10,
                'day'         => 'Tue'
            ],
            [
                'date'        => '2018-07-11',
                'days'        => 11,
                'day'         => 'Wed'
            ],
            [
                'date'        => '2018-07-12',
                'days'        => 12,
                'day'         => 'Thu'
            ],
            [
                'date'        => '2018-07-13',
                'days'        => 13,
                'day'         => 'Fri'
            ],
            [
                'date'        => '2018-07-14',
                'days'        => 14,
                'day'         => 'Sat'
            ],
            [
                'date'        => '2018-07-15',
                'days'        => 15,
                'day'         => 'Sun'
            ],
            [
                'date'        => '2018-07-16',
                'days'        => 16,
                'day'         => 'Mon'
            ],
            [
                'date'        => '2018-07-17',
                'days'        => 17,
                'day'         => 'Tue'
            ],
            [
                'date'        => '2018-07-18',
                'days'        => 18,
                'day'         => 'Wed'
            ],
            [
                'date'        => '2018-07-19',
                'days'        => 19,
                'day'         => 'Thu'
            ],
            [
                'date'        => '2018-07-20',
                'days'        => 20,
                'day'         => 'Fri'
            ],
            [
                'date'        => '2018-07-21',
                'days'        => 21,
                'day'         => 'Sat'
            ],
            [
                'date'        => '2018-07-22',
                'days'        => 22,
                'day'         => 'Sun'
            ],
            [
                'date'        => '2018-07-23',
                'days'        => 23,
                'day'         => 'Mon'
            ],
            [
                'date'        => '2018-07-24',
                'days'        => 24,
                'day'         => 'Tue'
            ],
            [
                'date'        => '2018-07-25',
                'days'        => 25,
                'day'         => 'Wed'
            ],
            [
                'date'        => '2018-07-26',
                'days'        => 26,
                'day'         => 'Thu'
            ],
            [
                'date'        => '2018-07-27',
                'days'        => 27,
                'day'         => 'Fri'
            ],
            [
                'date'        => '2018-07-28',
                'days'        => 28,
                'day'         => 'Sat'
            ],
            [
                'date'        => '2018-07-29',
                'days'        => 29,
                'day'         => 'Sun'
            ],
            [
                'date'        => '2018-07-30',
                'days'        => 30,
                'day'         => 'Mon'
            ],
            [
                'date'        => '2018-07-31',
                'days'        => 31,
                'day'         => 'Tue'
            ],
        );
            
        Calendar::insert($dates);
    }
}
