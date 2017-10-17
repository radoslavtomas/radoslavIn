@extends('layouts.admin')


@section('content')

    <div class="col s8">

        <div class="card">
            <div class="card-content">
                <span class="card-title">Portfolio</span>
                <a class="btn-floating halfway-fab waves-effect waves-light blue-grey lighten-3" alt="Add new porffolio"><i class="material-icons">add</i></a>
                <hr>
                <br>

                <div class="row">
                    <ul class="collection portfolios">
                        @foreach($portfolios as $portfolio)
                        <li class="collection-item">
                            {{ $portfolio->name }}
                            <div class="secondary-content">
                                <a href="{{ route('portfolio.edit', $portfolio->id) }}"><i class="material-icons blue-text text-accent-2">edit</i></a>
                                <a href="{{ route('portfolio.destroy', $portfolio->id) }}"><i class="material-icons red-text text-darken-1">delete</i></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

    </div>{{--end col s8--}}

@stop

@section('styles')

    <style>
        .portfolios i {
            margin-left: 10px;
        }

        .btn-floating.halfway-fab {
            top: 44px;
        }
    </style>

@stop