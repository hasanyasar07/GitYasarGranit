
@php
    use App\Models\Category;
    $categoriesTitle=Category::get();
@endphp
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>@yield('title','YasarGranit')</title>
    {!! SEO::generate() !!}
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('public/images/iconLink.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link href="{{asset('public/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{asset('public/css/fonts.css') }}" rel="stylesheet">
    <link href="{{asset('public/css/style.css') }}" rel="stylesheet"  id="main-styles-link">
    @yield('css')


    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-logo text-center"><img src="{{ asset('public/images/yasarLogo.png') }}" alt="" width="302" height="88" srcset="images/logo-default-151x44.png 2x"/>
    @php

        $categoryPreloder=Category::get();
        $list=$categoryPreloder->pluck('name')->all();

    @endphp
      <div class="text-center">
        <h4>
            @foreach($list as $categoryName)
               <span class="text-uppercase">
                {{ $categoryName }}
               </span>
            @endforeach
        </h4>
    </div>
    </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section novi-background page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="{{route('home')}}"><img class="img-banner" src="{{ asset('public/images/yasarLogo.png') }}" alt="" width="250" height="60" srcset="images/yasarLogo.png 2x"/></a>
                </div>
                <div class="rd-navbar-collapse">
                  <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                  <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                      <div class="unit-body">
                        <ul class="list-0">
                          <li><a class="link-default" href="tel:#">0533 731 18 46</a></li>
                          <li><a class="link-default" href="tel:#">0536 522 82 61</a></li>
                        </ul>
                      </div>
                    </article>
                    <article class="unit align-items-center">
                      <div class="unit-left">
                        <a href="https://www.google.com/maps/dir//ya%C5%9Far+granit/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x14c3570febd560ad:0xfe92c0d9bab9656b?sa=X&ved=2ahUKEwj2mpXci6-CAxUUSPEDHfRdApIQ9Rd6BAg5EAA">
                        <span class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span>
                        </a>
                      </div>
                      <div class="unit-body"><a class="link-default" href="tel:#">Alanya Yolu Üzeri Ulualan Mevkii No: 42/1 <br>Manavgat/ANTALYA</a></div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('home')}}">Ana Sayfa</a>
                    </li>
                    @foreach ($categoriesTitle as $categoryTitle)
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('category',$categoryTitle->id)}}">{{$categoryTitle->name}}</a>
                    </li>
                    @endforeach
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('about')}}">HAKKIMIZDA</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('contact')}}">İLETİŞİM</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

     @yield('body')

      <footer class="section novi-background footer-advanced bg-gray-700">
        <div class="container">
          <hr/>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout">
                <ul class="foter-social-links list-inline list-inline-md">
                    <li><a class="icon novi-icon icon-sm link-default mdi mdi-facebook" href="https://www.facebook.com/profile.php?id=100048821007097"></a></li>
                    <li><a class="icon novi-icon icon-sm link-default mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon novi-icon icon-sm link-default mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li>
                    <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    @yield('js')
    <script src={{asset("public/js/core.min.js")}}></script>
    <script src={{asset("public/js/script.js")}}></script>
  </body>
</html>
