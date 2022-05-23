@extends('frontend.layouts.default')

@section('content')
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Bài Viết</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Trang Chủ</li>
                        <li>Tin Tức Mới Nhất</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <div class="blog-grid">
                @foreach($blogs as $key=> $blog)
                <!-- Start single blog -->
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="{{ route('blog.detail', $blog->slug) }}">
                                <img src="{{ Voyager::image( $blog->thumbnail('cropped') ) }}" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                           <div class="blog-title">
                               <div class="blog-meta">
                                    <span class="date-type">
                                        20 june, 2017
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        13
                                    </span>
                                </div>
                                <a href="{{ route('blog.detail', $blog->slug) }}">
                                    <h4>{{ $blog->title }}</h4>
                                </a>
                            </div>
                            <div class="blog-text">
                                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  overflow: hidden;">{{ $blog->excerpt }}</p>
                                <a class="blog-btn" href="{{ route('blog.detail', $blog->slug) }}">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                @endforeach
                <!-- End single blog -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog-pagination">
                    {{ $blogs->links('frontend.layouts.partials.paginate') }}
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!--Blog Area Start-->


@endsection
