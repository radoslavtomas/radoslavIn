@extends('layouts.admin')

@section('content')


<div class="container">

    <br>
    <br>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card grey lighten-4">
                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <span class="card-title">Login</span>

                        <div class="input-field {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                            <div>
                                @if ($errors->has('email'))
                                    <span class="red-text lighten-1">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-field {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" required>
                            <div>
                                @if ($errors->has('password'))
                                    <span class="red-text lighten-1">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <p>
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Remember Me</label>
                        </p>

                        <br>

                        <div class="center">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Login
                                <i class="material-icons right">send</i>
                            </button>
                        </div>

                        <div class="right-align">
                            <br>
                            <a class="red-text lighten-1" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
