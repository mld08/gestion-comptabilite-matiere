<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unite;
use App\Models\Categorie;
use App\Models\Commande;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'unite_id',
        'categorie_id',
        'cod_produit',
        'designation',
        'quantite_stock',
        'quantite_minimale',
        'prix_unitaire'
    ];
    public function unite() {
        return $this->belongsTo(Unite::class);
    }
    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
    public function commandes() {
        return $this->belongsToMany(Commande::class);
    }

}

