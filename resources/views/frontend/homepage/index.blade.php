@extends('frontend.layouts.default')

@section('content')
    {{-- @dd( $posts ); --}}
    <!-- Start Slider Area -->
    <div class="intro-area intro-area-4 ">
        <div class="main-overly"></div>
        <div class="intro-carousel">
            <div class="intro-content">
                @foreach ($banners as $banner)
                    <div class="slider-images" @if ($loop->first) active @endif>
                        <img src="{{ Voyager::image($banner->image) }}" alt="">
                    </div>
                @endforeach
                <div class="slider-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- layer 1 -->
                                        <div class="layer-1">
                                            <h1 class="title2"> <span class="color">Vệ Sinh Công
                                                    Nghiệp</span>
                                            </h1>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-2 ">
                                            <p>Cung cấp tạp vụ vệ sinh cho các trung tâm thương mại, công ty, văn phòng,
                                                trường học, nhà hàng</p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-3">
                                            <a href="{{ route('staticdatas') }}" class="ready-btn left-btn">Dịch Vụ</a>
                                            <a href="{{ route('contact') }}" class="ready-btn right-btn">Liên Hệ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-content">
                @foreach ($banners as $banner)
                    <div class="slider-images" @if ($loop->first) active @endif>
                        <img src="{{ Voyager::image($banner->image) }}" alt="">
                    </div>
                @endforeach
                <div class="slider-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <!-- layer 1 -->
                                        <div class="layer-1">
                                            <h1 class="title2">Dịch Vụ <span class="color">Vệ Sinh Công
                                                    Nghiệp</span>
                                            </h1>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-2 ">
                                            <p>Cung cấp tạp vụ vệ sinh cho các trung tâm thương mại, công ty, văn phòng,
                                                trường học, nhà hàng</p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-3">
                                            <a href="{{ route('staticdatas') }}" class="ready-btn left-btn">Dịch Vụ</a>
                                            <a href="{{ route('contact') }}" class="ready-btn right-btn">Liên Hệ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Appointment Area -->
    <!-- service area start -->
    <div class="welcome-area welcome-area-4 area-padding">
        <div class="container">
            <div class="row">
                <!-- single-well end-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="well-services text-center">
                        <span class="slugan">25% <br />off</span>
                        <div class="services-img">
                            <a href="#"><i class="flaticon-cleaning"></i></a>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>𝐃𝐈̣𝐂𝐇 𝐕𝐔̣ 𝐏𝐇𝐔̉ 𝐁𝐎́𝐍𝐆 𝐒𝐀̀𝐍 𝐕𝐈𝐍𝐘𝐋 𝐂𝐇𝐔𝐘𝐄̂𝐍 𝐍𝐆𝐇𝐈𝐄̣̂𝐏 </h4>
                                <p> Sàn Vinyl là tên thường gọi của dòng sản phẩm từ nhựa tổng hợp PVC</p>
                                <ul>
                                    <li>Đàn hồi, có độ mềm, dẻo cao.</li>
                                    <li>Độ bền tốt, chống trầy xước, chống trơn trượt</li>
                                    <li>Không nứt, không vỡ, không gãy</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="well-services text-center">
                        <div class="services-img">
                            <a href="#"><i class="flaticon-cleaning-10"></i></a>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>𝐓𝐇𝐈 𝐂𝐎̂𝐍𝐆 𝐌𝐀̀𝐈 Đ𝐀́ 𝐓𝐔̛̣ 𝐍𝐇𝐈𝐄̂𝐍</h4>
                                <p>Thi công sơn epoxy và đánh bóng bê tông Hà Vũ</p>
                                <ul>
                                    <li>Tiện lợi bền đẹp</li>
                                    <li>Thi công nhanh chóng</li>
                                    <li>Đảm bảo chất lượng sản phẩm</li>
                                    <li>Luôn được khách hàng tin tưởng</li>
                                    <li>Làm đẹp cho công trình của bạn</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="well-services text-center">
                        <span class="slugan">30% <br />off</span>
                        <div class="services-img">
                            <a href="#"><i class="flaticon-housekeeping"></i></a>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>𝗖𝗢̂𝗡𝗚 𝗧𝗬 𝗧𝗡𝗛𝗛 𝗩𝗘̣̂ 𝗦𝗜𝗡𝗛 𝗖𝗢̂𝗡𝗚 𝗡𝗚𝗛𝗜𝗘̣̂𝗣 𝗛𝗔̀ 𝗩𝗨̃ 𝗧𝗨𝗬𝗘̂̉𝗡 𝗚𝗔̂́𝗣:</h4>
                                <p>Pernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit</p>
                                <ul>
                                    <li>𝑵𝒉𝒂̂𝒏 𝒗𝒊𝒆̂𝒏 𝑽𝒆̣̂ 𝒔𝒊𝒏𝒉.</li>
                                    <li>𝑪𝒐̂𝒏𝒈 𝒗𝒊𝒆̣̂𝒄: 𝒄𝒉𝒖𝒚𝒆̂𝒏 𝒗𝒆̣̂ 𝒔𝒊𝒏𝒉 𝒏𝒉𝒂̀ 𝒅𝒂̂𝒏</li>
                                    <li>V𝒆̣̂ 𝒔𝒊𝒏𝒉 𝒕𝒉𝒆𝒐 𝒈𝒊𝒐̛̀, 𝒕𝒐̂̉𝒏𝒈 𝒗𝒆̣̂ 𝒔𝒊𝒏𝒉, 𝒅𝒐̣𝒏 𝒏𝒉𝒂̀ 𝒔𝒂𝒖 𝒙𝒂̂𝒚 𝒅𝒖̛̣𝒏𝒈</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end -->
                <div class="hidden-md hidden-lg col-sm-6 col-xs-12">
                    <div class="well-services text-center">
                        <div class="services-img">
                            <a href="#"><i class="flaticon-cleaning-10"></i></a>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Garden cleaning</h4>
                                <p>Pernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit</p>
                                <ul>
                                    <li>Tree cutting</li>
                                    <li>Garden cleaning</li>
                                    <li>Water cleaning</li>
                                    <li>Garden maintenance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-area end -->
    <!-- about-area start -->

    <div class="about-area area-padding">
        <div class="container">
            @foreach ($recruits as $post)
                {{-- @dd($post); --}}
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content">
                            <a>
                                <h4> <span class="color">{{ $post->title }}</span> - {{ $post->excerpt }} </h4>
                            </a>
                            <p
                                style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;  overflow: hidden;">
                                {{ $post->meta_description }}</p>
                            <div class="about-details text-center hidden-sm">

                                <div class="single-about">
                                    <div class="icon-title">
                                        <a href="{{ route('blog.detail', $post->slug) }}"><i
                                                class="icon icon-thumbs-up"></i></a>
                                        <h5>Liên Hệ Chúng Tôi</h5>
                                    </div>
                                    <p>Chi tiết : Văn phòng Công ty TNHH Dịch vụ vệ sinh công nghiệp Hà Vũ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a class="about-image" href="{{ route('blog.detail', $post->slug) }}">
                            <img src="{{ Voyager::image($post->image) }}" alt="">
                        </a>
                    </div>
                    <!-- column end -->
                </div>
            @endforeach
        </div>
    </div>
    <!-- about-area end -->
    <!-- Start Service area -->
    <div class="services-area services-4 area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Dịch Vụ Của Chúng Tôi</h3>
                        <p>Tiện lợi, đảm bảo chất lượng </p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                {{-- @dd($services); --}}
                <div class="all-services">
                    <!-- Start services -->
                    @foreach ($procedures as $service)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-service">
                                {{-- <span class="slugan">25% <br />off</span> --}}
                                <a class="service-image" href="{{ route('service.detail', $service->slug) }}">
                                    <img style="width: 396px; height: 273px;" src="{{ Voyager::image($service->image) }}"
                                        alt="{{ $service->title }}">
                                </a>
                                <div class="service-content">
                                    <h4>{{ $service->title }}</h4>
                                    <p>{!! $service->excerpt !!}</p>
                                    <a class="service-btn" href="{{ route('service.detail', $service->slug) }}">xem
                                        chi tiết</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Service area -->
    <!-- Start Quote Area -->
    <div class="quote-area area-padding parallax-bg">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="row">
                        <div class="quate-details">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="sub-head">
                                    <h4>Yêu Cầu <span class="color">Tư Vấn</span></h4>
                                    <p>Liên hệ với chúng tôi để nhận ưu đãi về các dịch vụ</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="quote-locate">
                                    <div class="quote-icon">
                                        <i class="icon icon-map-marker"></i>
                                        <span class="info-first">{{ setting('site.address') }}</span>

                                    </div>
                                    <div class="quote-icon">
                                        <i class="icon icon-phone"></i>
                                        <span class="info-first">{{ setting('site.phone') }}</span>
                                        <span class="info-simple">{{ setting('site.email') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <form accept-charset='UTF-8' action='feedback' class='contact-form' method='post'>
                                    @csrf
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                            required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                        <input type="email" name="email" class="email form-control" id="email"
                                            placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                        <input type="text" name="phone" class="email form-control" id="email"
                                            placeholder="Phone" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="message" name="comments" rows="7" placeholder="Massage" class="form-control" required
                                            data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                        <button type="submit" id="submit" class="quote-btn">Gửi Liên Hệ</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Quote -->
    <div class="project-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Ảnh Các Dự Án Đã Thi Công</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Portfolio -page -->
                <div class="awesome-project fix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="awesome-menu text-center">
                            <ul class="project-menu">
                                <li><a href="#" class="active" data-filter="*">Tất Cả</a></li>
                                <li><a href="#" data-filter=".residential">Vệ Sinh Công Nghiệp</a></li>
                                <li><a href="#" data-filter=".commercial">Vệ Sinh Nhà Ở</a></li>
                                <li><a href="#" data-filter=".apartment">Đội Ngũ Của Chúng Tôi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-content">
                    <!-- single-awesome-project start -->
                    @foreach ($photos01 as $photo)
                    <div class="project-single all-padding commercial">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a class="venobox" data-gall="myGallery" href="{{ Voyager::image($photo->image) }}">
                                    <img style="width: 360px; height: 235px" src="{{ Voyager::image($photo->image) }}" alt="" />
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <h4>{{ $photo->name }}</h4>
                                           
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single-awesome-project end -->

                    <!-- single-awesome-project start -->
                    @foreach ($photos02 as $photo)
                    <div class="project-single all-padding residential">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a class="venobox" data-gall="myGallery" href="{{ Voyager::image($photo->image) }}">
                                    <img style="width: 360px; height: 235px" src="{{ Voyager::image($photo->image) }}" alt="" />
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <h4>{{ $photo->name }}</h4>
                                          
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single-awesome-project end -->
                   
                    <!-- single-awesome-project start -->
                    @foreach ($photos03 as $photo)
                    <div class="project-single all-padding apartment">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a class="venobox" data-gall="myGallery" href="{{ Voyager::image($photo->image) }}">
                                    <img style="width: 360px; height: 235px" src="{{ Voyager::image($photo->image) }}" alt="" />
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <h4>{{ $photo->name }}</h4>
                                            
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single-awesome-project end -->
                </div>
            </div>
        </div>
        <!-- End main content -->
    </div>
    <!-- Start portfolio Area -->
    <!-- End portfolio Area -->
    <!-- Start Counter area -->
    {{-- @dd($customers); --}}
    <div class="testimonial-area area-padding">
        <div class="test-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Lời Chứng Thực Của Khách Hàng</h3>
                        <p>Chúng Tôi Cam Kết Đảm Bảo Chất Lượng Tốt Nhất Đến Khách Hàng</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="Reviews-content">
                        <!-- start testimonial carousel -->
                        <div class="testimonial-carousel item-indicator">
                            @foreach ($customers as $customer)
                                <div class="single-testi text-center">
                                    <div class="testi-img ">
                                        <img src="{{ Voyager::image($customer->image) }}" alt="">
                                    </div>
                                    <div class="client-rating">
                                        <a href="#"><i class="icon icon-star"></i></a>
                                        <a href="#"><i class="icon icon-star"></i></a>
                                        <a href="#"><i class="icon icon-star"></i></a>
                                        <a href="#"><i class="icon icon-star"></i></a>
                                        <a href="#"><i class="icon icon-star"></i></a>
                                    </div>
                                    <div class="testi-text">
                                        <p
                                            style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  overflow: hidden;">
                                            {{ $customer->content }}</p>
                                        <h4>{{ $customer->name }}</h4>
                                        <span class="guest-rev"><a href="#">{{ $customer->experience }}</a></span>
                                    </div>
                                </div>
                                <!-- End single item -->
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter area -->
    <!--Blog Area Start-->
    <div class="blog-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Tin Tức Mới Nhất</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-grid home-blog">
                    <!-- Start single blog -->
                    @foreach ($posts as $post)
                        {{-- @dd($post); --}}
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="{{ route('blog.detail', $post->slug) }}">
                                        <img src="{{ Voyager::image($post->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <div class="blog-meta">
                                            <span class="date-type">
                                                {{ date_format($post->created_at, 'd/m/Y H:i:s') }}
                                            </span>

                                        </div>
                                        <a href="#">
                                            <h4>{{ $post->title }}</h4>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <p
                                            style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;  overflow: hidden;">
                                            {{ $post->excerpt }}</p>
                                        <a class="blog-btn" href="{{ route('blog.detail', $post->slug) }}">Đọc
                                            Thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    @endforeach
                    <!-- End single blog -->
                </div>
            </div>
            <!-- End row -->
        </div>
    </div>
    <!--End of Blog Area-->
    <!-- Start Banner Area -->
    <!-- End Banner Area -->
@endsection

@section('js')
@endsection
