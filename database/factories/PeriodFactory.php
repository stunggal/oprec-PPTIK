<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // period beetwen 1440 - 1449 must unique
            'period' => $this->faker->unique()->numberBetween(1440, 1449),
        ];
    }
}
