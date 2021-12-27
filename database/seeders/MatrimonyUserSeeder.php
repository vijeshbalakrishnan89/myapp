<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MatrimonyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matrimony_users')->insert([
            'name'          =>'Jithesh Jose',
            'designation'   => 'Developer'
        ]);
    }
}
