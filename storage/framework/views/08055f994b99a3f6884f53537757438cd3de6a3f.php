<!--перебрать массив с ошибками если ошибки существуют-->
<?php if($errors->any()): ?>
  <div class="alert">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div> 
<?php endif; ?>
<div class="table_create_form">
<div class="table_create">

<div><label for="">Имя</label></div>
<div><input type="text" class="form-control" name="name" placeholder="Имя" value="<?php if(old('name')): ?><?php echo e(old('name')); ?><?php else: ?><?php echo e($user->name ??""); ?> <?php endif; ?> " required></div>


<div><label for="">Роль</label></div>
<div><input type="text" class="form-control" name="is_admin" placeholder="1/0" value="<?php if(old('is_admin')): ?><?php echo e(old('is_admin')); ?><?php else: ?><?php echo e($user->is_admin??""); ?> <?php endif; ?> " required></div>

<div><label for="">Емейл</label></div>
<div><input type="email" class="form-control" name="email" placeholder="Емейл" value="<?php if(old('email')): ?><?php echo e(old('email')); ?><?php else: ?><?php echo e($user->email ??""); ?> <?php endif; ?> " required></div>

<div><label for="">Пароль</label></div>
<div><input type="password" class="form-control" name="password" ></div>

<div><label for="">Подтверждение пароля</label></div>
<div><input type="password" class="form-control" name="password_confirmation" ></div>
</div>


<div class="b_start">
    <button class="a_c"  type="submit" value="Сохранить">Сохранить</button>
  </div>
  </div>
  <div class="none"></div>
<?php /**PATH C:\OSPanel\domains\v1\resources\views/admin/user_managment/users/partials/form.blade.php ENDPATH**/ ?>