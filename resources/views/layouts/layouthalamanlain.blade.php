<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Desa Pringgajurang</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}" />
    <!-- Plugin-CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemon">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/profildesa.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/barangdesa.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/organisasi.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lembaga.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="{{asset('')}}//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="{{asset('')}}//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body onload="startTime()" data-spy="scroll" data-target="#primary-menu">



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
   <a class="navbar-brand" href="{{ url('/') }}" @click="currentView='indexpage';activate(0);">
    <img src="/images/kabupaten-lombok-timur-ntb.png" width="55" height="70" class="d-inline-block align-top" alt="">
    <div id="spacetextlogo">
    <span id="logotext">Pringgajurang</span>
    <span id="logotext2">Website Resmi Pemerintah Desa</span>
    </div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if (Route::has('register'))
            <a class="dropdown-item" href="{{ route('register') }}">Daftar</a>
          @endif
          <a class="dropdown-item" href="{{ route('login') }}">Login</a>
        </div>
      </li>
    </ul>
  </div>
   </div>
</nav>


        <main class="py-4">
            @yield('content')
        </main>

   

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-light text-left">
                <p><i class="text-light fas fa-map-marker"></i> Jl. Jurusan Kotaraja - Montong Gading, 83663</p>
                <p><i class="text-light fas fa-phone"></i> +62 877-6344-4202</p>
                <p class="text-light text-left"><i class="text-light fas fa-envelope"></i> pringgajurang@gmail.com</p>
            </div>
            <div class="col-md-4">
                <br>
                <br>
                <br>
                <p class="text-light text-center">&copy; Copyright 2019 by <a class="text-light" href="https://winchy.tech">Winchy.tech</a></p>
            </div>
            <div class="col-md-4">
                <br>
                <p class="text-light text-right" id="date"></p>
                <p class="text-light text-right" id="txt"></p>
            </div>
        </div>
    </div>
</footer>





    <!--Vendor-JS-->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/contact-form.js')}}"></script>
    <script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('js/scrollUp.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!--Main-active-JS-->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('/js/date.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</body>

</html>