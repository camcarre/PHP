@extends('superheros.layout')

@section('title', 'Connexion')

@section('content')
<div class="container">
    <h2>Connexion</h2>
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <label>Email</label>
        <input type="email" name="email" required>

        <label>Mot de passe</label>
        <input type="password" name="password" required>

        <button type="submit">Se connecter</button>
    </form>
    <a href="{{ route('register') }}">Pas encore de compte ? Inscrivez-vous</a>
</div>
@endsection
