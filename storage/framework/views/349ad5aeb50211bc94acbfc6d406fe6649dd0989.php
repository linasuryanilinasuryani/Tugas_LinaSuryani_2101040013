<?php $__env->startSection('content'); ?>
<table>
    <thead>
        <th>id</th>
            <th>nama_mk</th>
                <th>dosen</th>
                    <th>jumlah_soal</th>
                    <th>keterangan</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($d->nama_mk); ?></td>
        <td><?php echo e($d->dosen); ?></td>
        <td><?php echo e($d->jumlah_soal); ?></td>
        <td><?php echo e($d->keterangan); ?></td>
        <td>
            <a href="<?php echo e(route('soal.edit', $d->id)); ?>" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="<?php echo e(route('soal.delete', ['id' => 1])); ?>">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <button class = "btn btn-danger">DELETE</button>

            </form>
    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\web_lanjut\resources\views/soal.blade.php ENDPATH**/ ?>