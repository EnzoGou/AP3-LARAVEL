

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $Adherent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>Nom: <?php echo e($a->nom); ?>|Prenom: <?php echo e($a->prenom); ?>|Adresse: <?php echo e($a->adresse); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\modelisationLaravel\resources\views/listeAdherent.blade.php ENDPATH**/ ?>