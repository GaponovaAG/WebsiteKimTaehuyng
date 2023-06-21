

<?php $__env->startSection('content'); ?>

<div class="intro">
<div class="textAll">

<p class="head">Создание пользователя </p>


  <form  action="<?php echo e(route('admin.user_managment.user.store')); ?>" method="post">
    <?php echo e(csrf_field()); ?>


    
    <?php echo $__env->make('admin.user_managment.users.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\v1\resources\views/admin/user_managment/users/create.blade.php ENDPATH**/ ?>