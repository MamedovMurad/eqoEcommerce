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
                        <li>Camera & Video </li>
                        <li>shop right sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
               
                <div class="shop_title">
                    <h1>shop</h1>
                </div>
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">

                        <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                        <button data-role="grid_4" type="button" class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                        <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"></button>
                    </div>
                    <div class=" niceselect_option">

                        <form class="select_option" action="#">
                            <select name="orderby" id="short">

                                <option selected value="1">Bütün məhsullar</option>
                                <option value="2">Yeni məhsullar</option>
                                <option value="3">endirimli məhsullar</option>
                            </select>
                        </form>


                    </div>
                </div>
                <!--shop toolbar end-->

                <div class="row shop_wrapper">


                    @foreach ($products as $item)
                        
                  
                    <div class="col-lg-4 col-md-4 col-12 ">
                        <div class="single_product">
                            <div class="product_name grid_name">
                                <h3><a href="{{route('product.detail')}}">{{$item->translate(App::getLocale())->title}}</a></h3>
                               
                                @foreach ($item->categories as $cat)
                                <p class="manufacture_product"><a href="#">{{$cat->translate(App::getLocale())->title}}</a></p>
                                @endforeach
                               
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product.detail')}}"><img src="{{ asset($item->thumb_image_1) }}" alt=""></a>
                                <a class="secondary_img" href="{{route('product.detail')}}"><img src="{{ asset($item->thumb_image_2) }}" alt=""></a>
                              {{--   <div class="label_product">
                                    <span class="label_sale">-47%</span>
                                </div> --}}
                                {{-- <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="product_content grid_content">
                                <div class="content_inner">
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
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <div class="left_caption">
                                    <div class="product_name">
                                        <h3><a href="{{route('product.detail')}}">{{$item->translate(App::getLocale())->title}}</a></h3>
                                    </div>

                                    <div class="product_desc">
                                        <p>{!!Str::limit($item->translate(App::getLocale())->description, 150)!!}</p>
                                    </div>
                                </div>
                                <div class="right_caption">
                                    <div class="text_available">
                                        <p>availabe: <span>99 in stock</span></p>
                                    </div>
                                    <div class="price_box">
                                        @if ($item->discount !=null)
                                        <span class="current_price">{{$item->discount}}  ₼</span>
                                        <span class="old_price">{{$item->price}} ₼</span>
                                        @else 
                                        <span class="regular_price">{{$item->price}} ₼</span>
                                        @endif
                                       
                                    </div>
                                    <div class="cart_links_btn">
                                        <a href="#" title="add to cart">add to cart</a>
                                    </div>
                                    {{-- <div class="action_links_btn">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>

                {{$products->links('front.paginator.paginate')}}
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
            <div class="col-lg-3 col-md-12">
                <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_inner">
                        <div class="widget_list widget_filter">
                            <h2>Filter by price</h2>
                            <form action="#">
                                <div id="slider-range"></div>
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />

                            </form>
                        </div>
                        <div class="widget_list widget_categories">
                            <h2>categories</h2>
                            <ul>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Categories1 (6)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Categories2(10)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Categories3 (4)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Categories4(10)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Categories5(8)</a>
                                    <span class="checkmark"></span>
                                </li>

                            </ul>
                        </div>

                        <div class="widget_list widget_categories">
                            <h2>BREDNLƏR</h2>
                            <ul>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Brake Parts(6)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Accessories (10)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Engine Parts (4)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">hermes(10)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">louis vuitton(8)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Tommy Hilfiger(7)</a>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">House Plants(6)</a>
                                    <span class="checkmark"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop_sidebar_banner">
                        <a href="#"><img src="{{ asset('themeplate') }}/assets/img/bg/banner9.jpg" alt=""></a>
                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>
        </div>
    </div>
</div>
<!--shop  area end-->
 @endsection