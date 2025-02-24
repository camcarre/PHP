<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - SuperHeros</title>
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
</head>
<body>

    <header>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img">
            </a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="search bar">
        </div>
        <button class="account-btn">account</button>
    </header>
            <nav class="sidebar">
        <a href="{{ url('/') }}" class="icon">
            <span class="icon-symbol">🏠</span>
            <span class="icon-text">Accueil</span>
        </a>
        <a href="{{ url('/profile') }}" class="icon">
            <span class="icon-symbol">👤</span>
            <span class="icon-text">Profil</span>
        </a>
        <a href="{{ url('/hero-editor') }}" class="icon">
            <span class="icon-symbol">🛠</span>
            <span class="icon-text">Éditeur</span>
        </a>
        <a href="{{ url('/new-hero') }}" class="icon">
            <span class="icon-symbol">✨</span>
            <span class="icon-text">Nouveau Héros</span>
        </a>
        <a href="{{ url('/superheros') }}" class="icon">
            <span class="icon-symbol">🦸</span>
            <span class="icon-text">Liste des Héros</span>
        </a>
        </nav>

    <main>
        <div class="home-container">
            <div class="hero-wrapper">
                <div class="hero-frame">
                    <img src="{{ asset('images/hero1.webp') }}" alt="Super-Héros">
                </div>
                <div class="hero-description">
                    <p>Bienvenue dans l'univers des héros !</p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>