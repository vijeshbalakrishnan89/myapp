<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyfirsttable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myfirsttable', function (Blueprint $table) {
            $table->id('myfirsttable_user_id');
            $table->string('Nmae',200);
            $table->string('Address',200);
            $table->string('phonenumber',200);
            $table->string('email',200);
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
        Schema::dropIfExists('_myfirsttable');
    }
}
