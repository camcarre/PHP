@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
<div class="container">
    <h2>Inscription</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>Nom</label>
        <input type="text" name="nom" required>

        <label>Prénom</label>
        <input type="text" name="prenom" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Mot de passe</label>
        <input type="password" name="password" required>

        <label>Confirmer le mot de passe</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">S'inscrire</button>
    </form>
    <a href="{{ route('login') }}">Déjà un compte ? Connectez-vous</a>
</div>
@endsection
