<?php

namespace Database\Factories;


use App\Models\Acceptance;
use App\Models\Organization;
use App\Models\Report;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'matric_no' => mt_rand(815, 830),
            'user_id' => 1,
            'organization_id' => 1,
            'session_id' => 1,
            'bio' => $this->faker->sentence(),
            'git_url' => 'www.github.com/wolvecode',
            'linkedin_url' => 'www.linkedin.com/wolvecode',
            'password' => '$2y$10$BdPPnnmGKMdEPTtPa8ZCQe5rZzTY8gtpZxDgfRdUgg0hdZaZJs8Ae', // password
            'remember_token' => Str::random(10),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($student) {
            // get a random organization's id.
            $organization_id = Organization::inRandomOrder()->first()->id;

            $supervisor_id = User::inRandomOrder()->where('role', 3)->first()->id;


            $student->update(['organization_id' => $organization_id, 'user_id' => $supervisor_id, 'assign' => true]);

            $student->reports()->createMany(Report::factory()->count(mt_rand(8, 12))->make()->toArray());

            $student->acceptance()->create(
                Acceptance::factory()
                    ->make(['organization_id' => $organization_id])
                    ->toArray()
            );
        });
    }
}
