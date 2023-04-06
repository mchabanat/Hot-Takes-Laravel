@extends('welcome')

@section('content')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <h2>SIGN UP</h2>

    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach

    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        
        <button type="submit">SIGN UP</button>

    </form>
@endsection