<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Admin UKM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('front') }}/Lambang_Kabupaten_Sleman.png" />

    <style>
        .logout:hover {
            color: #000;
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.include.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('layouts.include.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    {{-- konten --}}
                    @include('sweetalert::alert')

                    @yield('content')

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                {{-- <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © PT Kala
                            Citra Nuswantara</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
                    </div>
                </footer> --}}
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('front') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('front') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('front') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('front') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('front') }}/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('front') }}/assets/js/dashboard.js"></script>
    <script src="{{ asset('front') }}/assets/js/todolist.js"></script>
    <script src="{{ asset('front') }}/assets/js/uploud.js"></script>
    <!-- End custom js for this page -->
    @stack('js')
</body>

</html>
