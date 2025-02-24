@extends('layouts.app')

@section('title', 'Éditeur de SuperHéros')

@section('content')
    @if($heroes->isEmpty())
        <div style="text-align: center; padding: 20px;">
            <h2>Aucun super-héros disponible</h2>
            <p>Commencez par en créer un !</p>
            <a href="{{ route('superheros.create') }}" class="btn btn-primary">Créer un héros</a>
        </div>
    @else
        <div class="tinder-container">
            <div class="card-stack">
                @foreach($heroes as $hero)
                    <div class="hero-card" data-id="{{ $hero->id }}" style="display: none;">
                        <div class="hero-image">
                            @if($hero->image)
                                <img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->pseudo }}">
                            @else
                                <div class="no-image">Pas d'image</div>
                            @endif
                        </div>
                        <div class="hero-info">
                            <h2>{{ $hero->pseudo }}</h2>
                            <p class="real-name"><strong>Nom:</strong> {{ $hero->nom_reel }}</p>
                            <p class="planet"><strong>Planète:</strong> {{ $hero->planete_origine }}</p>
                            <p class="powers"><strong>Pouvoirs:</strong> {{ $hero->pouvoirs }}</p>
                            <p class="city"><strong>Ville:</strong> {{ $hero->ville_protegee }}</p>
                            <p class="description">{{ $hero->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="swipe-buttons">
                <button class="swipe-left">←</button>
                <button class="edit-hero">⚙️</button>
                <button class="swipe-right">→</button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const cards = document.querySelectorAll('.hero-card');
                let currentIndex = 0;

                function showCurrentCard() {
                    cards.forEach((card, index) => {
                        card.style.display = index === currentIndex ? 'block' : 'none';
                    });
                }

                showCurrentCard();

                document.querySelector('.swipe-left').addEventListener('click', function() {
                    if (currentIndex > 0) {
                        currentIndex--;
                        showCurrentCard();
                    }
                });

                document.querySelector('.swipe-right').addEventListener('click', function() {
                    if (currentIndex < cards.length - 1) {
                        currentIndex++;
                        showCurrentCard();
                    }
                });

                document.querySelector('.edit-hero').addEventListener('click', function() {
                    const currentCard = cards[currentIndex];
                    if (currentCard) {
                        const heroId = currentCard.dataset.id;
                        window.location.href = `/superheros/${heroId}/edit`;
                    }
                });
            });
        </script>
    @endif
@endsection