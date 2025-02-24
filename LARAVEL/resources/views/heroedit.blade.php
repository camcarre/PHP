@extends('layouts.app')

@section('title', 'Modifier le Super Héros')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/heroedit.css') }}">
@endsection

@section('content')
<div class="hero-edit-container">
    <h1 class="hero-title">Modifier le Super Héros</h1>

    <form action="{{ route('superheros.update', $superhero->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @if($superhero->image)
            <img src="{{ asset('storage/' . $superhero->image) }}" alt="Photo du héros" class="image-preview">
        @endif

        <div class="form-group">
            <label class="form-label" for="pseudo">Pseudo</label>
            <input type="text" class="form-input" id="pseudo" name="pseudo" 
                   value="{{ old('pseudo', $superhero->pseudo) }}" required>
            @error('pseudo')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="nom_reel">Nom Réel</label>
            <input type="text" class="form-input" id="nom_reel" name="nom_reel" 
                   value="{{ old('nom_reel', $superhero->nom_reel) }}" required>
            @error('nom_reel')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="planete_origine">Planète d'Origine</label>
            <input type="text" class="form-input" id="planete_origine" name="planete_origine" 
                   value="{{ old('planete_origine', $superhero->planete_origine) }}" required>
            @error('planete_origine')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="pouvoirs">Pouvoirs</label>
            <input type="text" class="form-input" id="pouvoirs" name="pouvoirs" 
                   value="{{ old('pouvoirs', $superhero->pouvoirs) }}" required>
            @error('pouvoirs')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="ville_protegee">Ville Protégée</label>
            <input type="text" class="form-input" id="ville_protegee" name="ville_protegee" 
                   value="{{ old('ville_protegee', $superhero->ville_protegee) }}" required>
            @error('ville_protegee')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-input" id="description" name="description" rows="4" required>{{ old('description', $superhero->description) }}</textarea>
            @error('description')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="image">Image</label>
            <input type="file" class="form-input" id="image" name="image" accept="image/*">
            @error('image')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="btn-container">
            <button type="submit" class="btn btn-save">Sauvegarder</button>
            <a href="{{ route('superheros.index') }}" class="btn btn-cancel">Annuler</a>
        </div>
    </form>
</div>
@endsection