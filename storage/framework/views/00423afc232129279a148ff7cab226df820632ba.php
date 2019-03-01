 

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('addbarangdesa')); ?>" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          <?php echo e(csrf_field()); ?>

          Nama Barang :<br>
          <input type="text" name="nama_barang" placeholder="Nama Barang"><br><br>
          Harga :<br>
          <input type="text" name="harga" placeholder="Harga Barang"><br><br>
          Jumlah :<br>
          <input type="text" name="jumlah" placeholder="Jumlah"><br><br>
          Deskripsi :<br>
          <textarea name="deskripsi_barang" placeholder="Deskripsi Barang"></textarea><br><br>
          Upload gambar barang : <br><br>
          <input type="file" name="url_gambar" id="url_gambar">
          <br><br>
          <input type="submit" value="Submit">
        </form>
        <?php if($errors->any()): ?>
        <h3 class="text-center text-danger"><?php echo e(implode('', $errors->all(':message'))); ?></h3>
        <?php endif; ?>
        
<?php $__env->stopSection(); ?>


    
        
<?php echo $__env->make('layouts.layoutform', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>