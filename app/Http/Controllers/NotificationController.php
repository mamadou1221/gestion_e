<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use App\Models\Etudiants;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function store(Request $request)
    {

        try {
            $notification = new Notification();
            $notification->id_niveau = $request->input('id_niveau');
            $notification->message = $request->input('message');
            $notification->save();
            return redirect('/admin/home')->with('success', 'La notification a été envoyée avec succès.');
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }



    }

    public function histo() {
        $notifications = Notification::join('niveau', 'notifications.id_niveau', '=', 'niveau.id_niveau')
                                    ->select('notifications.*','niveau.libelle')
                                    ->get();
        return view('historiques', compact('notifications'));
    }

    public function donne()
    {
        $user = Auth::user();
        $etudiant_id = Etudiants::where('id', $user->id)->value('id_etudiant');
        $niveaux = Etudiants::where('id_etudiant', $etudiant_id)->pluck('id_niveau')->toArray();

        $notifications = DB::table('notifications')
            ->join('niveau', 'notifications.id_niveau', '=', 'niveau.id_niveau')
            ->join('etudiants', 'niveau.id_niveau', '=', 'etudiants.id_niveau')
            ->where('etudiants.id_etudiant', '=',  $etudiant_id)
            ->orderBy('notifications.created_at', 'desc')
            ->select('notifications.*')
            ->limit(5)
            ->get();





        $cours = DB::table('cours')
            ->join('enseignants', 'cours.id_enseignant', '=', 'enseignants.id_enseignant')
            ->join('niveau', 'cours.id_niveau', '=', 'niveau.id_niveau')
            ->select('cours.id_cours', 'cours.intitule', 'enseignants.nom', 'enseignants.prenom', 'niveau.libelle as niveau')
            ->whereIn('niveau.id_niveau', $niveaux)
            ->get();

        return view('home', compact('cours', 'notifications'));




    }










    // public function index()
    // {
    //     $notifications = Notification::where('id_niveau', Auth::user()->etudiants->id_niveau)
    //         ->where('vu', false)
    //         ->get();
    //     return view('etudiants.notification.home', compact('notifications'));
    // }
}
