@extends('layouts.master')

@section('title', 'About me')

@section('content')

    <br>
    <div>

        <div class="row">
            <div class="col s12 m10 offset-m1">
                <div class="card  green lighten-4">
                    <br>
                    <wave-divider></wave-divider>
                    <div class="card-content  blue-grey-text text-darken-3 center">
                        <h1 class="app-heading">{{ $data->title }}</h1>
                        <div class="row">
                            <div>
                                <img class="responsive-img circle" src="{{ $data->image }}" width="200" alt="Radoslav Tomas">
                            </div>
                        </div>
                        <div>
                            {!! $data->text !!}
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="center">
                        <a href="#" class="waves-effect waves-light btn-large">Do write me</a>
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