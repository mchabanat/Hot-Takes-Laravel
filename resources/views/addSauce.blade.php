@extends('welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/addSauce.css') }}">

    <div class="formulaire">
        <h2>ADD SAUCE</h2>
        <form action="{{ route('storeSauce') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Sauce Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="manufacturer">Manufacturer</label>
                <input type="text" name="manufacturer" id="manufacturer" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="mainPepper">Main Pepper</label>
                <input type="text" name="mainPepper" id="mainPepper" class="form-control">
            </div>
            <div class="form-group">
                <label for="heat">Heat</label>
                <input type="number" name="heat" id="heat" class="form-control" min="0" max="10">
            </div>
            <div class="form-group">
                <label for="imageUrl">Image URL</label>
                <input type="text" name="imageUrl" id="imageUrl" class="form-control">
            </div>
            <button type="submit">ADD SAUCE</button>
        </form>
    </div>
@endsection