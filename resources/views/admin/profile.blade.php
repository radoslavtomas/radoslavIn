@extends('layouts.admin')

@section('content')
    <div class="col s8">

        <div class="card">
            <div class="card-content">
                <span class="card-title">Your profile</span>
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
                    <form class="col s12" action="{{ route('profile.update', ['profile' => $profile->id]) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="patch">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" name="name" type="text" value="{{ $profile->user->name }}" class="validate">
                                <label for="title">Name</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" value="{{ $profile->user->email }}" class="validate">
                                <label for="title">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" value="" class="validate">
                                <label for="title">Update password?</label>
                            </div>
                        </div>

                        <div>
                            <img class="responsive-img preview" width="100" src="{{ $profile->avatar }}" alt="">
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input name="avatar" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="avatar_name" type="text">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="about" name="about" type="text" value="{{ $profile->about }}" class="validate">
                                <label for="title">About</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="city" name="city" type="text" value="{{ $profile->city }}" class="validate">
                                <label for="title">City</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="facebook" name="facebook" type="url" value="{{ $profile->facebook }}" class="validate">
                                <label for="title">Facebook profile</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="linkedin" name="linkedin" type="url" value="{{ $profile->linkedin }}" class="validate">
                                <label for="title">LinkedIn profile</label>
                            </div>
                        </div>

                        <button class="btn waves-effect waves-light" type="submit" name="action">Edit your profile
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
        var editor_config = {
            path_absolute : "/",
            selector: "#text",
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
