<?php $__env->startSection('content'); ?>
<form action=<?php echo e(url('editjmlpend/' .  $jmlpends->id )); ?> method="post" enctype="multipart/form-data" style="padding-top: 75px;">
          <?php echo e(csrf_field()); ?>

          Wilayah :<br>
          <input type="text" name="wilayah" value="<?php echo e($jmlpends->wilayah); ?>"><br><br>
          Jumlah :<br>
          <input type="text" name="jumlah" value="<?php echo e($jmlpends->jumlah); ?>"><br><br>
          <input type="submit" value="Submit">
        </form>

  <?php echo e(session()->get('message')); ?>


<?php $__env->stopSection(); ?>



    
        
  
<?php echo $__env->make('layouts.layoutform', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>