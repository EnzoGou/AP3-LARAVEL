

<?php $__env->startSection('content'); ?>
    <h1>Liste des adhérents</h1>

    <ul>
        <?php $__currentLoopData = $Adherent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adherent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($adherent); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\modelisationLaravel\resources\views/adherents/listeAdherents.blade.php ENDPATH**/ ?>