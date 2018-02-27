@extends('layouts.admin')


@section('content')

    <div class="col s8">

        <div class="card">
            <div class="card-content">
                <span class="card-title">Create portfolio</span>
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
                    <form class="col s12" action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" name="name" type="text" value="{{ old('name') }}" class="validate">
                                <label for="title">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="slug" name="slug" type="text" value="{{ $portfolio->slug }}" class="validate">
                                <label for="title">Slug</label>
                            </div>
                        </div>
                        <div>
                            <img class="responsive-img preview" width="100" src="" alt="">
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
                        <textarea name="description" id="description">{{ old('description') }}</textarea>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="link" name="link" type="url" value="{{ old('link') }}" class="validate">
                                <label for="title">Link</label>
                            </div>
                        </div>

                        <button class="btn waves-effect waves-light" type="submit" name="action">Add portfolio
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </div>{{--end col s8--}}

@stop

@section('styles')

    <style>

    </style>

@stop

@section('scripts')

    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "#description",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            menubar: false,
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
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