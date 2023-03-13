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
                        <li><a href="#">{{$news_category->translate(App::getLocale())->title}}</a></li>
                        <li>{{$news->translate(App::getLocale())->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--blog body area start-->
<div class="blog_details blog_padding mt-23">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-12">
                <!--blog grid area start-->
                <div class="blog_details_wrapper">
                    <div class="blog_thumb">
                        <a href="#"><img src="{{ asset($news->image) }}" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <h3 class="post_title">{{$news->translate(App::getLocale())->title}}</h3>
                        
                        <div class="post_content">
                           {!!$news->translate(App::getLocale())->description!!}
                        </div>
                     
                    </div>
                    <hr>
                    <div class="related_posts">
                        <h3>Related posts</h3>
                        <div class="row">


                            @foreach ($similar_products as $item)
                                
                            <div class="col-lg-4 col-md-6">
                                <div class="single_related">
                                    <div class="related_thumb">
                                        <img src="{{asset($item->image)}}" alt="">
                                    </div>
                                    <div class="related_content">
                                        <h3><a href="#">{{$item->translate(App::getLocale())->title}}</a></h3>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i>{{$item->created_at->format('M d, Y')}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                            
                           
                        </div>
                    </div>
                   
                   
                </div>
                <!--blog grid area start-->
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="blog_sidebar_widget">
                    <div class="widget_list widget_search">
                        <h3>Search</h3>
                        <form action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit">search</button>
                        </form>
                    </div>
                    
                    <div class="widget_list widget_post">
                        <h3>Recent Posts</h3>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="{{ asset('themeplate') }}/assets/img/blog/blog12.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <h3><a href="blog-details.html">Blog image post</a></h3>
                                <span>March 16, 2018 </span>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="{{ asset('themeplate') }}/assets/img/blog/blog13.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                <span>March 16, 2018 </span>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="{{ asset('themeplate') }}/assets/img/blog/blog14.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <h3><a href="blog-details.html">Post with Audio</a></h3>
                                <span>March 16, 2018 </span>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="{{ asset('themeplate') }}/assets/img/blog/blog15.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <h3><a href="blog-details.html">Post with Video</a></h3>
                                <span>March 16, 2018 </span>
                            </div>
                        </div>
                    </div>

                    <div class="widget_list widget_categories">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">WordPress</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog section area end-->
 @endsection