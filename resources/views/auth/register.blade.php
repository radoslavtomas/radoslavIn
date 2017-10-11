@extends('layouts.admin')

@section('content')
<div class="container">

    <br>
    <br>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card grey lighten-4">
                <div class="card-content">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <span class="card-title">Register</span>

                        <div class="input-field {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Your Name</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                            <div>
                                @if ($errors->has('name'))
                                    <span class="red-text lighten-1">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="input-field">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required>
                        </div>

                        <div class="center">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Register
                                <i class="material-icons right">send</i>
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
