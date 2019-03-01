 

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo e(url('addberita')); ?>" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          <?php echo e(csrf_field()); ?>

          Judul Berita:<br>
          <input type="text" name="judul_berita" placeholder="Judul Berita"><br><br>
          Isi Berita:<br>
          <textarea name="isi_berita" placeholder="isi berita"></textarea><br><br>
           URL video:<br>
          <input type="text" name="urlvideo" placeholder="URL Video"><br><br>
          Upload gambar : <br><br>
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