@extends('layouts.master')

@section('title', $portfolio->name)

@section('content')

    <br>
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <div class="card  blue lighten-4">
                <br>
                <wave-divider></wave-divider>

                <div class="card-content  blue-grey-text text-darken-3 center">
                    <h1 class="app-heading portfolio-heading">Project: {{ $portfolio->name }}</h1>
                    <div class="row">
                        <div class="col s10 offset-s1 m6 offset-m3">
                            <img style="width: 100px; height: auto" src="{{ $portfolio->image }}" alt="">
                        </div>
                    </div>

                    <div class="row portfolio-content" style="margin: 0 auto;">
                        {!!  $portfolio->description !!}
                    </div>

                </div>

                <br>
                <wave-divider></wave-divider>
                <br>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $('iframe').parent().addClass('video-container');
    </script>
@stop
