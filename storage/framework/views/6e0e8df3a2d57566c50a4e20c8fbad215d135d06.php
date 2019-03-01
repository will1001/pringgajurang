<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('editdatapendudukkades/' .  $data_penduduks[0]->NIK .'/'.$data_penduduks[0]->Id_Dusun )); ?>" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          <?php echo e(csrf_field()); ?>

          Alamat :<br>
          <input type="text" name="Alamat" value="<?php echo e($data_penduduks[0]->Alamat); ?>"><br><br>
          Dusun :<br>
          <select name="Id_Dusun">
                 <option selected="true" disabled="disabled">Dusun</option>
                 <?php $__currentLoopData = $kode_area_dusuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_area_dusun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($kode_area_dusun->id_dusun); ?>"><?php echo e($kode_area_dusun->Nama_Dusun); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br><br>
          RW :<br>
          <input type="text" name="RW" value="<?php echo e($data_penduduks[0]->RW); ?>"><br><br>
          RT :<br>
          <input type="text" name="RT" value="<?php echo e($data_penduduks[0]->RT); ?>"><br><br>
          Nama :<br>
          <input type="text" name="Nama" value="<?php echo e($data_penduduks[0]->Nama); ?>"><br><br>
          Nomor KK :<br>
          <input type="text" name="Nomor_KK" value="<?php echo e($data_penduduks[0]->No_KK); ?>"><br><br>
          Nomor NIK :<br>
          <input type="text" name="NIK" value="<?php echo e($data_penduduks[0]->NIK); ?>"><br><br>
          Jenis Kelamin :<br>
          <select name="jenis_kelamin">
               <option selected="true" disabled="disabled">Jenis Kelamin</option>                 
               <option value="laki-laki">laki-laki</option>
               <option value="prempuan">prempuan</option>
          </select><br><br>
          Tempat Lahir :<br>
          <input type="text" name="Tempat_Lahir" value="<?php echo e($data_penduduks[0]->Tempat_Lahir); ?>"><br><br>
          Tanggal Lahir :<br>
           <input type="date" id="formattanggal" name="Tanggal_Lahir" value="<?php echo e($data_penduduks[0]->Tanggal_Lahir); ?>"><br><br>
          Agama :<br>
          <select name="Agama">
               <option value="asli">Islam</option>
               <option value="asli">Kristen</option>
               <option value="asli">Katolik</option>
               <option value="asli">Hindu</option>
               <option value="asli">Budha</option>
          </select><br><br>
          Pendidikan :<br>
          <input type="text" name="Pendidikan" value="<?php echo e($data_penduduks[0]->Pendidikan); ?>"><br><br>
          Jenis Pekerjaan :<br>
          <input type="text" name="Jenis_Pekerjaan" value="<?php echo e($data_penduduks[0]->Jenis_Pekerjaan); ?>"><br><br>
          Status Perkawinan :<br>
          <select name="Status_Perkawinan">
               <option value="asli">Kawin</option>
               <option value="asli">Belum Kawin</option>
          </select><br><br>
          Status Hubungan Dalam Keluarga :<br>
          <select name="Status_Hubungan_Dalam_Keluarga">
               <option value="asli">Kepala Keluarga</option>
               <option value="asli">Istri</option>
               <option value="asli">Anak</option>
          </select><br><br>
          Kewarganegaraan :<br>
          <select name="Kewarganegaraan">
               <option value="asli">WNI</option>
               <option value="asli">WNA</option>
          </select><br><br>
          Nama Ayah :<br>
          <input type="text" name="Nama_Ayah" value="<?php echo e($data_penduduks[0]->Nama_Ayah); ?>"><br><br>
          Nama Ibu :<br>
          <input type="text" name="Nama_Ibu" value="<?php echo e($data_penduduks[0]->Nama_Ibu); ?>"><br><br>
          Golongan darah :<br>
          <select name="Golongan_Darah">
               <option value="asli">A</option>
               <option value="asli">B</option>
               <option value="asli">AB</option>
               <option value="asli">O</option>
          </select><br><br>
          Akta Lahir :<br>
          <input type="text" name="Akta_Lahir" value="<?php echo e($data_penduduks[0]->Akta_Lahir); ?>"><br><br>
          Nomor Dokumen Paspor :<br>
          <input type="text" name="No_Paspor" value="<?php echo e($data_penduduks[0]->No_Paspor); ?>"><br><br>
          Tanggal akhir Paspor :<br>
          <input type="date" name="Tanggal_akhir_Paspor" value="<?php echo e($data_penduduks[0]->Tanggal_akhir_Paspor); ?>"><br><br>
          Nomor Dokumen KITAS :<br>
          <input type="text" name="No_KITAS" value="<?php echo e($data_penduduks[0]->No_KITAS); ?>"><br><br>
          NIK Ayah :<br>
          <input type="text" name="NIK_Ayah" value="<?php echo e($data_penduduks[0]->NIK_Ayah); ?>"><br><br>
          NIK Ibu :<br>
          <input type="text" name="NIK_Ibu" value="<?php echo e($data_penduduks[0]->NIK_Ibu); ?>"><br><br>
          No Akta Perkawinan :<br>
          <input type="text" name="No_Akta_Perkawinan" value="<?php echo e($data_penduduks[0]->No_Akta_Perkawinan); ?>"><br><br>
          Tanggal Perkawinan :<br>
          <input type="date" name="Tanggal_Perkawinan" value="<?php echo e($data_penduduks[0]->Tanggal_Perkawinan); ?>"><br><br>
          No Akta Perceraian :<br>
          <input type="text" name="No_Akta_Perceraian" value="<?php echo e($data_penduduks[0]->No_Akta_Perceraian); ?>"><br><br>
          Tanggal Perceraian :<br>
          <input type="date" name="Tanggal_Perceraian" value="<?php echo e($data_penduduks[0]->Tanggal_Perceraian); ?>"><br><br>
          Cacat :<br>
          <input type="text" name="Cacat" value="<?php echo e($data_penduduks[0]->Cacat); ?>"><br><br>
          Cara KB :<br>
          <input type="text" name="Cara_KB" value="<?php echo e($data_penduduks[0]->Cara_KB); ?>"><br><br>
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
          <input type="submit" value="Submit">
        </form>
        <?php if($errors->any()): ?>
        <h3 class="text-center text-danger"><?php echo e(implode('', $errors->all(':message'))); ?></h3>
        <?php endif; ?>

<?php $__env->stopSection(); ?>



    
        
  
<?php echo $__env->make('layouts.layoutform', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>