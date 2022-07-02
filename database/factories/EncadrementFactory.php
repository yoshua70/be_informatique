<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EncadrementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'theme' => $this->faker->randomElement(['one','two']),
            'anneeAcademique' => $this->faker->randomElement(['one','two']),
        ];
    }
}
