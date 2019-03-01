<?php $__env->startSection('content'); ?>
<section id="detail_berita">
      <div class="container">
      <h1 class="text-center"><?php echo e($beritas->judulberita); ?></h1>
      

      <div class="row">
        <div class="col-md-12">
            <img src="<?php echo e($beritas->urlgambar); ?>" alt="" width="400px" height="250px">
            <h3></h3>
            <p style="white-space: pre-line;white-space: pre-wrap;"><?php echo e($beritas->deskripsi); ?></p><br>
        </div>

      </div>

     



    </div>
    </section>


  <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layouthalamanlain', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>