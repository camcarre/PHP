@extends('layouts.app')

@section('title', 'Nouveau SuperHéros')

@section('content')
    <div class="content-wrapper">
        <div class="create-hero-container">
            <div class="form-section">
                <h1 class="page-title">Créer un nouveau Super-Héros</h1>
                
                <form action="{{ route('superheros.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="pseudo">Pseudo du Super-Héros</label>
                        <input type="text" id="pseudo" name="pseudo" required placeholder="Ex: Superman">
                    </div>
                    
                    <div class="form-group">
                        <label for="nom_reel">Identité Secrète</label>
                        <input type="text" id="nom_reel" name="nom_reel" required placeholder="Ex: Clark Kent">
                    </div>
                    
                    <div class="form-group">
                        <label for="planete_origine">Planète d'Origine</label>
                        <input type="text" id="planete_origine" name="planete_origine" required placeholder="Ex: Krypton">
                    </div>
                    
                    <div class="form-group">
                        <label for="pouvoirs">Super Pouvoirs</label>
                        <input type="text" id="pouvoirs" name="pouvoirs" required placeholder="Ex: Vol, Super Force, Vision X">
                    </div>
                    
                    <div class="form-group">
                        <label for="ville_protegee">Ville Protégée</label>
                        <input type="text" id="ville_protegee" name="ville_protegee" required placeholder="Ex: Metropolis">
                    </div>

                    <div class="form-group">
                        <label for="description">Histoire du Héros</label>
                        <textarea name="description" required 
                                placeholder="Racontez l'histoire de votre héros, ses origines, ses motivations..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image du Héros</label>
                        <div class="image-upload-container">
                            <input type="file" id="image" name="image" accept="image/*" 
                                   onchange="previewImage(this)" class="image-input">
                            <label for="image" class="image-upload-label">
                                <span class="upload-icon">📸</span>
                                <span class="upload-text">Cliquez ou déposez une image ici</span>
                            </label>
                            <div id="image-preview" class="image-preview">
                                <img id="preview-img" src="#" alt="Aperçu" style="display: none;">
                            </div>
                        </div>
                    </div>

                    <div class="submit-container">
                        <button type="submit" class="submit-btn">Créer le Super-Héros</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            const preview = document.getElementById('preview-img');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection