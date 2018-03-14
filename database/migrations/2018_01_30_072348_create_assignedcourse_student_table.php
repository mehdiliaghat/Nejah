<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedcourseStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignedcourse_student', function (Blueprint $table) {
             $table->integer('assignedcourse_id')->unsigned()->index();
             $table->foreign('assignedcourse_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
             $table->integer('student_id')->unsigned()->index();
             $table->foreign('student_id')->references('id')->on('assignedcourses')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignedcourse_student');
    }
}
