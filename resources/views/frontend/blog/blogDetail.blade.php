@extends('frontend.layouts.default')

@section('content')
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Chi Tiết Bài Viết</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Trang Chủ</li>
                        <li>{{ $title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!--Blog Area Start-->
<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <div class=" blog-page-details">
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                   <!-- single-blog start -->
                    <article class="blog-post-wrapper">
                        <div class="blog-banner">
                            <a href="#" class="blog-images">
                                <img src="{{ Voyager::image( $blog->thumbnail('cropped') ) }}" alt="">
                            </a>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="date-type">
                                        {{ date_format($blog->created_at,"d/m/Y H:i:s") }}
                                    </span>
                                    
                                    </span>
                                </div>
                                <a href="#"><h4>{{ $title }}</h4></a>
                                <p>{!! $blog->body !!}.</p>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                    
                    <!-- single-blog end -->
                </div>
                <!-- End main column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="left-head-blog">
                        <div class="left-blog-page">
                            <!-- search option start -->
                            <form action="{{ route('search') }}"  method="get">
                                <div class="blog-search-option">
                                    <input type="text" placeholder="Search..x." name="key">
                                    <button class="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="left-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>Bài Viết Liên Quan</h4>
                                <div class="recent-post">
                                    <!-- start single post -->
                                    @foreach($recentPost as $key=>$rep)
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="{{ route('blog.detail', $rep->slug) }}">
                                                <img src="{{ Voyager::image( $rep->thumbnail('cropped')) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="{{ route('blog.detail', $rep->slug) }}">{{ $rep->title }}</a></p>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                    @endforeach
                                    <!-- End single post -->
                                </div>
                            </div>
                            <!-- recent end -->
                        </div>
                        <div class="left-blog-page">
                            <div class="left-blog">
                                <h4>Danh Mục Bài Viết</h4>
                                <ul>
                                    @foreach( $categories as $key=>$category)
                                    <li>
                                        <a href="{{ route('category', $category->id) }}"> {{ $category->name }} <span>({{ $category->posts_count }})</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- End left sidebar -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
    <!-- Blog Post __________________________ -->
   

@endsection
