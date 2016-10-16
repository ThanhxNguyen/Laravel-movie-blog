<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summaries', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('order_id')->unsigned();
			$table->integer('movie_id')->unsigned();
			$table->integer('cinema_id')->unsigned();
			$table->integer('session_id')->unsigned();
			$table->integer('ticket_type_id')->unsigned();
			$table->integer('quantity');
			$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
        Schema::drop('summaries');
    }
}
