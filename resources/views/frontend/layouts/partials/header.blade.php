@php
// $menuFields= App\Staticdata::where(['type' => 'linh-vuc-hoat-dong', 'status' => 'ACTIVE'])->get();

$menu = menu('Home menu', '_json');
@endphp
<style>
    .topbar-right ul li a {
    color: #666;
    display: block;
    font-size: 12px;
    margin: 4px 2px;
    width: 25px;
    height: 25px;
    border: 1px solid #666;
    text-align: center;
    line-height: 23px;
    border-radius: 2px;
}
.topbar-area.topbar-3 .topbar-left ul li a {
    color: #888;
    display: block;
    font-weight: 600;
    margin-right: 20px;
    padding: 4px 0;
    text-decoration: none;
}
</style>
<header class="header-style-3">
    <!-- Start top bar -->
    <div class="topbar-area topbar-3 fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class=" col-md-8 col-sm-6">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="#"><i class="icon icon-map-marker"></i>{{ setting('site.address') }}</a></li>
                            <li><a href="#"><i class="icon icon-phone"
                                        href="tel:{{ setting('site.phone') }}"></i>{{ setting('site.phone') }}</a>
                            </li>
                            <li><a href="#"><i class="icon icon-clock"></i>{{ setting('site.email') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="topbar-right">
                        
                        <ul>
                            <li><a href="{{setting('social-network.facebook')}}"><i class="fa fa-skype"></i></a></li>
                            <li><a href="{{setting('social-network.facebook')}}"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="{{setting('social-network.facebook')}}"><i class="fa fa-google"></i></a></li>
                            <li><a href="{{setting('social-network.facebook')}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{setting('social-network.facebook')}}"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area header-area-3 hidden-xs">
        <div class="container">
            <div style="font-size: 13px;" class="row">
                <!-- logo start -->
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <!-- Brand -->
                        <a class="navbar-brand page-scroll sticky-logo" href="./">
                            <img src='{{ \TCG\Voyager\Facades\Voyager::image(setting('site.logo')) }}' alt="">
                        </a>
                    </div>
                </div>
                <!-- logo end -->
                <div class="col-md-9 col-sm-9">
                    {{-- <div class="header-right-link">
                        <!-- search option start -->
                        <form action="#">
                            <div class="search-option">
                                <input type="text" placeholder="Search...">
                                <button class="button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                        </form>
                        <!-- search option end -->
                    </div> --}}
                    <!-- mainmenu start -->
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    @foreach ($menu as $item)
                                        @if (count($item->children) > 0)
                                            <li class="dropdown">
                                                <a href="{{ asset($item->url) }}" class="dropdown-toggle"
                                                    data-toggle="dropdown" role="button" aria-haspopup="true"
                                                    aria-expanded="false">{{ $item->title }}<span
                                                        class="caret"></span></a>

                                                <ul class="sub-menu">
                                                    @foreach ($item->children as $child)
                                                        <li>
                                                            <a
                                                                href="{{ asset($child->url) }}">{{ $child->title }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li class="@if ($item->url == '/' . Route::current()->uri) active @endif">
                                                <a href="{{ asset($item->url) }}">{{ $item->title }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- mainmenu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="index.html"><img src="{{ \TCG\Voyager\Facades\Voyager::image(setting('site.logo')) }}" alt="" /></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                @foreach ($menu as $item)
                                        @if (count($item->children) > 0)
                                            <li class="pagess">
                                                <a href="{{ asset($item->url) }}" class="pagess"
                                                    data-toggle="dropdown" role="button" aria-haspopup="true"
                                                    aria-expanded="false">{{ $item->title }}<span
                                                        class="caret"></span></a>

                                                <ul class="sub-menu">
                                                    @foreach ($item->children as $child)
                                                        <li>
                                                            <a
                                                                href="{{ asset($child->url) }}">{{ $child->title }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li class="@if ($item->url == '/' . Route::current()->uri) active @endif">
                                                <a href="{{ asset($item->url) }}">{{ $item->title }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                            </ul>
                        </nav>
                    </div>					
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
