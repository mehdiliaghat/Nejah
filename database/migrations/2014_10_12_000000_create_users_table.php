<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->enum('type',['Student','Prof','Manager','Operator','Employee']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('post_id')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            $table->enum('sex',['male','female']);
            $table->string('edu');
            $table->string('phone');
            $table->string('date_birth');
            $table->string('address');
            $table->string('national_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
