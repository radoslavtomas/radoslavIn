<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'radoslav.in') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav>
            <div class="nav-wrapper amber darken-3">
                <a href="{{ url('/') }}" class="brand-logo"><logo-rado></logo-rado></a>
                <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    @guest
                        {{--<li><a href="{{ route('login') }}"><i class="material-icons left">person</i>Login</a></li>--}}
                        {{--<li><a href="{{ route('register') }}"><i class="material-icons left">person_add</i>Register</a></li>--}}
                    @else
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons left">arrow_forward</i>
                                        Logout
                             </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endguest
                </ul>
                <ul class="side-nav" id="mobile-menu">
                    @guest
                        {{--<li><a href="{{ route('login') }}"><i class="material-icons left">person</i>Login</a></li>--}}
                        {{--<li><a href="{{ route('register') }}"><i class="material-icons left">person_add</i>Register</a></li>--}}
                    @else
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons left">arrow_forward</i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <div class="container">
            <br>
            <div class="row">
                @if(Auth::check())
                    <div class="col s4">
                                <ul class="collection with-header">
                                    <li class="collection-header"><h5>Admin panel</h5></li>
                                    <li class="collection-item">
                                        <a href="{{ route('getDashboard') }}">Admin Dashboard</a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="{{ route('getHome') }}">Home page</a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="{{ route('getAbout') }}">About me page</a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="{{ route('portfolio.index') }}">Portfolio page</a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="{{ route('profile.index') }}">Profile and settings</a>
                                    </li>
                                </ul>
                    </div>
                @endif

                @yield('content')

            </div>
        </div>
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
