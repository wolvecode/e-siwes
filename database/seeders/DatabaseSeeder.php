<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            OrganizationSeeder::class,
            UsersTableSeeder::class,
            StudentsTableSeeder::class,
            SessionSeeder::class,
            ReportSeeder::class,
            AcceptanceSeeder::class,
        ]);
    }
}
