@extends('layouts.app')

@section('title', 'Nouveau SuperHéros')

@section('content')
    <form action="{{ route('superheros.store') }}" method="POST" enctype="multipart/form-data" class="hero-container">
        @csrf
        <div class="info-box">
            <h2>Information</h2>
            <p><strong>Pseudo:</strong> <input type="text" placeholder="Nom du héros" name="pseudo" required></p>
            <p><strong>Nom:</strong> <input type="text" placeholder="Nom réel" name="nom_reel" required></p>
            <p><strong>Planète d'origine:</strong> <input type="text" placeholder="Ex: Krypton" name="planete_origine" required></p>
            <p><strong>Super pouvoirs:</strong> <input type="text" placeholder="Ex: Super force" name="pouvoirs" required></p>
            <p><strong>Ville protégée:</strong> <input type="text" placeholder="Ex: Metropolis" name="ville_protegee" required></p>
        </div>

        <div class="hero-preview">
            <img id="preview" src="{{ asset('images/hero1.webp') }}" alt="Super-Héros">
            <input type="file" name="image" accept="image/*" onchange="previewImage(this)">
        </div>

        <div class="desc-box">
            <h2>Description</h2>
            <textarea placeholder="Décrivez votre héros..." name="description" required></textarea>
            <button type="submit" class="submit-btn">Créer le héros</button>
        </div>
    </form>

    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview').src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection