<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/index.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>


    <div class="header">
        <div ><button onclick="location.href='/'" class=" a_b">Главная</button></div>
        

        
        <?php if(Route::has('login')): ?>
           
                <?php if(auth()->guard()->check()): ?>
                <div ><a class="a_b" href="<?php echo e(url('/merch')); ?>">Мерч</a></div>
                <div ><a class="a_b" href="<?php echo e(url('/albom')); ?>">Альбомы</a></div>
                    <div><a class="a_b" href="<?php echo e(url('/home')); ?>">Личный кабинет</a></div>
                <?php else: ?>
                    <a class="a_b" href="<?php echo e(route('login')); ?>">Вход</a>

                    <?php if(Route::has('register')): ?>
                        <a class="a_b" href="<?php echo e(route('register')); ?>">Регистрация</a>
                    <?php endif; ?>
                <?php endif; ?>
            
        <?php endif; ?>
    
    </div>
    <div class="header2">
        
        <div ><a href="<?php echo e(route('admin.index')); ?>" class="a_b">Главная</a></div>
        <div ><a href="<?php echo e(route('admin.user_managment.user.index')); ?>" class="a_b">Список пользователей</a></div>
        <div ><a href="<?php echo e(route('admin.user_managment.user.create')); ?>" class="a_b">Создать пользователя</a></div>
    
    </div>
    


    <div id="app">
       
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    
    <div class="footer">
            <div >
                Гапонова Анастасия Дмитриевна<br><br>
                Колледж экономики и информатики<br><br>
            </div>
            <div >
                <a class="a_b" href="https://www.youtube.com/channel/UC3IZKseVpdzPSBaWxBxundA">HYBE LABELS</a>
                <a class="a_b" href="https://www.youtube.com/@BTS">BANGTANTV</a>
            </div>

    </div>



    
</body>
</html>
<?php /**PATH C:\OSPanel\domains\v1\resources\views/admin/layouts/app_admin.blade.php ENDPATH**/ ?>