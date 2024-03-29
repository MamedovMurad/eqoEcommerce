  <!--call to action start-->
  <section class="call_to_action">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="call_action_inner">
                    <div class="call_text">
                        <h3>We Have <span>Recommendations</span> for You</h3>
                        <p>Take 30% off when you spend $150 or more with code Autima11</p>
                    </div>
                    <div class="discover_now">
                        <a href="#">discover now</a>
                    </div>
                    <div class="link_follow">
                        <ul>
                            <li><a href="{{$contact->facebook ?? ''}}"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="{{$contact->instagram ?? ''}}"><i class="ion-social-instagram"></i></a></li>
                            <li><a href="{{$contact->tiktok ?? ''}}"><i class="ion-social-tiktok"></i></a></li>
                            <li><a href="{{$contact->linkedin ?? ''}}"><i class="ion-social-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--call to action end-->
 
 
 
 <!--footer area start-->
 <footer class="footer_widgets">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo">
                            <a href="#"><img src="{{ asset('themeplate') }}/assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="footer_contact">
                            <p>We are a team of designers and developers that
                                create high quality Magento, Prestashop, Opencart...</p>
                            <p><span>Address</span> {!!$contact->translate(App::getLocale())->address!!}</p>
                            <p><span>Need Help?</span>Call: <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('about')}}">Haqqımızda</a></li>
                                <li><a href="{{route('services')}}">Xidmətlər</a></li>
                                <li><a href="{{route('certificates')}}">Sertifikatlar</a></li>
                                <li><a href="{{route('support')}}">Texniki dəsdək</a></li>
                                <li><a href="{{route('elaqe')}}">Bizimlə əlaqə</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>Extras</h3>
                        <div class="footer_menu">
                            <ul>
                                @foreach ($categories as $item)
                                <li><a href="{{route('product',$item->slug)}}">{{$item->translate(App::getLocale())->title}}</a></li>
                                @endforeach
                              
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container">
                        <h3>Newsletter Subscribe</h3>
                        <p>We’ll never share your email address with a third-party.</p>
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                <button id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">
                        <p>Copyright &copy; 2021 <a href="#">Autima</a> All Right Reserved.</p>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-6">
                    <div class="footer_payment text-right">
                        <a href="#"><img src="{{ asset('themeplate') }}/assets/img/icon/payment.png" alt=""></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->


@include('front.layouts.modal')


@include('front.layouts.script')


</body>


<!-- Mirrored from htmldemo.net/autima/autima/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 18:31:04 GMT -->
</html>