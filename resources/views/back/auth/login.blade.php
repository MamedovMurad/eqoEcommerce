<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/material/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jan 2023 05:28:06 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Ego Admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{asset('admin-panel')}}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('admin-panel')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('admin-panel')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('admin-panel')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('admin-panel')}}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="{{asset('admin-panel')}}/assets/images/logo-light.png" alt="" height="20">
                                </a>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to Velzon.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{route('log_in')}}" method="POST">
                                          @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"  id="username" placeholder="Enter email">
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Sign In</button>
                                        </div>

                                    
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                       

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
       
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{asset('admin-panel')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin-panel')}}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{asset('admin-panel')}}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{asset('admin-panel')}}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{asset('admin-panel')}}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{asset('admin-panel')}}/assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="{{asset('admin-panel')}}/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{asset('admin-panel')}}/assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="{{asset('admin-panel')}}/assets/js/pages/password-addon.init.js"></script>

    

 <script>
@jquery

@toastr_js

@toastr_render



    @if(count($errors) > 0)

        @foreach($errors->all() as $error)

            toastr.error("{{$error}}");

        @endforeach

    @endif


 </script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/material/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jan 2023 05:28:06 GMT -->
</html>