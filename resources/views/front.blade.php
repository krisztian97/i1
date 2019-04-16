<!doctype html>
<html lang="hu">
<head>
    <link href="/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

<nav class="navbar navbar-dark bg-dark">

    @guest

        <a href="{{ route('login') }}">{{ __('Login') }}</a>

        @if (Route::has('register'))

            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

        @endif
    @else
        <a href="{{route('newTeamForm')}}">Csapat Létrehozása</a>

        <a href="#" role="button">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">{{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>


    @endguest
</nav>
@yield('content')
<script src="/js/app.js"></script>
</body>
</html>
