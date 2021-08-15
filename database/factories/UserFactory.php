<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         return [
             'name'=> $this->faker->name,
             'email' => $this->faker->email,
             'bio' => $this->faker->sentence(),
             'git_url' => $this->faker->url(),
             'linkedin_url' => $this->faker->url(),
             'role' => mt_rand(1,3),
             'password'=> '$2y$10$ZD97fRw7O/R2guXJJF0R2.YAzqX9LUviXjfXV4hCSnd602Cs6mPxW', // password
             'email_verified_at' => now(),
             'remember_token' => Str::random(10),
         ];
    }
}
