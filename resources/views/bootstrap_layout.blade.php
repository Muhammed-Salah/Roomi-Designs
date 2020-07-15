<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{elixir('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{elixir('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{elixir('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{elixir('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{elixir('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{elixir('css/aos.css')}}">

    <link rel="stylesheet" href="{{elixir('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{elixir('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{elixir('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{elixir('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{elixir('css/icomoon.css')}}">
	<link rel="stylesheet" href="{{elixir('css/style.css')}}">
	<link rel="stylesheet" href="{{elixir('css/responsive.css')}}">
	<link rel="stylesheet" href="{{elixir('css/main_styles.css')}}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		
	      <a class="navbar-brand" href="{{route('home')}}"><img class="img-fluid" src="{{elixir('images/logo.png')}}" width="30" alt="Colorlib Template">&nbsp &nbsp &nbsp Roomi Designs</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="{{route('women')}}">Women</a>
                <a class="dropdown-item" href="{{route('kids')}}">Kids</a>
                <!-- <a class="dropdown-item" href="cart.html">Cart</a> -->
                <!-- <a class="dropdown-item" href="checkout.html">Checkout</a> -->
              </div>
            </li>
	          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
	          <!-- <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> -->

	        </ul>
	      </div>
		</div>
	  </nav>
    <!-- END nav -->


@yield('blayout')    


<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
            	<h1 class="big">Subscribe</h1>
              <h2>Subcribe to our Newsletter</h2>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Roomi Designs</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://chat.whatsapp.com/FhGx6gRn4ikHjBBivmIQGa"><span class="icon-whatsapp"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://instagram.com/roomi_designs?igshid=14wyayszndzh6"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('home')}}" class="py-2 d-block">Home</a></li>
                <li><a href="{{route('about')}}" class="py-2 d-block">About</a></li>
                <!-- <li><a href="{{route('home')}}" class="py-2 d-block">Journal</a></li> -->
                <li><a href="{{route('contact')}}" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <!-- <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="{{route('contact')}}" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div> -->
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 97459 73217</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">roomidesigns@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{elixir('js/jquery.min.js')}}"></script>
  <script src="{{elixir('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{elixir('js/popper.min.js')}}"></script>
  <script src="{{elixir('js/bootstrap.min.js')}}"></script>
  <script src="{{elixir('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{elixir('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{elixir('js/jquery.stellar.min.js')}}"></script>
  <script src="{{elixir('js/owl.carousel.min.js')}}"></script>
  <script src="{{elixir('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{elixir('js/aos.js')}}"></script>
  <script src="{{elixir('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{elixir('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{elixir('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{elixir('js/google-map.js')}}"></script>
  <script src="{{elixir('js/main.js')}}"></script>
    
