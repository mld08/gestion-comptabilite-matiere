<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class HomeController extends Controller
{
    public function index(){
        $commandes = Commande::all();

        // Préparer les données pour le graphique
        $montants = [];
        $dates = [];

        foreach ($commandes as $commande) {
            $dates[] = $commande->date_commande;
            $montants[] = $commande->montant;
        }
        return view('home', [
            "commandes" => Commande::orderBy('created_at', 'asc')->paginate(4),
            'montants' => $montants,
            'dates' => $dates
        ]);
    }
}
