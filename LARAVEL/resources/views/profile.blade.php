@extends('layouts.app')

@section('title', 'Profil du Super-Héros')

@section('content')
    <div class="profile-container">
        <div class="info-box" id="info-box">Information</div>

        <div class="profile-image">
            <img src="{{ asset('images/hero1.webp') }}" alt="Super-Héros">
        </div>

        <div class="desc-box">
            <div class="pseudo-box" id="pseudo-box">Pseudo</div>
            <div class="desc-content" id="desc-box">Description</div>
        </div>
    </div>

    <script src="{{ asset('js/profile.js') }}"></script>
@endsection
