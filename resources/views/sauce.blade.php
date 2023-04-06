@extends('welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/sauce.css') }}">

    <div class="uneSauce">
    <img src="{{ $sauce->imageUrl }}" alt="image de la sauce">
        <div class="info-sauce">
            <h2>{{ $sauce->name }}</h2>
            <p>Manufacturer: {{ $sauce->manufacturer }}</p>
            <p>Description: {{ $sauce->description }}</p>
            <p>Main pepper: {{ $sauce->mainPepper }}</p>
            <p>Heat: {{ $sauce->heat }}/10</p>
            @if(Auth::check())
                <!-- Afficher boutons like et dislike -->
                
            @endif
        </div>
    </div>
@endsection