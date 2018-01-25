<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ave_nyear');
            $table->string('condition');
            $table->integer('current_semester');
            $table->integer('entering_year');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nightly_day');
            $table->string('nyear');
            $table->char('user');
            $table->char('pass');
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
        Schema::dropIfExists('students');
    }
}
