<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/autima/autima/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 18:31:00 GMT -->
@include('front.layouts.head')

<body>

    <!-- Main Wrapper Start -->
    <!--header area start-->
    <header class="header_area header_padding">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="follow_us">
                                <label>Bizi izləyin:</label>
                                <ul class="follow_link">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li class="top_links"><a href="#"><i class="ion-android-person"></i> şəxsi kabinet<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="login.html">giriş</a></li>
                                            <li><a href="cart.html">səbət</a></li>
                                        </ul>
                                    </li>
                                    <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt="">az-ru<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#"><img src="assets/img/logo/language.png" alt=""> Az</a></li>
                                            <li><a href="#"><img src="assets/img/logo/language2.png" alt=""> Ru</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{ asset('themeplate') }}/assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="middel_right">
                            <div class="search-container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Search entire store here ..." type="text">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">

                                <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)"><span class="lnr lnr-cart"></span>Səbət </a>
                                    <span class="cart_quantity">2</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        
        <!--mini cart-->
        <div class="mini_cart">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">JBL Flip 3 Splasroof Portable Bluetooth 2</a>

                    <span class="quantity">Qty: 1</span>
                    <span class="price_cart">$60.00</span>

                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Koss Porta Pro On Ear Headphones </a>
                    <span class="quantity">Qty: 1</span>
                    <span class="price_cart">$69.00</span>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$138.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$138.00</span>
                </div>
            </div>

            <div class="mini_cart_footer">
                <div class="cart_button">
                    <a href="cart.html">View cart</a>
                </div>
                <div class="cart_button">
                    <a class="active" href="checkout.html">Checkout</a>
                </div>

            </div>

        </div>
        <!--mini cart end-->

        <!--header bottom satrt-->
        <div class="header_bottom bottom_four sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="{{route('home')}}">home<i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="{{route('home')}}">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega_items"><a href="shop.html">MAĞAZA<i class="fa fa-angle-down"></i></a>
                                        <div class="mega_menu">
                                            <ul class="mega_menu_inner">
                                                <li><a href="{{route('product')}}">Əsas &nbsp; kateqoriya</a>
                                                    <ul>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                      
                                                    </ul>
                                                </li>
                                                <li><a href="{{route('product')}}">Əsas &nbsp; kateqoriya</a>
                                                    <ul>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{route('product')}}">Əsas &nbsp; kateqoriya</a>
                                                    <ul>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="{{route('product')}}">Əsas &nbsp; kateqoriya</a>
                                                    <ul>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>
                                                        <li><a href="{{route('product')}}">Alt kateqoriya</a></li>

                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="banner_static_menu">
                                                <a href="shop.html"><img src="assets/img/bg/banner1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="{{route('news')}}">XƏBƏRLƏR<i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="{{route('news.detail')}}">XƏBƏRLƏR details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('about')}}">HAQQIMIZDA</a></li>
                                    <li><a href="{{route('elaqe')}}">BİZİMLƏ ƏLAQƏ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header bottom end-->
        <div class="discount_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="discount_text">
                            <p>Save Up To 30% On AUTIMA Brand Products <a href="#">Shop Now!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->


    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>


                        <div class="top_right text-end">
                            <ul>
                                <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_links">
                                   
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                      
                                    </ul>
                                </li>
                                <li class="language"><a href="#"><img src="{{ asset('themeplate') }}/assets/img/logo/language.png" alt="">az-ru<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"><img src="/assets/img/logo/language.png" alt=""> Az</a></li>
                                        <li><a href="#"><img src="/assets/img/logo/language2.png" alt=""> Ru</a></li>
                                    </ul>
                                </li>
                                


                            </ul>
                        </div>
                        <div class="Offcanvas_follow">
                            <label>Follow Us:</label>
                            <ul class="follow_link">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                   
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                               
                                            </ul>
                                        </li>
                                      
                                       
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('news')}}">blog</a></li>
                                     
                                    </ul>

                                </li>
                             
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Offcanvas menu area end-->