@extends('layouts.app')

@section('title', 'Mon Profil')

@section('content')
    <div class="profile-container">
        @auth
            <div class="profile-header">
                <div class="profile-title">
                    <h1>{{ $user->prenom }} {{ $user->nom }}</h1>
                    <span class="member-since">Membre depuis le {{ $user->created_at->format('d/m/Y') }}</span>
                </div>
            </div>

            <div class="profile-content">
                <div class="info-card">
                    <div class="card-header">
                        <h2>Informations personnelles</h2>
                        <button class="edit-btn" title="Modifier">✏️</button>
                    </div>
                    <div class="card-content">
                        <div class="info-item">
                            <span class="label">Nom</span>
                            <span class="value">{{ $user->nom }}</span>
                        </div>
                        <div class="info-item">
                            <span class="label">Prénom</span>
                            <span class="value">{{ $user->prenom }}</span>
                        </div>
                        <div class="info-item">
                            <span class="label">Email</span>
                            <span class="value">{{ $user->email }}</span>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">
                        <h2>À propos de moi</h2>
                        <button class="edit-btn" title="Modifier">✏️</button>
                    </div>
                    <div class="card-content">
                        @if($user->description)
                            <p class="description">{{ $user->description }}</p>
                        @else
                            <p class="description empty">Aucune description disponible</p>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <div class="auth-message">
                <h2>Accès restreint</h2>
                <p>Veuillez vous <a href="{{ route('login') }}">connecter</a> pour voir votre profil.</p>
            </div>
        @endauth
    </div>

    <script src="{{ asset('js/profile.js') }}"></script>
@endsection
