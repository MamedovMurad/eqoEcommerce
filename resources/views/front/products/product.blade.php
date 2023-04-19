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
                        <li><a href="shop.html">shop</a></li>
                      
                        <li>{{$product->translate(App::getLocale())->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--product details start-->
<div class="product_details mt-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">

                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="{{ asset($product->thumb_image_1) }}" data-zoom-image="{{ asset($product->thumb_image_1) }}" alt="big-1">
                        </a>
                    </div>

                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset($product->thumb_image_1) }}" data-zoom-image="{{ asset($product->thumb_image_1) }}">
                                    <img src="{{ asset($product->thumb_image_1) }}" alt="zo-th-1" />
                                </a>

                            </li>
                            @foreach ($images as $item)
                                
                         
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset($item->image) }}" data-zoom-image="{{ asset($item->image) }}">
                                    <img src="{{ asset($item->image) }}" alt="zo-th-1" />
                                </a>

                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                    <form action="#">

                        <h1>{{$product->translate(App::getLocale())->title}}</h1>
                        <div class="product_nav">
                        </div>
                        <div class="price_box">
                           
                            @if ($product->discount !=null)
                            <span class="current_price">{{$product->discount}}  ₼</span>
                            <span class="old_price">{{$product->price}} ₼</span>
                            @else
                            <div class="price_box">
                                <span class="current_price">{{$product->price}}  ₼</span>
                            </div>
                            @endif
                        </div>
                        <div class="product_desc">
                            <p>{!!$product->translate(App::getLocale())->sub_title!!}</p>
                        <div class="product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" value="1" type="number">
                            <button class="button" type="submit">add to cart</button>

                        </div>
                     
                        <div class="product_meta">
                            @foreach ( $product->categories as $cat)
                            <span>Category: <a href="#">{{$cat->translate(App::getLocale())->title}}</a></span> <br>
                            @endforeach
                          
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!--product details end-->

<!--product info start-->
<div class="product_d_info">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist" id="nav-tab">
                            <li>
                                <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Описание</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Загрузки</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <div class="product_info_content">
                                <p>{!!$product->translate(App::getLocale())->description!!}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sheet" role="tabpanel">
                            @foreach ($product_files as $item)
                            <a href="{{asset($item->file)}}">{{$item->translate(App::getLocale())->file_name}}</a> <br />
                            @endforeach
                            
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product info end-->

<!--product area start-->
<section class="product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Related</strong>Products</span></h2>
                </div>
                <div class="product_carousel product_column5 owl-carousel">

                    @foreach ($similar_products as $item)
                        
                    

                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">{{$item->translate(App::getLocale())->title}}</a></h3>
                           
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="{{ asset($item->thumb_image_1) }}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="{{ asset($item->thumb_image_2) }}" alt=""></a>
                           

                           
                        </div>
                        <div class="product_content">
                          
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    @if ($item->discount !=null)
                                    <span class="current_price">{{$item->discount}}  ₼</span>
                                    <span class="old_price">{{$item->price}} ₼</span>
                                    @else
                                    <div class="price_box">
                                        <span class="regular_price">{{$item->price}} ₼</span>
                                    </div>
                                    @endif
                                   
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                           {{--  <div class="quantity_progress">
                              
                                <p class="product_available">Stok: <span></span></p>
                            </div> --}}
                            <div class="bar_percent">

                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>

    </div>
</section>
<!--product area end-->
 @endsection