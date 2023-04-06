<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Hot Takes</title>
    </head>
    <body>
        <header>
            <div class="links-sauces">
                    <a href="{{ route('allSauces') }}">ALL SAUCES</a>
                @if(Auth::check())
                    <a href="{{ route('addSauce') }}">ADD SAUCE</a>
                @endif
            </div>
            <div class="top">
                <img src="{{ asset('images/Logo.svg') }}" alt="logo sauces">
                <div class="title-container">
                    <h1>HOT TAKES</h1>
                    <p>THE WEB'S BEST HOT SAUCE REVIEWS</p>
                </div>
            </div>
            <div class="links-connexion">
                @if(Auth::check())
                    <a href="#" onclick="document.getElementById('logout-form').submit()">
                        <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
                        LOGOUT
                    </a>
                @else
                    <a href="{{ route('signup') }}">SIGN UP</a>
                    <a href="{{ route('login') }}">LOGIN</a>
                @endif
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>
