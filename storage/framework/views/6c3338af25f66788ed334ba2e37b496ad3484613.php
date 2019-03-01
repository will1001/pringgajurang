<?php $__env->startSection('content'); ?>

<section id="berita-desa" class="section-padding">
      <div class="container">
      <h1 class="text-center">Berita Desa Pringgajurang</h1>
      <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="row">
        <div class="col-md-12">
            <img src="<?php echo e($berita->urlgambar); ?>" alt="" width="400px" height="250px">
            <h3><?php echo e($berita->judulberita); ?></h3>
            <p><?php echo e(substr($berita->deskripsi,0,510)); ?> . . . </p><br>
            <a class="button white " href="<?php echo e(url('detailberitadesa/' .  $berita->judulberita )); ?>">Selengkapnya>></a>
        </div>

      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



      <?php echo e($beritas->links()); ?>




    </div>
    </section>


<?php $__env->stopSection(); ?>






  

<?php echo $__env->make('layouts.layouthalamanlain', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>