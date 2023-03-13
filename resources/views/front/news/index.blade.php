
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



                            @foreach ($news as $item)
                                
                           

                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('news.detail', $item->slug)}}"><img src="{{ asset($item->image) }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('news.detail', $item->slug)}}">{{$item->translate(App::getLocale())->title}}</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> {{$item->created_at->format('M d, Y')}} </span>
                                    
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>{!!Str::limit($item->translate(App::getLocale())->description,120)!!}</p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{route('news.detail', $item->slug)}}">read more</a>
                                </div>
                            </div>
                        </div>

                        @endforeach


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
