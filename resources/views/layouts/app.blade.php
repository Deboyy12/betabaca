<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'BetaBaca')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/logo/logowarna.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/css/styles.min.css') }}" />
    @stack('styles')
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- App Topstrip -->
        <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
                <a class="d-flex justify-content-center" href="#">
                    <img src="{{ asset('assets/img/logo/logobetabaca.png') }}" height="30">
                </a>
            </div>
        </div>

        <!-- Sidebar Start -->
        @include('layouts.sidebar')
        <!-- Sidebar End -->

        <!-- Main wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
            @include('layouts.navbar')
            <!-- Header End -->

            <!-- Page Content -->
            <div class="body-wrapper-inner">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- End Page Content -->

            <!-- Footer -->
            <!-- Footer -->
            <footer class="text-center py-4 bg-light">
                <div class="container">
                    <p class="mb-0">&copy; {{ date('Y') }} BetaBaca. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets2/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets2/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets2/js/app.min.js') }}"></script>
    <script src="{{ asset('assets2/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets2/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets2/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    @stack('scripts')
</body>

</html>