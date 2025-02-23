<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model {
    use HasFactory;

    protected $fillable = [
        'pseudo',
        'nom_reel',
        'planete_origine',
        'pouvoirs',
        'ville_protegee',
        'description',
        'image'
    ];
}
