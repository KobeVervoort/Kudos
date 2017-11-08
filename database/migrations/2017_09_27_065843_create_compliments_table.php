<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compliments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender')->unsigned();
            $table->foreign('sender')->references('id')->on('users');
            $table->integer('receiver')->unsigned();
            $table->foreign('receiver')->references('id')->on('users');
            $table->text('body');
            $table->boolean('seen')->default(0);
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
        Schema::dropIfExists('compliments');
    }
}
