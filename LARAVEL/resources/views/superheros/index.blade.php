@extends('layouts.app')

@section('title', 'Liste des Super-Héros')

@section('content')
<div class="container">
    <h1>Liste des Super-Héros</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('superheros.create') }}">Créer un SuperHéros</a>

    <table class="table">
        <thead>
            <tr>
                <th>Pseudo</th>
                <th>Nom Réel</th>
                <th>Sexe</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($heroes as $hero)
                <tr>
                    <td>{{ $hero->pseudo }}</td>
                    <td>{{ $hero->nom_reel }}</td>
                    <td>{{ $hero->sexe }}</td>
                    <td>{{ $hero->description }}</td>
                    <td>
                        <a href="#" class="btn btn-info">Voir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
