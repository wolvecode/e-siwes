<?php

namespace Database\Seeders;

use App\Models\Organisation;
use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::factory()->count(20)->create();
    }
}
