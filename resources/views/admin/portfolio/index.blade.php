@extends('layouts.admin')


@section('content')

    <div class="col s8">

        <div class="card">
            <div class="card-content">
                <span class="card-title">Portfolio</span>
                <a class="btn-floating btn-small halfway-fab waves-effect waves-light blue-grey lighten-3" href="{{ route('portfolio.create') }}"><i class="material-icons">add</i></a>
                <hr>
                <br>

                <div class="row">
                    <ul class="collection portfolios">
                        @foreach($portfolios as $portfolio)
                        <li class="collection-item">
                            {{ $portfolio->name }}
                            <div class="secondary-content">
                                <a href="{{ route('portfolio.edit', $portfolio->id) }}"><i class="material-icons blue-text text-accent-2">edit</i></a>
                                <a href="{{ route('portfolio.destroy', $portfolio->id) }}" onclick="event.preventDefault(); confirm('Sure?'); document.getElementById('logout-form-{{ $portfolio->id }}').submit();"><i class="material-icons red-text text-darken-1">delete</i></a>
                                <form id="logout-form-{{ $portfolio->id }}" action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display: none;">
                                    <input type="hidden" name="_method" value="delete">
                                    {{ csrf_field() }}
                                </form>
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
            top: 25px;
        }

        .btn-floating.btn-small {
            height: 30px;
            width: 30px;
            line-height: 30px;
        }

        .btn-small i {
            line-height: 30px;
        }
    </style>

@stop

@section('scripts')
    <script>

    </script>
@stop