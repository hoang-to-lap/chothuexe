<html>
    <head>
        @yield('title')
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('carforrent/css/open-iconic-bootstrap.min.css')}}  ">
    <link rel="stylesheet" href="{{asset('carforrent/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('carforrent/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('carforrent/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('carforrent/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('carforrent/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('carforrent/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('carforrent/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('carforrent/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('carforrent/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('carforrent/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('carforrent/css/style.css')}}">

    </head>
    <body>
     
        @include('components.header')
        @yield('content')
        
        @include('components.footer')
      



        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('carforrent/js/jquery.min.js')}}"></script>
  <script src="{{asset('carforrent/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('carforrent/js/popper.min.js')}}"></script>
  <script src="{{asset('carforrent/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('carforrent/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('carforrent/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('carforrent/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('carforrent/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('carforrent/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('carforrent/js/aos.js')}}"></script>
  <script src="{{asset('carforrent/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('carforrent/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('carforrent/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('')}}carforrent/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('carforrent/js/google-map.js')}}"></script>
  <script src="{{asset('carforrent/js/main.js')}}"></script>
    
    </body>
</html>