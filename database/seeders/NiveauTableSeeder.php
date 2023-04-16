<?php

namespace Database\Seeders;

use App\Models\Niveau;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NiveauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $niveau = [
            ['libelle' => 'l1', ],
            ['libelle' => 'l2', ],
            ['libelle' => 'l3', ],

        ];

        foreach ($niveau as $niveau) {
            Niveau::create($niveau);
        }
    }
}
