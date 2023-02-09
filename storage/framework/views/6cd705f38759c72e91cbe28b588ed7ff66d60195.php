<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials._hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="grid">
    <img src="images/img1.png" alt="Image 1" />
    <img src="images/img2.png" alt="Image 2" />
    <img src="images/img3.png" alt="Image 2" />
</div>


<!-- <script>
    var images = document.querySelectorAll("#image-container img");
    var currentImageIndex = 0;
    setInterval(function() {
        images[currentImageIndex].style.display = "none";
        currentImageIndex = (currentImageIndex + 1) % images.length;
        images[currentImageIndex].style.display = "block";
    }, 4000);
</script> -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/imagely_laravel/imagely/resources/views/welcome.blade.php ENDPATH**/ ?>