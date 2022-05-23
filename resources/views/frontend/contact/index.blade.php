@extends('frontend.layouts.default')

@section('content')

<Style>
    .contact-page .contact-btn{
        margin-top: 18px;
        border-radius: 5px;
    }
</Style>

<div class="page-area">
  <div class="breadcumb-overlay"></div>
  <div class="container">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div style="padding: 60px 3px;" class="breadcrumb">
                  <div class="section-headline white-headline text-center">
                      <h3>Liên Hệ</h3>
                  </div>
                  <ul>
                      <li class="home-bread">Trang Chủ</li>
                      <li>Liên Hệ</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- END Header -->
<!-- Start contact Area -->
<div class="contact-page area-padding">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="contact-head">
                  <h3>Yêu Cầu  <span class="color">Liên Hệ</span></h3>
                  <p>Đối với các gia đình, Dịch vụ vệ sinh công nghiệp Hà Vũ sẽ luôn đồng hành trong quá trình duy trì và xây dựng tổ ấm</p>
                  <div class="project-share">
                      <h5>Liên kết :</h5>
                      <ul class="project-social">
                          <li>
                              <a href="#">
                                  <i class="fa fa-facebook"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-twitter"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-google"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-pinterest"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-instagram"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <!-- End contact icon -->
          <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="contact-form">
                  <div class="row">
                    <form accept-charset='UTF-8' action='feedback' class='contact-form' method='post'>
                      @csrf
                      <input name='title' type='hidden' value='contact'>
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label for="contactFormName">Họ Tên:</label>
                          <input required type="text" class="form-control" name="name" id="contactFormName"
                            tabindex="1" value="" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label for="contactFormName">Số điện thoại:</label>
                          <input required type="text" class="form-control" name="phone" id="contactFormPhone"
                            tabindex="1" value="" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <label for="contactFormEmail">Email:</label>
                          <input required type="email" class="form-control" name="email" id="contactFormEmail"
                            tabindex="2" value="" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <label for="contactFormMessage">Tin nhắn:</label>
                          <textarea class="form-control" name="comments" id="contactFormMessage"
                            tabindex="4"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <button type="submit" id="submit" class="contact-btn">Gửi Yêu Cầu</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div>
                    </div>
                    </form> 
                  </div>
              </div>
          </div>
          <!-- End contact Form -->
      </div>
  </div>
</div>
<!-- Start contact Area -->
<div class="map-area-top">
  <div class="container-full">
      <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Start Map -->
              <div class="map-area">
                  <div id="googleMap" style="width:100%;height:450px;">
                    {!!setting('site.map')!!}</div>
              </div>
              <!-- End Map -->
          </div>
      </div>
  </div>
</div>

@endsection
