<?php

use App\User;
use App\Assignedcourse;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create();
        factory(Assignedcourse::class, 10)->create();
    }
}
