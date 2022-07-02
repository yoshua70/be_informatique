<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Classe::factory(10)->create();
        \App\Models\Etudiant::factory(50)->create();
        \App\Models\Enseignant::factory(10)->create();
        \App\Models\Matiere::factory(5)->create();

        foreach (range(1, 10 ) as $i) {
            \App\Models\Cour::factory(5)->create([
                'classe_id' => $i,
                'enseignant_id' => rand(1, 10),
                'matiere_id' => rand(1, 5),
            ]);
        }

        foreach (range(1, 50 ) as $i) {
            \App\Models\Encadrement::factory(5)->create([
                'etudiant_id' => $i,
                'enseignant_id' => rand(1, 10),
            ]);
        }

        foreach (range(1, 50 ) as $i) {
            \App\Models\ClasseEtudiant::factory(5)->create([
                'etudiant_id' => $i,
                'classe_id' => rand(1, 10),
            ]);
        }
    }
}
