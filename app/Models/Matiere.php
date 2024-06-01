<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = [
        "date_operation",
        "no_comptes_nomenclature",
        "nature_matieres",
        "entrees_no_bon",
        "entrees_nbre_unites",
        "entrees_nature_unite",
        "sorties_no_bon",
        "sorties_nbre_unites",
        "sorties_nature_unite",
        "prix_uni",
        "montant_entrees",
        "montant_sorties",
        "sorties_provisoires",
        "observations",
    ] ;
}
