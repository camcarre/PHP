<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('heroes', 'public');
        }

        Superhero::create([
            'pseudo' => $request->pseudo,
            'nom_reel' => $request->nom_reel,
            'planete_origine' => $request->planete_origine,
            'pouvoirs' => $request->pouvoirs,
            'ville_protegee' => $request->ville_protegee,
            'description' => $request->description,
            'image' => $imagePath ?? null
        ]);

        return redirect()->route('superheros.index')
            ->with('success', 'Super-héros créé avec succès!');
    }

    public function edit($id)
    {
        $superhero = Superhero::findOrFail($id);
        return view('heroedit', compact('superhero'));
    }

    public function update(Request $request, $id)
    {
        $superhero = Superhero::findOrFail($id);
        
        $validated = $request->validate([
            'pseudo' => 'required|string|max:100',
            'nom_reel' => 'required|string|max:100',
            'planete_origine' => 'required|string|max:100',
            'pouvoirs' => 'required|string|max:255',
            'ville_protegee' => 'required|string|max:100',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($superhero->image) {
                Storage::disk('public')->delete($superhero->image);
            }
            $validated['image'] = $request->file('image')->store('heroes', 'public');
        }

        $superhero->update($validated);

        return redirect()->route('superheros.index')
            ->with('success', 'Super-héros modifié avec succès!');
    }

    public function index()
    {
        $heroes = Superhero::all();
        return view('superheros.index', compact('heroes'));
    }

    public function editor()
    {
        $heroes = Superhero::all();
        return view('editor', compact('heroes'));
    }
}
