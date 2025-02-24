@extends('layouts.app')

@section('title', 'Mon Profil')

@section('content')
    <div class="profile-container">
        @auth
            <div class="info-box" id="info-box">
                <h2>Informations personnelles</h2>
                <p><strong>Nom :</strong> {{ $user->nom }}</p>
                <p><strong>Prénom :</strong> {{ $user->prenom }}</p>
                <p><strong>Email :</strong> {{ $user->email }}</p>
                <p><strong>Membre depuis :</strong> {{ $user->created_at->format('d/m/Y') }}</p>
            </div>

            <div class="profile-image">
                @if($user->avatar)
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="Photo de profil">
                @else
                    <img src="{{ asset('images/default-avatar.png') }}" alt="Avatar par défaut">
                @endif
            </div>

            <div class="desc-box">
                <div class="pseudo-box" id="pseudo-box">
                    <h3>{{ $user->prenom }} {{ $user->nom }}</h3>
                </div>
                <div class="desc-content" id="desc-box">
                    @if($user->description)
                        {{ $user->description }}
                    @else
                        <p>Aucune description disponible</p>
                    @endif
                </div>
            </div>
        @else
            <div class="alert alert-warning">
                Veuillez vous <a href="{{ route('login') }}">connecter</a> pour voir votre profil.
            </div>
        @endauth
    </div>

    <script src="{{ asset('js/profile.js') }}"></script>
@endsection
