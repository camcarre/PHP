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
<<<<<<< HEAD
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
=======
  <header>
    <div class="logo">
      <a href="{{ url('/') }}">
        <img src="{{ asset('photo/logo.png') }}" alt="SuperHeros Logo" class="logo-img">
      </a>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Rechercher...">
    </div>
    <div class="account-menu">
        @auth
            <button class="account-btn">Mon compte</button>
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="logout-btn">Déconnexion</button>
            </form>
        @else
            <div class="auth-buttons">
                <a href="{{ route('login') }}" class="login-btn">Connexion</a>
                <a href="{{ route('register') }}" class="register-btn">Inscription</a>
            </div>
        @endauth
    </div>
  </header>

  <aside class="sidebar">
    <nav>
      <ul>
        <li>
          <a href="{{ url('/') }}" class="icon">
            <span class="icon-symbol">🏠</span>
            <span class="icon-text">Accueil</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/profile') }}" class="icon">
            <span class="icon-symbol">👤</span>
            <span class="icon-text">Profil</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/editor') }}" class="icon">
            <span class="icon-symbol">🦸</span>
            <span class="icon-text">Liste des Héros</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/new-hero') }}" class="icon">
            <span class="icon-symbol">✨</span>
            <span class="icon-text">Nouveau Héros</span>
          </a>
        </li>
      
      </ul>
>>>>>>> 44b96ad (utilisateur login register)
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
