@extends('layouts.master')


@section('content')
    <br>
    <div>

        <div class="row">
            <div class="col s12 m10 offset-m1">
                <div class="card  green lighten-4">
                    <br>
                    <div style="height: 25px;background-image: url('{{asset("img/wave.png")}}');background-position: center; background-size: contain"></div>

                    <div class="card-content  blue-grey-text text-darken-3 center">
                        <h1 style="font-family: 'VT323', monospace;">Hi, I am Rado</h1>
                        <p>A keen front-end developer currently living in Liverpool. I believe in beautiful web applications that serve users in everyday life. I am always looking for new challenges and collaborations.</p>
                        <br>
                        <h4 style="font-family: 'VT323', monospace;">Not just development, it's also story</h4>
                        <p>Developing is building a story. I always explore different options and try to go at least one step further. I use honest approach, humour and creativity never managed to intimidate me. Let’s write a story together…</p>
                    </div>
                    <br>
                    <div class="center">
                        <a href="#" class="waves-effect waves-light btn-large">See my portfolio</a>
                    </div>
                    <br>
                    <br>
                    <div style="height: 25px;background-image: url('{{asset("img/wave.png")}}');background-position: center; background-size: contain"></div>
                    <br>
                </div>
            </div>
        </div>

    </div>

@stop