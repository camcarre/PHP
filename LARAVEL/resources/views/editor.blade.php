@extends('layouts.app')

@section('title', 'Éditeur de SuperHéros')

@section('content')
<section class="hero-info">
    <h2>Informations</h2>
    <form class="info-box">
        <div class="form-group">
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" placeholder="Pseudo du héros">
        </div>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" placeholder="Nom réel">
        </div>
        <div class="form-group">
            <label for="planete">Planète d'origine :</label>
            <input type="text" id="planete" placeholder="Planète">
        </div>
        <div class="form-group">
            <label for="pouvoirs">Super pouvoirs :</label>
            <input type="text" id="pouvoirs" placeholder="Pouvoirs">
        </div>
        <div class="form-group">
            <label for="ville">Ville protégée :</label>
            <input type="text" id="ville" placeholder="Ville">
        </div>
        <div class="form-group full-width">
            <label for="description">Description :</label>
            <textarea id="description" placeholder="Ajoutez une description..."></textarea>
        </div>
        <div class="button-container full-width">
            <button type="button">Ajouter des photos</button>
            <button type="button">Ajouter une vidéo de fond</button>
        </div>
    </form>
</section>
@endsection