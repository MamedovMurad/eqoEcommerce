
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
                        <li>blog fullwidth</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--blog area start-->
<div class="blog_page_section blog_padding mt-23">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog_wrapper blog_fullwidth">
                   @foreach ($services as $item)
                       
                  
                    <div class="single_blog">
                        <div class="blog_thumb">
                            <a href="#"><img style="display: block; width: 45%; margin-left: auto; margin-right: auto;" src="{{asset($item->image)}}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <h3><a href="#">{{$item->translate(App::getLocale())->title}}</a></h3>
                            <div class="blog_meta">
                            
                             
                            </div>
                            <div class="blog_desc">
                                <p>{!!$item->description!!} </p>
                            </div>
                           {{--  <div class="readmore_button">
                                <a href="blog-details.html">read more</a>
                            </div> --}}
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
                    {{$services->links('front.paginator.paginate')}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog pagination area end-->


 @endsection