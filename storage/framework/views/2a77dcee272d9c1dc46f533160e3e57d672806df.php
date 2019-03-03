<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/responsive.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemon">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


    <title>Pringgajurang</title>
  </head>
  <body onload="startTime()">
    <!-- Image and text -->



<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
   <a class="navbar-brand" href="#" @click="currentView='indexpage';active_index(0);isHidden = false">
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
      <li class="nav-item">
        <a class="nav-link" href="#" @click="currentView='bidangpemerintahan';active_index(1);isHidden = true" :class="{ active : active_el_index == 1 }">Bidang PEMERINTAHAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" @click="currentView='panduanpenduduk';active_index(2);isHidden = true" :class="{ active : active_el_index == 2 }">Panduan PENDUDUK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" @click="currentView='halamanbisnis';active_index(3);isHidden = true" :class="{ active : active_el_index == 3 }">Halaman BISNIS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" @click="currentView='untukpengunjung';active_index(4);isHidden = true" :class="{ active : active_el_index == 4 }">Untuk PENGUNJUNG</a>
      </li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if(Route::has('register')): ?>
            <a class="dropdown-item" href="<?php echo e(route('register')); ?>">Daftar</a>
          <?php endif; ?>
          <a class="dropdown-item" href="<?php echo e(route('login')); ?>">Login</a>
        </div>
      </li>
    </ul>
  </div>
   </div>
</nav>
    <!-- <component  :is="currentView" class="wow fadeIn" @clicked="updatecurrentview" keep-alive></component> -->
    <barchartcomponent></barchartcomponent>
    <piechartcomponent></piechartcomponent>
    <!-- <div :is="currentView" class="wow fadeIn" @clicked="updatecurrentview" keep-alive></div> -->
    
</div>


<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-4 text-light text-left infofooter">
                <p class="text-left"><i class="text-light fas fa-map-marker"></i> Jl. Jurusan Kotaraja - Montong Gading, 83663</p>
                <p class="text-left"><i class="text-light fas fa-phone"></i> +62 877-6344-4202</p>
                <p class="text-left"><i class="text-light fas fa-envelope"></i> pringgajurang@gmail.com</p>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-4 Copyrightfooter">
                <br>
                <br>
                <br>
                <p class="text-light text-center">&copy; Copyright 2019 by <a class="text-light" href="https://winchy.tech">Winchy.tech</a></p>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-4">
                <br>
                <div class="tanggalfooter">
                <p class="text-light text-right" id="date"></p>
                <p class="text-light text-right" id="txt"></p>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->\
    <script src="<?php echo e(asset('/js/app.js')); ?>" type="text/javascript"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
<script src="js/bootstrap-swipe-carousel.js"></script>
    <script src="<?php echo e(asset('/js/date.js')); ?>" type="text/javascript" charset="utf-8" async defer></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script> -->
    <!-- <script src="<?php echo e(asset('/vue/VueIndex.js')); ?>" type="text/javascript"></script> -->
    <!-- <script src="<?php echo e(asset('/js/script.js')); ?>" type="text/javascript"></script> -->
    <script src="<?php echo e(asset('/js/wow.min.js')); ?>" type="text/javascript"></script>
    
<script>
  const carouselEl = $('.my-carousel');

// Bootstrap carousel needs to be loaded first
carouselEl.carousel().swipeCarousel({
  sensitivity: 'high' // low, medium or high
});
</script>

  </body>
</html>