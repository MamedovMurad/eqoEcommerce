@extends('back.layouts.master')
@section('style')
<style>
    .titlesParent .title__input:not(:first-child){
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
                            <h4 class="card-title mb-0 flex-grow-1">Partnyorlar və Referanslar</h4>
                            <button type="button"
                                onclick="unSet()"   class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#partners_modal">Əlavə et</button>
                        </div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Key</th>
                                    <th scope="col">Text</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tercume as $partner)
                                    <tr>

                                        <th scope="row"><a href="#" class="fw-semibold">#{{$partner->id}}</a></th>
                                        <td>{{$partner->key}}</td>
                                        <td> {{$partner->translate('az')->text}}</td>
                                     
                                        <td>
                                            <div class="flex-wrap gap-3 hstack">

                                                    <button type="button"
                                                            data-bs-toggle="modal" data-bs-target="#partners_modal"
                                                            class="btn btn-ghost-info waves-effect waves-light shadow-none" onclick="formEditButton('{{$partner->id}}')"><i class="ri-edit-2-fill"></i></button>

                                            <form action="{{route('tercume.destroy',$partner->id)}}" method="post">
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
                                <h5 class="modal-title" id="partners_modalLabel">Tərcümə Əlavə Et</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('tercume.store')}}" id="partner_form" method="post"  enctype='multipart/form-data'>
                                   @csrf
                              
                                   <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="titleInput" class="form-label">Key</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="titleInput" placeholder="Key" name="key">
                                    </div>
                                </div>
                                   <div class="row mb-3">
                                    <div class="custom__tab">
                                        <header>
                                         <ul class="nav nav-pills">
                                            @foreach ($languages as $key=>$item )
                                             <li onclick="setTab('titleInput{{$item->code}}',this)" class="nav-item">
                                                 <label for="titleInput{{$item->code}}" class="nav-link {{$key==0?'active':''}}" >Text {{$item->code}}</label>
                                             </li>
                                             @endforeach
                                         </ul>
                                        </header>
                                        <div class="titlesParent">
                                        @foreach ($languages as $item )
                                        <div id="titleInput{{$item->code}}" class="title__input">
                                        
                                            
                                          <textarea name="text:{{$item->code}}"  class="form-control mt-3"  cols="30" rows="10">{{$item->code}}</textarea>
                                       
                                        </div>
                                         @endforeach
                                        </div>
                                     </div>



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
           $("#partner_form").attr('action','http://127.0.0.1:8000/tercume/'+id_)
           $("#partner_form").append( `<input type="hidden" name="_method" value="PUT" id="hidden__">`)
           $('#partners_modalLabel').text('Xəbəri yenilə')
           $.ajax({
               type: "GET",
               url: 'tercume/'+id_,
                // serializes the form's elements.
               success: function(data)
               {
                   
                   $('#titleInput').val(data.key)
            
                   $('.titlesParent').html('')
                   $('.nav-link').removeClass( 'active');
          
          $('.nav-pills .nav-item:first-child .nav-link').addClass( 'active')
      
       
          
                   data.translations.forEach(item => {
                  let custom_input=  $("<div/>").addClass('title__input').attr('id','titleInput'+item.locale)
                  
                   $('.titlesParent').append(custom_input.append($('<textarea/>').addClass('form-control mt-3').attr({"name":'text:'+item.locale,"cols":"30", "rows":"10"}).val(item.text)))
                });
          }
           });
       }











    </script>
    @endsection
