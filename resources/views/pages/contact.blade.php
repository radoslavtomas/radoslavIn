@extends('layouts.master')

@section('title', 'Contact')

@section('content')

    <br>
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <div class="card  green lighten-4">
                <br>
                <wave-divider></wave-divider>
                <div class="card-content  blue-grey-text text-darken-3 center">
                    <h1 class="app-heading">Contact me</h1>
                    <div class="row">
                        <form class="col s12" method="POST" action="{{ route('contact.post') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <input id="name" name="name" type="text" class="validate">
                                    <label for="first_name">Your Name</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="email" name="email" type="email" class="validate">
                                    <label for="email">Your email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="message" name="message" class="materialize-textarea"></textarea>
                                        <label for="message">Your message</label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn waves-effect waves-light" type="submit">Send
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                </div>
                <br>
                <br>
                <wave-divider></wave-divider>
                <br>
            </div>
        </div>
    </div>
@stop