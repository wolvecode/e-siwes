<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class CreateStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->count(1)->create();
    }
}
