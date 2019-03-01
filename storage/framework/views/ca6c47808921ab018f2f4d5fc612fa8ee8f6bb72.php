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
  <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
    
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
    <img id="logo" src="../images/kabupaten-lombok-timur-ntb (1).png" alt="">
    <p>Website Resmi Pemerintah desa</p>
    <span id="textlogo">Pringgajurang</span>

  </a>

      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
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
      </div>
    </div>
  </nav>

<br><br><br><br><br>
<h1 class="text-center">Admin Dusun <?php echo e($kode_area_dusuns[0]->Nama_Dusun); ?></h1>

    

    <section id="tabeldatapendudukkadus"  class="section-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1 style="margin-bottom: 35px;">Tabel Data Penduduk Dusun <?php echo e($kode_area_dusuns[0]->Nama_Dusun); ?></h1>
           <div style="overflow: auto;max-height: 400px;position: relative;  ">
      <table>
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
                  <th>Nama</th>
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
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1
        ?>
        <?php $__currentLoopData = $data_penduduks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($no++); ?></td>
            <td><?php echo e($data_penduduk->Alamat); ?></td>
            <td><?php echo e($data_penduduk->RW); ?></td>
            <td><?php echo e($data_penduduk->RT); ?></td>
            <td><?php echo e($data_penduduk->Nama); ?></td>
            <td><?php echo e($data_penduduk->Nomor_KK); ?></td>
            <td><?php echo e($data_penduduk->NIK); ?></td>
            <td><?php echo e($data_penduduk->Jenis_Kelamin); ?></td>
            <td><?php echo e($data_penduduk->Tempat_Lahir); ?></td>
            <td><?php echo e($data_penduduk->Tanggal_Lahir); ?></td>
            <td><?php echo e($data_penduduk->Agama); ?></td>
            <td><?php echo e($data_penduduk->Pendidikan); ?></td>
            <td><?php echo e($data_penduduk->Jenis_Pekerjaan); ?></td>
            <td><?php echo e($data_penduduk->Status_Perkawinan); ?></td>
            <td><?php echo e($data_penduduk->Status_Hubungan_Dalam_Keluarga); ?></td>
            <td><?php echo e($data_penduduk->Kewarganegaraan); ?></td>
            <td><?php echo e($data_penduduk->Nama_Ayah); ?></td>
            <td><?php echo e($data_penduduk->Nama_Ibu); ?></td>
            <td><?php echo e($data_penduduk->Golongan_Darah); ?></td>
            <td><?php echo e($data_penduduk->Akta_Lahir); ?></td>
            <td><?php echo e($data_penduduk->No_Paspor); ?></td>
            <td><?php echo e($data_penduduk->Tanggal_akhir_Paspor); ?></td>
            <td><?php echo e($data_penduduk->No_KITAS); ?></td>
            <td><?php echo e($data_penduduk->NIK_Ayah); ?></td>
            <td><?php echo e($data_penduduk->NIK_Ibu); ?></td>
            <td><?php echo e($data_penduduk->No_Akta_Perkawinan); ?></td>
            <td><?php echo e($data_penduduk->Tanggal_Perkawinan); ?></td>
            <td><?php echo e($data_penduduk->No_Akta_Perceraian); ?></td>
            <td><?php echo e($data_penduduk->Tanggal_Perceraian); ?></td>
            <td><?php echo e($data_penduduk->Cacat); ?></td>
            <td><?php echo e($data_penduduk->Cara_KB); ?></td>
            <td><?php echo e($data_penduduk->Hamil); ?></td>
            <td><?php echo e($data_penduduk->Status_kependudukan); ?></td>
            <td><?php echo e($data_penduduk->Keterangan); ?></td>
            <td><a href="formeditdatapendudukkadus/<?php echo e($data_penduduk->NIK); ?>">edit</a></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
          </div>
        </div>
        </div>
      </div>
    </section>



    <section id="tabeldatapendudukkadus2"  class="section-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            
            <input type="text" name="NIK" placeholder="NIK" id="NIK"><br><br>
            

            <a href="" class="tomboledit" id="edittombol">Penduduk keluar</a>
            <a href="<?php echo e(url('formadddatapendudukkadus')); ?>" class="tomboladd">Penduduk Masuk</a>
            
            

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
  <script src="<?php echo e(asset('js/script.js')); ?>"></script>

</body>
</html>