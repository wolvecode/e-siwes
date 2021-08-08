<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'email' => 'super@gmail.com',
                'role' => 1
            ],
            [
                'email' => 'admin@gmail.com',
                'role' => 2
            ],
            [
                'email' => 'supervisor@gmail.com',
                'role' => 3,
            ]
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
