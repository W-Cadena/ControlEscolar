<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Escuela</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
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
                                    <a class="nav-link" href="<?php echo e(route('mod_calificaciones.index')); ?>">Calificaciones</a>
                                </li>
                            <?php elseif(Auth::user()->role->name == 'secretario'): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('mod_materias.index')); ?>">Materias</a>
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

    <div class="container mt-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ProyectoEscolar\resources\views/layouts/home.blade.php ENDPATH**/ ?>