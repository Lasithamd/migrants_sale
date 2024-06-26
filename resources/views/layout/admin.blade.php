
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Tocly - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- plugin css -->
        <link href="" href="{{ asset('admin/css/jsvectormap.min.css') }}"  rel="stylesheet" type="text/css" />

        <!-- Layout Js -->
        <script src="{{ asset('admin/js/layout.js') }}"></script>
        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }} " id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/css/app.min.css') }}"  id="app-style" rel="stylesheet" type="text/css" />



    </head>

    <body data-sidebar="colored">
    @include('layout.navbar')
    @yield('content')

    @include('layout.footer')
    <script src="{{ asset('admin/js/jquery.min.js') }} " type="text/javascript"></script>

        <!-- JAVASCRIPT -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="js/simplebar.min.js"></script>
        <script src="js/waves.min.js"></script>

        <!-- Icon -->
        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- apexcharts -->
        <script src="js/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="js/jsvectormap.min.js"></script>
        <script src="js/world-merc.js"></script>

        <script src="js/dashboard.init.js"></script>

        <!-- App js -->
        <script src="js/app.js"></script>
    </body>