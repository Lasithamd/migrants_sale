<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

  <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="home/css/icofont.css" href="{{ asset('home/css/icofontcss') }}" >
    <link rel="stylesheet"  href="{{ asset('home/css/owl.carousel.css') }}" >
    <link rel="stylesheet"  href="{{ asset('home/css/slidr.css') }}" >
    <link rel="stylesheet"  href="{{ asset('home/css/main.css') }}" >
    <link id="preset" rel="stylesheet" href="{{ asset('home/css/preset1.css') }}" >
    <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}" >
    <link rel="stylesheet" href="{{ asset('home/css/custom.css') }}" >
    </head>
    <body class="antialiased">
    @include('layout.navbar')
    @yield('content')

    @include('layout.footer')
    
    <script src="{{ asset('home/js/jquery.min.js') }} " type="text/javascript"></script>
<script src="{{ asset('home/js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('home/js/modernizr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('home/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="{{ asset('home/js/gmaps.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('home/js/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('home/js/scrollup.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('home/js/price-range.js') }}" type="text/javascript"></script>
<script src="{{ asset('home/js/jquery.countdown.js') }}" type="text/javascript"></script>
<script src="{{ asset('home/js/switcher.js') }}" type="text/javascript"></script>
<script src="{{ asset('home/js/custom.js') }}" type="text/javascript"></script>
    </body>
</html>
