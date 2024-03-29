@extends('back.layouts.master')
@section('css')
<!-- multi.js css -->
<link rel="stylesheet" type="text/css" href="{{asset('admin-panel')}}/assets/libs/multi.js/multi.min.css" />
<!-- autocomplete css -->
<link rel="stylesheet" href="{{asset('admin-panel')}}/assets/libs/%40tarekraafat/autocomplete.js/css/autoComplete.css">
@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Məhsul redaktə et</h4>
                                
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-12">
                                        <div class="col-xl-12">
                                            <div class="card">
                                             
                                                <div class="card-body">
                                                    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                                                        @method('PUT')
                                                       @csrf


                                                       <table class="table table-bordered" id="dynamicAddRemove">
                                                        <tr>
                                                            @foreach ($languages as $item)
                                                            <th>Fayl adı ({{$item->code}})</th>
                                                            @endforeach 
                                                            <th>Fayl</th>
                                                            <th>Əməliyyatlar</th>
                                                        </tr>
                                                        <tr>
                                                            @foreach ($languages as $item)
                                                            <td><input type="text" value="@if($product_files->isNotEmpty())
                                                                {{$product_files[0]->translate($item->code)->file_name }}
                                                            @endif " name="file_name:{{$item->code}}[]" placeholder="Adı ({{$item->code}})" class="form-control" />
                                                            </td>
                                                            @endforeach 
                                                          
                                                            <td><input type="file" value="{{$product_files[0]->file ?? ''}} " name="file[]" class="form-control"  />
                                                                <a href="@if($product_files->isNotEmpty()){{asset($product_files[0]->file)}} @endif">{{$product_files[0]->file ?? ''}}</a>
                                                            </td>
                                                            <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Fayl əlavə et</button></td>
                                                        </tr>
                                                        @foreach ($product_files as $key=>$pf)
                                                            
                                                       @if($key>0)
                                                        
                                                  
                                                        <tr> @foreach ($languages as $item)<td><input type="text" value="{{$pf->translate($item->code)->file_name}}" name="file_name:{{$item->code}}[]" placeholder="Adı ({{$item->code}})" class="form-control" /></td>@endforeach
                                                            <td><input type="file" name="file[]" value="{{$pf->file}}"  class="form-control" />   <a href="{{asset($pf->file)}}">{{$pf->file}}</a></td><td><a href="{{route('file.destroy',$pf->id)}}"  class="btn btn-outline-danger remove-input-field">Sil</a></td></tr>
                                                            @endif   @endforeach
                                                    </table>

                                                        <div class="step-arrow-nav mb-4">
                
                                                            <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                                                @foreach ($languages as $item)
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="nav-link done" id="steparrow-{{$item->id}}-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-{{$item->id}}-info" type="button" role="tab" aria-controls="steparrow-{{$item->id}}-info" aria-selected="true">{{$item->name}}</button>
                                                                </li>
                                                                @endforeach
                                                             
                                                                
                                                                
                                                            </ul>
                                                        </div>
                
                                                        <div class="tab-content">
                                                            @foreach ($languages as $item)
                                                                
                                                            
                                                            <div class="tab-pane fade" id="steparrow-{{$item->id}}-info" role="tabpanel" aria-labelledby="steparrow-{{$item->id}}-info-tab">
                                                                <div>
                                                                            <div class="mb-3">
                                                                                <label for="formFile" class="form-label">Başlıq-{{$item->code}}</label>
                                                                                <input value="{{$product->translate($item->code)->title}}" class="form-control" name="title:{{$item->code}}" type="text" id="formFile" />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="formFile" class="form-label">Qısa mətn-{{$item->code}}</label>
                                                                                <input value="{{$product->translate($item->code)->sub_title}}" class="form-control" name="sub_title:{{$item->code}}" type="text" id="formFile" />
                                                                            </div>
                                                                            <div>
                                                                                <label class="form-label" for="des-info-description-input">Ətraflı-{{$item->code}}</label>
                                                                                <textarea class="form-control" name="description:{{$item->code}}" placeholder="Enter Description" id="des-info-description-input" rows="3" required>{{$product->translate($item->code)->description}}</textarea>
                                                                                <div class="invalid-feedback">Please enter a description</div>
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
                                        <!-- end col -->
                                        <!--end col-->
                                       
                                       
                                      
                                        <div class="col-lg-12">
                                            <div class="mt-4 mt-lg-0">
                                                <h5 class="fs-14 mb-1">Kateqoriyalar</h5>
                                         
                                          
                                                    <select name="categories[]" required multiple="multiple" name="favorite_cars" id="multiselect-header">
                                                        @foreach ($categories as $item)
                                                      
                                                        <option value="{{$item->id}}" {{-- @if($item->category->category_id==$item->id) selected @endif  --}}>{{$item->translate('az')->title}}</option>
                                                        @endforeach
                                                      
                                                       
                                                    </select>
                                              
                                            </div>
                                        </div>
                                        

                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Slug</label>
                                                <input value="{{$product->slug}}" name="slug" type="text" class="form-control" id="basiInput">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Qiymət</label>
                                                <input value="{{$product->price}}" name="price" type="text" class="form-control" id="basiInput">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Endirimli qiymət</label>
                                                <input value="{{$product->discount}}" name="discount" type="text" class="form-control" id="basiInput">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Stok</label>
                                                <input value="{{$product->stock}}" name="stock" type="text" class="form-control" id="basiInput">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Brendlər</label>
                                        <select name="brend_id" class="form-select mb-3" aria-label=".form-select-lg example">
                                            <option value="{{$product->brend->id}}" >Brend Seç</option>
                                            @foreach ($brends as $item)
                                            <option value="{{$item->id}}" @if($product->brend->id==$item->id)  selected @endif>{{$item->translate('az')->title}}</option>
                                            @endforeach
                                           
                                           
                                        </select>
                                        </div>
                                    </div>
                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Ön şəkil </label>
                                                <input type="file" name="thumb_image_1" class="form-control" id="basiInput">
                                                <img src="/{{$product->thumb_image_1}}"  width="120" height="120">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">2-ci Ön şəkil</label>
                                                <input type="file" name="thumb_image_2" class="form-control" id="basiInput">
                                                <img src="/{{$product->thumb_image_2}}"  width="120" height="120">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Məhsul Şəkilləri</label>
                                                <input type="file" name="images[]" class="form-control" id="basiInput" multiple>
                                               {{--  {{dd($product->images())}} --}}
                                               
                                                @foreach ($images as $item)
                                                <a href="{{route('image.destroy', $item->id)}}"> <img src="{{$item->image}}" width="120" height="120" style="margin: 10px;"></a>
                                               

                                                @endforeach
                                            </div>
                                        </div>
                                       
                                    <div class="col-xxl-12">
                                        <div class="card">
                                          
                                            <div class="card-body">
                                                
                                                <div class="live-preview">
                                                      <div class="form-check form-switch form-switch-lg text-start" dir="ltr">
                                            <input name="status" type="checkbox" class="form-check-input" id="customSwitchsizelg" checked="" value=1>
                                            <label class="form-check-label" for="customSwitchsizelg">Passiv/Aktiv</label>
                                        </div>
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Redaktə et</button>
                                                        </div>
                                                    
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

      
    @endsection
@section('js')
 <!-- multi.js -->
 <script src="{{asset('admin-panel')}}/assets/libs/multi.js/multi.min.js"></script>
 <!-- autocomplete js -->
 <script src="{{asset('admin-panel')}}/assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js"></script>

 <!-- init js -->
 <script src="{{asset('admin-panel')}}/assets/js/pages/form-advanced.init.js"></script>
 <!-- input spin init -->
 <script src="{{asset('admin-panel')}}/assets/js/pages/form-input-spin.init.js"></script>
 <!-- input flag init -->
 <script src="{{asset('admin-panel')}}/assets/js/pages/flag-input.init.js"></script>

 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript">
/*  function myFunction(){
    $("#dynamicAddRemove").append(`<tr> @foreach ($languages as $item)<td><input type="text" name="file_name:{{$item->code}}[]" placeholder="Adı ({{$item->code}})" class="form-control" /></td>@endforeach<td><input type="file" name="test['${i}'][test]"  class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Sil</button></td></tr>`)
 } */
    
    $("#dynamic-ar").click(function () {
        
        $("#dynamicAddRemove").append(`<tr> @foreach ($languages as $item)<td><input type="text" name=file_name:{{$item->code}}[]" placeholder="Adı ({{$item->code}})" class="form-control" /></td>@endforeach<td><input type="file" name="file[]"  class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Sil</button></td></tr>`
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
    
</script>
@endsection