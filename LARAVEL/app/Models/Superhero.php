<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_reel', 'pseudo', 'sexe', 'description',
        'user_id', 'ville_protection_id', 'planete_origine_id', 'equipe_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'ville_protection_id');
    }

    public function planet()
    {
        return $this->belongsTo(Planet::class, 'planete_origine_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'equipe_id');
    }

    public function superpowers()
    {
        return $this->belongsToMany(Superpower::class, 'superheros_superpouvoirs');
    }

    public function gadgets()
    {
        return $this->belongsToMany(Gadget::class, 'superheros_gadgets');
    }

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'superheros_vehicules');
    }
}

