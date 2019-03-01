<?php $__env->startSection('content'); ?>


    <section id="transparansi" class="section-padding">
      <div class="container">
      
      <div class="row" style="padding-top: 35px;">
        <div class="col-md-12">

            <?php $__currentLoopData = $apbds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apbd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <img src="<?php echo e($apbd->urlgambar); ?>" alt="">
            <br>
            

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
    
           
        </div>

      </div>
    </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouttransparansi', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>