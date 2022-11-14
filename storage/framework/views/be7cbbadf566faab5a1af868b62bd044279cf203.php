<?php $__env->startSection('content'); ?>
<table>
    <thead>
        <th>id</th>
            <th>fakultas</th>
                <th>prodi</th>
                    <th>kelas</th>
                    <th>isi</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($d->fakultas); ?></td>
        <td><?php echo e($d->prodi); ?></td>
        <td><?php echo e($d->kelas); ?></td> 
        <td><?php echo e($d->isi); ?></td>
        <td>
            <a href="<?php echo e(route('kelas.edit', $d->id)); ?>" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="<?php echo e(route('kelas.delete', ['id' => 1])); ?>">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <button class = "btn btn-danger">DELETE</button>

            </form>
    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\web_lanjut\resources\views/kelas/index.blade.php ENDPATH**/ ?>