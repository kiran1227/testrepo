<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="remus,business,company,agency,multipurpose,modern,bootstrap4">

  <meta name="author" content="Dreambuzz">

  <title>Rubi- Creative portfolio Html Template</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.html" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/animate-css/animates.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/themify/css/themify-icons.css')}}">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/magnific-popup/dist/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{ asset('assets/plugins/animated-text/animated-text.css')}}">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

</head>

<body>

{{-- header --}}
@include('front.header')

@yield('content')

@include('front.footer')

{{-- footer --}}



<!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!-- Progress Bar -->
    <script src="{{ asset('assets/plugins/counto/apear.js')}}"></script>
    <script src="{{ asset('assets/plugins/counto/counTo.js')}}"></script>
    <script src="{{ asset('assets/plugins/animated-text/animated-text.js')}}"></script>

    <script src="{{ asset('assets/plugins/counterup/waypoint.js')}}"></script>
    <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js')}}"></script>
    <!--  Magnific Popup-->
    <script src="{{ asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/shuffle/shuffle.min.js')}}"></script>

    <script src="{{ asset('assets/plugins/jquery/ajax-contact.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>

  </body>


</html>
