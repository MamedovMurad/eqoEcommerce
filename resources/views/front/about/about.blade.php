
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
                        <li>about us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--about section area -->
<div class="about_section mt-32">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="about_thumb">
                    <img src="{{ asset($about->image) }}" alt="">
                </div>
                {{-- {{dd(App::getLocale())}} --}}
                
                <div class="about_content">
                    <h1> {{$about->translate(App::getLocale())->title ?? '' }}</h1>
                    <p>{!!$about->translate(App::getLocale())->text ?? '' !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>


 @endsection