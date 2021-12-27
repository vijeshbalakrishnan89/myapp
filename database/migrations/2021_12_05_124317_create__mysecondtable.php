<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMysecondtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mysecondtable', function (Blueprint $table) {
            $table->id('mysecondtable_user_id');
            $table->string('Name',200);
            $table->string('Primary Address',200);
            $table->string('Secondery Address',200);
            $table->string('Primary phonenumber',200);
            $table->string('Secondery phonenumber',200);
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
        Schema::dropIfExists('mysecondtable');
    }
}
