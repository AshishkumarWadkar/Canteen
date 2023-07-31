<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css') }}?v=3.1.0" rel="stylesheet">
    <link href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/material-dashboard.css.map') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/material-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"> --}}
    {{-- css --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <link href="{{ asset('assets/home_1/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home_1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home_1/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/home_1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home_1/css/style.css') }}" rel="stylesheet">

    <script src="{{asset('assets/home_1/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/home_1/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/home_1/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/home_1/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/home_1/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/home_1/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/home_1/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/home_1/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.js') }}"></script>

      <!-- Template Javascript -->
      {{-- <script src="js/main.js"></script> --}}
    <script src="{{asset('assets/home_1/js/main.js')}}"></script>
</head>

<body>
    <div id="app">
        <main class="">
            <div class="container-xxl bg-white p-0">
                <!-- Spinner Start -->
                <div id="spinner"
                    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <!-- Spinner End -->


                <!-- Navbar & Hero Start -->
               @include('layouts.web.header')
                <!-- Navbar & Hero End -->

            @yield('web-content')
             <!-- Footer Start -->
        @include('layouts.web.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

        </main>
    </div>

    <script src="{{ asset('assets/home_1/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/home_1/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/home_1/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/home_1/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/home_1/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/home_1/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/home_1/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/home_1/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    {{-- <script src="js/main.js"></script> --}}
    <script src="{{ asset('assets/home_1/js/main.js') }}"></script>
</body>

</html>
