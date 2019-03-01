<?php $__env->startSection('content'); ?>



<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form action=<?php echo e(url('editberita/' .  $beritas->id )); ?> method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          <?php echo e(csrf_field()); ?>

          Judul Berita:<br>
          <input type="text" name="judul_berita" value="<?php echo e($beritas->judulberita); ?>"><br><br>
          Isi Berita:<br>
          <textarea  rows="30" cols="200" name="isi_berita"><?php echo e($beritas->deskripsi); ?></textarea><br><br>
          URL video:<br>
          <input type="text" name="urlvideo" value="https://www.youtube.com/watch?v=<?php echo e($beritas->urlvideo); ?>"><br><br>
          Gambar : <br><br>
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