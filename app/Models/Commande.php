<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Produit;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_commande',
        'date_commande',
        'sujet_commande',
        'montant',
        'statut_commande',
        'type_paiement',
        'cod_facture'
    ];
    public function clients() {
        return $this->belongsToMany(Client::class);
    }
    public function produits(){
        return $this->belongsToMany(Produit::class);
    }
}
