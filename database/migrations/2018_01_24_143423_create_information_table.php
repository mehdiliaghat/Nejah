<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('education');
            $table->string('email');
            $table->integer('id_nationality');
            $table->string('num_phone');
            $table->string('photo');
            $table->boolean('sex');
            $table->integer('manager_id')->undigned()->nullable();
            $table->integer('student_id')->undigned();
            $table->integer('prof_id')->undigned();
            $table->foreign('manager_id')->reference('id')
                ->on('manager')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('student_id')->reference('id')->on('students');
            $table->foreign('prof_id')->reference('id')->on('profs');
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
        Schema::dropIfExists('information');
    }
}
