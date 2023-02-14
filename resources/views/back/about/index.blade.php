@extends('back.layouts.master')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">

                 <form action="{{route('about.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <label for="titleAbout">Başlıq: &nbsp</label>
                            <div class="card-title mb-0 flex-grow-1">
                                <input type="text" class="form-control" value="{{ $about->title ?? '' }}" id="titleAbout"
                                    placeholder="title" name="title" style="width: 300px">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary"><i class="ri-edit-2-fill"></i></button>
                            </div>
                        </div>
                        <div class="card-body">


                            <div class="d-flex">
                                <label for="editor">Mətn: &nbsp;</label>
                                <textarea id="editor" name="text">

                                    {{ $about->text ?? '' }}
                                </textarea>
                            </div>

                            <div class="IMG d-flex mt-2">
                                <label for="foto" class="form-label">Foto: &nbsp </label>
                                <input class="form-control" name="file" type="file" id="foto"
                                    style="width:400px">
                                <img src="{{ $about->image ?? '' }}" alt="" width="100" height="90">
                            </div>
                        </div>
                    </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
