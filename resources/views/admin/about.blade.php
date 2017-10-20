@extends('layouts.admin')

@section('content')
    <div class="col s8">

        <div class="card">
            <div class="card-content">
                <span class="card-title">About Page</span>
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
                    <form class="col s12" action="{{ route('postAbout') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="title" name="title" type="text" value="{{ $data->title }}" class="validate">
                                <label for="title">Title</label>
                            </div>
                        </div>
                        <div>
                            <img class="responsive-img preview" width="100" src="{{ $data->image }}" alt="">
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input name="image" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="image_name" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="text" rows="20" name="text" class="materialize-textarea">{{ $data->text }}</textarea>
                                <label for="text">Main text</label>
                            </div>
                        </div>


                        <button class="btn waves-effect waves-light" type="submit" name="action">Edit About Page
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </div>{{--end col s8--}}
@endsection

@section('scripts')

    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#text',
            plugins: 'link',
            menubar: false
        });
    </script>

    <script>
        $('.input-field input[type=file]').on('change', function() {
            var files = event.target.files;
            var fileName = files[0].name;

            console.log(fileName);

            if (fileName.lastIndexOf('.') <= 0) {
                return alert('Please, add a valid file!');
            }

            var fileReader = new FileReader();
            fileReader.readAsDataURL(files[0]);
            fileReader.addEventListener('load', function() {
                $('.preview').attr('src', fileReader.result);
            });

        });
    </script>

@stop

@section('styles')

    <style>
        .error {
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>

@stop