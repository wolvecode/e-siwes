<?php

namespace Database\Seeders;

use App\Models\Session;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $start_year = 15;
        $stop_year = 21;

        for ($start = $start_year; $start <= $stop_year; $start++) {
            // we want the format '2017/2018'
            $next_session = $start + 1;
            $session = "20${start}/20${next_session}";

            Session::factory()->create(['year' => $session]);
        }
    }
}
