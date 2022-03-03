<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href=" {{ asset('frontend') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href=" {{ asset('frontend') }}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" {{ asset('frontend') }}/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href=" {{ asset('frontend') }}/css/style.css">

    <title>MSB | Home</title>
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    @include('frontend.header')

    @yield('content')

    @include('frontend.footer')





    <script src=" {{ asset('frontend') }}/js/jquery-3.3.1.min.js"></script>
    <script src=" {{ asset('frontend') }}/js/popper.min.js"></script>
    <script src=" {{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src=" {{ asset('frontend') }}/js/jquery.sticky.js"></script>
    <script src=" {{ asset('frontend') }}/js/main.js"></script>
</body>

</html>
