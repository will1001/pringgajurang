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
    <link rel="apple-touch-icon" href="<?php echo e(asset('images/apple-touch-icon.png')); ?>">
    <link rel="shortcut icon" type="image/ico" href="<?php echo e(asset('images/favicon.ico')); ?>" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    <script src="<?php echo e(asset('js/vendor/modernizr-2.8.3.min.js')); ?>"></script>

    <!--[if lt IE 9]>
        <script src="<?php echo e(asset('')); ?>//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="<?php echo e(asset('')); ?>//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body onload="startTime()" data-spy="scroll" data-target="#primary-menu">



    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo e(url('/')); ?>" class="navbar-brand logo">
                  <img id="logo" src="images/kabupaten-lombok-timur-ntb (1).png" alt="">
                    <h5><strong>Website Resmi Pemerintah</strong></h5>
                    <h2>Desa Pringgajurang</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Profil</a></li>
                    <li><a href="#produkdesa">Produk</a></li>
                    <li><a href="#transparansi">Transparansi</a></li>
                    <li><a href="#lembaga">Lembaga</a></li>
                    <li><a href="#berita">Berita</a></li>
                    <li><a href="#organisasi">Organisasi</a></li>
                    <li class="nav-item dropdown navigation">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Daftar <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdowntabel">
                        
                        <?php if(Route::has('register')): ?>
                            <a class="nav-link" href="<?php echo e(route('register')); ?>">Daftar</a>
                        <?php endif; ?>
                        <div class="dropdown-divider"></div>
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        <div class="dropdown-divider"></div> 
                        </div>
                    </li>
                    
                

                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->



    <!--Header-area-->
    <header class="header-area full-height relative v-center" id="home-page">
        
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-sm-7 col-md-7 header-text">
                    <h2>Tentang Desa Pringgajurang</h2>
                    <p>Desa Pringgajurang, Kecamatan Montong Gading Kabupaten Lombok Timur, NTB,
dengan luas wilayah 856,20 Ha dan berpenduduk 8125 jiwa (tahun 2017),
memiliki potensi sumberdaya alam, sumber daya manusia dan sumber daya
ekonomi yang menyimpan energi besar untuk membangun, akan tetapi dilain sisi
juga masih terdapat sederet perso . . . </p>
                    <a href="<?php echo e(url('profildesa')); ?>" class="button white">Selengkapnya</a>
                </div>
                <div class="col-xs-12 col-12 col-sm-5 col-md-5 text-right">
                    
                    <div class="screen-box screen-slider">
                        <?php $__currentLoopData = $pengumumans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengumuman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <h3><?php echo e($pengumuman->judulpengumuman); ?></h3>
                            <p><?php echo e(substr($pengumuman->deskripsi,0,150)); ?> . . .   </p>
                            <a class="button white" href="<?php echo e(url('detailpengumuman/' .  $pengumuman->judulpengumuman)); ?>">Selengkapnya >></a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->

<!--Feature-area-->
    <section class="angle-bg section-padding" id="produkdesa">
        <div class="container">
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Pasar Online Desa</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-xs-12 col-12 col-sm-12 col-md-12 text-right">
                    <div class="screen-slider">
                        <div class="item">
                            <?php $__currentLoopData = $barangdesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangdesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-6 col-3 col-sm-3 col-md-3">
                                <div class="card">
                                  <img class="card-img-top" src="<?php echo e($barangdesa->urlgambar); ?>" alt="Card image cap">
                                  <div class="card-body text-center">
                                    <h5 class="card-title"><?php echo e(substr($barangdesa->nama,0,23)); ?></h5>
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
                                  <div class="card-body text-center">
                                    <h5 class="card-title"><?php echo e(substr($barangdesa->nama,0,23)); ?></h5>
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
                                  <div class="card-body text-center">
                                    <h5 class="card-title"><?php echo e(substr($barangdesa->nama,0,23)); ?></h5>
                                    <p class="card-text"><?php echo e($barangdesa->harga); ?></p>
                                    <a href="<?php echo e(url('detailbarangdesa/' .  $barangdesa->id )); ?>" class="btn btn-primary">Lihat</a>
                                  </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <a class="button white Selengkapnyabutton2" href="<?php echo e(url('barangdesa')); ?>">Selengkapnya >></a>
        </div>
    </section>
    <!--Feature-area/-->

    <!--Feature-area-->
    <section class="gray-bg section-padding" id="transparansi">
        <div class="container">
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Transparansi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo e(asset('images/apbd.png')); ?>" alt="">
                        </div>
                        <h4>APBD Desa</h4>
                        <a href="<?php echo e(url('transparansi/apbd')); ?>" class="button white">Lihat</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo e(asset('images/rkp.png')); ?>" alt="">
                        </div>
                        <h4>RKP Desa</h4>
                        <a href="<?php echo e(url('transparansi/rkp')); ?>" class="button white">Lihat</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo e(asset('images/rpjm.png')); ?>" alt="">
                        </div>
                        <h4>RPJM Desa</h4>
                        <a href="<?php echo e(url('transparansi/rpjm')); ?>" class="button white">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature-area/-->

    <section class="angle-bg sky-bg section-padding" id="lembaga">
        <div class="container">
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Lembaga</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>BPD</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Badan Permusyawaratan Desa (BPD) merupakan lembaga perwujudan demokrasi dalam penyelenggaraan pemerintahan desa. BPD dapat dianggap sebagai "parlemen"-nya desa. BPD merupakan lembaga baru di desa pada era otonomi daerah di Indonesia.</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="<?php echo e(url('BPD')); ?>" class="button">Selengkapnya</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="<?php echo e(asset('images/BPD.jpg')); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                 <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>LPMD</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>LPMD adalah singkatan dari Lembaga Pemberdayaan Masyarakat Desa, sebagai Lembaga atau wadah yang dibentuk atas prakarsa masyarakat yang difasilitasi Pemerintah melalui musyawarah dan mufakat, sebagai mitra pemerintah desa dalam menampung dan mewujudkan aspirasi serta kebutuhan masyarakat di bidang pembangunan.</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="<?php echo e(url('LPMD')); ?>" class="button">Selengkapnya</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="<?php echo e(asset('images/LPMD.jpg')); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                 <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>KARANG TARUNA</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Karang Taruna adalah organisasi sosial kemasyarakatan sebagai wadah dan sarana pengembangan setiap anggota masyarakat yang tumbuh dan berkembang atas dasar kesadaran dan tanggung jawab sosial dari, oleh dan untuk masyarakat terutama generasi muda di wilayah desa/kelurahan terutama bergerak dibidang usaha kesejahteraan sosial.</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="<?php echo e(url('karangtaruna')); ?>" class="button">Selengkapnya</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="<?php echo e(asset('images/karangtaruna.png')); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators caption-indector">
                            <li data-target="#caption_slide" data-slide-to="0" class="active">
                                <strong>BPD</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="1">
                                <strong>LPMD</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="2">
                                <strong>KARANG TARUNA</strong>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



     <section class="section-padding gray-bg" id="berita">
        <div class="container">
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Berita Desa</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="<?php echo e($berita->urlgambar); ?>" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="<?php echo e(url('detailberitadesa/' .  $berita->judulberita )); ?>"><?php echo e($berita->judulberita); ?></a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#"><?php echo e(date("d F Y", strtotime($berita->created_at))); ?></a></li>
                            </ul>
                            <p><?php echo e(substr($berita->deskripsi,0,100)); ?> . . .</p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <a class="button white Selengkapnyabutton" href="<?php echo e(url('beritadesa')); ?>">Selengkapnya >></a>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding sky-bg" id="organisasi">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Struktur Organisasi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="<?php echo e($SOTKs[0]->urlgambar); ?>" alt="">
                        </div>
                        <h4><?php echo e($SOTKs[0]->Nama); ?></h4>
                        <h6><?php echo e($SOTKs[0]->Jabatan); ?></h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="<?php echo e($SOTKs[2]->urlgambar); ?>" alt="">
                        </div>
                        <h4><?php echo e($SOTKs[2]->Nama); ?></h4>
                        <h6><?php echo e($SOTKs[2]->Jabatan); ?></h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="<?php echo e($SOTKs[1]->urlgambar); ?>" alt="">
                        </div>
                        <h4><?php echo e($SOTKs[1]->Nama); ?></h4>
                        <h6><?php echo e($SOTKs[1]->Jabatan); ?></h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="<?php echo e($SOTKs[9]->urlgambar); ?>" alt="">
                        </div>
                        <h4><?php echo e($SOTKs[9]->Nama); ?></h4>
                        <h6><?php echo e($SOTKs[9]->Jabatan); ?></h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
             <div class="row" id="Selengkapnya">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <a class="button white Selengkapnyabutton" href="<?php echo e(url('organisasi')); ?>">Selengkapnya >></a>
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
