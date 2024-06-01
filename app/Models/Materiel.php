<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'designation',
        'quantite',
        'prix_unitaire',
        'prix_total',
        'fournisseur',
        'rc_fournisseur',
        'email',
        'telephone',
        'adresse'
    ];
}
