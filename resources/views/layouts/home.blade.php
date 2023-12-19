<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pendhapa Jemparingan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('front') }}/LogoJemparingan.png" rel="icon">
    <link href="{{ asset('front') }}/LogoJemparingan.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Here -->
    <!-- MagnificPopup.css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets-front/css/magnific-popup.css">
    <!-- SlickNav.css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets-front/css/slicknav.min.css">
    <!-- Owl.carousel.css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets-front/css/owl.carousel-2.3.4.min.css">
    <!-- Fontawesome.css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets-front/css/fontawesome-free-5.12.0.min.css">
    <!-- Bootstrap.css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets-front/css/bootstrap-4.3.1.min.css">
    <!-- Default.css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets-front/css/default.css">
    <!-- Style.css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets-front/css/style.css">
    <!-- Responsive.css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets-front/css/responsive.css">

    <!-- ColorNip.css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets-front/css/colornip.min.css">
    <link id="theme" rel="stylesheet" href="{{ asset('front') }}/assets-front/css/theme-colors/theme-default.css">
    <link href="{{ asset('front') }}/assets-front/js/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">


    <!-- Jquery -->
    <script src="{{ asset('front') }}/assets-front/js/jquery-3.4.1.min.js"></script>
    @stack('css')
</head>

<body>
    @include('layouts.components.navbar')

    @include('sweetalert::alert')

    @yield('content')

    @include('layouts.components.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- JS -->
    <!-- Popper.js -->
    <script src="{{ asset('front') }}/assets-front/js/popper.min.js"></script>
    <!-- Bootstrap.js -->
    <script src="{{ asset('front') }}/assets-front/js/bootstrap-4.3.1.min.js"></script>
    <!-- Modernizr.js -->
    <script src="{{ asset('front') }}/assets-front/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Owl.Carousel.js -->
    <script src="{{ asset('front') }}/assets-front/js/vendor/owl.carousel-2.3.4.min.js"></script>
    <script src="{{ asset('front') }}/assets-front/js/vendor/owl.carousel2.thumbs.min.js"></script>
    <!-- Waypoints.js -->
    <script src="{{ asset('front') }}/assets-front/js/vendor/waypoints-4.0.1.min.js"></script>
    <!-- ColorNip.js -->
    <script src="{{ asset('front') }}/assets-front/js/vendor/colornip.min.js"></script>
    <!-- SlickNav.js -->
    <script src="{{ asset('front') }}/assets-front/js/vendor/slicknav.min.js"></script>
    <!-- ScrollUp.js -->
    <script src="{{ asset('front') }}/assets-front/js/vendor/jquery.scrollUp.min.js"></script>
    <!-- MagnificPopup.js -->
    <script src="{{ asset('front') }}/assets-front/js/vendor/magnific-popup.min.js"></script>

    <!-- Main.js -->
    <script src="{{ asset('front') }}/assets-front/js/main.js"></script>
    <script src="{{ asset('front') }}/assets-front/js/vendor/glightbox/js/glightbox.min.js"></script>

    @stack('script')

</body>

</html>
