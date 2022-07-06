<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date' => $this->faker->date,
            'event' => $this->faker->sentence,
            'responsible' => $this->faker->randomElement(['Hanafi', 'siraj', 'nasheh', 'wahid', 'imam', 'ali', 'sidiq', 'adiel', 'putra', 'yt']),
            'place' => $this->faker->sentence,
            'department' => $this->faker->randomElement(['networking', 'administration', 'development']),
        ];
    }
}
