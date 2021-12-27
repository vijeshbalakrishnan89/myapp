<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicletable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicletable', function (Blueprint $table) {
            $table->id('vehicle_id');
            $table->string('vehicle_brand',200);
            $table->string('vehicle_model',200);
            $table->string('vehicle_variants',200);
            $table->string('vehicle_manufacturer_year',200);
            $table->string('vehicle_seat_capacity',200);
            $table->string('vehicle_engine_power',200);
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
        Schema::dropIfExists('vehicletable');
    }
}
