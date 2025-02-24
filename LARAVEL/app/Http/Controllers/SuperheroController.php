<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller
{
    public function create()
    {
        return view('superheros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_reel' => 'required|string|max:100',
            'pseudo' => 'required|string|max:100',
            'sexe' => 'required|in:Homme,Femme,Autre',
            'description' => 'nullable|string',
            'ville_protection_id' => 'nullable|integer',
            'planete_origine_id' => 'nullable|integer',
            'equipe_id' => 'nullable|integer',
        ]);

        Superhero::create([
            'user_id' => 1,
            'nom_reel' => $request->nom_reel,
            'pseudo' => $request->pseudo,
            'sexe' => $request->sexe,
            'description' => $request->description,
            'ville_protection_id' => $request->ville_protection_id,
            'planete_origine_id' => $request->planete_origine_id,
            'equipe_id' => $request->equipe_id,
        ]);

        return redirect()->route('superheros.index')->with('success', 'Super-héros créé avec succès !');
    }

    public function index()
    {
        $heroes = Superhero::all();
        return view('superheros.index', compact('heroes'));
    }
}
