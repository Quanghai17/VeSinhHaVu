
@extends('frontend.layouts.default')

@section('content')

<div class="page-area">
    <div class="breadcumb-overlay" style="background-image: url()"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Sản Phẩm Của Chúng Tôi</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Trang Chủ</li>
                        <li>Sản Phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- <section class="section white">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-sm-12 col-xs-12 ">
                    @if($products)
                    <div class="blog-wrapper">
                        <div class="row module-wrapper shop-layout text-center">
                            @foreach($products as $key=>$product)
                            <div class="col-md-4 col-sm-6 shop-item">
                                <div class="entry">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        <img class="img-responsive" src="{{ Voyager::image( $product->image ) }}" alt="{{ $product->name }}">
                                    </a>
                                </div><!-- end entry -->
                                <h4><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }} </a></h4>
                                <small>{{ number_format($product->price) }}đ</small>
                            </div><!-- end shop_item -->
                            @endforeach
                        </div><!-- end row -->
                    </div><!-- end blog-wrapper -->

                    <hr class="invis">

                    <nav class="pagi clearfix text-center">
                        {{ $products->links('frontend.layouts.partials.paginate') }}
                    </nav>
                    @else
                    <h5>Không tìm thấy sản phẩm nào</h5>
                    @endif
                </div><!-- end content -->

                
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section --> --}}

    <div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <div class="blog-grid">
                    <!-- Start single blog -->
                    @foreach($products as $key=>$product)
                    {{-- @dd($product); --}}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="{{ route('product.show', $product->slug) }}">
                                    <img style="width: 300px; height: 290px" src="{{ Voyager::image( $product->image ) }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                               <div class="blog-title">
                                   <div class="blog-meta">
                                        <span class="date-type">
                                            {{ number_format($product->price) }}đ
                                        </span>
                                        
                                    </div>
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        <h4>{{ $product->name }}</h4>
                                    </a>
                                </div>
                                <div class="blog-text">
                                    <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  overflow: hidden;">{{$product->excerpt }}</p>
                                    <a class="blog-btn" href="{{ route('product.show', $product->slug) }}">Xem Chi Tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-pagination">
                        {{ $products->links('frontend.layouts.partials.paginate') }}
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
    </div>

@endsection

@section('js')

@endsection
