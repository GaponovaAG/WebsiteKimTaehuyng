

<?php $__env->startSection('content'); ?>

<div class="intro">
<div class="textAll">
<div><p class="head">Список пользователей </p></div>

  
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Имя</th>
      <th>Роль</th>
      <th>Емейл</th>
      
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
          <td><?php echo e($user->id); ?></td>
          <td><?php echo e($user->name); ?></td>
          <?php if($user->is_admin==1): ?><td>Админ </td>
            <?php else: ?> <td>Пользователь </td>
            <?php endif; ?>
         
          <td><?php echo e($user->email); ?></td>
          
          <td>
            <form onsubmit="if(confirm('Удалить?')){return true}else{return false }" action="<?php echo e(route('admin.user_managment.user.destroy', $user)); ?>" method="post">
              <?php echo e(method_field('DELETE')); ?><!--это хелпер. Отрисовка скрытого поля который отсылает о методе-->
              <?php echo e(csrf_field()); ?><!--Хелпер генерации токена безопасности-->
              <a class="a_edit" href="<?php echo e(route('admin.user_managment.user.edit', $user)); ?>">Редактировать</a>
              <button class="a_c" type="submit">Удалить</button>
            </form>
            
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3" class="text-center">
            <ul><?php echo e($users->links()); ?></ul>
            </td><!--вот тут вот я не уверена это пагинация-->
        </tr>
    </tfoot>
  </table>
  <div class="b_start">
    <a class="a_admin" href="<?php echo e(route('admin.user_managment.user.create')); ?>" >Создать</a>
  </div>
  
</div>
</div>
<div class="none"></div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\v1\resources\views/admin/user_managment/users/index.blade.php ENDPATH**/ ?>