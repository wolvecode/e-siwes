<?php

namespace Database\Seeders;

use App\Models\Acceptance;
use Illuminate\Database\Seeder;

class AcceptanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $acceptances = [
//            [
//
//                'student_id' => 1,
//                'organisation_id' => 1,
//            ],
//            [
//
//                'student_id' => 2,
//                'organisation_id' => 2,
//            ],
//            [
//
//                'student_id' => 3,
//                'organisation_id' => 3,
//            ],
//            [
//                'student_id' => 4,
//                'organisation_id' => 4,
//            ],
//            [
//                'student_id' => 5,
//                'organisation_id' => 5,
//            ],
//            [
//                'student_id' => 6,
//                'organisation_id' => 6,
//            ],
//
//        ];
//
//        foreach ($acceptances as $acceptance) {
            Acceptance::factory()->create();
//        }
    }
}
