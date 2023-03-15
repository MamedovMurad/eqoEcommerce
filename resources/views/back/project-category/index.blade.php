@extends('back.layouts.master')
@section('style')
<style>
    .titlesParent input:not(:first-child){
        display: none;
     
    }
</style>
@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">

                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Layihə kateqoriyası</h4>
                            <button type="button"
                                onclick="unSet()"   class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#partners_modal">Əlavə et</button>
                        </div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Başlıq</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($project_category as $partner)
                                    <tr>

                                        <th scope="row"><a href="#" class="fw-semibold">#{{$partner->id}}</a></th>
                                        <td>{{$partner->translate('az')->title}}</td>
                                        <td> <img src="{{$partner->image}}" width="50" height="50"> </td>
                                        <td>{{$partner->status==1?' Aktiv ':'Passiv'}}</td>
                                        <td>
                                            <div class="flex-wrap gap-3 hstack">

                                                    <button type="button"
                                                            data-bs-toggle="modal" data-bs-target="#partners_modal"
                                                            class="btn btn-ghost-info waves-effect waves-light shadow-none" onclick="formEditButton('{{$partner->id}}')"><i class="ri-edit-2-fill"></i></button>

                                            <form action="{{route('project.category.destroy',$partner->id)}}" method="post">
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
{{-- custom tab --}}




                <div id="partners_modal" class="modal fade" tabindex="-1" aria-labelledby="partners_modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="partners_modalLabel">Layihə kateqoriyası Əlavə Et</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('project.category.store')}}" id="partner_form" method="post"  enctype='multipart/form-data'>
                                   @csrf
                              
                                   <div class="row mb-3">
                                    <div class="custom__tab">
                                        <header>
                                         <ul class="nav nav-pills">
                                            @foreach ($languages as $key=>$item )
                                             <li onclick="setTab('titleInput{{$item->code}}',this)" class="nav-item">
                                                 <label for="titleInput{{$item->code}}" class="nav-link {{$key==0?'active':''}}" >Başlıq_{{$item->code}}</label>
                                             </li>
                                             @endforeach
                                         </ul>
                                        </header>
                                        <div class="titlesParent">
                                        @foreach ($languages as $item )
                                         <input type="text" class="form-control title__input" id="titleInput{{$item->code}}" placeholder="title {{$item->code}}" name="title:{{$item->code}}">   
                                         @endforeach
                                        </div>
                                     </div>



                                </div>
                                
                                    
                                    <div class="row mb-3">
                                        <div class="col-lg-3">
                                            <label for="foto" class="form-label">Foto</label>
                                        </div>
                                        <div class="col-lg-9 d-flex">

                                            <img id="update_photo"/>
                                                <input class="form-control" name="file" type="file" id="foto">

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-3">
                                            <label for="titleInput" class="form-label">Slug</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="titleInput" placeholder="Slug" name="slug">
                                        </div>
                                    </div>
                                    <div class="form-check form-check-secondary mb-3">
                                        <input  type="hidden" name="status" value=0>
                                        <input id="checkbox" name="status" type="checkbox" value=1>
                                        <label class="form-check-label" for="formCheck7">
                                           Status
                                        </label>
                                    </div>




                                </form>
                           </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary " id="submit_button" form="partner_form">Save Changes</button>
                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        // tab function

        function setTab(params,argument) {
            $('.title__input').css("display", "none");
            $('#'+params).css("display", "block")
            $('.nav-link').removeClass( 'active');
            $(argument).children('label').addClass( 'active');
        }
      const action =   $("#partner_form").attr('action')
      const title_form =  $('#partners_modalLabel').text()
        function unSet(){
            $("#partner_form").attr('action',action)
            $("#hidden__").remove()
            $('#partners_modalLabel').text(title_form)
            $('#update_photo').removeAttr('src')

            $('#titleInput').val('')
            $('#update_photo').css({'width':'0','height':'0'})

            $('#type_form').val('0')
            $('#foto').val('')
        }
        ;
       function formEditButton(id_) {
        $('#checkbox').prop("checked", false)
           $("#partner_form").attr('action','http://127.0.0.1:8000/project-category/'+id_)
           $("#partner_form").append( `<input type="hidden" name="_method" value="PUT" id="hidden__">`)
           $('#partners_modalLabel').text('Layihə kateqoriyasını yenilə')
           $.ajax({
               type: "GET",
               url: 'project-category/'+id_,
                // serializes the form's elements.
               success: function(data)
               {
                         
                   $('#titleInput').val(data.slug)
                   
                   $('#update_photo').css({'width':'80px','height':'80px'})
                   $('#update_photo').attr('src','/'+data.image)
                 
                  
                   if (data.status=='1') {
            $('#checkbox').prop("checked", true);
          }
                   $('.titlesParent').html('')
                   $('.nav-link').removeClass( 'active');
          
          $('.nav-pills .nav-item:first-child .nav-link').addClass( 'active')
                   data.translations.forEach(item => {

                   $('.titlesParent').append($("<input/>").addClass('form-control title__input').attr({"id": 'titleInput'+item.locale, "name": 'title:'+item.locale,'value':item.title}))
                });
          }
           });
       }











    </script>
    @endsection
