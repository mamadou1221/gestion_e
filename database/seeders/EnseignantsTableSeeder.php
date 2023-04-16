<?php

namespace Database\Seeders;

use App\Models\Enseignants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnseignantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enseignants = [
            ['nom' => 'Dupont', 'prenom' => 'Jean'],
            ['nom' => 'Martin', 'prenom' => 'Sophie'],
            ['nom' => 'Dubois', 'prenom' => 'Pierre'],
            ['nom' => 'Leroy', 'prenom' => 'Emilie'],
            ['nom' => 'Muller', 'prenom' => 'Luc'],
            ['nom' => 'Garcia', 'prenom' => 'Julie'],
            ['nom' => 'Fontaine', 'prenom' => 'Guillaume'],
            ['nom' => 'Rousseau', 'prenom' => 'Camille'],
            ['nom' => 'Bernard', 'prenom' => 'Louis'],
            ['nom' => 'Blanc', 'prenom' => 'Marie'],
            ['nom' => 'Moreau', 'prenom' => 'Antoine'],
            ['nom' => 'Boucher', 'prenom' => 'Laure'],
            ['nom' => 'Chevalier', 'prenom' => 'Philippe'],
            ['nom' => 'Fournier', 'prenom' => 'Caroline'],
            ['nom' => 'Girard', 'prenom' => 'Alexandre'],
            ['nom' => 'Henry', 'prenom' => 'Céline'],
            ['nom' => 'Jacquet', 'prenom' => 'Thibault'],
            ['nom' => 'Lambert', 'prenom' => 'Anaïs'],
            ['nom' => 'Lefebvre', 'prenom' => 'Thomas'],
            ['nom' => 'Legrand', 'prenom' => 'Chloé'],
            ['nom' => 'Meyer', 'prenom' => 'Baptiste'],
            ['nom' => 'Petit', 'prenom' => 'Claire'],
            ['nom' => 'Robin', 'prenom' => 'Simon'],
            ['nom' => 'Roux', 'prenom' => 'Elodie'],
        ];

        foreach ($enseignants as $enseignant) {
            Enseignants::create($enseignant);
        }
    }
}
