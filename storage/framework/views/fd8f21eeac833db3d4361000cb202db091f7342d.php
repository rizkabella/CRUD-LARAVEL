<?php $__env->startSection('title','Data Penduduk'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-15">
            <h1 class="mt-3">Data Penduduk</h1>
            
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            
            <table class="table table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Rt</th>
                    <th scope="col">Rt</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kelurahan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>    
                <tbody>
                <?php $__currentLoopData = $views; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $views): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><?php echo e($views->nik); ?></td>
                    <td><?php echo e($views->nama); ?></td>
                    <td><?php echo e($views->alamat); ?></td>
                    <td><?php echo e($views->rt); ?></td>
                    <td><?php echo e($views->rw); ?></td>
                    <td><?php echo e($views->kecamatan); ?></td>
                    <td><?php echo e($views->kelurahan); ?></td>
                    <td>
                    <a href="/views/<?php echo e($views->id); ?>" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            
        

            <a href="/views/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>