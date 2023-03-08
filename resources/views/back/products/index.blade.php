@extends('back.layouts.master')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">

                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Məhsullar</h4>
                           <a href="{{route('product.create')}}"  class="btn btn-primary "> Əlavə et</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Başlıq</th>
                                    <th scope="col">Foto</th>
                                   
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $partner)
                                    <tr>

                                        <th scope="row"><a href="#" class="fw-semibold">#{{$partner->id}}</a></th>
                                        <td>{{$partner->translate('az')->title}}</td>
                                        <td> <img src="{{$partner->thumb_image_1}}" width="50" height="50"> </td>
                                        
                                        <td>
                                            <div class="flex-wrap gap-3 hstack">

                                                    <a href="{{route('product.edit',$partner->id)}}" type="button" class="btn btn-ghost-info waves-effect waves-light shadow-none" {{-- onclick="formEditButton('{{$partner->id}}')" --}}><i class="ri-edit-2-fill"></i></a>

                                            <form action="{{route('product.destroy',$partner->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="from_edit btn btn-ghost-danger waves-effect waves-light shadow-none"><i class="ri-delete-bin-line"></i></button>

                                            </form>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Default Modals -->

      
    @endsection
