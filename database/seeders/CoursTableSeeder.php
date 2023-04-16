<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insertion de données pour le niveau L1
        DB::table('cours')->insert([
            'intitule' => 'Introduction à la programmation',
            'id_niveau' => 1, // 1 correspond à l'id du niveau L1
            'id_enseignant' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Algorithme1',
            'id_niveau' => 1,
            'id_enseignant' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Html-Css',
            'id_niveau' => 1, // 1 correspond à l'id du niveau L1
            'id_enseignant' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Architecture des Ordinateurs',
            'id_niveau' => 1,
            'id_enseignant' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Electro numerique',
            'id_niveau' => 1, // 1 correspond à l'id du niveau L1
            'id_enseignant' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Langage Python',
            'id_niveau' => 1,
            'id_enseignant' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Reseaux',
            'id_niveau' => 1, // 1 correspond à l'id du niveau L1
            'id_enseignant' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Linux',
            'id_niveau' => 1,
            'id_enseignant' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insertion de données pour le niveau L2
        DB::table('cours')->insert([
            'intitule' => 'Php',
            'id_niveau' => 2, // 2 correspond à l'id du niveau L2
            'id_enseignant' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Réseaux informatiques',
            'id_niveau' => 2,
            'id_enseignant' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Recherche Operationnel',
            'id_niveau' => 2, // 2 correspond à l'id du niveau L2
            'id_enseignant' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Javascript',
            'id_niveau' => 2,
            'id_enseignant' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Python Avance',
            'id_niveau' => 2, // 2 correspond à l'id du niveau L2
            'id_enseignant' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'C++',
            'id_niveau' => 2,
            'id_enseignant' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Anglais',
            'id_niveau' => 2, // 2 correspond à l'id du niveau L2
            'id_enseignant' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Base de Donnee',
            'id_niveau' => 2,
            'id_enseignant' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insertion de données pour le niveau L3
        DB::table('cours')->insert([
            'intitule' => 'Theorie des Langages',
            'id_niveau' => 3, // 3 correspond à l'id du niveau L3
            'id_enseignant' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Theorie des Graphes',
            'id_niveau' => 3,
            'id_enseignant' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Java',
            'id_niveau' => 3, // 3 correspond à l'id du niveau L3
            'id_enseignant' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Programmation Mobile',
            'id_niveau' => 3,
            'id_enseignant' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Algorithme3',
            'id_niveau' => 3, // 3 correspond à l'id du niveau L3
            'id_enseignant' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Entrepot de Donnee',
            'id_niveau' => 3,
            'id_enseignant' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Base de Donnee Avance',
            'id_niveau' => 3, // 3 correspond à l'id du niveau L3
            'id_enseignant' => 23,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cours')->insert([
            'intitule' => 'Anglais',
            'id_niveau' => 3,
            'id_enseignant' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
