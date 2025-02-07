@extends('layouts.app')

@section('title', 'Accueil - SuperHeros')

@section('content')
    <div class="home-container">
        <div class="hero-wrapper">
            <div class="hero-frame">
                <img src="{{ asset('images/hero1.webp') }}" alt="Super-Héros">
            </div>
            <div class="hero-description">
                <p>Bienvenue dans l'univers des héros !</p>
            </div>
        </div>
    </div>
@endsection
