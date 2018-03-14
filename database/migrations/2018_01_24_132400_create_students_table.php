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
            $table->char('ave');
            $table->char('ave_term');
            $table->integer('unit_getting');
            $table->integer('unit_spent');
            $table->integer('unit_term');
            $table->enum('state_term',['normal','Conditional']);
            $table->enum('state' ,['Cancel' ,'expulsion','vacation','Study']);
            $table->integer('term');
            $table->string('arrival');
            $table->enum('nighday',['night','day']);
            $table->string('num_term');
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
        Schema::dropIfExists('students');
    }
}
