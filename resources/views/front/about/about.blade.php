
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
                    <img src="{{ asset('themeplate') }}/assets/img/about/about1.jpg" alt="">
                </div>

                <div class="about_content">
                    <h1>Welcome to Autima!</h1>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulpuhendrerit in vulputate velit esse molestie consequat, vel illum do hendrerit in vulputate velit esse molestie consequat, vel illum do tate velit esse mole hendrerit in vulputate velit esse molestie consequat, vel illum do hendrerit in vulputate velit esse molestie consequat, vel illum dostie consequat, vel illum  hendrerit in vulputate velit esse molestie consequat, vel illum do dhendrerit in vulputate velit esse molestie consequat, vel illum doolore eu feugiat nulla facilisis</p>
                </div>
            </div>
        </div>
    </div>
</div>


 @endsection