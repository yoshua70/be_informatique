<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereFactory extends Factory
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
            'libelle' => $this->faker->word(),
            //'prenom' => $this->faker->word(),
            //'courriel' => $this->faker->safeEmail(),
        ];
    }
}
