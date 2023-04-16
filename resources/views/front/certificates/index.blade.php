
@extends('front.layouts.index')

@section('content')

 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                       
                        <li>shop fullwidth</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                <div class="shop_title">
                    <h1>shop</h1>
                </div>
              
                </div>
                <!--shop toolbar end-->

                <div class="row shop_wrapper">


                    @foreach ($certificates as $item)
                        
                    
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <div class="single_product" onclick="setPhoto('{{asset($item->image)}}')">
                            <div class="product_name grid_name">
                                <h3><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view">{{$item->translate(App::getLocale())->title}}</a></h3>
                               
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><img src="{{asset($item->image)}}" alt=""></a>
                              
                            </div>
                           
                           
                        </div>
                    </div>
                    @endforeach


                </div>

               {{--  <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div> --}}
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
        </div>
    </div>
</div>
<!--shop  area end-->


 @endsection


 @section('js')
<script>
    function setPhoto(params) {
        $('#modalDynamicPhoto').html(` <img src="${params}" alt="">`)
    }
</script>
 @endsection