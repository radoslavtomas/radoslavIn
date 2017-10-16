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
                        <h1 class="app-heading">My portfolio</h1>

                        <div class="carousel-wrapper">
                            <ul class="carousel">
                                <li class="carousel-item" data-id="1">
                                    <img src="img/portfolios/kota.png" width="350">
                                    <div class="center-align">
                                        <a href=""><h5 class="app-heading blue-grey-text text-darken-3">kota.sk</h5></a>
                                    </div>
                                </li>

                                <li class="carousel-item" data-id="2">
                                    <img src="img/portfolios/noseyfish.png">
                                    <div class="center-align">
                                        <a href=""><h5 class="app-heading blue-grey-text text-darken-3">noseyfish.sk</h5></a>
                                    </div>
                                </li>

                                <li class="carousel-item" data-id="3">
                                    <img src="img/portfolios/radoslavtomas.png">
                                    <div class="center-align">
                                        <a href=""><h5 class="app-heading blue-grey-text text-darken-3">radoslavtomas.sk</h5></a>
                                    </div>
                                </li>

                                <li class="carousel-item" data-id="4">
                                    <img src="img/portfolios/medan.png">
                                    <div class="center-align">
                                        <a href=""><h5 class="app-heading blue-grey-text text-darken-3">medan.sk</h5></a>
                                    </div>
                                </li>
                            </ul>{{--carousel end--}}

                            <div class="row">
                                <div class="col s12">
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                            <span class="card-title centre-align">Title</span>
                                            <div class="divider"></div>
                                            <div>
                                                <img class="responsive-img" width="100" src="img/portfolios/kota.png" alt="">
                                            </div>
                                            <p>I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>
                                        </div>
                                        <div class="card-action">
                                            <a class="teal-text text-lighten-3" href="#">Visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>{{--end carousel-wrapper--}}

                        {{--<div class="slider hide-on-small-only">--}}
                            {{--<ul class="slides">--}}
                                {{--<li>--}}
                                    {{--<img src="img/portfolios/kota.png" width="300">--}}
                                    {{--<div class="caption left-align">--}}
                                        {{--<a href=""><h2 class="app-heading blue-grey-text text-darken-3">kota.sk</h2></a>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                {{--<li>--}}
                                    {{--<img src="img/portfolios/noseyfish.png">--}}
                                    {{--<div class="caption left-align">--}}
                                        {{--<a href=""><h2 class="app-heading blue-grey-text text-darken-3">noseyfish.sk</h2></a>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                {{--<li>--}}
                                    {{--<img src="img/portfolios/radoslavtomas.png">--}}
                                    {{--<div class="caption left-align">--}}
                                        {{--<a href=""><h2 class="app-heading blue-grey-text text-darken-3">radoslavtomas.sk</h2></a>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                {{--<li>--}}
                                    {{--<img src="img/portfolios/medan.png">--}}
                                    {{--<div class="caption left-align">--}}
                                        {{--<a href=""><h2 class="app-heading blue-grey-text text-darken-3">medan.sk</h2></a>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}{{--slides end--}}
                        {{--</div>--}}{{--slider end--}}

                        {{--<br>--}}

                        {{--<div class="row">--}}

                            {{--<div class="col s12 m10 offset-m1">--}}
                                {{--<ul class="collapsible popout green lighten-4 s12 m8 offset-m2" data-collapsible="accordion">--}}
                                    {{--<li class="green lighten-4">--}}
                                        {{--<div class="collapsible-header">--}}
                                            {{--<h5 class="app-heading">kota.sk</h5>--}}
                                        {{--</div>--}}
                                        {{--<div class="collapsible-body">--}}
                                            {{--<div>--}}
                                                {{--<img class="responsive-img" width="100" src="img/portfolios/kota.png" alt="">--}}
                                            {{--</div>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolores eveniet, fugit, impedit in minus necessitatibus nesciunt non nulla numquam placeat provident quisquam quod ratione repudiandae sint tempora unde vel?</p>--}}
                                            {{--<br>--}}
                                            {{--<a href="" class="btn">kota.sk</a>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="collapsible-header">--}}
                                            {{--<h5 class="app-heading">medan.sk</h5>--}}
                                        {{--</div>--}}
                                        {{--<div class="collapsible-body">--}}
                                            {{--<div>--}}
                                                {{--<img class="responsive-img" width="100" src="img/portfolios/medan.png" alt="">--}}
                                            {{--</div>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, placeat, sed. Corporis cum eius facilis id illo libero minima obcaecati quae quo, rem. Accusantium architecto debitis dolore minus quibusdam similique.</p>--}}
                                            {{--<br>--}}
                                            {{--<a href="" class="btn">medan.sk</a>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="collapsible-header">--}}
                                            {{--<h5 class="app-heading">noseyfish.sk</h5>--}}
                                        {{--</div>--}}
                                        {{--<div class="collapsible-body">--}}
                                            {{--<div>--}}
                                                {{--<img class="responsive-img" width="100" src="img/portfolios/noseyfish.png" alt="">--}}
                                            {{--</div>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi consectetur culpa deleniti error est fugiat, illum iusto, labore laborum maxime nobis nulla numquam recusandae repudiandae veritatis vitae? Nemo, porro?</p>--}}
                                            {{--<br>--}}
                                            {{--<a href="" class="btn">noseyfish.sk</a>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="collapsible-header">--}}
                                            {{--<h5 class="app-heading">radoslavtomas.sk</h5>--}}
                                        {{--</div>--}}
                                        {{--<div class="collapsible-body">--}}
                                            {{--<div>--}}
                                                {{--<img class="responsive-img" width="100" src="img/portfolios/radoslavtomas.png" alt="">--}}
                                            {{--</div>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aperiam consequatur eius et excepturi mollitia nesciunt quos temporibus vel. Aliquam animi deserunt inventore ipsa ipsum molestiae pariatur qui quidem reprehenderit.</p>--}}
                                            {{--<br>--}}
                                            {{--<a href="" class="btn">radoslav.sk</a>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                    </div>{{--card end--}}

                    <br>
                    <wave-divider></wave-divider>
                    <br>
                </div>
            </div>
        </div>

    </div>


@stop

@section('javascript')
    <script>
        $('.slider').slider();
        $('.carousel').carousel({
            onCycleTo: function(data) {
                var el = $('li.carousel-item.active');
                var id = el.data('id');
                console.log(id);
            }
        });
        $('.collapsible').collapsible();
    </script>
@stop

@section('styles')

    <style>
        .slider .slides li img {
            background-size: contain;
            background-repeat: no-repeat;
            background-color: #d7ccc8 ;
        }

        .carousel-wrapper {
            position: relative;
            top: -40px;
        }

        .carousel .carousel-item {
            background-color: cadetblue;
            border-radius: 5px;
            width: 250px;
            height: 250px;
        }

        /*.slider {*/
            /*box-shadow: #616161 1px 1px 6px;*/
        /*}*/

        .slider .indicators .indicator-item.active {
            background-color: #00b0ff;
        }

        .flex-list img {
            width: 150px;
        }

        .collapsible-header {
            justify-content: center;
            align-items: center;
            background-color: transparent;
        }

        .collapsible-body {
            border-top: 1px dotted #bdbdbd;
            padding-top: 0;
        }
    </style>
@stop