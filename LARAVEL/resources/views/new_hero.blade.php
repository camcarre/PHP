@extends('layouts.app')

@section('title', 'Nouveau SuperHéros')

@section('content')
    <div class="hero-container">
        <div class="info-box">
            <h2>Information</h2>
            <p><strong>Pseudo:</strong> <input type="text" placeholder="Nom du héros"></p>
            <p><strong>Nom:</strong> <input type="text" placeholder="Nom réel"></p>
            <p><strong>Planète d'origine:</strong> <input type="text" placeholder="Ex: Krypton"></p>
            <p><strong>Super pouvoirs:</strong> <input type="text" placeholder="Ex: Super force"></p>
            <p><strong>Ville protégée:</strong> <input type="text" placeholder="Ex: Metropolis"></p>
        </div>

        <div class="hero-preview">
            <img src="{{ asset('images/hero1.webp') }}" alt="Super-Héros">
        </div>

        <div class="desc-box">
            <h2>Pseudo</h2>
            <input type="text" placeholder="Nom du super-héros">
            <h2>Description</h2>
            <textarea placeholder="Décrivez votre héros..."></textarea>
        </div>
    </div>
@endsection
