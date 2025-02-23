@extends('layouts.app')

@section('title', 'Créer un Super-Héros')

@section('content')
    <h1>Créer un Super-Héros</h1>

    <form action="{{ route('superheros.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="planete_origine" placeholder="Planète d'origine">
        <input type="text" name="pouvoirs" placeholder="Pouvoirs">
        <input type="text" name="ville_protegee" placeholder="Ville protégée">
        <textarea name="description" placeholder="Description"></textarea>
        <input type="file" name="image">
        <button type="submit">Créer</button>
    </form>
@endsection
