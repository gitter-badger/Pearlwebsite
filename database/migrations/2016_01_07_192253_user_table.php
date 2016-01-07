<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_table', function(Blueprint $table){
            $table->increments('id');
            $table->string('username',50)->unique();
            $table->date('birthday');
            $table->char('gender');
            $table->string('email',50);
            $table->string('password',50);
            $table->integer('phone');
            $table->integer('user_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_table');
    }
}
