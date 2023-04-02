
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
                        <li>our services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--services img area-->
<div class="services_gallery mt-32">
    <div class="container">
        <div class="row">

            @foreach ($support as $item)
                
          
            <div class="col-lg-4 col-md-6">
                <div class="single_services">
                    <div class="services_thumb">
                        <img src="{{asset($item->image)}}" alt="">
                    </div>
                    <div class="services_content">
                        <h3>{{$item->translate(App::getLocale())->title}}</h3>
                        <p>{!!$item->description!!}</p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--services img end-->

 @endsection