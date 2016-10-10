<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_session', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('session_id')->unsigned();
			$table->integer('movie_id')->unsigned();
			$table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
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
        Schema::drop('movie_session');
    }
}
