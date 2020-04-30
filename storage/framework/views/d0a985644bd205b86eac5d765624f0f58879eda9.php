<?php $__env->startSection('title','Ubah data'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Ubah Data Penduduk</h1>
            
    <form method="post" action="/views/<?php echo e($views->id); ?>">
    <?php echo method_field('patch'); ?>
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" value="<?php echo e($views->nik); ?>">
        </div>
        <div class="form-group">
            <label for="nama">Mama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama" value="<?php echo e($views->nama); ?>">
        </div>
        <div class="form-group">
            <label for="rt">Rt</label>
            <input type="text" class="form-control" id="rt" placeholder="Masukan rt" name="rt" value="<?php echo e($views->rt); ?>">
        </div>
        <div class="form-group">
            <label for="rw">Rw</label>
            <input type="text" class="form-control" id="rw" placeholder="Masukan rw" name="rw" value="<?php echo e($views->rw); ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat" value="<?php echo e($views->alamat); ?>">
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan kecamatan" name="kecamatan" value="<?php echo e($views->kecamatan); ?>">
        </div>
        <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan kelurahan" name="kelurahan" value="<?php echo e($views->kelurahan); ?>">
        </div>
        <div class="form-group">
            <label for="handphone">Handphone</label>
            <input type="text" class="form-control" id="handphone" placeholder="Masukan handphone" name="handphone" value="<?php echo e($views->handphone); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>