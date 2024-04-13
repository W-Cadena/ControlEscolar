<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'escuela')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
 
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/..">Gestor Escolar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('control-materia.index')); ?>">Control Materias</a>
                                </li>
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(Auth::user()->role->name == 'alumno'): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('calificaciones.index')); ?>">Calificaciones</a>
                                </li>
                            <?php elseif(Auth::user()->role->name == 'maestro'): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('materias.index')); ?>">Materias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('calificaciones.index')); ?>">Calificaciones</a>
                                </li>
                            <?php elseif(Auth::user()->role->name == 'secretario'): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('materias.index')); ?>">Materias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('maestros.index')); ?>">Maestros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('alumnos.index')); ?>">Alumnos</a>
                                </li>
                            <?php elseif(Auth::user()->role->name == 'medico'): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('clinicas.index')); ?>">Clinica</a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid h-100 mt-3">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ProyectoEscolar\resources\views/layouts/app.blade.php ENDPATH**/ ?>