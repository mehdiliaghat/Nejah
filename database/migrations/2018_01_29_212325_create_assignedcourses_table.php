<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignedcourses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id');
            $table->integer('course_gp');
            $table->string('name');
            $table->integer('capacity');
            $table->integer('unit');
            $table->string('date');
            $table->string('day');
            $table->time('time');
            $table->string('location');
            $table->integer('term');
            $table->string('prerequisite');
            $table->string('need');
            $table->enum('type' ,['theory','action']);
            $table->string('prof');
            $table->string('pdf_path');
            $table->string('post_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('assignedcourses');
    }
}
