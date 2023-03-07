 <!-- JAVASCRIPT -->
 <script src="{{asset('admin-panel')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="{{asset('admin-panel')}}/assets/libs/simplebar/simplebar.min.js"></script>
 <script src="{{asset('admin-panel')}}/assets/libs/node-waves/waves.min.js"></script>
 <script src="{{asset('admin-panel')}}/assets/libs/feather-icons/feather.min.js"></script>
 <script src="{{asset('admin-panel')}}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
 <script src="{{asset('admin-panel')}}/assets/js/plugins.js"></script>
@yield('js')
 <!-- apexcharts -->
 <script src="{{asset('admin-panel')}}/assets/libs/apexcharts/apexcharts.min.js"></script>

 <!-- projects js -->
 <script src="{{asset('admin-panel')}}/assets/js/pages/dashboard-projects.init.js"></script>

 <!-- App js -->
 <script src="{{asset('admin-panel')}}/assets/js/app.js"></script>

 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 {{-- @jquery

 @toastr_js

 @toastr_render --}}

{{--  <script>

     @if(count($errors) > 0)

         @foreach($errors->all() as $error)

             toastr.error("{{$error}}");

         @endforeach

     @endif

 </script> --}}