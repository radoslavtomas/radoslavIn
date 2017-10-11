@extends('layouts.app')

@section('content')
<div class="container">

    <br>
    <br>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card grey lighten-4">
                <div class="card-content">
                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <span class="card-title">Reset Password</span>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

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

                        <div class="center">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Send Password Reset Link
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
