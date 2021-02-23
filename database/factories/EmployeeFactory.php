<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'position' => $this->faker->jobTitle,
            'office' => $this->faker->company,
            'age' => $this->faker->numberBetween($min = 20, $max = 40),
            'startdate' => $this->faker->dateTime($max = 'now', $timezone = null),
            'salary' => $this->faker->numberBetween($min = 10000, $max = 90000) 
        ];
    }
}
