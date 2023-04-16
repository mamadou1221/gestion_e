<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Evaluations;
use App\Models\Cours;
use App\Models\Enseignants;
use App\Models\Etudiants;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function formulaire($id_cours)
    {
        $cours = Cours::find($id_cours);
        $enseignant = Enseignants::find($cours->id_enseignant);

        return view('formulaire', [
            'cours' => $cours,
            'enseignant' => $enseignant,
        ]);
    }

    public function soumettre(Request $request, $id_cours)
    {
        $user = Auth::user();
        $id_etudiant = Etudiants::where('id', $user->id)->value('id_etudiant');

        $request->validate([
            'note' => 'required|integer|min:0|max:10',
            'commentaire' => 'nullable|string',
        ]);

        $evaluation = new Evaluations();
        $evaluation->id_cours = $id_cours;
        $evaluation->id_etudiant =  $id_etudiant;
        $evaluation->note = $request->note;
        $evaluation->commentaire = $request->commentaire;
        $evaluation->date_evaluation =now();
        $evaluation->save();

        return redirect()->route('home')->with('success', 'Evaluation soumise avec succès.');
    }



}
