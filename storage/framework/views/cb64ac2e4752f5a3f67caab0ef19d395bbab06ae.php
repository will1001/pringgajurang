 

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center">
      <?php if($errors->any()): ?>
        <h3 class="text-center text-danger"><?php echo e(implode('', $errors->all(':message'))); ?></h3>
        <?php endif; ?>
    </div>
  <div class="row">

    <div class="col-md-4">
     
     <form action="<?php echo e(url('adddatapendudukkades')); ?>" method="post" enctype="multipart/form-data" class="padding_form">
          <?php echo e(csrf_field()); ?>

          Alamat :<br>
          <input type="text" name="Alamat" placeholder="Alamat"><br><br>
          Dusun :<br>
          <select name="Id_Dusun">
                 <option selected="true" >Dusun</option>
                 <?php $__currentLoopData = $kode_area_dusuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_area_dusun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($kode_area_dusun->id_dusun); ?>"><?php echo e($kode_area_dusun->Nama_Dusun); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          RW :<br>
          <input type="text" name="RW" placeholder="RW"><br><br>
          RT :<br>
          <input type="text" name="RT" placeholder="RT"><br><br>
          Nama :<br>
          <input type="text" name="Nama" placeholder="Nama"><br><br>
          Nomor KK :<br>
          <input type="text" name="Nomor_KK" placeholder="Nomor KK"><br><br>
          Nomor NIK :<br>
          <input type="text" name="NIK" placeholder="NIK"><br><br>
          Jenis Kelamin :<br>
          <select name="jenis_kelamin">
               <option value="0" selected="true" >Jenis Kelamin</option>                 
               <?php $__currentLoopData = $tabel_jenis_kelamins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_jenis_kelamin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_jenis_kelamin->id); ?>"><?php echo e($tabel_jenis_kelamin->jenis_kelamin); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Tempat Lahir :<br>
          <input type="text" name="Tempat_Lahir" placeholder="Tempat Lahir"><br><br>
          Tanggal Lahir :<br>
           <input type="date" id="formattanggal" name="Tanggal_Lahir" placeholder="Tanggal Lahir"><br><br>
          Agama :<br>
          <select name="Agama">
            <option value="0" selected="true" >Agama</option>                 
               <?php $__currentLoopData = $tabel_agamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_agama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_agama->id); ?>"><?php echo e($tabel_agama->agama); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Pendidikan :<br>
          <select name="Pendidikan">
            <option value="0" selected="true" >Pendidikan</option>                 
               <?php $__currentLoopData = $tabel_pendidikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_pendidikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_pendidikan->id); ?>"><?php echo e($tabel_pendidikan->pendidikan); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Jenis Pekerjaan :<br>
          <select name="Jenis_Pekerjaan">
            <option value="0" selected="true" >Jenis Pekerjaan</option>                 
               <?php $__currentLoopData = $tabel_jenis_pekerjaans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_jenis_pekerjaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_jenis_pekerjaan->id); ?>"><?php echo e($tabel_jenis_pekerjaan->jenis_pekerjaan); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Status Perkawinan :<br>
          <select name="Status_Perkawinan">
            <option value="0" selected="true" >Status Perkawinan</option>                 
               <?php $__currentLoopData = $tabel_status_perkawinans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_status_perkawinan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_status_perkawinan->id); ?>"><?php echo e($tabel_status_perkawinan->status_perkawinan); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Status Hubungan Dalam Keluarga :<br>                 
          <select name="Status_Hubungan_Dalam_Keluarga">
            <option value="0" selected="true" >Status Hubungan Dalam Keluarga</option>
               <?php $__currentLoopData = $tabel_status_hubungan_dalam_keluargas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_status_hubungan_dalam_keluarga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_status_hubungan_dalam_keluarga->id); ?>"><?php echo e($tabel_status_hubungan_dalam_keluarga->status_hubungan_dalam_keluarga); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Kewarganegaraan :<br>
          <select name="Kewarganegaraan">
            <option value="0" selected="true" >Kewarganegaraan</option>
                <?php $__currentLoopData = $tabel_kewarganegaraans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_kewarganegaraan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_kewarganegaraan->id); ?>"><?php echo e($tabel_kewarganegaraan->kewarganegaraan); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Nama Ayah :<br>
          <input type="text" name="Nama_Ayah" placeholder="Nama Ayah"><br><br>
          Nama Ibu :<br>
          <input type="text" name="Nama_Ibu" placeholder="Nama Ibu"><br><br>
          Golongan darah :<br>
          <select name="Golongan_Darah">
            <option value="0" selected="true" >Golongan Darah</option>                 
                <?php $__currentLoopData = $tabel_golongan_darahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_golongan_darah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_golongan_darah->id); ?>"><?php echo e($tabel_golongan_darah->golongan_darah); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          </div>
          <div class="col-md-4">
          Akta Lahir :<br>
          <input type="text" name="Akta_Lahir" placeholder="Akta Lahir"><br><br>
          Nomor Dokumen Paspor :<br>
          <input type="text" name="No_Paspor" placeholder="No Dokumen Paspor"><br><br>
          Tanggal akhir Paspor :<br>
          <input type="date" name="Tanggal_akhir_Paspor" placeholder="No Tanggal akhir Paspor"><br><br>
          Nomor Dokumen KITAS :<br>
          <input type="text" name="No_KITAS" placeholder="Nomor Dokumen KITAS"><br><br>
          NIK Ayah :<br>
          <input type="text" name="NIK_Ayah" placeholder="NIK Ayah"><br><br>
          NIK Ibu :<br>
          <input type="text" name="NIK_Ibu" placeholder="NIK Ibu"><br><br>
          No Akta Perkawinan :<br>
          <input type="text" name="No_Akta_Perkawinan" placeholder="No Akta Perkawinan"><br><br>
          Tanggal Perkawinan :<br>
          <input type="date" name="Tanggal_Perkawinan" placeholder="Tanggal Perkawinan"><br><br>
          No Akta Perceraian :<br>
          <input type="text" name="No_Akta_Perceraian" placeholder="No Akta Perceraian"><br><br>
          Tanggal Perceraian :<br>
          <input type="date" name="Tanggal_Perceraian" placeholder="Tanggal Perceraian"><br><br>
          Cacat :<br>
          <input type="text" name="Cacat" placeholder="Cacat"><br><br>
          Cara KB :<br>
          <select name="Cara_KB">
               <option selected="true" >Cara KB</option>                 
              <option value="Pil">Pil</option>
              <option value="IUD">IUD</option>
              <option value="Suntik">Suntik</option>
              <option value="Kondom">Kondom</option>
              <option value="Susuk KB">Susuk KB</option>
              <option value="Sterilisasi Wanita">Sterilisasi Wanita</option>
              <option value="Sterilisasi Pria">Sterilisasi Pria</option>
               </select><br><br>
          Hamil :<br>
          <input type="text" name="Hamil" placeholder="Hamil"><br><br>
          Tempat Mendapaykan Air Bersih :<br>
          <select name="tempat_mendapatkan_air_bersih">
               <option selected="true" >Tempat Mendapatkan Air Bersih</option>                 
               <option value="PAM">PAM</option>
               <option value="Sumur Gali">Sumur Gali</option>
               <option value="Penampungan air hujan">Penampungan air hujan</option>
               <option value="Air sungai">Air sungai</option>
               <option value="Embung">Embung</option>
               <option value="Sumur pompa">Sumur pompa</option>
               <option value="Perpipaan air keran">Perpipaan air keran</option>
               <option value="Hidran umum">Hidran umum</option>
               <option value="Mata air">Mata air</option>
               <option value="Air laut">Air laut</option>
          </select><br><br>
          Status Gizi Balita :<br>
          <select name="status_gizi_balita">
               <option selected="true" >Status Gizi Balita</option>                 
               <option value="Baik">Baik</option>
               <option value="Buruk">Buruk</option>
               <option value="Kurang">Kurang</option>
               <option value="Lebih">Lebih</option>
          </select><br><br>
          Kebiasaan Berobat Bila Sakit :<br>
          <select name="kebiasaan_berobat_bila_sakit">
               <option selected="true" >Kebiasaan Berobat Bila Sakit</option>                 
               <option value="Dokter">Dokter</option>
               <option value="Dukun terlatih">Dukun terlatih</option>
               <option value="Keluarga sendiri">Keluarga sendiri</option>
               <option value="Paranormal">Paranormal</option>
               <option value="Tidak berobat">Tidak berobat</option>
          </select><br><br>
         
          Jumlah Penghasilan Perbulan :<br>
          <input type="text" name="Jumlah Penghasilan Perbulan" placeholder="Jumlah Penghasilan Perbulan"><br><br>
          Jumlah Pengeluaran Perbulan :<br>
          <input type="text" name="Jumlah Pengeluaran Perbulan" placeholder="Jumlah Pengeluaran Perbulan"><br><br>
           </div>
          <div class="col-md-4">
          Sumber Air Minum :<br>
          <input type="text" name="Sumber Air Minum" placeholder="Sumber Air Minum"><br><br>
          Kualitas Air Minum :<br>
          <input type="text" name="Kualitas Air Minum" placeholder="Kualitas Air Minum"><br><br>
          Kualitas Ibu Hamil :<br>
          <input type="text" name="Kualitas Ibu Hamil" placeholder="Kualitas Ibu Hamil"><br><br>
          Kualitas Bayi :<br>
          <input type="text" name="Kualitas Bayi" placeholder="Kualitas Bayi"><br><br>
          Tempat Persalinan :<br>
          <input type="text" name="Tempat Persalinan" placeholder="Tempat Persalinan"><br><br>
          Portolongan Persalinan :<br>
          <input type="text" name="Portolongan Persalinan" placeholder="Portolongan Persalinan"><br><br>
          Cakupan Imunisasi :<br>
          <input type="text" name="Cakupan Imunisasi" placeholder="Cakupan Imunisasi"><br><br>
          Perilaku Hidup Bersih :<br>
          <input type="text" name="Perilaku Hidup Bersih" placeholder="Perilaku Hidup Bersih"><br><br>
          Pola Makan :<br>
          <input type="text" name="Pola Makan" placeholder="Pola Makan"><br><br>
          Penyakit yang di derita :<br>
          <input type="text" name="Penyakit yang di derita" placeholder="Penyakit yang di derita"><br><br>
          Upload foto KTP : <br><br>
          <input type="file" name="foto_ktp" id="foto_ktp">
          Upload foto KK : <br><br>
          <input type="file" name="foto_kk" id="foto_kk"><br><br>


          <input type="submit" value="Submit">
        </form>
        
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutform', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>