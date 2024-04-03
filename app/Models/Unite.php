<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Unite extends Model
{
    use HasFactory;

    protected $fillable = [
        'lib_unite'
    ];

    public function produits() {
        return $this->hasMany(Produit::class);
    }
}
