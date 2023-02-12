<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials._hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="grid">

<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="storage/<?php echo e($image->image); ?>" alt="Image <?php echo e($image->id); ?>" />
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<div class="mt-6 p-4">
    <?php echo e($images->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/imagely_laravel/imagely/resources/views/images/index.blade.php ENDPATH**/ ?>