@extends('frontend.layouts.default')

@section('content')
{{-- @dd($staticdatas); --}}
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Chi Tiết Sản Phẩm</h3>
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

    <!-- Start project Area -->
    <div class="project-Details-page area-padding">
        <div class="container">
          <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="project-inner">
                        <div class="project-image">
                            <img style="width: 555px; height: 453px" src="{{ Voyager::image( $product->image ) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="project-history">
                        <h3>{{ $product->name }}</h3>
                        <div class="project-name">
                            <ul>
                                <li><span>Giá </span>: {{ number_format($product->price) }}đ</li>
                                <li><span>Mô tả </span> : {{ $product->excerpt }}</li>
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           <div class="row mar-row">  
                <div class="col-md-10 col-sm-6 col-xs-12">
                    <div class="project-details">
                        <h3>{{ $product->name }}</h3> 
                        <p>{!!$product->body!!}</p>
                        <ul class="marker-list">
                            <li>Lares dolor sit amet.</li>
                            <li>Animi vero excepturi magnam.</li>
                            <li>ducimus adipisci voluptas.</li>
                            <li>consectetur adipisicing elit.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End main content -->
    </div>
    <!-- Start project Area -->
    <div class="project-area gray-bg area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Sản Phẩm Khác</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project-related">
                    <!-- single-awesome-project start -->
                    @foreach($recentProduct as $key=>$rcProduct)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="project-single">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="{{ Voyager::image( $rcProduct->image ) }}">
                                        <img style="width: 360px; height: 339px" src="{{ Voyager::image( $rcProduct->image ) }}" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4><a href="{{ route('product.show', $rcProduct->slug) }}">{{ $rcProduct->name }} </a></h4>
                                                <span>{{ number_format($rcProduct->price) }}đ</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>		
            </div>	
        </div>
        <!-- End main content -->
    </div>
    <!-- End project Area -->

    {{-- <section class="section white">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="product-images">
                                <a data-rel="prettyPhoto" href="{{ Voyager::image( $product->image ) }}" title="{{ $product->name }}">
                                    <img class="img-polaroid" src="{{ Voyager::image( $product->image ) }}" alt="{{ $product->name }}" />
                                </a>
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="shop-desc" style="margin-top: 126px">
                                <h3>{{ $product->name }} </h3>
                                <small>{{ number_format($product->price) }}đ</small>

                                <p>{{ $product->excerpt }}</p>
                            </div><!-- end desc -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-style-1">
                                <div class="tabbed-widget">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a style="width: 200px;" data-toggle="tab" href="#home">Chi tiết</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            {!! $product->body !!}
                                        </div>
                                    </div>
                                </div><!-- end tabbed-widget -->
                            </div><!-- end service-style-1 -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="general-title text-left">
                        <h4>Sản phẩm khác</h4>

                    </div><!-- end general title -->

                    <div class="row module-wrapper shop-layout text-center">
                        @foreach($recentProduct as $key=>$rcProduct)
                            <div class="col-md-4 col-sm-4 shop-item">
                                <div>
                                    <a href="{{ route('product.show', $rcProduct->slug) }}" class="entry">
                                        <img class="img-responsive" src="{{ Voyager::image( $rcProduct->image ) }}" alt="{{ $rcProduct->name }}">
                                    </a><!-- end entry -->
                                    <h4><a href="{{ route('product.show', $rcProduct->slug) }}">{{ $rcProduct->name }} </a></h4>
                                    <small>{{ number_format($rcProduct->price) }}đ</small>
                                </div>
                            </div><!-- end shop_item -->
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end content -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section --> --}}

@endsection
