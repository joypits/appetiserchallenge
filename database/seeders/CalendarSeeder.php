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
                'date'                     => '2018-07-01',
                'day_number'               => 1,
                'day_string'               => 'Sun'
            ],
            [
                'date'                     => '2018-07-02',
                'day_number'               => 2,
                'day_string'               => 'Mon'
            ],
            [
                'date'                     => '2018-07-03',
                'day_number'               => 3,
                'day_string'               => 'Tue'
            ],
            [
                'date'                     => '2018-07-04',
                'day_number'               => 4,
                'day_string'               => 'Wed'
            ],
            [
                'date'                     => '2018-07-05',
                'day_number'               => 5,
                'day_string'               => 'Thu'
            ],
            [
                'date'                     => '2018-07-06',
                'day_number'               => 6,
                'day_string'               => 'Fri'
            ],
            [
                'date'                     => '2018-07-07',
                'day_number'               => 7,
                'day_string'               => 'Sat'
            ],
            [
                'date'                     => '2018-07-08',
                'day_number'               => 8,
                'day_string'               => 'Sun'
            ],
            [
                'date'                     => '2018-07-09',
                'day_number'               => 9,
                'day_string'               => 'Mon'
            ],
            [
                'date'                     => '2018-07-10',
                'day_number'               => 10,
                'day_string'               => 'Tue'
            ],
            [
                'date'                     => '2018-07-11',
                'day_number'               => 11,
                'day_string'               => 'Wed'
            ],
            [
                'date'                     => '2018-07-12',
                'day_number'               => 12,
                'day_string'               => 'Thu'
            ],
            [
                'date'                     => '2018-07-13',
                'day_number'               => 13,
                'day_string'               => 'Fri'
            ],
            [
                'date'                     => '2018-07-14',
                'day_number'               => 14,
                'day_string'               => 'Sat'
            ],
            [
                'date'                     => '2018-07-15',
                'day_number'               => 15,
                'day_string'               => 'Sun'
            ],
            [
                'date'                     => '2018-07-16',
                'day_number'               => 16,
                'day_string'               => 'Mon'
            ],
            [
                'date'                     => '2018-07-17',
                'day_number'               => 17,
                'day_string'               => 'Tue'
            ],
            [
                'date'                     => '2018-07-18',
                'day_number'               => 18,
                'day_string'               => 'Wed'
            ],
            [
                'date'                     => '2018-07-19',
                'day_number'               => 19,
                'day_string'               => 'Thu'
            ],
            [
                'date'                     => '2018-07-20',
                'day_number'               => 20,
                'day_string'               => 'Fri'
            ],
            [
                'date'                     => '2018-07-21',
                'day_number'               => 21,
                'day_string'               => 'Sat'
            ],
            [
                'date'                     => '2018-07-22',
                'day_number'               => 22,
                'day_string'               => 'Sun'
            ],
            [
                'date'                     => '2018-07-23',
                'day_number'               => 23,
                'day_string'               => 'Mon'
            ],
            [
                'date'                     => '2018-07-24',
                'day_number'               => 24,
                'day_string'               => 'Tue'
            ],
            [
                'date'                     => '2018-07-25',
                'day_number'               => 25,
                'day_string'               => 'Wed'
            ],
            [
                'date'                     => '2018-07-26',
                'day_number'               => 26,
                'day_string'               => 'Thu'
            ],
            [
                'date'                     => '2018-07-27',
                'day_number'               => 27,
                'day_string'               => 'Fri'
            ],
            [
                'date'                     => '2018-07-28',
                'day_number'               => 28,
                'day_string'               => 'Sat'
            ],
            [
                'date'                     => '2018-07-29',
                'day_number'               => 29,
                'day_string'               => 'Sun'
            ],
            [
                'date'                     => '2018-07-30',
                'day_number'               => 30,
                'day_string'               => 'Mon'
            ],
            [
                'date'                     => '2018-07-31',
                'day_number'               => 31,
                'day_string'               => 'Tue'
            ],
        );
            
        Calendar::insert($dates);
    }
}
