<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    protected $fillable = [
        'real_name',
        'pseudo',
        'gender',
        'planet_origin',
        'description',
        'superpowers',
        'protection_city',
        'gadgets',
        'team',
        'vehicle'
    ];

    protected $casts = [
        'superpowers' => 'array',
        'gadgets' => 'array',
    ];
}
