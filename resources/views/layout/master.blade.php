<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ URL::asset('/asset/img/logo.ico') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/bootstrap/css/bootstrap.min.css') }}">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/animate/animate.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/owlcarousel/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/lightbox/css/lightbox.min.css') }}">

  <!-- Main Stylesheet File -->
  @yield('css')

</head>

<body>
  
  @yield('content')  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ URL::asset('/asset/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/easing/easing.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/wow/wow.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ URL::asset('/asset/js/main.js') }}"></script>
  @yield('js')

</body>
</html>