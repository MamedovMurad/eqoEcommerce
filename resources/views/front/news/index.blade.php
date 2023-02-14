
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
                            <li>blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog area start-->
    <div class="blog_page_section mt-23">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog_wrapper">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('news.detail')}}"><img src="{{ asset('themeplate') }}/assets/img/blog/blog6.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('news.detail')}}">2-Bromeliad Mount Care: How to Water and Care for Mounted Bromeliads</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Feb 02, 2019</span>
                                    
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{route('news.detail')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('news.detail')}}"><img src="{{ asset('themeplate') }}/assets/img/blog/blog7.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('news.detail')}}">Bromeliad Mount Care: How to Water and Care for Mounted Bromeliads</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Feb 02, 2019</span>
                                    
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{route('news.detail')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('news.detail')}}"><img src="{{ asset('themeplate') }}/assets/img/blog/blog8.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('news.detail')}}">Mounted Tropical Plant Care: How to Grow Epiphytic Tropical Plants</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Feb 02, 2019</span>
                                    
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{route('news.detail')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('news.detail')}}"><img src="{{ asset('themeplate') }}/assets/img/blog/blog9.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('news.detail')}}">Plantlet Care: How To Pot Up and Care For Juvenile Houseplants</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Feb 02, 2019</span>
                                    
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{route('news.detail')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('news.detail')}}"><img src="{{ asset('themeplate') }}/assets/img/blog/blog7.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('news.detail')}}">The Definitive List of Pumpkin Spice Everything fotr 2019</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Feb 02, 2019</span>
                                    
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{route('news.detail')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('news.detail')}}"><img src="{{ asset('themeplate') }}/assets/img/blog/blog8.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('news.detail')}}">Plantlet Care: How To Pot Up and Care For Juvenile Houseplants</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Feb 02, 2019</span>
                                    
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{route('news.detail')}}">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog area end-->

    <!--blog pagination area start-->
    <div class="blog_pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog pagination area end-->
@endsection
