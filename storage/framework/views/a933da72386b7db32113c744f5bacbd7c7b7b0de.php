 <!DOCTYPE html>
<html>

<head>
  <title>Pringgajurang</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="<?php echo e(asset('css/min.css')); ?>https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo e(asset('color/default.css')); ?>" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="<?php echo e(asset('css/barangdesa.css')); ?>">

 
</head>

<body onload="startTime()">

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->

    <a class="navbar-brand" href={{ url('/') }}>
    <img id="logo" src="/images/kabupaten-lombok-timur-ntb (1).png" alt="">
    <p>Website Resmi Pemerintah desa</p>
    <span id="textlogo">Pringgajurang</span>

  </a>

      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="<?php echo e(url('/')); ?>">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>




    <section id="transparansi" class="section-padding">
      <div class="container">
      <h1 class="text-center" style="text-transform: uppercase;"><?php echo e($id); ?> Desa Pringgajurang Tahun Anggaran <?php echo e($apbds[0]->tahun); ?></h1>
      <div class="row" style="padding-top: 35px;">
        <div class="col-md-12">

            <?php $__currentLoopData = $apbds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apbd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <img src="<?php echo e($apbd->urlgambar); ?>" alt="">
            <br>
            

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
    
           
        </div>

      </div>
    </div>
    </section>


  

  <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?php echo e(asset('images/location-arrow.png')); ?>" alt="">
                                </div>
                                <p><strong>Alamat: </strong>Jl. Jurusan Montong Gading - Pringgajurang, Km 4, Desa Pringgajurang.Kode Pos 83664</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?php echo e(asset('images/phone-arrow.png')); ?>" alt="">
                                </div>
                                <p><strong>Telpon: </strong>
                                    08123456789
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?php echo e(asset('images/mail-arrow.png')); ?>" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">kantor@desaPringgajurang.id</a>
                                    
                                </p>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2018.made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://winchy.tech">winchy.tech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <!--Vendor-JS-->
    <script src="<?php echo e(asset('js/vendor/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/bootstrap.min.js')); ?>"></script>
    <!--Plugin-JS-->
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/contact-form.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.parallax-1.1.3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
    <!--Main-active-JS-->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>

</html>