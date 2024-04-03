<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commande;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'societe',
        'adresse',
        'telephone',
        'email',
        'ville'
    ];

    public function commandes() {
        return $this->belongsToMany(Commande::class);
    }
}
