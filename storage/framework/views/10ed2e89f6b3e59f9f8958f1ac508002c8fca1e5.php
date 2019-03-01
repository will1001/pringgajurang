<?php $__env->startSection('content'); ?>



<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo e(url('editbarangdesa/' .  $barangdesas->id )); ?>" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          <?php echo e(csrf_field()); ?>

          Nama Barang :<br>
          <input type="text" name="nama_barang" value="<?php echo e($barangdesas->nama); ?>"><br><br>
          Kategori :<br>
          <select name="kategori">
               <option value="Pertanian">Pertanian</option>
               <option value="Perkebunan">Perkebunan</option>
               <option value="Perikanan">Perikanan</option>
               <option value="Kerajinan">Kerajinan</option>
               <option value="Makanan Olahan">Makanan Olahan</option>
               <option value="Jasa">Jasa</option>
          </select><br><br>
          Harga :<br>
          <input type="text" name="harga" value="<?php echo e($barangdesas->harga); ?>"><br><br>
          Jumlah :<br>
          <input type="text" name="jumlah" value="<?php echo e($barangdesas->jumlah); ?>"><br><br>
          Deskripsi :<br>
          <textarea name="deskripsi_barang"><?php echo e($barangdesas->deskripsi); ?></textarea><br><br>
          Upload gambar barang : <br><br>
          <input type="file" name="url_gambar" id="url_gambar">
          <br><br>
          <input type="submit" value="Submit">
        </form>
        <?php if($errors->any()): ?>
        <h3 class="text-center text-danger"><?php echo e(implode('', $errors->all(':message'))); ?></h3>
        <?php endif; ?>
    </div>
  </div>
</div>

        
<?php $__env->stopSection(); ?>



    
        

<?php echo $__env->make('layouts.layoutform', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>