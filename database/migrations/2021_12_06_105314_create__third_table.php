<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('third_table', function (Blueprint $table) {
            $table->id('third_table_user_id');
            $table->string('vehicle_name',200);
            $table->string('vehicle_model',200);
            $table->string('vehicle_year_of_manufacture',200);
            $table->string('vehicle_engine_power',200);
            $table->string('vehicle_seat capacit',200);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thirdtable');
    }
}
