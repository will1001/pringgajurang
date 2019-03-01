<?php $__env->startSection('content'); ?>



<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <?php if($errors->any()): ?>
        <h3 class="text-center text-danger"><?php echo e(implode('', $errors->all(':message'))); ?></h3>
        <?php endif; ?>
     <form action=<?php echo e(url('editdatapendudukkadus/' .  $data_penduduks[0]->NIK )); ?> method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          <?php echo e(csrf_field()); ?>

          Alamat :<br>
          <input type="text" name="Alamat" value="<?php echo e($data_penduduks[0]->Alamat); ?>"><br><br>
          RW :<br>
          <input type="text" name="RW" value="<?php echo e($data_penduduks[0]->RW); ?>"><br><br>
          RT :<br>
          <input type="text" name="RT" value="<?php echo e($data_penduduks[0]->RT); ?>"><br><br>
          Nama :<br>
          <input type="text" name="Nama" value="<?php echo e($data_penduduks[0]->Nama); ?>"><br><br>
          Nomor KK :<br>
          <input type="text" name="Nomor_KK" value="<?php echo e($data_penduduks[0]->Nomor_KK); ?>"><br><br>
          Nomor NIK :<br>
          <input type="text" name="NIK" value="<?php echo e($data_penduduks[0]->NIK); ?>"><br><br>
          Jenis Kelamin :<br>
          <select name="jenis_kelamin">
            <option selected="true" value="<?php echo e($tabel_jenis_kelamin_defaults[0]->id); ?>"><?php echo e($tabel_jenis_kelamin_defaults[0]->jenis_kelamin); ?></option>
               <?php $__currentLoopData = $tabel_jenis_kelamins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_jenis_kelamin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_jenis_kelamin->id); ?>"><?php echo e($tabel_jenis_kelamin->jenis_kelamin); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Tempat Lahir :<br>
          <input type="text" name="Tempat_Lahir" value="<?php echo e($data_penduduks[0]->Tempat_Lahir); ?>"><br><br>
          Tanggal Lahir :<br>
           <input type="date" id="formattanggal" name="Tanggal_Lahir" value="<?php echo e(date('Y-m-d', strtotime($data_penduduks[0]->Tanggal_Lahir))); ?>"><br><br>
          Agama :<br>
          <select name="Agama">
            <option selected="true" value="<?php echo e($tabel_agama_defaults[0]->id); ?>"><?php echo e($tabel_agama_defaults[0]->agama); ?></option>
               <?php $__currentLoopData = $tabel_agamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_agama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_agama->id); ?>"><?php echo e($tabel_agama->agama); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Pendidikan :<br>
          <select name="Pendidikan">
            <option selected="true" value="<?php echo e($tabel_pendidikan_defaults[0]->id); ?>"><?php echo e($tabel_pendidikan_defaults[0]->pendidikan); ?></option>
               <?php $__currentLoopData = $tabel_pendidikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_pendidikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_pendidikan->id); ?>"><?php echo e($tabel_pendidikan->pendidikan); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Jenis Pekerjaan :<br>
          <select name="Jenis_Pekerjaan">
            <option selected="true" value="<?php echo e($tabel_jenis_pekerjaan_defaults[0]->id); ?>"><?php echo e($tabel_jenis_pekerjaan_defaults[0]->jenis_pekerjaan); ?></option>
               <?php $__currentLoopData = $tabel_jenis_pekerjaans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_jenis_pekerjaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_jenis_pekerjaan->id); ?>"><?php echo e($tabel_jenis_pekerjaan->jenis_pekerjaan); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Status Perkawinan :<br>
          <select name="Status_Perkawinan">
            <option selected="true" value="<?php echo e($tabel_status_perkawinan_defaults[0]->id); ?>"><?php echo e($tabel_status_perkawinan_defaults[0]->status_perkawinan); ?></option>
               <?php $__currentLoopData = $tabel_status_perkawinans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_status_perkawinan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_status_perkawinan->id); ?>"><?php echo e($tabel_status_perkawinan->status_perkawinan); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Status Hubungan Dalam Keluarga :<br>
         <select name="Status_Hubungan_Dalam_Keluarga">
               <option selected="true" value="<?php echo e($tabel_status_hubungan_dalam_keluarga_defaults[0]->id); ?>"><?php echo e($tabel_status_hubungan_dalam_keluarga_defaults[0]->status_hubungan_dalam_keluarga); ?></option>
               <?php $__currentLoopData = $tabel_status_hubungan_dalam_keluargas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_status_hubungan_dalam_keluarga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_status_hubungan_dalam_keluarga->id); ?>"><?php echo e($tabel_status_hubungan_dalam_keluarga->status_hubungan_dalam_keluarga); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Kewarganegaraan :<br>
           <select name="Kewarganegaraan">
            <option selected="true" value="<?php echo e($tabel_kewarganegaraan_defaults[0]->id); ?>"><?php echo e($tabel_kewarganegaraan_defaults[0]->kewarganegaraan); ?></option>
                <?php $__currentLoopData = $tabel_kewarganegaraans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_kewarganegaraan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_kewarganegaraan->id); ?>"><?php echo e($tabel_kewarganegaraan->kewarganegaraan); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Nama Ayah :<br>
          <input type="text" name="Nama_Ayah" value="<?php echo e($data_penduduks[0]->Nama_Ayah); ?>"><br><br>
          Nama Ibu :<br>
          <input type="text" name="Nama_Ibu" value="<?php echo e($data_penduduks[0]->Nama_Ibu); ?>"><br><br>
         Golongan darah :<br>
          <select name="Golongan_Darah">
            <option selected="true" value="<?php echo e($tabel_golongan_darah_defaults[0]->id); ?>"><?php echo e($tabel_golongan_darah_defaults[0]->golongan_darah); ?></option>
                <?php $__currentLoopData = $tabel_golongan_darahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel_golongan_darah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tabel_golongan_darah->id); ?>"><?php echo e($tabel_golongan_darah->golongan_darah); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          Akta Lahir :<br>
          <input type="text" name="Akta_Lahir" value="<?php echo e($data_penduduks[0]->Akta_Lahir); ?>"><br><br>
          Nomor Dokumen Paspor :<br>
          <input type="text" name="No_Paspor" value="<?php echo e($data_penduduks[0]->No_Paspor); ?>"><br><br>
          Tanggal akhir Paspor :<br>
          <input type="date" name="Tanggal_akhir_Paspor" value="<?php echo e(date('Y-m-d', strtotime($data_penduduks[0]->Tanggal_akhir_Paspor))); ?>"><br><br>
          Nomor Dokumen KITAS :<br>
          <input type="text" name="No_KITAS" value="<?php echo e($data_penduduks[0]->No_KITAS); ?>"><br><br>
          NIK Ayah :<br>
          <input type="text" name="NIK_Ayah" value="<?php echo e($data_penduduks[0]->NIK_Ayah); ?>"><br><br>
          NIK Ibu :<br>
          <input type="text" name="NIK_Ibu" value="<?php echo e($data_penduduks[0]->NIK_Ibu); ?>"><br><br>
          No Akta Perkawinan :<br>
          <input type="text" name="No_Akta_Perkawinan" value="<?php echo e($data_penduduks[0]->No_Akta_Perkawinan); ?>"><br><br>
          Tanggal Perkawinan :<br>
          <input type="date" name="Tanggal_Perkawinan" value="<?php echo e(date('Y-m-d', strtotime($data_penduduks[0]->Tanggal_Perkawinan))); ?>"><br><br>
          No Akta Perceraian :<br>
          <input type="text" name="No_Akta_Perceraian" value="<?php echo e($data_penduduks[0]->No_Akta_Perceraian); ?>"><br><br>
          Tanggal Perceraian :<br>
          <input type="date" name="Tanggal_Perceraian" value="<?php echo e(date('Y-m-d', strtotime($data_penduduks[0]->Tanggal_Perceraian))); ?>"><br><br>
          Cacat :<br>
          <input type="text" name="Cacat" value="<?php echo e($data_penduduks[0]->Cacat); ?>"><br><br>
          Cara KB :<br>
          <select name="Cara_KB">
            <option selected="true" value="<?php echo e($data_penduduks[0]->Cara_KB); ?>"><?php echo e($data_penduduks[0]->Cara_KB); ?></option>
              <option value="Pil">Pil</option>
              <option value="IUD">IUD</option>
              <option value="Suntik">Suntik</option>
              <option value="Kondom">Kondom</option>
              <option value="Susuk KB">Susuk KB</option>
              <option value="Sterilisasi Wanita">Sterilisasi Wanita</option>
              <option value="Sterilisasi Pria">Sterilisasi Pria</option>
               </select><br><br>
          Hamil :<br>
          <input type="text" name="Hamil" value="<?php echo e($data_penduduks[0]->Hamil); ?>"><br><br>
          Status kependudukan :<br>
          <select name="status_kependudukan">
               <option selected="true" disabled="disabled">Status kependudukan</option>
               <option value="Datang">Datang</option>
               <option value="Lahir">Lahir</option>
               <option value="Pergi">Pergi</option>
               <option value="Meninggal">Meninggal</option>
          </select><br><br>
          Keterangan :<br>
          <textarea name="Keterangan"></textarea><br><br>
          Tempat Mendapatkan Air Bersih :<br>
          <select name="tempat_mendapatkan_air_bersih">
               <option selected="true" value="<?php echo e($data_penduduks[0]->tempat_mendapatkan_air_bersih); ?>"><?php echo e($data_penduduks[0]->tempat_mendapatkan_air_bersih); ?></option>                 
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
               <option selected="true" value="<?php echo e($data_penduduks[0]->status_gizi_balita); ?>"><?php echo e($data_penduduks[0]->status_gizi_balita); ?></option>                 
               <option value="Baik">Baik</option>
               <option value="Buruk">Buruk</option>
               <option value="Kurang">Kurang</option>
               <option value="Lebih">Lebih</option>
          </select><br><br>
          Kebiasaan Berobat Bila Sakit :<br>
          <select name="kebiasaan_berobat_bila_sakit">
               <option selected="true" value="<?php echo e($data_penduduks[0]->kebiasaan_berobat_bila_sakit); ?>"><?php echo e($data_penduduks[0]->kebiasaan_berobat_bila_sakit); ?></option>                 
               <option value="Dokter">Dokter</option>
               <option value="Dukun terlatih">Dukun terlatih</option>
               <option value="Keluarga sendiri">Keluarga sendiri</option>
               <option value="Paranormal">Paranormal</option>
               <option value="Tidak berobat">Tidak berobat</option>
          </select><br><br>
          Upload foto KTP : <br><br>
          <input type="file" name="foto_ktp" id="foto_ktp"><br><br>
          Upload foto KK : <br><br>
          <input type="file" name="foto_kk" id="foto_kk">
          <br><br>
          <input type="submit" value="Submit">
        </form>
        
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>



    
        
  
<?php echo $__env->make('layouts.layoutform', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>