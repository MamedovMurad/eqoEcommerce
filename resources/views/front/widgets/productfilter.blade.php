@foreach ($products as $item)
                        
                  
                    <div class="col-lg-4 col-md-4 col-12 ">
                        <div class="single_product">
                            <div class="product_name grid_name">
                                <h3><a href="{{route('product.detail',$item->slug)}}">{{$item->translate(App::getLocale())->title}}</a></h3>
                               
                                @foreach ($item->categories as $cat)
                                <p class="manufacture_product"><a href="#">{{$cat->translate(App::getLocale())->title}}</a></p>
                                @endforeach
                               
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product.detail',$item->slug)}}"><img src="{{ asset($item->thumb_image_1) }}" alt=""></a>
                                <a class="secondary_img" href="{{route('product.detail',$item->slug)}}"><img src="{{ asset($item->thumb_image_2) }}" alt=""></a>
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
                                        <h3><a href="{{route('product.detail',$item->slug)}}">{{$item->translate(App::getLocale())->title}}</a></h3>
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