@extends('layouts.master')


@section('content')

    <br>
    <div>

        <div class="row">
            <div class="col s12 m10 offset-m1">
                <div class="card  green lighten-4">
                    <br>
                    <wave-divider></wave-divider>
                    <div class="card-content  blue-grey-text text-darken-3 center">
                        <h1 class="app-heading">About me</h1>
                        <div class="row">
                            <div class="col s6 offset-s3 m4 offset-m4">
                                <img class="responsive-img circle" src="{{ asset('img/rado.jpg') }}" alt="Radoslav Tomas">
                            </div>
                        </div>
                        <p>
                            Born and raised in Slovakia, I am currently developing good accent and manners in UK. After studying data journalism, I have been working for market research company as an analyst. Working on large projects on the Slovak market helped me to train strategic thinking. On the way, my soul has also been dragged to several personal activities where I could improve my digital skills.
                        </p>
                        <br>
                        <p>
                            Few years ago, I’ve accepted a call of my heart and made a move to UK. Here I restarted my career as a front-end developer.
                        </p>
                        <br>
                        <p>
                            Today, I work as freelancer and participate on various digital projects. I’ve never forgotten to ask why things are the way they are, and how they can be improved. I have a simple goal: make things better for the user.
                        </p>
                        <br>
                        <p>
                            If you think I am the right person for your project, don’t hesitate to drop me a line or two. I don’t bite…
                        </p>
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