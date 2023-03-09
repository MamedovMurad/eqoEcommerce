@extends('back.layouts.master')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">

                 <form action="{{route('contact.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <label for="titleAbout">Başlıq: &nbsp</label>
                            <div class="card-title mb-0 flex-grow-1">
                                <input type="text" class="form-control" value="{{ $contact->title ?? '' }}" id="titleAbout"
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

                                    {{ $contact->text ?? '' }}
                                </textarea>
                            </div>

                            <div class="IMG d-flex mt-2">
                                <label for="foto" class="form-label">Foto: &nbsp </label>
                                <input class="form-control" name="file" type="file" id="foto"
                                    style="width:400px">
                                <img src="{{ $contact->image ?? '' }}" alt="" width="100" height="90">
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-xl-12">
                        <div class="card">
             

                            <div class="card-body">
                               
                                   @csrf
                                  
                                    <div class="step-arrow-nav mb-4">

                                        <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                            @foreach ($languages as $item)
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link done  @if($item->code=='az') active @endif" id="steparrow-{{$item->id}}-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-{{$item->id}}-info" type="button" role="tab" aria-controls="steparrow-{{$item->id}}-info" aria-selected="true">{{$item->name}}</button>
                                            </li>
                                            @endforeach
                                         
                                            
                                            
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        @foreach ($languages as $item)
                                            
                                        
                                        <div class="tab-pane fade  @if($item->code=='az')
                                           show active
                                        @endif  " id="steparrow-{{$item->id}}-info" role="tabpanel" aria-labelledby="steparrow-{{$item->id}}-info-tab">
                                            <div>
                                                        
                                                        <div>
                                                            <label class="form-label" for="des-info-description-input">Adres-{{$item->code}}</label>
                                                            <textarea id="editor-{{$item->code}}" class="form-control" name="address:{{$item->code}}" placeholder="Enter Description" id="des-info-description-input" rows="3" required> {{ $contact->translate($item->code)->address ?? '' }}</textarea>
                                                            @error("address:".$item->code)
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                        </div>
                                                   
                                            </div>
                                            
                                        </div>

                                        @endforeach
                                        <!-- end tab pane -->

                                        <!-- end tab pane -->

                              
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                             
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Email</label>
                        <input value="{{ $contact->email ?? '' }}" class="form-control" name="email" type="text" id="formFile" />
                        @error("email")
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Telefon</label>
                        <input value="{{ $contact->phone ?? '' }}" class="form-control" name="phone" type="text" id="formFile" />
                        @error("phone")
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Xəritə</label>
                        <input value="{{ $contact->map ?? '' }}" class="form-control" name="map" type="text" id="formFile" />
                        @error("map")
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Facebook</label>
                        <input value="{{ $contact->facebook ?? '' }}" class="form-control" name="facebook" type="text" id="formFile" />
                        @error("facebook")
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">İnstagram</label>
                        <input value="{{ $contact->instagram ?? '' }}" class="form-control" name="instagram" type="text" id="formFile" />
                        @error("instagram")
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                  

                    <div>
                        <button type="submit" class="btn btn-primary" style="float: right;"><i class="ri-edit-2-fill"></i></button>
                    </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
@foreach ($languages as $item)
<script>
    ClassicEditor
        .create(document.querySelector('#editor-{{$item->code}}'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endforeach
  
      
@endsection
