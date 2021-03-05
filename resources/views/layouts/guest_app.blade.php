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
    <nav id="area_nav" class="col-xl-12 col-md-12 col-xs-12"></nav>
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
      <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg" alt="">
      <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCshop.svg" alt="">
      <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-subscription.svg" alt="">
      <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-locator.svg" alt="">
    </div>
  </nav>


</div>

<footer>
  <div class="footer_wrap">
    <div class="footer_half">
      <div class="footer_column">
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
        <ul>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
          <li>lorem</li>
        </ul>
      </div>
      <div class="footer_column">
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
    </div>


    <div class="footer_half">

    </div>


  </div>
  <div class="sub_footer">

  </div>

</footer>
</body>
</html>
