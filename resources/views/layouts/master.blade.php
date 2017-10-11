<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav>
        <div class="nav-wrapper blue-grey">
            <a href="{{ url('/') }}" class="brand-logo"><logo-rado></logo-rado></a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About me</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
                <li><div class="user-view">
                        <div class="background">
                            <img src="img/sky.jpg">
                        </div>
                        <a href="#!user"><img class="circle" src="{{ asset('img/rado.jpg') }}"></a>
                        <a href="#!name"><span class="white-text name">Radoslav Tomas</span></a>
                        <a href="#!email"><span class="white-text email">radoslav.tomas@gmail.com</span></a>
                    </div></li>
                <li><a href="/"><i class="material-icons">home</i>Home</a></li>
                <li><a href=""><i class="material-icons">perm_identity</i>About me</a></li>
                <li><a href=""><i class="material-icons">bubble_chart</i>Portfolio</a></li>
                <li><a href=""><i class="material-icons">contact_mail</i>Contact</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
