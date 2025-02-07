<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SuperHeros')</title>

    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero_editor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="search bar">
        </div>
        <button class="account-btn">account</button>
    </header>

    <nav class="sidebar">
        <div class="icon">icons</div>
        <div class="icon">icons</div>
        <div class="icon">icons</div>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>
