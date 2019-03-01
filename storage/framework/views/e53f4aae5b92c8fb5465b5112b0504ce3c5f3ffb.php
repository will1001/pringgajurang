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
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#profildesa">profil</a></li>
          <li><a href="#produkdesa">Produk Desa</a></li>
          <li><a href="#services">Lembaga</a></li>
          <li><a href="#team">organisasi</a></li>
          <li><a href="#agenda">Transparansi</a></li>
          <li><a href="#beritadesa">Berita</a></li>
          <!-- <li><a href="#bottom-widget">Info</a></li> -->
        </ul>
      </div>
    </div>
  </nav>



<button type="submit" id="tombolpengumuman">Pengumuman</button>

<div class="container" id="Pengumuman">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
          <div class="row">
            <div class="col-md-12">
              <h1><?php echo e($pengumumandesas[0]->judulpengumuman); ?></h1>
              <h5><?php echo e(date("d-m-Y H:i:s", strtotime($pengumumandesas[0]->created_at))); ?></h5>
              <p><?php echo e(substr($pengumumandesas[0]->deskripsi,0,150)); ?></p>
              <a href="<?php echo e(url('detailpengumuman/' .  $pengumumandesas[0]->judulpengumuman)); ?>">Selengkapnya >></a>
            </div>
          </div>
      </div>

       <?php $__currentLoopData = $pengumumandesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pengumumandesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($key > 0): ?>
       <div class="item">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h1><?php echo e($pengumumandesa->judulpengumuman); ?></h1>
              <h5><?php echo e(date("d-m-Y H:i:s", strtotime($pengumumandesa->created_at))); ?></h5>
              <p><?php echo e(substr($pengumumandesa->deskripsi,0,150)); ?></p>
              <a href="<?php echo e(url('detailpengumuman/' .  $pengumumandesa->judulpengumuman)); ?>">Selengkapnya >></a>
            </div>
          </div>
           </div>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      
     
    
   


    </div>

    
  </div>
</div>


  <!-- intro area -->
  <div id="intro">
    <div class="intro-text">
      <div class="container">
        <div class="col-md-12">
          <div id="rotator">
            <h1><span class="1strotate">Selamat datang di desa Pringgajurang,Welcome to Pringgajurang Village,Sugeng Rawuh Ring Pringgajurang</span></h1>
            <div class="line-spacer"></div>
            <p><span class="2ndrotate">Website Sistem Informasi Pemerintah Desa Pringgajurang</span></p>
            <a href="#profildesa">Profil Desa</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- profildesa -->
  <section id="profildesa" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>profil desa</h2>
            <div class="heading-line"></div>
            
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 profildesa-img">
          <img src="<?php echo e(asset('images/profildesa-img.jpg')); ?>" alt="">
        </div>

        <div class="col-md-6 content">
          <h2>Tentang Desa Pringgajurang</h2>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Libero justo laoreet sit amet cursus sit amet dictum sit. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
          </p>
          <a href="<?php echo e(url ('profildesa')); ?>">Selengkapnya>></a>
        </div>
      </div>
    </div>
  </section>

  <section id="produkdesa" class="home-section bg-gray">
        <div class="container">
          <div class="row">
                <div class="section-heading">
                <h2>Produk Desa</h2>
                <div class="heading-line"></div>
              <div class="col-xs-12 col-12 col-sm-12 col-md-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <?php $__currentLoopData = $barangdesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangdesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-6 col-3 col-sm-3 col-md-3">
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
                        <div class="item">
                          <?php $__currentLoopData = $barangdesas2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangdesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-6 col-3 col-sm-3 col-md-3">
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
                        <div class="item">
                          <?php $__currentLoopData = $barangdesas3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangdesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-6 col-3 col-sm-3 col-md-3">
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
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
            <a class="button white Selengkapnyabutton2" href="<?php echo e(url('barangdesa')); ?>">Selengkapnya >></a>
        </div>
    </section>

  <!-- Parallax 1 -->
  <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <!-- <h2 class="wow bounceInDown" data-wow-delay="0.5s">Details are the key for perfection</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s">We mix all detailed things together</p> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Lembaga</h2>
            <div class="heading-line"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide">
            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Karang Taruna</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                      <a href="<?php echo e(url('lembaga')); ?>">Selengkapnya>></a>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="<?php echo e(asset('images/screenshots/1.png')); ?>" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Brand Identity</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                      <a href="<?php echo e(url('lembaga')); ?>">Selengkapnya>></a>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="<?php echo e(asset('images/screenshots/3.png')); ?>" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Web & Mobile Apps</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                      <a href="<?php echo e(url('lembaga')); ?>">Selengkapnya>></a>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="<?php echo e(asset('images/screenshots/3.png')); ?>" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-service" data-slide-to="1"></li>
              <li data-target="#carousel-service" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Parallax 2 -->
  <section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="clients">
            <!-- <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/1.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/2.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/3.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/4.png" alt="" /></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section id="team" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Susunan Organisasi dan Tata Kerja Desa </h2>
            <div class="heading-line"></div>
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="<?php echo e(asset('images/team/2.jpg')); ?>" alt="" class="img-circle img-responsive" />
            <h4>Dominique Vroslav</h4>
            <p>Kepala Desa</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="<?php echo e(asset('images/team/1.jpg')); ?>" alt="" class="img-circle img-responsive" />
            <h4>Thomas Jeffersonn</h4>
            <p>Sekertaris Desa</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="<?php echo e(asset('images/team/3.jpg')); ?>" alt="" class="img-circle img-responsive" />
            <h4>Nola Maurin</h4>
            <p>Ketua BPD</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="<?php echo e(asset('images/team/4.jpg')); ?>" alt="" class="img-circle img-responsive" />
            <h4>Mira Ladovic</h4>
            <p>Ketua LPMD</p>
          </div>
        </div>
      </div>
      <div class="row">
            <div class="col-md-12">
              <a href="<?php echo e(url ('organisasi')); ?>">Selengkapnya >></a>
            </div>
          </div>
    </div>
  </section>

  <!-- Parallax 3 -->
  <section id="parallax3" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="clients">
            <!-- <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/1.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/2.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/3.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/4.png" alt="" /></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="agenda" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Transparansi</h2>
            <div class="heading-line"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="<?php echo e(asset('images/apbd.png')); ?>" alt="" class="img-circle img-responsive" />
            <h4>APBD Desa</h4>
            <a href="<?php echo e(url('transparansi/apbd')); ?>">
              Lihat
            </a>
          </div>
        </div>
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="<?php echo e(asset('images/rkp.png')); ?>" alt="" class="img-circle img-responsive" />
            <h4>RKP Desa</h4>
            <a href="<?php echo e(url('transparansi/rkp')); ?>">
              Lihat
            </a>
          </div>
        </div>
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="<?php echo e(asset('images/rpjm.png')); ?>" alt="" class="img-circle img-responsive" />
            <h4>RPJM Desa</h4>
            <a href="<?php echo e(url('transparansi/rpjm')); ?>">
              Lihat
            </a>
          </div>
        </div>
        </div>
  </section>




   <!-- Parallax 4 -->
  <section id="parallax4" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="clients">
            <!-- <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/1.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/2.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/3.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="<?php echo e(asset('css/min.css')); ?>images/clients/4.png" alt="" /></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </section>


<section id="beritadesa" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Berita Desa</h2>
            <div class="heading-line"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 card-beritadesa" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
              <img src="<?php echo e($berita->urlgambar); ?>" alt="" class="img-responsive" />
              <h4><?php echo e($berita->judulberita); ?></h4>
              <p class="img__description"><?php echo e(substr($berita->deskripsi,0,150)); ?></p>
              <a class="link__description" href="<?php echo e(url('detailberita/' .  $berita->judulberita )); ?>">Selengkapnya >></a>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="row">
            <div class="col-md-12" >
              <a href="<?php echo e(url ('beritadesa')); ?>">Selengkapnya >></a>
            </div>
          </div>
    </div>
  </section>




  

  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Alamat</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quo temporibus, itaque perferendis ad ab 
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Telepon</h5>
            <p>
              +1 23456789

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email</h5>
            <p>
              hello@gmaiproker.com
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>Jejaring Sosial Desa</h5>
          <ul class="social-network">
            <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
            <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
            <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
          </ul>
        </div>
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
