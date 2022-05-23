@extends('frontend.layouts.default')

@section('content')
{{-- @dd($recruits); --}}
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Thông Tin Tuyển Dụng</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Trang Chủ</li>
                        <li>Tuyển Dụng</li>
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
                @foreach($recruits as $key=> $recruit)
                <!-- Start single blog -->
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="{{ route('show.detail', $recruit->slug) }}">
                                <img style="width: 396px; height: 240px" src="{{ Voyager::image( $recruit->image ) }}" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                           <div class="blog-title">
                               <div class="blog-meta">
                                    <span class="date-type">
                                        {{ date_format($recruit->created_at,"d/m/Y H:i:s") }}
                                    </span>
                                   
                                    </span>
                                </div>
                                <a href="{{ route('blog.detail', $recruit->slug) }}">
                                    <h4>{{ $recruit->title }}</h4>
                                </a>
                            </div>
                            <div class="blog-text">
                                <p>{{ $recruit->excerpt }}</p>
                                <a class="blog-btn" href="{{ route('blog.detail', $recruit->slug) }}">Xem Chi Tiết</a>
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
                   <ul class="pagination">
                       <li><a href="#">&lt;</a></li>
                       <li class="active"><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">&gt;</a></li>
                   </ul>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!--Blog Area Start-->


@endsection
