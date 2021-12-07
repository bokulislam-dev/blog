<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> {{ $title ?? '' }} - Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.png">
    <!-- Stories CSS  -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/widgets.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/responsive.css">
</head>

    @include('web.layouts.inc.header')


    @yield('content')



    @include('web.layouts.inc.footer')

    <!-- Vendor JS-->
    <script src="./assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.min.js"></script>
    <script src="./assets/js/vendor/jquery.slicknav.js"></script>
    <script src="./assets/js/vendor/slick.min.js"></script>
    <script src="./assets/js/vendor/wow.min.js"></script>
    <script src="./assets/js/vendor/jquery.ticker.js"></script>
    <script src="./assets/js/vendor/jquery.vticker-min.js"></script>
    <script src="./assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="./assets/js/vendor/jquery.magnific-popup.js"></script>
    <script src="./assets/js/vendor/jquery.sticky.js"></script>
    <script src="./assets/js/vendor/perfect-scrollbar.js"></script>
    <script src="./assets/js/vendor/waypoints.min.js"></script>
    <script src="./assets/js/vendor/jquery.theia.sticky.js"></script>
    <!-- Stories JS -->
    <script src="./assets/js/main.js"></script>
</body>

</html>