<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'fournisseur_id',
        'reference',
        'nom',
        'description',
        'prix_achat',
        'prix_vente',
        'quantite'
    ];

    public function fournisseur() {
        return $this->belongsTo(Fournisseur::class);
    }
}
