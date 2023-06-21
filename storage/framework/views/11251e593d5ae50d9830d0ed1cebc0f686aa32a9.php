

<?php $__env->startSection('content'); ?>

<div class="intro">
<div class="textAll">

<p class="head">Редактирование пользователя </p>

  <form class="form-horizontal" action="<?php echo e(route('admin.user_managment.user.update', $user)); ?>" method="post">
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>


    
    <?php echo $__env->make('admin.user_managment.users.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </form>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\v1\resources\views/admin/user_managment/users/edit.blade.php ENDPATH**/ ?>