
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
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
      <?php if(auth()->guard()->guest()): ?>
            <li>
                <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
      <?php else: ?>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  upload dokumen <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo e(url('formuploadapbd/apbd')); ?>">APBD Desa</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo e(url('formuploadapbd/rkp')); ?>">RKP Desa</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo e(url('formuploadapbd/rpjm')); ?>">RPJM Desa</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo e(url('formuploadprofildesa')); ?>">Profil Desa</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo e(url('formuploadstatistikdesa')); ?>">Statistik Desa</a>
                </div>
            </li>
            <li class="nav-item dropdown navigation">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    <?php echo e(Auth::user()->email); ?> <span class="caret"></span>
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
            <li class="nav-item dropdown">
              <a href="<?php echo e(url('formsettingkopsurat')); ?>" >Setting Kop Surat</a>
            </li>
        <?php endif; ?>
    </ul>
      </div>
    </div>
  </nav>
            



<section id="tabeldatapendudukkadus"  class="section-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1>Tabel data Penduduk Desa Pringgajurang</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-12 col-sm-6 col-md-6">
            <select id="pilihankadus">
                 <option selected="true" disabled="disabled">Dusun</option>
                 <?php $__currentLoopData = $kode_area_dusuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_area_dusun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($kode_area_dusun->id_dusun); ?>"><?php echo e($kode_area_dusun->Nama_Dusun); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="col-xs-12 col-12 col-sm-6 col-md-6 search-posisi">
            <button id="tombol_search">Search</button>  
            <div class="search">
            <input type="text"  id="search" name="search" placeholder=". . ." ></input>
            </div>
            <select id="filter">
                 <option selected="true" disabled="disabled">Cari Berdasarkan</option>
                  <option value="Nama">Nama</option>
                  <option value="NIK">NIK</option>
                  <option value="Pendidikan">Pendidikan</option>
                  <option value="Status_Perkawinan">status Perkawinan</option>
                  <option value="Golongan_Darah">Golongan Darah</option>
            </select>
            
          </div>

        </div>

      <div class="row">
          <div class="col-md-12">      
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
                  <th>Usia</th>
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
          <a href="#" class="previous">&laquo; Previous</a>
          <a href="#" class="next">Next &raquo;</a>
          <a href="<?php echo e(url('formadddatapendudukkades')); ?>" class="tomboladd">Tambah Data</a>
        </div>
        </div>
      </div>
    </section>



<section id="buatsurat"  class="section-padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-left">
         <select id="pilihsurat">
                 <option selected="true" disabled="disabled">Surat</option>
                    <option value="surat_ket_domisili">Surat Keterang Domisili</option>
                    <option value="surat_ket_pindah_penduduk">Surat Keterangan Pindah</option>
                    <option value="surat_ket_nikah">Surat Keterangan Nikah</option>
            </select>
          <input  type="text" name="NIKsurat" placeholder="NIK" id="NIKsurat">
        <a href="" id="tombolbuatsurat">Buat Surat</a>
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

<?php
  $no=1
?>
    <section id="tabelbumdes" class="section-padding tabel7kolom">
      <div class="container-fluid">
         <h1>Tabel data Bumdes</h1>
        <div class="row">
          <div class="col-md-12">
            <div style="overflow: auto;max-height: 400px;position: relative;">
                <table id="tabeldatakadus">
                <thead>
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>edit</th> 
                    <th>hapus</th> 
                  </tr>
                </thead>
                 <tbody>
                  <?php $__currentLoopData = $bumdess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bumdes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($bumdes->nama); ?></td>
                        <td><?php echo e($bumdes->harga); ?></td>
                        <td><?php echo e($bumdes->jumlah); ?></td>
                        <td><?php echo e(substr($bumdes->deskripsi,0,100)); ?></td>
                        <td><a href=<?php echo e(url('formeditbumdes/' .  $bumdes->id )); ?>>edit</a></td>
                        <td><a href=<?php echo e(url('deletebumdes/' .  $bumdes->id )); ?>>hapus</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
          </div>
            <a href="<?php echo e(url('formaddbumdes/'.$jmlbarang)); ?>" class="tomboladd">Tambah Data Baru</a>
                </div>
              </div>
              <p class="text-center text-danger"><?php echo e(session('batas')); ?></p>
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
         <h2>SOTK</h2>
         <?php if($errors->any()): ?>
        <h3 class="text-center text-danger"><?php echo e(implode('', $errors->all(':message'))); ?></h3>
        <?php endif; ?>
        
          <div class="row text-center">


            <?php $__currentLoopData = $SOTKs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SOTK): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="col-12 col-xs-12 col-sm-12 col-md-3">
            <img src="<?php echo e($SOTK->urlgambar); ?>" alt="">
            <h1 class="text-center" ><?php echo e($SOTK->Nama); ?></h1>
            <h3 class="text-center"><?php echo e($SOTK->Jabatan); ?></h3>
            <a href="<?php echo e(url('formeditSOTK/'.$SOTK->id)); ?>">Ganti</a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       

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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
  
  <script src="<?php echo e(asset('js/script.js')); ?>"></script>

</body>
</html>
