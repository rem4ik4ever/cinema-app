<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movieId')->unsigned();
            $table->foreign('movieId')->references('id')->on('movies');

            $table->integer('cinemaHallId')->unsigned();
            $table->foreign('cinemaHallId')->references('id')->on('cinema_halls');

            $table->dateTime('datetime');
            $table->enum('status', ['ontime', 'cancelled', 'delayed']);

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
        Schema::dropIfExists('seances');
    }
}
