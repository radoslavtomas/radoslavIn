@extends('layouts.admin')

@section('content')
    <div class="col s8">

        <div class="card">
            <div class="card-content">
                <span class="card-title">Edit Home Page</span>
                <hr>
                <br>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="main_title" type="text" class="validate">
                                <label for="main_title">Main title</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="main_text" class="materialize-textarea"></textarea>
                                <label for="main_text">Main text</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="sub_title" type="text" class="validate">
                                <label for="sub_title">Sub title</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="sub_text" class="materialize-textarea"></textarea>
                                <label for="sub_text">Sub text</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="button_text" type="text" class="validate">
                                <label for="button_text">Button text</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="button_link" type="text" class="validate">
                                <label for="button_link">Button link</label>
                            </div>
                        </div>

                        <button class="btn waves-effect waves-light" type="submit" name="action">Edit Home Page
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>

            </div>
        </div>


        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    </div>{{--end col s8--}}
@endsection
