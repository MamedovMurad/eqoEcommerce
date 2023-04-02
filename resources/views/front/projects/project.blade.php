
@extends('front.layouts.index')

@section('content')

 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                     
                        <li><a href="{{route('home')}}">home</a></li>
                        <li>{{$project->translate(App::getLocale())->title ?? '' }}</li>
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
                    <img src="{{ asset($project->image) }}" alt="">
                </div>
                {{-- {{dd(App::getLocale())}} --}}
                
                <div class="about_content">
                    <h1> {{$project->translate(App::getLocale())->title ?? '' }}</h1>
                    <p>{!!$project->translate(App::getLocale())->description ?? '' !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>


 @endsection