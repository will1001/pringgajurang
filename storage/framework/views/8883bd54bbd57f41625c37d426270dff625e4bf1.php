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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/responsive.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/admin.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/responsiveadmin.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemon">
</head>

<body onload="startTime()" data-spy="scroll" data-target="#primary-menu">



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
   <a class="navbar-brand" href="<?php echo e(url('/')); ?>" @click="currentView='indexpage';activate(0);isHidden = false">
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
      <?php if(auth()->guard()->guest()): ?>
              <li>
                  <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
              </li>
        <?php else: ?>
              <li class="nav-item dropdown">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <?php echo e(Auth::user()->email); ?> <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-down" aria-labelledby="navbarDropdown">
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
    </ul>
  </div>
   </div>
</nav>



            




<br><br><br><br><br>
<h1 class="text-center">Admin Dusun <?php echo e($kode_area_dusuns[0]->Nama_Dusun); ?></h1>

    

    <section id="tabeldatapendudukkadus"  class="section-padding">
      <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-12 col -sm-12 col-md-6">
              <select id="filterkadus">
                 <option selected="true" disabled="disabled">Cari Berdasarkan</option>
                  <option value="Nama">Nama</option>
                  <option value="NIK">NIK</option>
                  <option value="Nomor_kk">Nomor KK</option>
                  <option value="Pendidikan">Pendidikan</option>
                  <option value="Status_Perkawinan">status Perkawinan</option>
                  <option value="Golongan_Darah">Golongan Darah</option>
            </select>
             <div class="searchkadus">
            <input type="text"  id="searchkadus" name="searchkadus" placeholder=". . ." ></input>
            </div>
           <button id="tombol_searchkadus">Search</button>  
           
            
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1 style="margin-bottom: 35px;">Tabel Data Penduduk Dusun <?php echo e($kode_area_dusuns[0]->Nama_Dusun); ?></h1>

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
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <tr>
                  <th rowspan="2">No</th>
                  <th rowspan="2">Alamat</th>
                  <th rowspan="2">RW</th>
                  <th rowspan="2">RT</th>
                  <th rowspan="2">Nama</th>
                  <th rowspan="2">Nomor KK</th>
                  <th rowspan="2">Nomor NIK</th>
                  <th rowspan="2">Jenis Kelamin</th>
                  <th rowspan="2">Tempat Lahir</th>
                  <th rowspan="2">Tanggal Lahir</th>
                  <th rowspan="2">Usia</th>
                  <th rowspan="2">Agama</th>
                  <th rowspan="2">Pendidikan</th>
                  <th rowspan="2">Jenis Pekerjaan</th> 
                  <th rowspan="2">Status Perkawinan</th> 
                  <th rowspan="2">Status Hubungan Dalam Keluarga</th> 
                  <th rowspan="2">Kewarganegaraan</th> 
                  <th rowspan="2">Nama Ayah</th> 
                  <th rowspan="2">Nama Ibu</th> 
                  <th rowspan="2">Golongan Darah</th> 
                  <th rowspan="2">Akta Lahir</th> 
                  <th rowspan="2">Nomor Dokumen Paspor</th>
                  <th rowspan="2">Tanggal Akhir Paspor</th>  
                  <th rowspan="2">Nomor Dokumen KITAS</th>             
                  <th rowspan="2">NIK Ayah</th> 
                  <th rowspan="2">NIK Ibu</th> 
                  <th rowspan="2">No Akta Perkawinan</th> 
                  <th rowspan="2">Tanggal Perkawinan</th> 
                  <th rowspan="2">No Akta Perceraian</th> 
                  <th rowspan="2">Tanggal Perceraian</th> 
                  <th rowspan="2">Cacat</th> 
                  <th rowspan="2">Cara KB</th> 
                  <th rowspan="2">Hamil</th> 
                  <th rowspan="2">Status kependudukan</th> 
                  <th rowspan="2">Keterangan</th>  
                  <th rowspan="2">Tempat Mendapatkan Air Bersih</th>  
                  <th rowspan="2">Status Gizi Balita</th>  
                  <th rowspan="2">Kebiasaan Berobat Bila Sakit</th>
                  <th rowspan="2">Jumlah Penghasilan Perbulan</th>   
                  <th rowspan="2">Jumlah Pengeluaran Perbulan</th>   
                  <th rowspan="2">Sumber Air Minum</th>   
                  <th rowspan="2">Kualitas Air Minum</th>   
                  <th rowspan="2">Kualitas Ibu Hamil</th>   
                  <th rowspan="2">Kualitas Bayi</th>   
                  <th rowspan="2">Tempat Persalinan</th>   
                  <th rowspan="2">Portolongan Persalinan</th>   
                  <th rowspan="2">Cakupan Imunisasi</th>   
                  <th rowspan="2">Perilaku Hidup Bersih</th>   
                  <th rowspan="2">Pola Makan</th>   
                  <th rowspan="2">Penyakit yang di derita</th>
                  
                  <!-- <th colspan="5">Pendapatan Perkapita</th>    -->
                  <!-- <th colspan="5">Pendapatan Rill Keluarga</th>    -->
                  <th rowspan="2">Foto KTP</th>  
                  <th rowspan="2">Foto KK</th>   
                  <th rowspan="2">edit</th>  
        </tr>
      </thead>
      <tbody id="tbodytabel">
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
            <td><?php echo e($data_penduduk->jenis_kelamin); ?></td>
            <td><?php echo e($data_penduduk->Tempat_Lahir); ?></td>
            <td><?php echo e($data_penduduk->Tanggal_Lahir); ?></td>
            <td><?php echo e($data_penduduk->Usia); ?></td>
            <td><?php echo e($data_penduduk->agama); ?></td>
            <td><?php echo e($data_penduduk->pendidikan); ?></td>
            <td><?php echo e($data_penduduk->jenis_pekerjaan); ?></td>
            <td><?php echo e($data_penduduk->status_perkawinan); ?></td>
            <td><?php echo e($data_penduduk->status_hubungan_dalam_keluarga); ?></td>
            <td><?php echo e($data_penduduk->kewarganegaraan); ?></td>
            <td><?php echo e($data_penduduk->Nama_Ayah); ?></td>
            <td><?php echo e($data_penduduk->Nama_Ibu); ?></td>
            <td><?php echo e($data_penduduk->golongan_darah); ?></td>
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
            <td><?php echo e($data_penduduk->tempat_mendapatkan_air_bersih); ?></td>
            <td><?php echo e($data_penduduk->status_gizi_balita); ?></td>
            <td><?php echo e($data_penduduk->kebiasaan_berobat_bila_sakit); ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php if($data_penduduk->foto_ktp==null && $data_penduduk->foto_kk==null ): ?>
            <td ><a href="<?php echo e($data_penduduk->foto_ktp); ?>"></a></td>        
            <td ><a href="<?php echo e($data_penduduk->foto_kk); ?>"></a></td>
            <?php endif; ?>
            <?php if($data_penduduk->foto_ktp==null && $data_penduduk->foto_kk!=null): ?>
            <td ><a href="<?php echo e($data_penduduk->foto_ktp); ?>"></a></td>        
            <td ><a href="<?php echo e($data_penduduk->foto_kk); ?>">lihat</a></td>
            <?php endif; ?>
            <?php if($data_penduduk->foto_ktp!=null && $data_penduduk->foto_kk==null): ?>
            <td ><a href="<?php echo e($data_penduduk->foto_ktp); ?>">lihat</a></td>        
            <td ><a href="<?php echo e($data_penduduk->foto_kk); ?>"></a></td>
            <?php endif; ?>
            <?php if($data_penduduk->foto_ktp!=null && $data_penduduk->foto_kk!=null): ?>
            <td ><a href="<?php echo e($data_penduduk->foto_ktp); ?>">lihat</a></td>        
            <td ><a href="<?php echo e($data_penduduk->foto_kk); ?>">lihat</a></td>
            <?php endif; ?>      
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



    





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('/js/date.js')); ?>" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
    
    <script src="<?php echo e(asset('/js/script.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('/js/wow.min.js')); ?>" type="text/javascript"></script>
</body>

</html>