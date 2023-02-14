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
                        <li><a href="#">fashion</a></li>
                        <li>blog details</li>
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
                        <a href="#"><img src="{{ asset('themeplate') }}/assets/img/blog/blog-big1.jpg" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <h3 class="post_title">Blog image post</h3>
                        
                        <div class="post_content">
                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                            <blockquote>
                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                            </blockquote>
                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                        </div>
                     
                    </div>
                    <hr>
                    <div class="related_posts">
                        <h3>Related posts</h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single_related">
                                    <div class="related_thumb">
                                        <img src="{{ asset('themeplate') }}/assets/img/blog/blog3.jpg" alt="">
                                    </div>
                                    <div class="related_content">
                                        <h3><a href="#">Post with Gallery</a></h3>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_related">
                                    <div class="related_thumb">
                                        <img src="{{ asset('themeplate') }}/assets/img/blog/blog4.jpg" alt="">
                                    </div>
                                    <div class="related_content">
                                        <h3><a href="#">Post with Audio</a></h3>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_related column_3">
                                    <div class="related_thumb">
                                        <img src="{{ asset('themeplate') }}/assets/img/blog/blog5.jpg" alt="">
                                    </div>
                                    <div class="related_content">
                                        <h3><a href="#">Post with Video</a></h3>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                    </div>
                                </div>
                            </div>
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