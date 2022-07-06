<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantFactory extends Factory
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
            'password' => $this->faker->password,
            'semester' => $this->faker->randomElement(['1', '3', '5', '7',]),
            'division' => $this->faker->randomElement(['networking', 'administration', 'development']),
            'prodi' => $this->faker->randomElement(['afi', 'saa', 'iqt', 'pba', 'tbi', 'pai', 'hes', 'pm', 'ei', 'mnj', 'hi', 'ilkom', 'ti', 'agro', 'tip', 'kkk',]),
        ];
    }
}
