<?php
use App\Assignedcourse;
use Illuminate\Database\Seeder;

class AssignedcoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Assignedcourse::class, 10)->create();

    }
}
