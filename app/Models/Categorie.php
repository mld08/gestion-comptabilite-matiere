<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'lib_categorie'
    ];
    public function produits() {
        return $this->hasMany(Produit::class);
    }
}
