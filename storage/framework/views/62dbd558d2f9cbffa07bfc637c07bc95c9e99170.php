<?php $__env->startSection('content'); ?>
<div class="div2_lk">
    <div class="head2">
                Вы в личном кабинете
    </div>
    

<div class="head2">       

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="a_b" href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <?php echo e(__('Выйти')); ?>

        </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    </div>
  
    </div>    
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">

                <div class="card-body">
                    <!--ФАСАД АУС ПРОВЕРЯЕТ РОЛЬ ПОЛЬЗОВАТЕЛЯ-->
                    <?php if( Auth::user()->is_admin == 1 ): ?>
                    <div class="header2">
                        <div ><a class="a_b" href="<?php echo e(route('admin.index')); ?>">Перейти в админ панель</a></div>
                    </div>
                    <?php else: ?> 
                    <p>Вы зашли под учеткой </p><?php echo e(Auth::user()->name); ?><br><?php echo e(Auth::user()->email); ?>

                    <?php endif; ?>
                     
                </div>
                
        </div>
    </div>
</div>
<div class="none"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\v1\resources\views/home.blade.php ENDPATH**/ ?>