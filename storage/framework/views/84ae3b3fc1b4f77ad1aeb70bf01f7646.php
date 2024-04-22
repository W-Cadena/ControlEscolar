<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Control Escolar')); ?></title>
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Laravel 9 User Roles and Permissions - Mywebtuts.com
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                            <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
                        <?php else: ?>
                        <?php if($user->hasRole('Admin')): ?>
                            <li><a class="nav-link" href="<?php echo e(route('users.index')); ?>">Manejar Usuarios</a></li>
                            <li><a class="nav-link" href="<?php echo e(route('roles.index')); ?>">Manejar Roles</a></li>
                        <?php elseif($user->hasRole('maestro')): ?>
                        <li><a class="nav-link" href="<?php echo e(route('alumnos.index')); ?>">Alumnos</a></li>
                        <li><a class="nav-link" href="<?php echo e(route('calificaciones.index')); ?>">Calificaciones</a></li>
                        <li><a class="nav-link" href="<?php echo e(route('materias.index')); ?>">Materia</a></li>
                        <?php elseif($user->hasRole('alumno')): ?>
                        <li><a class="nav-link" href="<?php echo e(route('materias.index')); ?>">Materia</a></li>
                        <li><a class="nav-link" href="<?php echo e(route('calificaciones.index')); ?>">Calificacion</a></li>
                        <?php elseif($user->hasRole('secretario')): ?>
                        <li><a class="nav-link" href="<?php echo e(route('control-materias.index')); ?>">Control Materia</a></li>
                        <li><a class="nav-link" href="<?php echo e(route('maestros.index')); ?>">Maestro</a></li>
                        <?php elseif($user->hasRole('clinica')): ?>
                        <li><a class="nav-link" href="<?php echo e(route('clinicas.index')); ?>">Control Clinica</a></li>
                        <?php endif; ?>


                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ProyectoEscolar\resources\views/layouts/app.blade.php ENDPATH**/ ?>