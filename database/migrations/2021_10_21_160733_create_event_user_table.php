<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_user', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedBigInteger('event_id');
            // $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('event_id')->constrained();


            // $table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_users');
    }
}
