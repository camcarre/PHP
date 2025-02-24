@extends('layouts.app')

@section('content')
<div class="auth-container">
    <h2>Connexion</h2>
    <form method="POST" action="{{ route('login') }}" class="auth-form">
        @csrf
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="auth-button">Se connecter</button>
        
        <div class="auth-links">
            <a href="{{ route('register') }}">Pas encore inscrit ?</a>
        </div>
    </form>
</div>
@endsection