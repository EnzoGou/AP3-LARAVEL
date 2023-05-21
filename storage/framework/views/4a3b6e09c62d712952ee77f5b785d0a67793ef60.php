

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $Evenement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h1>Evenement: <?php echo e($e->description); ?></h1>
    <ul>
        <li><?php echo e($e->nbPlaces); ?></li>
        <li><?php echo e($e->horaireEv); ?></li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <a href="<?php echo e(route('evenement.show', $Evenement->idEv)); ?>"><?php echo e($e->description); ?></a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\modelisationLaravel\resources\views/Evenement/gestionEvenement.blade.php ENDPATH**/ ?>