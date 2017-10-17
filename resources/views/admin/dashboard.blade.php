@extends('layouts.admin')

@section('content')

    <div class="col s8">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Dashboard</span>
                <hr>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>


        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
@endsection
