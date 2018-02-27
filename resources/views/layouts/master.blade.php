<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ $profile->user->name }}</title>

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
                <li><a href="{{ route('portfolios') }}">Portfolio</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
                <li><div class="user-view">
                        <div class="background">
                            <img src="{{ asset('img/sky.jpg') }}">
                        </div>
                        <img class="circle" src="{{ $profile->avatar }}">
                        <a href="{{ route('index') }}"><span class="white-text name">{{ $profile->user->name }}</span></a>
                        <a href="mailto:{{ $profile->user->email }}"><span class="white-text email">{{ $profile->user->email }}</span></a>
                    </div></li>
                <li><a href="{{ route('index') }}"><i class="material-icons">home</i>Home</a></li>
                <li><a href="{{ route('about') }}"><i class="material-icons">perm_identity</i>About me</a></li>
                <li><a href="{{ route('portfolios') }}"><i class="material-icons">bubble_chart</i>Portfolio</a></li>
                <li><a href="{{ route('contact') }}"><i class="material-icons">contact_mail</i>Contact</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="page-footer blue-grey">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="grey-text text-lighten-4">{{ $profile->user->name }} <span style="color: #74d14c;">|</span> <a href="http://radoslav.in" class="grey-text text-lighten-4">radoslav.in</a></h5>
                    <p class="grey-text text-lighten-4">{{ $profile->about }} <span style="color: #74d14c;">|</span> {{ $profile->city }}</p>
                    <p><a class="grey-text text-lighten-4" href="mailto:{{ $profile->user->email }}">{{ $profile->user->email }}</a></p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="{{ route('index') }}">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('about') }}">About me</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('portfolios') }}">Portfolio</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('contact') }}">Contact</a></li>
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
@yield('scripts')
<script>
    @if(Session::has('success'))
        Materialize.toast("{{ Session::get('success') }}", 4000, 'green lighten-3 blue-grey-text text-darken-4');
    @endif
    @if(Session::has('info'))
        Materialize.toast("{{ Session::get('info') }}", 4000, 'deep-orange lighten-3 blue-grey-text text-darken-4');
    @endif
</script>

</body>
</html>
