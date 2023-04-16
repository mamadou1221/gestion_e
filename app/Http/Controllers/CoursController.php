<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niveau;
use App\Models\Cours;
use Illuminate\Support\Facades\DB;
use App\Models\Evaluations;

class CoursController extends Controller
{
    public function niveau($niveau)
    {
        $niveau_id = Niveau::where('libelle', $niveau)->firstOrFail()->id_niveau;
        $cours = Cours::where('id_niveau', $niveau_id)->get();

        switch ($niveau) {
            case 'l1':
                return view('l1', compact('cours'));
                break;
            case 'l2':
                return view('l2', compact('cours'));
                break;
            case 'l3':
                return view('l3', compact('cours'));
                break;
            default:
                abort(404);
                break;
        }
    }

   public function showEval($niveau, $id_cours)
{
    $cours = Cours::findOrFail($id_cours);
    // Récupérer le cours correspondant à $id_cours avec les données de l'enseignant associé
    $cours = Cours::with('enseignants')->findOrFail($id_cours);

    // Récupérer les évaluations liées à $id_cours
    $evaluations = DB::table('evaluations')
                    ->join('etudiants', 'evaluations.id_etudiant', '=', 'etudiants.id_etudiant')
                    ->join('users', 'etudiants.id', '=', 'users.id')
                    ->join('cours', 'evaluations.id_cours', '=', 'cours.id_cours')
                    ->join('enseignants', 'cours.id_enseignant', '=', 'enseignants.id_enseignant')
                    ->select('evaluations.id_evaluation', 'evaluations.note', 'evaluations.commentaire', 'evaluations.date_evaluation', 'users.name', 'cours.intitule', 'enseignants.nom', 'enseignants.prenom')
                    ->where('evaluations.id_cours', '=', $id_cours)
                    ->get();

    // Passer les données à la vue
    return view('apercus', compact('cours', 'evaluations'));
}



}
