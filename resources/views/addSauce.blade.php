@extends('welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/addSauce.css') }}">

    <div class="formulaire">
        <h2>ADD SAUCE</h2>
        <form action="{{ route('storeSauce') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nom de la sauce</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="manufacturer">Fabricant</label>
                <input type="text" name="manufacturer" id="manufacturer" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="mainPepper">Principale épice</label>
                <input type="text" name="mainPepper" id="mainPepper" class="form-control">
            </div>
            <div class="form-group">
                <label for="heat">Niveau de piquant</label>
                <input type="number" name="heat" id="heat" class="form-control">
            </div>
            <div class="form-group">
                <label for="imageUrl">URL de l'image</label>
                <input type="text" name="imageUrl" id="imageUrl" class="form-control">
            </div>
            <button type="submit">Ajouter</button>
        </form>
    </div>
@endsection