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
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!-- customer login start -->
<div class="customer_login mt-32">
    <div class="container">
        <div class="row">

            <!--register area start-->
            <div class="col-lg-12 col-md-12" style="display: flex;justify-content: center;" >
                <div class="account_form register">
                    <h2 style="text-align: center">Register</h2>
                    <form action="{{route('register.post')}}" method="POST">
                        @csrf
                        <p>
                            <label>Full name <span>*</span></label>
                            <input name="name" type="text">
                        </p>
                        <p>
                            <label>Email address <span>*</span></label>
                            <input name="email" type="text">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input name="password" type="password">
                        </p>
                        <p>
                            <label>Confirm Passwords <span>*</span></label>
                            <input name="password_confirmation" type="password">
                        </p>
                        <p>
                            <label>Tel <span>*</span></label>
                            <input name="tel" type="text">
                        </p>
                        <div class="login_submit" style="text-align: center">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>
<!-- customer login end -->
@endsection