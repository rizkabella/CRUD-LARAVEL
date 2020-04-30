<?php $__env->startSection('title','Pendaftaran Penduduk'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Pendaftaran Penduduk</h1>
            
    <form method="post" action="/views">
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="rt">Rt</label>
            <input type="text" class="form-control" id="rt" placeholder="Masukan rt" name="rt">
        </div>
        <div class="form-group">
            <label for="rw">Rw</label>
            <input type="text" class="form-control" id="rw" placeholder="Masukan rw" name="rw">
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" placeholder="Masukan kecamatan" name="kecamatan">
        </div>
        <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" placeholder="Masukan kelurahan" name="kelurahan">
        </div>
        <button type="submit" class="btn btn-primary">create</button>
    </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>