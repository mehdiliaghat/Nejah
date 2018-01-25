<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record__scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_student');
            $table->integer('id_course');
            $table->integer('id_prof');
            $table->string('message');
            $table->integer('nyear');
            $table->boolean('protest');
            $table->float('score');
            $table->boolean('status');
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
        Schema::dropIfExists('record__scores');
    }
}
