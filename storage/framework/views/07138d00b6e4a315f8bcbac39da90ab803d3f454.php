<?php $__env->startSection('content'); ?>



<br><br><br><br>

    <section id="barang-desa">
      <div class="container">
      <h1 class="text-center">Pasar Online Desa Pringgajurang</h1>
      <div class="row">
          <div class="col-xs-6 col-6 col-sm-6 col-md-6">
              <form action="<?php echo e(url('caribarangdesa')); ?>" method="post" accept-charset="utf-8">
                  <?php echo e(csrf_field()); ?>

                  <input type="text"  id="search" name="search" placeholder="Masukan Nama Barang" ></input>
                  <input type="submit" value="Search" id="tombol_search_barang">
              </form>
          </div>
      </div>
        <div class="row">
            <?php $__currentLoopData = $barangdesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangdesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-6 col-6 col-sm-6 col-md-2" id="kotakbarang">
                <div class="card">
                  <img class="card-img-top" src="<?php echo e($barangdesa->urlgambar); ?>" alt="Card image cap">
                  <div class="card-body text-center">
                    <h5 class="card-title"><?php echo e(substr($barangdesa->nama,0,23)); ?></h5>
                    <p class="card-text"><?php echo e($barangdesa->harga); ?></p>
                    <a href="<?php echo e(url('detailbarangdesa/' .  $barangdesa->id )); ?>" class="btn btn-primary">Lihat</a>
                  </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    </section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouthalamanlain', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>