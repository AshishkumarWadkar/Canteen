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

    {{-- css --}}

    <link  id="pagestyle"  href="{{ asset('assets/css/material-dashboard.css') }}?v=3.1.0" rel="stylesheet">
    <link   href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/material-dashboard.css.map') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/material-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"> --}}
    {{-- css --}}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

</head>
<body>
    <div id="app1" >


        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('assets/js/core/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/material-dashboard.js')}}"></script>
{{-- <script src="{{ asset('assets/js/material-dashboard.js.map')}}"></script> --}}
{{-- <script src="{{ asset('assets/js/material-dashboard.min.js')}}"></script> --}}

<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}" ></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js')}}" ></script>

</html>
