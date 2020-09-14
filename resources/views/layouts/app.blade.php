<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
            @yield('content')
    </div>
</body>
 <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
  
    <!-- apps -->
    <script src="{{ asset('js/app-style-switcher.js')}}"></script>
    <script src="{{ asset('js/feather.min.js')}}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{ asset('assets/extra-libs/c3/c3.min.js')}}"></script>
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('js/pages/dashboards/dashboard1.min.js')}}"></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
</html>
