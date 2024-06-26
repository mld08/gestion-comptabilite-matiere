<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besoins extends Model
{
    use HasFactory;

    protected $fillable = [
        "designation_specification",
        "quantite",
        "date",
        "observations",
    ] ;
}
