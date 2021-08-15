<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reports = [
            [

                'student_id' => 1,
            ],
            [

                'student_id' => 2,
            ],
            [

                'student_id' => 3,
            ],
            [
                'student_id' => 4,
            ],
            [
                'student_id' => 5,
            ],
            [
                'student_id' => 6,
            ],

        ];

        foreach ($reports as $report) {
            Report::factory()->create($report);
        }
    }
}
