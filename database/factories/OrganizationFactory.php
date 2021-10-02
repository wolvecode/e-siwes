<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'state' => $this->faker->city(),
            'city' => $this->faker->city(),
            'website' => $this->faker->url(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'verified' => true,
            'contact' => $this->faker->phoneNumber(),
        ];
    }
}
