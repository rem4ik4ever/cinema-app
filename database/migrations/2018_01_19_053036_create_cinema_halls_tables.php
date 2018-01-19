<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCinemaHallsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinema_halls', function($table) {
            $table->increments('id');
            $table->string('name')->required();
            $table->enum('type', ['IMAX', 'standart']);
            $table->enum('status', ['active', 'closed', 'maintenance']);
            $table->integer('numberOfSeats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinema_halls');
    }
}
