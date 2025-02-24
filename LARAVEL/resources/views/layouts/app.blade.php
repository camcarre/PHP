<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SuperHeros')</title>
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero_editor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new_hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
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
        <a href="{{ url('/') }}" class="icon">🏠 Accueil</a>
        <a href="{{ url('/profile') }}" class="icon">👤 Profil</a>
        <a href="{{ url('/hero-editor') }}" class="icon">🛠 Éditeur</a>
        <a href="{{ url('/new-hero') }}" class="icon">✨ Nouveau Héros</a>
        <a href="{{ url('/superheros') }}" class="icon">🦸 Liste des Héros</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
