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
  
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/admin.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/responsiveadmin.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
    

 
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

    <a class="navbar-brand" href=<?php echo e(url('/')); ?>>
    <img id="logo" src="images/kabupaten-lombok-timur-ntb (1).png" alt="">
    <p>Website Resmi Pemerintah desa</p>
    <span id="textlogo">Pringgajurang</span>

  </a>

      </div>
      <div class=" collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
      <?php if(auth()->guard()->guest()): ?>
            <li>
                <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
      <?php else: ?>
            
            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo e(url('/')); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          Surat <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?php echo e(url('surat_ket_domisili')); ?>">Surat Keterang Domisili</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="<?php echo e(url('surat_ket_pindah_penduduk')); ?>">Surat Keterangan Pindah</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="<?php echo e(url('surat_ket_nikah')); ?>">Surat Keterangan Nikah</a>
                          <div class="dropdown-divider"></div>
                        </div>
                    </li>
            <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->NIK); ?> <span class="caret"></span>
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
      </div>
    </div>
  </nav>


                  

<br><br><br><br>

<?php
  $no=1
?>



<section class="section-padding" id="biodata">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Data Kependudukan Anda</h1><br><br>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">


        <p><strong>Nama : </strong><?php echo e($data_penduduks[0]->Nama); ?></p>
        <p><strong>Alamat : </strong><?php echo e($data_penduduks[0]->Alamat); ?></p>
        <?php if($kode_area_dusuns->count()>0): ?>
           <p><strong>Dusun : </strong><?php echo e($kode_area_dusuns[0]->Nama_Dusun); ?></p>
        <?php else: ?>
          <p><strong>Dusun : </strong> - </p>
        <?php endif; ?>
        <p><strong>RW : </strong><?php echo e($data_penduduks[0]->RW); ?></p>
        <p><strong>RT : </strong><?php echo e($data_penduduks[0]->RT); ?></p>
        <p><strong>Nomor KK : </strong><?php echo e($data_penduduks[0]->Nomor_KK); ?></p>
        <p><strong>NIK : </strong><?php echo e($data_penduduks[0]->NIK); ?></p>
        <p><strong>JENIS KELAMIN : </strong><?php echo e($data_penduduks[0]->Jenis_Kelamin); ?></p>
        <p><strong>TEMPAT LAHIR : </strong><?php echo e($data_penduduks[0]->Tempat_Lahir); ?></p>
        <p><strong>TANGGAL LAHIR : </strong><?php echo e($data_penduduks[0]->Tanggal_Lahir); ?></p>
        <p><strong>AGAMA : </strong><?php echo e($data_penduduks[0]->Agama); ?></p>
        <p><strong>PENDIDIKAN : </strong><?php echo e($data_penduduks[0]->Pendidikan); ?></p>
        <p><strong>JENIS PEKERJAAN : </strong><?php echo e($data_penduduks[0]->Jenis_Pekerjaan); ?></p>
        <p><strong>STATUS PERKAWINAN : </strong><?php echo e($data_penduduks[0]->Status_Perkawinan); ?></p>
        <p><strong>STATUS HUBUNGAN DALAM MASYARAKAT : </strong><?php echo e($data_penduduks[0]->Status_Hubungan_Dalam_Keluarga); ?></p>
        <p><strong>KEWARGANEGARAAN : </strong><?php echo e($data_penduduks[0]->Kewarganegaraan); ?></p>
        <p><strong>AYAH : </strong><?php echo e($data_penduduks[0]->Nama_Ayah); ?></p>
      </div>
      <div class="col-md-6">
        <p><strong>IBU : </strong><?php echo e($data_penduduks[0]->Nama_Ibu); ?></p>
        <p><strong>Golongan_Darah : </strong><?php echo e($data_penduduks[0]->Golongan_Darah); ?></p>
        <p><strong>Akta_Lahir : </strong><?php echo e($data_penduduks[0]->Akta_Lahir); ?></p>
        <p><strong>No_Paspor : </strong><?php echo e($data_penduduks[0]->No_Paspor); ?></p>
        <p><strong>Tanggal_akhir_Paspor : </strong><?php echo e($data_penduduks[0]->Tanggal_akhir_Paspor); ?></p>
        <p><strong>No_KITAS : </strong><?php echo e($data_penduduks[0]->No_KITAS); ?></p>
        <p><strong>NIK_Ayah : </strong><?php echo e($data_penduduks[0]->NIK_Ayah); ?></p>
        <p><strong>NIK_Ibu : </strong><?php echo e($data_penduduks[0]->NIK_Ibu); ?></p>
        <p><strong>No_Akta_Perkawinan : </strong><?php echo e($data_penduduks[0]->No_Akta_Perkawinan); ?></p>
        <p><strong>Tanggal_Perkawinan : </strong><?php echo e($data_penduduks[0]->Tanggal_Perkawinan); ?></p>
        <p><strong>No_Akta_Perceraian : </strong><?php echo e($data_penduduks[0]->No_Akta_Perceraian); ?></p>
        <p><strong>Tanggal_Perceraian : </strong><?php echo e($data_penduduks[0]->Tanggal_Perceraian); ?></p>
        <p><strong>Cacat : </strong><?php echo e($data_penduduks[0]->Cacat); ?></p>
        <p><strong>Cara_KB : </strong><?php echo e($data_penduduks[0]->Cara_KB); ?></p>
        <p><strong>Hamil : </strong><?php echo e($data_penduduks[0]->Hamil); ?></p>
        <p><strong>STATUS KEPENDUDUKAN : </strong><?php echo e($data_penduduks[0]->Status_kependudukan); ?></p>
        <p><strong>KETERANGAN : </strong><?php echo e($data_penduduks[0]->Keterangan); ?></p>
      </div>
  </div>
</section>        


<section id="tabelberita" class="section-padding tabel7kolom">
      <div class="container-fluid">
         <h1>Tabel data Barang</h1>
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
                  <?php $__currentLoopData = $barangdesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangdesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($barangdesa->nama); ?></td>
                        <td><?php echo e($barangdesa->harga); ?></td>
                        <td><?php echo e($barangdesa->jumlah); ?></td>
                        <td><?php echo e(substr($barangdesa->deskripsi,0,100)); ?></td>
                        <td><a href=<?php echo e(url('formeditbarangdesa/' .  $barangdesa->id )); ?>>edit</a></td>
                        <td><a href=<?php echo e(url('deletebarangdesa/' .  $barangdesa->id )); ?>>hapus</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
          </div>
            <a href="<?php echo e(url('formaddbarangdesa/'.$jmlbarang)); ?>" class="tomboladd">Tambah Data Baru</a>
                </div>
              </div>
              <p class="text-center text-danger"><?php echo e(session('batas')); ?></p>
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