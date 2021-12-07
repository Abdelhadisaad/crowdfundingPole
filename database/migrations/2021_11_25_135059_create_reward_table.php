<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward', function (Blueprint $table) {
            $table->id();
            $table->string("name", 20);
            $table->double("value");
            $table->integer("units");
            $table->integer("door_number");
            $table->bigInteger('vending_machine_id')->unsigned();
            $table->foreign('vending_machine_id')->references('id')->on('vending_machine');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reward');
    }
}
