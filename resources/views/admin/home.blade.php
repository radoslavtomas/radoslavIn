@extends('layouts.admin')

@section('content')
    <div class="col s8">

        <div class="card">
            <div class="card-content">
                <span class="card-title">Home Page</span>
                <hr>
                <br>
                @if ($errors->any())
                    <div class="error red lighten-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <form class="col s12" action="{{ route('postHome') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="main_title" name="main_title" type="text" value="{{ $data->main_title }}" class="validate">
                                <label for="main_title">Main title</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="main_text" name="main_text" class="materialize-textarea">{{ $data->main_text }}</textarea>
                                <label for="main_text">Main text</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="sub_title" name="sub_title" type="text" value="{{ $data->sub_title }}" class="validate">
                                <label for="sub_title">Sub title</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="sub_text" name="sub_text" class="materialize-textarea">{{ $data->sub_text }}</textarea>
                                <label for="sub_text">Sub text</label>
                            </div>
                        </div>

                        <button class="btn waves-effect waves-light" type="submit" name="action">Edit Home Page
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </div>{{--end col s8--}}
@endsection
