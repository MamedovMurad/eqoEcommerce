
@extends('front.layouts.index')
@section('content')
    <!--slider area start-->
    <section class="slider_section slider_two mb-50">
        <div class="slider_area owl-carousel">


            @foreach ($sliders as $item)
                
           
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset($item->image) }}" style="background-repeat: no-repeat; background-size:cover">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h2>{{$item->translate(App::getLocale())->title}}</h2>
                                <h1>{{$item->translate(App::getLocale())->description}}</h1>
                                <a class="button" href="{{$item->link}}">{{$item->translate(App::getLocale())->link_title}}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach


           
         
        </div>
    </section>
    <!--slider area end-->

    <!--banner area start-->
    <section class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_container">

                        @foreach ($banners as $item)
                            
                       
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{$item->link}}"><img src="{{ asset($item->image) }}" alt=""></a>
                                <div class="banner_text">
                                    <h3>{{$item->translate(App::getLocale())->title}}</h3>
                                    <h2>{{$item->translate(App::getLocale())->sub_title}}</h2>
                                   {{--  <a href="{{$item->link}}">Shop Now</a> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach


                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->

    <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Special</strong>Offers</span></h2>
                    </div>
                    <div class="product_carousel product_column4 owl-carousel">
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product19.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product11.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$180.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker Ear Headphones </a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product12.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product13.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-47%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$160.00</span>
                                        <span class="old_price">$3200.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Variable with soldout blanditiis product for title</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product15.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product14.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$150.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product16.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product17.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$175.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product18.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product1.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-07%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$180.00</span>
                                        <span class="old_price">$420.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Accusantium dolorem the Security Camera</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product2.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product3.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$140.00</span>
                                        <span class="old_price">$320.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Koss Porta Pro On Ear Bluetooth Speaker Headphones </a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product4.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product5.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$160.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--product area end-->

    <!--featured categories area start-->
    <section class="featured_categories featured_c_four  mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Featured</strong>Categories</span></h2>
                    </div>
                    <div class="product_carousel featured_four  product_column5 owl-carousel">
                        <div class="single_featured">
                            <div class="featured_thumb">
                                <a href="#"><img src="{{ asset('themeplate') }}/assets/img/featured/featured.jpg" alt=""></a>
                            </div>
                            <div class="featured_content">
                                <h3 class="product_name"><a href="#">Body Parts</a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#">Handbag</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <a class="view_more" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="single_featured">
                            <div class="featured_thumb">
                                <a href="#"><img src="{{ asset('themeplate') }}/assets/img/featured/featured1.jpg" alt=""></a>
                            </div>
                            <div class="featured_content">
                                <h3 class="product_name"><a href="#">Brake Parts</a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#">Handbag</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <a class="view_more" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="single_featured">
                            <div class="featured_thumb">
                                <a href="#"><img src="{{ asset('themeplate') }}/assets/img/featured/featured2.jpg" alt=""></a>
                            </div>
                            <div class="featured_content">
                                <h3 class="product_name"><a href="#">Lighting</a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#">Handbag</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <a class="view_more" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="single_featured">
                            <div class="featured_thumb">
                                <a href="#"><img src="{{ asset('themeplate') }}/assets/img/featured/featured3.jpg" alt=""></a>
                            </div>
                            <div class="featured_content">
                                <h3 class="product_name"><a href="#">Moto Oil</a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#">Handbag</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <a class="view_more" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="single_featured">
                            <div class="featured_thumb">
                                <a href="#"><img src="{{ asset('themeplate') }}/assets/img/featured/featured4.jpg" alt=""></a>
                            </div>
                            <div class="featured_content">
                                <h3 class="product_name"><a href="#">Turbo Systems</a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#">Handbag</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <a class="view_more" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="single_featured">
                            <div class="featured_thumb">
                                <a href="#"><img src="{{ asset('themeplate') }}/assets/img/featured/featured5.jpg" alt=""></a>
                            </div>
                            <div class="featured_content">
                                <h3 class="product_name"><a href="#">Wheels & Tires</a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#">Handbag</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <a class="view_more" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="single_featured">
                            <div class="featured_thumb">
                                <a href="#"><img src="{{ asset('themeplate') }}/assets/img/featured/featured3.jpg" alt=""></a>
                            </div>
                            <div class="featured_content">
                                <h3 class="product_name"><a href="#">Body Parts</a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#">Handbag</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <a class="view_more" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="single_featured">
                            <div class="featured_thumb">
                                <a href="#"><img src="{{ asset('themeplate') }}/assets/img/featured/featured5.jpg" alt=""></a>
                            </div>
                            <div class="featured_content">
                                <h3 class="product_name"><a href="#">Brake Parts</a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#">Handbag</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <a class="view_more" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--featured categories area end-->

    <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Our</strong>Products</span></h2>
                    </div>
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product5.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product6.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$180.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product7.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product8.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-47%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$160.00</span>
                                        <span class="old_price">$3200.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product9.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product10.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$150.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product16.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product17.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$175.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product18.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product1.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-07%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$180.00</span>
                                        <span class="old_price">$420.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product2.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product3.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$140.00</span>
                                        <span class="old_price">$320.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product4.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product5.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$160.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--product area end-->

    

    <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Best</strong>Sellers</span></h2>
                    </div>
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product5.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product6.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$180.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product7.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product8.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-47%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$160.00</span>
                                        <span class="old_price">$3200.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product9.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product10.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$150.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product16.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product17.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$175.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product18.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product1.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-07%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$180.00</span>
                                        <span class="old_price">$420.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product2.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product3.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$140.00</span>
                                        <span class="old_price">$320.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product4.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('themeplate') }}/assets/img/product/product5.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$160.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--product area end-->

    <!--brand area start-->
    <div class="brand_area mb-42">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        @foreach ($partners as $item)
                            
                      
                        <div class="single_brand">
                            <a href="#"><img src="{{ asset($item->image) }}" alt=""></a>
                        </div>

                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    <!--blog area start-->
    <section class="blog_section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Latest</strong>Blogs</span></h2>
                    </div>
                    <div class="blog_carousel blog_column4 owl-carousel">


                        @foreach ($news as $item)
                            
                     
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('news.detail',$item->slug)}}"><img src="{{ asset($item->image) }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="date_post">
                                    <span>{{$item->created_at->format('d M Y')}}</span>
                                </div>
                                <h3><a href="{{route('news.detail',$item->slug)}}">{{$item->translate(App::getLocale())->title}}</a></h3>
                                <div class="blog_desc">
                                    {!!Str::limit($item->translate(App::getLocale())->description,120)!!}
                                </div>
                            </div>
                        </div>
                        @endforeach

                      
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->
    

   

   @endsection