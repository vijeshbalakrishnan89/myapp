<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class third_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('third_table')->insert

        ([
            'vehicle_name'                  =>'maruthi',
            'vehicle_model'                 => '2021',
            'vehicle_year_of_manufacture'   =>'2020',
            'vehicle_engine_power'          => '3000',
            'vehicle_seat capacit'          =>'6',
            'created_at'                    => NOW(),
            'updated_at'                    => NOW()
        ]);
    }
}
