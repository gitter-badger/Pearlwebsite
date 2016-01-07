<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('reservation_table', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->date('checkin');
            $table->date('checkout');
            $table->date('reservation_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservation_table');
    }
}
