@extends('layouts.app')

@section('title', 'Liste des SuperHéros')

@section('content')
    <h1>Liste des Super-Héros</h1>
    <a href="{{ route('superheros.create') }}">Créer un nouveau Super-Héros</a>

    <ul>
        @foreach ($superheroes as $hero)
            <li>
                <a href="{{ route('superheros.show', $hero->id) }}">{{ $hero->pseudo }}</a>
                <a href="{{ route('superheros.edit', $hero->id) }}">✏ Modifier</a>
                <form action="{{ route('superheros.destroy', $hero->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑 Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
