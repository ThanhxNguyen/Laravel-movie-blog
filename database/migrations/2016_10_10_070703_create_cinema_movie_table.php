<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCinemaMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinema_movie', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('cinema_id')->unsigned();
			$table->integer('movie_id')->unsigned();
			$table->foreign('cinema_id')->references('id')->on('cinemas')->onDelete('cascade');
			$table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
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
        Schema::drop('cinema_movie');
    }
}
