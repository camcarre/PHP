<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller {
    public function index() {
        $superheroes = Superhero::all();
        return view('superheros.index', compact('superheroes'));
    }

    public function create() {
        return view('superheros.create');
    }

    public function store(Request $request) {
        $request->validate([
            'pseudo' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('superheroes', 'public') : null;

        Superhero::create([
            'planete_origine' => $request->planete_origine,
            'pouvoirs' => $request->pouvoirs,
            'ville_protegee' => $request->ville_protegee,
            'description' => $request->description,
            'image' => $imagePath
        ]);

        return redirect()->route('superheros.index')->with('success', 'Super-héros ajouté !');
    }

    public function show(Superhero $superhero) {
        return view('superheros.show', compact('superhero'));
    }

    public function edit(Superhero $superhero) {
        return view('superheros.edit', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero) {
        $request->validate([
            'pseudo' => 'required'
        ]);

        $superhero->update($request->all());

        return redirect()->route('superheros.index')->with('success', 'Super-héros mis à jour !');
    }

    public function destroy(Superhero $superhero) {
        $superhero->delete();
        return redirect()->route('superheros.index')->with('success', 'Super-héros supprimé !');
    }
}
