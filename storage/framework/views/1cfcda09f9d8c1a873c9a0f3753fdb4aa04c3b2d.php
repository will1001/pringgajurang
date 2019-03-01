<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('addpengumuman')); ?>" method="post" enctype="multipart/form-data" style="padding-top: 75px;">
          <?php echo e(csrf_field()); ?>

          Judul Berita:<br>
          <input type="text" name="judul_pengumuman" value="judul_pengumuman"><br><br>
          Isi Berita:<br>
          <textarea name="isi_pengumuman" value="isi_pengumuman"></textarea><br><br>
          Gambar : <br><br>
          <input type="file" name="url_gambar" id="url_gambar">
          <br><br>
          <input type="submit" value="Submit">
        </form>
<?php echo e(session()->get('message')); ?>

<?php $__env->stopSection(); ?> 



    
        

<?php echo $__env->make('layouts.layoutform', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>