
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
    @foreach ($cats as $item)
        
   
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>{{$item->translate(App::getLocale())->title}}</strong></span></h2>
                    </div>
                    <div class="product_carousel product_column4 owl-carousel">
                     {{--    {{dd($item->category_prods)}} --}}
                @if($item->category_prods != null)
    

                        @foreach ($item->category_prods as $prod)
                            
                       
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="{{route('product.detail',$prod->slug)}}">{{$prod->translate(App::getLocale())->title}}</a></h3>
                               {{--  <p class="manufacture_product"><a href="#">Accessories</a></p> --}}
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product.detail',$prod->slug)}}"><img src="{{ asset($prod->thumb_image_1) }}" alt=""></a>
                                <a class="secondary_img" href="{{route('product.detail',$prod->slug)}}"><img src="{{ asset($prod->thumb_image_2) }}" alt=""></a>
                               {{--  <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div> --}}

                            </div>
                            <div class="product_content">
                              
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        @if ($prod->discount !=null)
                                    <span class="current_price">{{$prod->discount}}  ₼</span>
                                    <span class="old_price">{{$prod->price}} ₼</span>
                                    @else
                                    <div class="price_box">
                                        <span class="regular_price">{{$prod->price}} ₼</span>
                                    </div>
                                    @endif
                                    </div>
                                   
                                    <div class="add_to_cart">
                                        <a href="#" title="add to cart"  onclick="addToBasket('{{$prod->id}}')"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                               {{--  <div class="quantity_progress">
                                  
                                    <p class="product_available">Stok: <span></span></p>
                                </div> --}}
                                
                            </div>
                        </div>
                    
                        @endforeach
                        @endif




                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--product area end-->

    @endforeach

    
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


   @section('js')
       <script>
        function addToBasket(id) {

            $.ajax(`/add-to-cart/${id}`, 
{

    success: function (data,status,xhr) {  
        $('#mini-card-parent').html(data.html) 
        $('.cart_quantity').html(data.count)
        // success callback function
    //   $('.flash-message').html('sdfdsgfdgdg')
    },
    error: function (jqXhr, textStatus, errorMessage) { // error callback 
       
    }
});
        }
       </script>
   @endsection