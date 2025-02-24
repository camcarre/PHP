@extends('layouts.app')

@section('title', 'Nouveau SuperHéros')

@section('content')
    <div class="content-wrapper">
        <div class="create-hero-container">
            <div class="white-background">
                <h1 class="page-title">Créer un nouveau Super-Héros</h1>
            </div>
            
            <form action="{{ route('superheros.store') }}" method="POST" enctype="multipart/form-data" class="hero-form">
                @csrf
                <div class="form-layout">
                    <div class="form-section">
                        <div class="info-box">
                            <div class="form-group white-background">
                                <label for="pseudo">Pseudo</label>
                                <input type="text" id="pseudo" name="pseudo" required>
                            </div>
                            
                            <div class="form-group white-background">
                                <label for="nom_reel">Nom Réel</label>
                                <input type="text" id="nom_reel" name="nom_reel" required>
                            </div>
                            
                            <div class="form-group white-background">
                                <label for="planete_origine">Planète d'Origine</label>
                                <input type="text" id="planete_origine" name="planete_origine" required>
                            </div>
                            
                            <div class="form-group white-background">
                                <label for="pouvoirs">Super Pouvoirs</label>
                                <input type="text" id="pouvoirs" name="pouvoirs" required>
                            </div>
                            
                            <div class="form-group white-background">
                                <label for="ville_protegee">Ville Protégée</label>
                                <input type="text" id="ville_protegee" name="ville_protegee" required>
                            </div>

                            <div class="form-group white-background">
                                <label for="description">Description</label>
                                <textarea name="description" required placeholder="Racontez l'histoire de votre héros..."></textarea>
                            </div>

                            <div class="form-group white-background">
                                <label for="image">Image du Héros</label>
                                <div class="image-upload-container">
                                    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(this)" class="image-input">
                                    <label for="image" class="image-upload-label">
                                        <span class="upload-icon">📸</span>
                                        <span class="upload-text">Choisir une image</span>
                                    </label>
                                    <div id="image-preview" class="image-preview">
                                        <img id="preview-img" src="#" alt="Aperçu" style="display: none;">
                                    </div>
                                </div>
                            </div>

                            <div class="submit-container white-background">
                                <button type="submit" class="submit-btn">Créer le héros</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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