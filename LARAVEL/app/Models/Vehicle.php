<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    public function superheros()
    {
        return $this->belongsToMany(Superhero::class, 'superheros_vehicules');
    }
}

