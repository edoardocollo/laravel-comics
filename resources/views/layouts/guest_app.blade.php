<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>titolo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="main_container">
    <nav id="area_nav" class="col-xl-12 col-md-12 col-xs-12">
      <div class="area_nav_wrap">
        <div class="logo_box">
          <img src="{{asset('storage/posts_img/logo0.png')}}" alt="">
        </div>
        <div class="logo_box">
          <img src="{{asset('storage/posts_img/logo1.png')}}" alt="">
        </div>
        <div class="logo_box">
          <img src="{{asset('storage/posts_img/logo2.png')}}" alt="">
        </div>
        <div class="logo_box">
          <img src="{{asset('storage/posts_img/logo3.png')}}" alt="">
        </div>
        <div class="logo_box">
          <img src="{{asset('storage/posts_img/logo4.png')}}" alt="">
        </div>
      </div>

    </nav>
    <nav id="main_nav">
      <div class="main_nav_wrap">
        <img src="{{asset('storage/posts_img/logo.png')}}" alt="">
        <ul>
          <li>characters</li>
          <li>comics</li>
          <li>movies</li>
          <li>tv</li>
          <li>games</li>
          <li>videos</li>
          <li>news</li>
          <li>shop</li>
        </ul>
      </div>
    </nav>


  @yield('main_content')

  <nav id="services_nav">
    <div class="services_wrap">
      <div class="service_box">
        <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg" alt="">
        <span>digital comics</span>
      </div>
      <div class="service_box">
        <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCshop.svg" alt="">
        <span>dc merchandise</span>
      </div>
      <div class="service_box">
        <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-subscription.svg" alt="">
        <span>print subscriptions</span>
      </div>
      <div class="service_box">
        <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-locator.svg" alt="">
        <span>comic shop locator</span>
      </div>
    </div>
  </nav>


</div>

<footer>
  <div class="footer_wrap">
    <div class="footer_half">
      <div class="footer_column">
        <h3>dc comics</h3>
        <ul>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
        </ul>
      </div>
      <div class="footer_column">
        <h3>dc</h3>
        <ul>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
        </ul>

      </div>
      <div class="footer_column">
        <h3>sites</h3>
        <ul>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
        </ul>

      </div>
      <div class="footer_column">

      </div>
      <p>
        All Site Content TM and © 2020 DC Entertainment, unless otherwise noted here. All rights reserved.
        Cookies Settings
      </p>
    </div>


    <div class="footer_half half_right">
    </div>

    <img id="logo_background" src="{{asset('storage/posts_img/logo-background-v2.png')}}" alt="">
  </div>
  <div class="sub_footer">
    <div class="sub_footer_wrap">
      <div class="sub_footer_left">
        <a href="#">sign up now</a>
      </div>
      <div class="sub_footer_right">
        <img src="{{asset('storage/posts_img/footer-facebook.png')}}" alt="">
        <img src="{{asset('storage/posts_img/footer-periscope.png')}}" alt="">
        <img src="{{asset('storage/posts_img/footer-pinterest.png')}}" alt="">
        <img src="{{asset('storage/posts_img/footer-twitter.png')}}" alt="">
        <img src="{{asset('storage/posts_img/footer-youtube.png')}}" alt="">
      </div>
    </div>
  </div>

</footer>
</body>
</html>
