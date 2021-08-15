<?php

namespace Database\Factories;

use App\Models\Acceptance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcceptanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Acceptance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'attachment' => $this->faker->word(),
            'student_id' => mt_rand(1,10),
            'organization_id' => mt_rand(1,10),
            'description' => $this->faker->sentence(5),
        ];
    }
}
