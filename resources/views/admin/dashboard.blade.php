@extends('layouts.admin')

@section('content')

    <div class="col s8">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Welcome {{ $profile->user->name }}</span>
                <hr>
                <p>This dashboard is under development...</p>
            </div>
        </div>
    </div>
@endsection
