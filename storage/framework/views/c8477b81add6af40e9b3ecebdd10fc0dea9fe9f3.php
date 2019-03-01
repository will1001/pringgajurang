<?php $__env->startSection('content'); ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form action=<?php echo e(url('uploadapbd/' .  $id )); ?> method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          <?php echo e(csrf_field()); ?>

          Tahun :<br>
          <input type="text" name="tahunapbd" value="2018"><br><br>
          Upload file : <br><br>
          <input type="file" name="url_gambar[]" multiple>
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