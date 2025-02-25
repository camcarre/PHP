@extends('layouts.app')

@section('title', 'Liste des SuperHéros')

@section('content')
    <div class="cards-container" id="cards-container">
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
