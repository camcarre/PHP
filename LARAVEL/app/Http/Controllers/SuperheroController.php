<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller
{
    public function create()
    {
        return view('new_hero');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pseudo' => 'required|string|max:100',
            'nom_reel' => 'required|string|max:100',
            'planete_origine' => 'required|string|max:100',
            'pouvoirs' => 'required|string|max:255',
            'ville_protegee' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        Superhero::create([
            'pseudo' => $request->pseudo,
            'nom_reel' => $request->nom_reel,
            'planete_origine' => $request->planete_origine,
            'pouvoirs' => $request->pouvoirs,
            'ville_protegee' => $request->ville_protegee,
            'description' => $request->description,
        ]);

        return redirect()->route('superheros.index')->with('success', 'Super-héros créé avec succès!');
    }

    public function index()
    {
        $heroes = Superhero::all();
        return view('superheros.index', compact('heroes'));
    }
}
