<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MySecondTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mysecondtable')->insert
        ([
            'Name'              =>'jithesh',
            'Primary Address'   => 'Wayanad',
            'Secondery Address'   => 'Bangalore',
            'Primary phonenumber'   => '111111',
            'Secondery phonenumber'   => '2222222',
            'email'         =>'aaaa@mail.com'
        ]);

    }
}
