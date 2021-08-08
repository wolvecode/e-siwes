<?php

namespace Database\Factories;

use App\Models\Student;
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
//            'name' => $this->faker->name(),
//            'email' => $this->faker->unique()->safeEmail(),
            'name'=> 'Adedeji Stephen',
            'email' => 'student@gmail.com',
            'matric_no' =>'18D/47CS/00815',
            'bio' => $this->faker->sentence(),
            'git_url' => 'www.github.com/wolvecode',
            'linkedin_url' => 'www.linkedin.com/wolvecode',
            'password'=> Hash::make('password'), // password
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
