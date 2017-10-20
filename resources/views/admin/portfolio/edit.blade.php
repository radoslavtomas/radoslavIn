@extends('layouts.admin')


@section('content')

    <div class="col s8">

        <div class="card">
            <div class="card-content">
                <span class="card-title">Edit portfolio: {{ $portfolio->name }}</span>
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
                    <form class="col s12" action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" name="name" type="text" value="{{ $portfolio->name }}" class="validate">
                                <label for="title">Name</label>
                            </div>
                        </div>
                        <div>
                            <img class="responsive-img preview" width="100" src="{{ $portfolio->image }}" alt="{{ $portfolio->name }}">
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Image</span>
                                <input name="image" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="image_name" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="description" name="description" class="materialize-textarea">{{ $portfolio->description }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="link" name="link" type="url" value="{{ $portfolio->link }}" class="validate">
                                <label for="title">Link</label>
                            </div>
                        </div>


                        <button class="btn waves-effect waves-light" type="submit" name="action">Edit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </div>{{--end col s8--}}

@stop

@section('scripts')

    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#description',
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