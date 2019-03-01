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
    <img id="logo" src="images/kabupaten-lombok-timur-ntb (1).png" alt="">
    <p>Website Resmi Pemerintah desa</p>
    <span id="textlogo">Pringgajurang</span>

  </a>

      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="<?php echo e(url('/')); ?>}">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>


<br><br><br><br>

    <section id="barang-desa">
      <div class="container">
      <h1 class="text-center">Pasar Online Desa Pringgajurang</h1>
        <div class="row">
            <?php $__currentLoopData = $barangdesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangdesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-4 col-4 col-sm-2 col-md-2" id="kotakbarang">
                <div class="card">
                  <img class="card-img-top" src="<?php echo e($barangdesa->urlgambar); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo e(substr($barangdesa->nama,0,12)); ?></h5>
                    <p class="card-text"><?php echo e($barangdesa->harga); ?></p>
                    <a href="<?php echo e(url('detailbarangdesa/' .  $barangdesa->id )); ?>" class="btn btn-primary">Lihat</a>
                  </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    </section>



 <!-- Footer -->
  <footer id="info">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; Winchy.tech. All rights reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
            Designed by <a href="https://winchy.tech/">Winchy.tech</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>




  <!-- js -->
  <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/mb.bgndGallery.js')); ?>"></script>
  <script src="<?php echo e(asset('js/mb.bgndGallery.effects.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.simple-text-rotator.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.scrollTo.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.nav.js')); ?>"></script>
  <script src="<?php echo e(asset('js/modernizr.custom.js')); ?>"></script>
  <script src="<?php echo e(asset('js/grid.js')); ?>"></script>
  <script src="<?php echo e(asset('js/stellar.js')); ?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo e(asset('contactform/contactform.js')); ?>"></script>
  <!-- Template Custom Javascript File -->
  <script src="<?php echo e(asset('js/custom.js')); ?>"></script>

</body>
</html>
