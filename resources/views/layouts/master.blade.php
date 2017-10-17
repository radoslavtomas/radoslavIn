<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Radoslav Tomas</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<div id="app">
    <nav>
        <div class="nav-wrapper blue-grey">
            <a href="{{ url('/') }}" class="brand-logo"><logo-rado></logo-rado></a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About me</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
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
                <li><a href="{{ route('index') }}"><i class="material-icons">home</i>Home</a></li>
                <li><a href="{{ route('about') }}"><i class="material-icons">perm_identity</i>About me</a></li>
                <li><a href="{{ route('portfolio') }}"><i class="material-icons">bubble_chart</i>Portfolio</a></li>
                <li><a href="{{ route('contact') }}"><i class="material-icons">contact_mail</i>Contact</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="page-footer blue-grey">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Radoslav Tomas | radoslav.in</h5>
                    <p class="grey-text text-lighten-4">Full stack web developer | Liverpool</p>
                    <p class="grey-text text-lighten-4">radoslav.tomas@gmail.com</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">About me</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Portfolio</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center-align">
                2017
            </div>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('javascript')

</body>
</html>
