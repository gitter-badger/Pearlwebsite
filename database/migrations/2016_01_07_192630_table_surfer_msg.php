<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSurferMsg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('table_surfer_msg', function(Blueprint $table){
            $table->increments('id');
            $table->string('ip',50);
            $table->string('username',50);
            $table->string('email',50);
            $table->integer('phone');
            $table->text('msg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('table_surfer_msg');
    }
}
