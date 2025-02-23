<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nom_reel',
        'pseudo',
        'sexe',
        'description',
        'ville_protection_id',
        'planete_origine_id',
        'equipe_id'
    ];
}
