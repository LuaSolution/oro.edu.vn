<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Hoa Ô Rô</title>
  <link rel="shortcut icon" href="{{ asset('public/img/logo.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('public/img/logo.png') }}" type="image/x-icon">
  <!-- Template CSS -->
  <link href="{{ asset('public/assets/css/style-starter.css') }}" type="text/css"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

</head>

<body id="home">
  <section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <h1>
            <a class="navbar-brand" href="{{ route('getHome') }}">
              <img style="height: 60px" src="{{ asset('public/img/logo2.png') }}" alt=""></a></h1>
          <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa icon-expand fa-bars"></span>
            <span class="fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('getHome') }}">Trang chủ <span
                    class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('gioi-thieu') }}">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('dich-vu') }}">Dịch vụ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('tin-tuc') }}">Bài viết</a>
              </li>
            </ul>
            @if(app()->getLocale() == 'en')
              <a href="{!! route('user.change-language', ['vi']) !!}"
                class="ml-lg-3 mt-lg-0 mt-3 book btn btn-style">VI</a>
            @else
              <a href="{!! route('user.change-language', ['en']) !!}"
                class="ml-lg-3 mt-lg-0 mt-3 book btn btn-style">EN</a>
            @endif
          </div>
      </div>

      </nav>
      </div>
    </header>
  </section>

  <script src="{{ asset('public/assets/js/jquery-3.3.1.min.js') }}"></script>
  <!--bootstrap working-->
  <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
  <!-- //bootstrap working-->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  @yield('content')
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container">
        <div class="row footer-top-29">
          <div class="col-lg-5 col-md-5 col-sm-6 footer-list-29 footer-1">
            <div class="left-side">
              <h2><a href="/" class="footer-logo">Giáo dục và Sức Khỏe Hoa Ô Rô</a></h2>
              <p class="para">...</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 footer-list-29 footer-2 ">

            <ul>
              <h6 class="footer-title-29">Liên hệ</h6>
              <li><a href="#">90 Lê Thị Riêng, quận 1, Tp.HCM</a></li>
              <li><a href="#">0933173916</a></li>
              <li><a href="https://www.facebook.com/Hoa-O%CC%82-Ro%CC%82-Edu-Wellness-100568718767864">
                  Facebook: Hoa Ô Rô Edu & Wellness</a></li>
              <li><a href="{{ url('lien-he') }}">Liên hệ</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-3">
            <h6 class="footer-title-29">Bài viết mới</h6>
            <?php
$list = \App\News::get2News();
?>
            @foreach($list as $item)
              <div class="footer-post mb-3">
                <a
                  href="{{ route('getNews', ['news' => $item->slug]) }}">
                  <img src="{{ asset('public/img/post/'.$item->cover) }}"
                    class="img-responsive" alt=""></a>
                <div>
                  <a
                    href="{{ route('getNews', ['news' => $item->slug]) }}">{{ $item->title }}</a>
                  <p class="small"><span class="fa fa-clock-o"></span> {{ $item->created_at }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class=" bottom-copies text-center">
        <p class="copy-footer-29">© 2020 Hoa Ô Rô. All rights reserved | Designed by <a
            href="https://w3layouts.com">W3layouts</a></p>
      </div>
    </div>
  </section>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-long-arrow-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</body>

</html>