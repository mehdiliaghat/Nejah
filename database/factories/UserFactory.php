<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'national_id' => '24204',
        'post_id' => $faker->postcode,
        'first_name' => 'mehdi',
        'last_name' => 'liaghat',
        'email' =>$faker->email,
        'sex' =>$faker->randomElement(['male','female']),
        'edu' => 'lisans',
        'phone' =>$faker->phoneNumber,
        'date_birth' => $faker->dateTimeBetween('-30 days', 'now')->format('Y-m-d'),
        'address' => $faker->address,
        'type' =>  $faker->randomElement(['Student','Prof','Manager','Operator','Employee']),
        'password' => '123456'
    ];
});
$factory->define(App\Assignedcourse::class, function (Faker $faker) {
    $users = \App\User::all()->pluck('id')->toArray();
    $user_id = $faker->randomElement($users);
    return [
        'course_id' => $faker->postcode,
        'post_id' => $faker->postcode,
        'course_gp'=>$faker->numberBetween(0, 10),
        'name' => $faker->name,
        'capacity'=>$faker->numberBetween(25, 30),
        'unit'=>$faker->numberBetween(0, 4),
        'date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'day'=>$faker->dayOfWeek('now'),
        'time'=>$faker->time($format = 'H:i:s', $max = 'now'),
        'location'=>'فنی مهندسی',
        'term'=>'922',
        'pdf_path'=>'notpdf',
        'prerequisite'=>'نامشخص',
        'need'=>'نا مشخص',
        'type'=>$faker->randomElement(['theory','action']),
        'prof'=>$faker->name,
        'user_id'=>$user_id,

    ];
});
