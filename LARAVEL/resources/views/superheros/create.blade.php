@extends('layouts.app')

@section('title', 'Créer un SuperHéros')

@section('content')
    <h1>Créer un SuperHéros</h1>
    <form action="{{ route('superheros.store') }}" method="POST">
        @csrf
        <label>Pseudo:</label>
        <input type="text" name="pseudo" required>

        <label>Nom Réel:</label>
        <input type="text" name="nom_reel" required>

        <label>Planète d'origine:</label>
        <input type="text" name="planete_origine" required>

        <label>Super Pouvoirs:</label>
        <input type="text" name="pouvoirs" required>

        <label>Ville Protégée:</label>
        <input type="text" name="ville_protegee" required>

        <label>Description:</label>
        <textarea name="description" required></textarea>

        <button type="submit">Créer</button>
    </form>
@endsection
