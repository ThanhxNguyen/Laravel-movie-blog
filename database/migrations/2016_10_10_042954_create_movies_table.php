<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->string('date_showing');
			$table->string('run_time');
			$table->string('director');
			$table->string('rate');
			$table->string('genre');
			$table->string('poster');
			$table->integer('category_id')->unsigned();
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
        Schema::drop('movies');
    }
}
