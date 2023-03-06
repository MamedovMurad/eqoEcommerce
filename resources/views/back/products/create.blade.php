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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Məhsul əlavə et</h4>
                                
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-12">
                                        <div class="col-xl-12">
                                            <div class="card">
                                             
                                                <div class="card-body">
                                                   
                                                       
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
                                                                                <label for="formFile" class="form-label">Text</label>
                                                                                <input class="form-control" type="text" id="formFile" />
                                                                            </div>
                                                                            <div>
                                                                                <label class="form-label" for="des-info-description-input">Description</label>
                                                                                <textarea class="form-control" placeholder="Enter Description" id="des-info-description-input" rows="3" required></textarea>
                                                                                <div class="invalid-feedback">Please enter a description</div>
                                                                            </div>
                                                                       
                                                                </div>
                                                                
                                                            </div>

                                                            @endforeach
                                                            <!-- end tab pane -->
                
                                                            <div class="tab-pane fade show active" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                                                                <div>
                                                                    <div class="mb-3">
                                                                        <label for="formFile" class="form-label">Text</label>
                                                                        <input class="form-control" type="text" id="formFile" />
                                                                    </div>
                                                                    <div>
                                                                        <label class="form-label" for="des-info-description-input">Description</label>
                                                                        <textarea class="form-control" placeholder="Enter Description" id="des-info-description-input" rows="3" required></textarea>
                                                                        <div class="invalid-feedback">Please enter a description</div>
                                                                    </div>
                                                                </div>
                                                               
                                                            </div>
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
                                            
                                                <form>
                                                    <select required multiple="multiple" name="favorite_cars" id="multiselect-header">
                                                        @foreach ($categories as $item)
                                                        <option>{{$item->translate('az')->title}}</option>
                                                        @endforeach
                                                      
                                                       
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        

                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Basic Input</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Basic Input</label>
                                        <select class="form-select mb-3" aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                           
                                        </select>
                                        </div>
                                    </div>
                                        <div class="col-xxl-3 col-md-6" style="margin-top: 20px">
                                            <div>
                                                <label for="basiInput" class="form-label">Basic Input</label>
                                                <input type="file" class="form-control" id="basiInput">
                                            </div>
                                        </div>
                                       
                                    <div class="col-xxl-6">
                                        <div class="card">
                                          
                                            <div class="card-body">
                                                
                                                <div class="live-preview">
                                                      <div class="form-check form-switch form-switch-lg text-start" dir="ltr">
                                            <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked="">
                                            <label class="form-check-label" for="customSwitchsizelg">Passiv/Aktiv</label>
                                        </div>
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Add Leave</button>
                                                        </div>
                                                    
                                                </div>
                                               
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
@endsection