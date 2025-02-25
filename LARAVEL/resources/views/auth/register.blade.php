@extends('layouts.app')

@section('content')
<div class="container">
    <div class="register-form">
        <h2>Inscription</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
                @error('nom')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
                @error('prenom')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn-submit">S'inscrire</button>
        </form>
        
        <div class="login-link">
            Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a>
        </div>
    </div>
</div>
@endsection