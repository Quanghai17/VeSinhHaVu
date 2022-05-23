@php
$postfooter = \TCG\Voyager\Models\Post::limit(2)->get();
@endphp

<!-- Footer ______________________________ -->
<footer class="footer-1">
    <div class="footer-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-logo">
                                <a href="./"><img src="{{ \TCG\Voyager\Facades\Voyager::image(setting('site.logo')) }}" alt=""></a>
                            </div>
                            <p>Chúng Tôi Luôn Đảm Bảo Chất Lượng Sản Phẩm Lên Hàng Đầu</p>

                            <div class="footer-contacts">
                                <p><span>Tel: </span>{{ setting('site.phone') }}</p>
                                <p><span>Email:</span> {{ setting('site.email') }}</p>
                                <p><span>Địa Chỉ:</span> {{ setting('site.address') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Tiện Ích</h4>
                            <div class="footer-services-link">
                                <ul class="footer-list">
                                    <li><a href="./">Trang Chủ</a></li>
                                    <li><a href="{{ route('product.index') }}">Sản Phẩm </a></li>
                                    <li><a href="{{ route('staticdatas') }}">Dịch Vụ</a></li>
                                    <li><a href="{{ route('contact') }}">Liên Hệ </a></li>
                                    <li><a href="{{ route('about') }}">Giới Thiệu</a></li>
                                </ul>
                                <ul class="footer-list hidden-sm">

                                </ul>
                            </div>
                            <div class="footer-icons">
                                <h5>Theo Dõi </h5>
                                <ul>
                                    <li>
                                        <a href="{{setting('social-network.facebook')}}">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{setting('social-network.facebook')}}">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{setting('social-network.facebook')}}">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{setting('social-network.facebook')}}">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{setting('social-network.facebook')}}">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Đăng Ký</h4>
                            <p>
                                Liên Hệ Ngay Để Nhận Tư Vấn
                            </p>
                            <div class="subs-feilds">
                                <div class="suscribe-input">
                                    <form accept-charset='UTF-8' action='feedback' class='contact-form' method='post'>
                                        @csrf
                                        <input name='title' type='hidden' value='contact'>
                                        <input required type="email" class="form-control" name="email"
                                            id="contactFormEmail" tabindex="2" value="" />
                                        <button type="submit" id="sus_submit" class="add-btn">Đăng Ký</button>
                                      </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
            </div>
        </div>
    </div>
    <!-- End footer area -->
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>
                            Thiết Kế Bởi
                            <a href="#">Kennatech</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



@if (\Session::has('success'))
    <script type="text/javascript">
        window.alert("{!! \Session::get('success') !!}")
    </script>
@endif
<!-- END OF FOOTER -->
