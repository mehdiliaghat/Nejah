<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordscoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recordscores', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('message');
            $table->integer('term');
            $table->boolean('protest');
            $table->float('score');
            $table->enum('state',['one','two']);
            $table->integer('user_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('assignedcourse_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('assignedcourse_id')->references('id')->on('assignedcourses')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('recordscores');
    }
}
