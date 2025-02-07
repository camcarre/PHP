@extends('layouts.app')

@section('title', 'Éditeur de SuperHéros')

@section('content')
    <div class="editor-container">
        <section class="hero-info">
            <h2>Informations</h2>
            <div class="info-box">
                <p><strong>Pseudo:</strong> <input type="text" placeholder="Pseudo du héros"></p>
                <p><strong>Nom:</strong> <input type="text" placeholder="Nom réel"></p>
                <p><strong>Sexe:</strong> <input type="text" placeholder="Sexe"></p>
                <p><strong>Planète d'origine:</strong> <input type="text" placeholder="Planète"></p>
                <p><strong>Super pouvoirs:</strong> <input type="text" placeholder="Pouvoirs"></p>
                <p><strong>Ville de protection:</strong> <input type="text" placeholder="Ville"></p>
                <p><strong>Gadgets:</strong> <input type="text" placeholder="Gadgets"></p>
                <p><strong>Équipe:</strong> <input type="text" placeholder="Équipe"></p>
                <p><strong>Véhicule:</strong> <input type="text" placeholder="Véhicule"></p>
                <p><strong>Description:</strong></p>
                <textarea class="description-box" placeholder="Ajoutez une description..."></textarea>
            </div>
            <div class="button-container">
                <button>Ajouter des photos</button>
                <button>Ajouter une vidéo de fond</button>
            </div>
        </section>

        <section class="hero-preview">
            <h2>Prévisualisation</h2>
            <div class="preview-box">
                <div class="hero-image">
                    <img src="{{ asset('images/hero1.webp') }}" alt="Super-Héros">
                </div>
                <div class="hero-image">
                    <img src="{{ asset('images/hero2.webp') }}" alt="Super-Héros">
                </div>
            </div>
        </section>
    </div>
@endsection
