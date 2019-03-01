 

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <div class="row text-left">
    <div class="col-md-12">
     <form action="<?php echo e(url('settingkopsurat')); ?>" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          <?php echo e(csrf_field()); ?>

          Nama Kabupaten :<br>
          <input type="text" name="Nama_Kabupaten" placeholder=""><br><br>
          Nama Kecamatan :<br>
          <input type="text" name="Nama_Kecamatan" placeholder=""><br><br>
          Nama Desa :<br>
          <input type="text" name="Nama_Desa" placeholder=""><br><br>
          Alamat Desa :<br>
          <input type="text" name="Alamat_Desa" placeholder=""><br><br>
         
          
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