<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;
    protected $fillable = [
        "date",
        "no_bon",
        "origine_destination",
        "entrees",
        "sortie_def",
        "prix_uni",
        "existant",
        "montant_existant",
        "sorties_provisoires",
        "date_sorties_provisoires"
    ] ;
}
