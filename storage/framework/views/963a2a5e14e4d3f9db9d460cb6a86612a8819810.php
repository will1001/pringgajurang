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
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    <script src="<?php echo e(asset('js/vendor/modernizr-2.8.3.min.js')); ?>"></script>

    <!--[if lt IE 9]>
        <script src="<?php echo e(asset('')); ?>//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="<?php echo e(asset('')); ?>//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body onload="startTime()" data-spy="scroll" data-target="#primary-menu">
  <?php
  $no=1
?>


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
                    <?php if(auth()->guard()->guest()): ?>
                          <li>
                              <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                          </li>
                    <?php else: ?>
                    <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="{{url('/')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                upload dokumen <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(url('formuploadapbd/apbd')); ?>">APBD Desa</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(url('formuploadapbd/rkp')); ?>">RKP Desa</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(url('formuploadapbd/rpjm')); ?>">RPJM Desa</a>
                              </div>
                            </li>
                            <li class="nav-item dropdown navigation">
                              <a class="nav-link dropdown-toggle" href="{{url('/')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Tabel Data <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdowntabel">
                                <a class="dropdown-item" href="#tabeldatapendudukkadus">Tabel Data Penduduk Setiap Dusun</a>
                                <div class="dropdown-divider"></div> 
                                <a class="dropdown-item" href="#tabelberita">Tabel Berita</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#tabelpengumuman">Tabel Pengumuman</a>
                                <div class="dropdown-divider"></div>
                              </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->




<section id="tabeldatapendudukkadus"  class="section-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1>Tabel data Penduduk Desa Pringgajurang</h1>
             <select id="pilihankadus">
                 <option selected="true" disabled="disabled">Dusun</option>
                 <?php $__currentLoopData = $kode_area_dusuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_area_dusun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($kode_area_dusun->id_dusun); ?>"><?php echo e($kode_area_dusun->Nama_Dusun); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            
            <div style="overflow: auto;max-height: 400px;position: relative;  ">
      <table id="tabeldatakadus">
      <thead>
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <tr>
                  <th>No</th>
                  <th>Alamat</th>
                  <th>RW</th>
                  <th>RT</th>
                  <th id="nama_tombol">Nama</th>
                  <th>Nomor KK</th>
                  <th>Nomor NIK</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Jenis Pekerjaan</th> 
                  <th>Status Perkawinan</th> 
                  <th>Status Hubungan Dalam Keluarga</th> 
                  <th>Kewarganegaraan</th> 
                  <th>Nama Ayah</th> 
                  <th>Nama Ibu</th> 
                  <th>Golongan Darah</th> 
                  <th>Akta Lahir</th> 
                  <th>Nomor Dokumen Paspor</th>
                  <th>Tanggal Akhir Paspor</th>  
                  <th>Nomor Dokumen KITAS</th>             
                  <th>NIK Ayah</th> 
                  <th>NIK Ibu</th> 
                  <th>No Akta Perkawinan</th> 
                  <th>Tanggal Perkawinan</th> 
                  <th>No Akta Perceraian</th> 
                  <th>Tanggal Perceraian</th> 
                  <th>Cacat</th> 
                  <th>Cara KB</th> 
                  <th>Hamil</th> 
                  <th>Status kependudukan</th> 
                  <th>Keterangan</th>  
                  <th>edit</th> 
                  <th>hapus</th> 
        </tr>
      </thead>
       <tbody id="tbodytabel">
      </tbody>
    </table>
          </div>
          <a href="<?php echo e(url('formadddatapendudukkades')); ?>" class="tomboladd">Tambah Data</a>
        </div>
        </div>
      </div>
    </section>

<section id="tabelberita" class="section-padding  gray-bg">
      <div class="container-fluid">
         <h1>Tabel data Berita Desa</h1>
        <div class="row">
          <div class="col-md-12">
             <div style="overflow: auto;max-height: 400px;position: relative;  ">
                <table id="tabeldatakadus">
                <thead>
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Judul Berita</th>
                    <th>Deskripsi</th>
                    <th>edit</th> 
                    <th>hapus</th> 
                  </tr>
                </thead>
                 <tbody>
                  <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($berita->judulberita); ?></td>
                      <td><?php echo e(substr($berita->deskripsi,0,100)); ?></td>
                      <td><a href=<?php echo e(url('formeditberita/' .  $berita->id )); ?>>edit</a></td>
                      <td><a href=<?php echo e(url('deleteberita/' .  $berita->id )); ?>>hapus</a></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
          </div>
              <a href="<?php echo e(url('formaddberita')); ?>" class="tomboladd">Buat Berita Baru</a>
              
                </div>
              </div>
            </div>
    </section>


    








      <section id="tabelpengumuman">
      <div class="container-fluid">
        <h1>Tabel data Pengumuman Desa</h1>
        <div class="row">
          <div class="col-md-12">
            <div style="overflow: auto;max-height: 400px;position: relative;  ">
                <table id="tabeldatakadus">
                <thead>
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Judul Pengumuman</th>
                    <th>Deskripsi</th>
                    <th>edit</th> 
                    <th>hapus</th> 
                  </tr>
                </thead>
                 <tbody>
                  <?php $__currentLoopData = $pengumumandesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengumumandesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($pengumumandesa->judulpengumuman); ?></td>
                      <td><?php echo e(substr($pengumumandesa->deskripsi,0,100)); ?></td>
                      <td><a href=<?php echo e(url('formeditpengumuman/' .  $pengumumandesa->id )); ?>>edit</a></td>
                      <td><a href=<?php echo e(url('deletepengumuman/' .  $pengumumandesa->id )); ?>>hapus</a></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
          </div>
                <a href="<?php echo e(url('formaddpengumuman')); ?>" class="tomboladd">Buat Pengumuman Baru</a>                      
                
          </div>
        </div>
      </div>
    </section>




    <section id="profildesaadmin" class="section-padding">
      <div class="container">
         <h2>Edit Profil Desa</h2>
         <?php if($errors->any()): ?>
        <h3 class="text-center text-danger"><?php echo e(implode('', $errors->all(':message'))); ?></h3>
        <?php endif; ?>
        <div class="row">
           <div class="col-md-12">
           
            <form action="<?php echo e(url('editdeskripsiprofildesa')); ?>" method="post" enctype="multipart/form-data" style="padding-top: 1px;">
                <?php echo e(csrf_field()); ?>

                <textarea  rows="10" name="deskripsiprofildesa"><?php echo e($profildesas[0]->desripsiprofildesa); ?></textarea>
                <input class="button white" type="submit" value="Edit" id="edutbuttondeskripsi">
              </form>

            </div>
          </div>
          <div class="row">

           <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($profildesas[0]->fotokades); ?>" alt="">
            <h1 class="text-center" >Kepala Desa</h1>
            <form action=<?php echo e(url('editfotokades')); ?> method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              <?php echo e(csrf_field()); ?>

              <input type="file" name="fotokades" id="fotokades">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($profildesas[0]->fotoketbpd); ?>" alt="">
            <h1 class="text-center" >Ketua BPD</h1>
            <form action=<?php echo e(url('editfotoketbpd')); ?> method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              <?php echo e(csrf_field()); ?>

              <input type="file" name="fotoketbpd" id="fotoketbpd">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($profildesas[0]->fotosekdes); ?>" alt="">
            <h1 class="text-center" >Sekertaris Desa</h1>
            <form action=<?php echo e(url('editfotosekdes')); ?> method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              <?php echo e(csrf_field()); ?>

              <input type="file" name="fotosekdes" id="fotosekdes">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($profildesas[0]->fotokaurpemerintahan); ?>" alt="">
            <h1 class="text-center">Kaur Pemerintahan</h1>
            <form action=<?php echo e(url('editfotokaurpemerintahan')); ?> method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              <?php echo e(csrf_field()); ?>

              <input type="file" name="fotokaurpemerintahan" id="fotokaurpemerintahan">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($profildesas[0]->fotokaurpembangunan); ?>" alt="">
            <h1 class="text-center" >Kaur Pembangunan</h1>
            <form action=<?php echo e(url('editfotokaurpembangunan')); ?> method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              <?php echo e(csrf_field()); ?>

              <input type="file" name="fotokaurpembangunan" id="fotokaurpembangunan">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($profildesas[0]->fotokaurkeuangan); ?>" alt="">
            <h1 class="text-center" >Kaur Keuangan</h1>
            <form action=<?php echo e(url('editfotokaurkeuangan')); ?> method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              <?php echo e(csrf_field()); ?>

              <input type="file" name="fotokaurkeuangan" id="fotokaurkeuangan">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($profildesas[0]->fotokaurumum); ?>" alt="">
            <h1 class="text-center" >Kaur umum</h1>
            <form action=<?php echo e(url('editfotokaurumum')); ?> method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              <?php echo e(csrf_field()); ?>

              <input type="file" name="fotokaurumum" id="fotokaurumum">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($profildesas[0]->fotokaurkesra); ?>" alt="">
            <h1 class="text-center">Kaur Kesra</h1>
            <form action=<?php echo e(url('editfotokaurkesra')); ?> method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              <?php echo e(csrf_field()); ?>

              <input type="file" name="fotokaurkesra" id="fotokaurkesra">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>


            <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($profildesas[0]->fotokaurtrantib); ?>" alt="">
            <h1 class="text-center" >Kaur Trantib</h1>
            <form action=<?php echo e(url('editfotokaurtrantib')); ?> method="post" enctype="multipart/form-data" style="padding-top: 1px;">
              <?php echo e(csrf_field()); ?>

              <input type="file" name="fotokaurtrantib" id="fotokaurtrantib">
              <input class="button white" type="submit" value="Ganti">
            </form>
            </div>

          </div>
        </div>
    </section>


    <section id="dataakundesa" class="section-padding tabel5kolom  gray-bg">
      <div class="container-fluid">
         <h1>Tabel Data Akun Login Web Desa</h1>
        <div class="row">
          <div class="col-md-12">
            <div style="overflow: auto;max-height: 400px;position: relative;  ">
                <table id="tabeldatakadus">
                <thead>
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th> 
                    <th>Aktifasi</th> 
                    <th>hapus</th> 
                  </tr>
                </thead>
                 <tbody>
                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($user->name); ?></td>
                      <td><?php echo e($user->email); ?></td>
                      <td><?php echo e($user->status); ?></td>
                      <td><a href=<?php echo e(url('aktifasiakun/' .  $user->id )); ?>>aktifasi</a></td>
                      <td><a href=<?php echo e(url('deleteakun/' .  $user->id )); ?>>hapus</a></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
          </div>
              
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
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>

</html>