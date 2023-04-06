@extends('welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/allSauces.css') }}">
    <div class="grille-sauces">
        @foreach($sauces as $sauce)
        <div class="uneSauce">
            <a href="sauce/{{$sauce->id}}">
                <img src="{{ $sauce->imageUrl }}" alt="image de la sauce">
                <h2>{{ $sauce->name }}</h2>
                <p>Heat: {{ $sauce->heat }}/10</p>
            </a>
        </div>
        @endforeach
    </div>
@endsection