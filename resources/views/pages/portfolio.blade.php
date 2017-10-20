@extends('layouts.master')

@section('title', 'Portfolio')

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
                                @foreach($portfolios as $portfolio)

                                    <li class="carousel-item" data-id="{{ $portfolio->id }}">
                                        <img src="{{ $portfolio->image }}" width="350">
                                        <div class="center-align">
                                            <a href="{{ $portfolio->link }}"><h5 class="app-heading blue-grey-text text-darken-3">{{ $portfolio->name }}</h5></a>
                                        </div>
                                    </li>

                                @endforeach

                            </ul>{{--carousel end--}}

                            <div class="row">
                                <div class="col s12">
                                    <div id="post_description" class="card">
                                        <div class="card-content">
                                            <span class="card-title centre-align" id="pf_title">Title</span>
                                            <div class="divider"></div>
                                            <div>
                                                <img id="pf_image" class="responsive-img" width="100" src="img/portfolios/kota.png" alt="Defualt image">
                                            </div>
                                            <div id="pf_description">Description...</div>
                                        </div>
                                        <div class="card-action">
                                            <a id="pf_link" target="_blank" class="grey-text text-darken-3" href="#">Visit</a>
                                        </div>
                                    </div>{{--inner cad end--}}
                                </div>{{--col s12 end--}}
                            </div>{{--row end--}}
                        </div>{{--end carousel-wrapper--}}
                    </div>{{--card end--}}

                    <br>
                    <wave-divider></wave-divider>
                    <br>
                </div>
            </div>
        </div>

    </div>


@stop

@section('scripts')
    <script>
        console.log('Script started');
        $('.slider').slider();
        console.log('carousel started.');
        $('.carousel').carousel({
            onCycleTo: function(data) {
                var el = $('li.carousel-item.active');
                var id = el.data('id');
                axios.get('getPortfolioById/' + id)
                    .then(function(portfolio){
                        $('#pf_title').text(portfolio.data.name);
                        $('#pf_image').attr('src', portfolio.data.image);
                        $('#pf_description').html(portfolio.data.description);
                        $('#pf_link').attr('href', portfolio.data.link);
                    });
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

        #post_description {
            background-color: rgba(95,158,160,0.3);
        }

        #post_description .card-action {
            background-color: rgba(95,158,160,0.3);
        }

    </style>
@stop