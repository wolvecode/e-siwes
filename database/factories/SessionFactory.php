<?php

namespace Database\Factories;

use App\Models\Session;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{


    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Session::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => mt_rand(2018, 2025),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($session) {
            $year = substr(explode('/', $session->year)[0], 2);
            $end = mt_rand(70, 102);

            for ($start = 34; $start < $end; $start++) {
                $matric_no = sprintf("%s%s/47CS/%s",
                    $year, mt_rand(0, 1) ? 'D' : '',
                    str_pad($start, 3,
                        '0',
                        STR_PAD_LEFT));;

                Student::factory()
                    ->create([
                        'matric_no' => $matric_no,
                        'session_id' => $session->id,
                    ]);
            }
        });
    }
}
