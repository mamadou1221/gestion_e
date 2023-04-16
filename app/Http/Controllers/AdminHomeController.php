<?php

namespace App\Http\Controllers;

use App\Models\Evaluations;
use App\Models\Niveau;
use Carbon\Carbon;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Events\NotificationSent;

class AdminHomeController extends Controller
{
    public function l1()
    {
        if (auth()->user()->name==true) {
            return view('l1');
        }else {
            return view('login');
        }
    }
    public function l2()
    {
        if (auth()->user()->name==true) {
            return view('l2');
        }else {
            return view('login');
        }
    }
    public function l3()
    {
        if (auth()->user()->name==true) {
            return view('l3');
        }else {
            return view('login');
        }

    }


    public function showEnvoyerMessage()
    {


        // Retrieve the `niveau` data from the database
        $niveau = Niveau::all();

        // Render the form view and pass the `niveau` data to it
        return view('messagerie', ['niveau' => $niveau]);

    }

    public function showCourbe()
    {
        // récupérer les données de la table "evaluations"
        $evaluations = DB::table('evaluations')->get();

        // initialiser un tableau pour les données de la courbe
        $data = array(
            array('Date', 'Note')
        );

        // parcourir les évaluations et ajouter les données à $data
        foreach ($evaluations as $evaluation) {
            $data[] = array($evaluation->date_evaluation, $evaluation->note);
        }


        // convertir $data en JSON pour l'utiliser avec Google Charts
        $data = json_encode($data);

        // passer les données à la vue
        return view('admin-home', compact('data'));

    }







}
