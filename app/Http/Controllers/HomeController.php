<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        //$commandes = Commande::all();

        // Préparer les données pour le graphique
        /*$montants = [];
        $dates = [];

        foreach ($commandes as $commande) {
            $dates[] = $commande->date_commande;
            $montants[] = $commande->montant;
        }*/
        $data = DB::table('besoins')
                    ->join('materiels', 'besoins.id', '=', 'materiels.id')
                    ->join('matieres', 'materiels.id', '=', 'matieres.id')
                    ->selectRaw('DATE(besoins.created_at) as date, COUNT(*) as count')
                    ->groupBy(DB::raw('DATE(besoins.created_at)')) // Inclure la colonne dans la clause groupBy
                    ->orderBy('date')
                    ->get();
        return view('home', ['data' => $data]);
    }
}
