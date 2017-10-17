@extends('layouts.master')

@section('title', 'Contact')

@section('content')

    <br>
    <div>

        <div class="row">
            <div class="col s12 m10 offset-m1">
                <div class="card  green lighten-4">
                    <br>
                    <wave-divider></wave-divider>
                    <div class="card-content  blue-grey-text text-darken-3 center">
                        <h1 class="app-heading">Contact me</h1>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="name" type="text" class="validate">
                                        <label for="first_name">Your Name</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="last_name" type="email" class="validate">
                                        <label for="last_name">Your email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="message" class="materialize-textarea"></textarea>
                                            <label for="message">Your message</label>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn waves-effect waves-light" type="submit" name="action">Send
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

    </div>

@stop