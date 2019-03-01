<?php $__env->startSection('content'); ?>
<br><br><br><br>
 <section id="barang-desa">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo e($barangdesas->urlgambar); ?>" alt="">
            </div>
            <div class="col-md-6">                
                <h2><?php echo e($barangdesas->nama); ?></h2>
                <p><strong>Kategori : </strong><?php echo e($barangdesas->kategori); ?></p>
                <p><strong>Penjual : </strong><?php echo e($data_penduduks[0]->Nama); ?></p>
                <p><strong>No HP : </strong><?php echo e($users->No_HP); ?></p>
                <p><strong>Alamat : </strong><?php echo e($users->Alamat); ?></p>
                <p><strong>Harga : </strong>Rp.<?php echo e($barangdesas->harga); ?></p>
                <p><strong>Stok Barang</strong> : <?php echo e($barangdesas->jumlah); ?></p>
                <p><strong>Deskripsi : </strong><?php echo e($barangdesas->deskripsi); ?></p>
            </div>
            </div>
        </div>
    </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layouthalamanlain', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>