@extends('layouts.master')

@section('title', 'Portfolios')

@section('content')

    <br>
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <div class="card  blue lighten-4">
                <br>
                <wave-divider></wave-divider>

                <div class="card-content  blue-grey-text text-darken-3 center">
                    <h1 class="app-heading">My portfolio</h1>
                    <div class="row" style="margin: 0 auto;">
                        @foreach($portfolios as $portfolio)
                                <a href="{{ route('portfolio', $portfolio->slug) }}">
                                    <div class="col s12 l4">
                                        <div class="card blue-grey">
                                            <div class="card-content white-text">
                                                <span class="card-title">{{ $portfolio->name }}</span>
                                                <img src="{{ $portfolio->image }}" style="max-width: 70%; margin: 0 auto;">
                                                <p>{{ strip_tags(str_limit($portfolio->description, 100)) }}</p>
                                            </div>
                                            <div class="card-action">
                                                <a href="{{ $portfolio->link }}">Have a look</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        @endforeach
                    </div>
                </div>{{--card end--}}

                <br>
                <wave-divider></wave-divider>
                <br>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
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
    </script>
@stop
