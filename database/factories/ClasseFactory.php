<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'rate' => $faker->randomElement([1,2,3,4,5]),
            'libelle' => $this->faker->word(),
            'Cycle' => $this->faker->randomElement(['one','two']),
            'anneeAcademique' => $this->faker->randomElement(['one','two']),
        ];
    }
}
