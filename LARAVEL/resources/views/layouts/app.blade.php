<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'SuperHeros')</title>
  <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
  <link href="{{ asset('css/hero_editor.css') }}" rel="stylesheet">
  <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <a href="{{ url('/') }}">
        <img src="{{ asset('photo/logo.png') }}" alt="SuperHeros Logo" class="logo-img">
      </a>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Rechercher...">
    </div>
    <button class="account-btn">Mon compte</button>
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
    </nav>
  </aside>

  <main>
    @yield('content')
  </main>
</body>
</html>