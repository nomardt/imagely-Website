<?php if(session()->has('message')): ?>
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-white px-48 py-3">
  <p style='color: #003366;'>
    <?php echo e(session('message')); ?>

  </p>
</div>
<?php endif; ?><?php /**PATH /home/vagrant/imagely_laravel/imagely/resources/views/components/flash-message.blade.php ENDPATH**/ ?>