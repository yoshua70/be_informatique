<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourFactory extends Factory
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
            'anneeAcademique' => $this->faker->randomElement(['one','two']),
        ];
    }
}
