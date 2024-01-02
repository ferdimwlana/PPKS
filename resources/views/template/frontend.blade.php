<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Satgas PPKS Politap</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ url('public/frontend') }}/assets/images/logo/logo-ppks1-nobg.png" type="image/png">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{ url('public/frontend') }}/assets/fonts/fontawesome/css/all.min.css">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ url('public/frontend') }}/assets/fonts/flaticon/flaticon.css">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ url('public/frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="{{ url('public/frontend') }}/assets/vendor/magnific-popup/dist/magnific-popup.css">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{ url('public/frontend') }}/assets/vendor/slick/slick.css">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="{{ url('public/frontend') }}/assets/vendor/nice-select/css/nice-select.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ url('public/frontend') }}/assets/vendor/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ url('public/frontend') }}/assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ url('public/frontend') }}/assets/css/style.css">
    </head>
    <body>
        <div class="page-wrapper">

            @include('layout.frontend.header')
            <!--====== Start Preloader ======-->
            {{-- <div class="preloader">
                <div class="loader">
                    <div class="pre-shadow"></div>
                    <div class="pre-box"></div>
                </div>
            </div> --}}
            <!--====== End Preloader ======-->

            {{-- Header Section --}}

            @yield('content')

            {{-- Footer Section --}}
            @include('layout.frontend.footer')
        </div>

        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/popper/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/slick/slick.min.js"></script>
        <!--====== Magnific js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/isotope.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/imagesloaded.min.js"></script>
        <!--====== Counterup js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/jquery.counterup.min.js"></script>
        <!--====== Waypoints js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/jquery.waypoints.js"></script>
        <!--====== Number js ======-->
        <!--====== Nice-select js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
        <!--====== jquery UI js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
        <!--====== WOW js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/vendor/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="{{ url(url('public/frontend')) }}/assets/js/theme.js"></script>
    </body>
</html>
