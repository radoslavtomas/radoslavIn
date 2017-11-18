@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <br>
    <div>

        <div class="row">
            <div class="col s12 m10 offset-m1">
                <div class="card  blue lighten-4">
                    <br>
                    <wave-divider></wave-divider>

                    <div class="card-content  blue-grey-text text-darken-3 center">
                        <h1 class="app-heading">{{ $data->main_title }}</h1>
                        <p>{{ $data->main_text }}</p>
                        <br>
                        <h4 class="app-heading">{{ $data->sub_title }}</h4>
                        <p>{{ $data->sub_text }}</p>
                    </div>
                    <br>
                    <div class="center">
                        <a href="{{ route('portfolio') }}" class="waves-effect waves-light btn-large">See my portfolio</a>
                    </div>
                    <br>
                    <br>
                    <wave-divider></wave-divider>
                    <br>
                </div>
            </div>
        </div>

    </div>

@stop