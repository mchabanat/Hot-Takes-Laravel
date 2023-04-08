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
                <div class="compteurs">
                    <p>{{ $sauce->likes }} like(s)</p>
                    <p>{{ $sauce->dislikes }} dislike(s)</p>
                </div>
                <div class="likeDislike">
                    <a id="btnLike" href="{{route('likeSauce', ['id' => $sauce->id])}}">👍 Like</a>
                    <a id="btnDislike" href="{{route('dislikeSauce', ['id' => $sauce->id])}}">👎 Dislike</a>
                </div>

                @if(Auth::user()->id == $sauce->userId)
                <a id="btnSuppr" class="deleteBtn">DELETE</a>

                <div id="modal">
                    <div id="modalDesc">
                    <p>Are you sure to delete : <strong>{{ $sauce->name }}</strong>?</p>
                        <div class="boutons-modal">
                            <a id="refuse">CANCEL</a>
                            <form action="/deleteSauce/{{ $sauce->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" id="accept" class="deleteBtn">❌ DELETE ❌</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            @endif
        </div>
    </div>
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection