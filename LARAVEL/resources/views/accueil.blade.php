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
        <img src="/photo/logo.png" alt="Logo" class="logo-img">
      </a>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Rechercher...">
    </div>
    <button class="account-btn">Mon compte</button>
  </header>

  <aside class="sidebar">
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
  </aside>

  <main>
    <section class="home-container">
      <article class="hero-wrapper">
        <figure class="hero-frame">
          <img src="{{ asset('images/hero1.webp') }}" alt="Super-Héros">
        </figure>
        <div class="hero-description">
          <p>Bienvenue dans l'univers des héros !</p>
        </div>
      </article>
    </section>
  </main>
  
</body>
</html>