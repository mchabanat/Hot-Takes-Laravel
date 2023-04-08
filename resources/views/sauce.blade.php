@extends('welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/sauce.css') }}">

    <div class="uneSauce">
    <img src="{{ $sauce->imageUrl }}" alt="image de la sauce">
        <div class="info-sauce">
            <h2>{{ $sauce->name }}</h2>
            <p>Manufacturer: {{ $sauce->manufacturer }}</p>
            <p>Description: {{ $sauce->description }}</p>
            <p>Main Pepper: {{ $sauce->mainPepper }}</p>
            <p>Heat: {{ $sauce->heat }}/10</p>
            @if(Auth::check())
                <!-- Afficher boutons like et dislike -->
                <div class="likeDislike">
                    <a href="like/{{$sauce->id}}">👍 Like</a>
                    <!-- <a href="dislike/{{$sauce->id}}">👎 Dislike</a> -->
                </div>

                @if(Auth::user()->id == $sauce->userId)
                <a id="btnSuppr" class="deleteBtn">DELETE</a>

                <div id="modal">
                    <div id="modalDesc">
                    <p>Are you sure to delete : <strong>{{ $sauce->name }}</strong>?</p>
                        <div class="boutons-modal">
                            <a id="refuse">CANCEL</a>
                            <a id="accept" class="deleteBtn" href="deleteSauce/{{$sauce->id}}">❌ DELETE ❌</a>
                        </div>
                    </div>
                </div>
                @endif
            @endif
        </div>
    </div>
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection