<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTankstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tankstatus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sensor_1')->nullable();	
            $table->integer('sensor_2')->nullable();	
            $table->integer('sensor_3')->nullable();	
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
        Schema::dropIfExists('tankstatus');
    }
}
