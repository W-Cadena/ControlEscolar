

<?php $__env->startSection('template_title'); ?>
    Maestro
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<?php if(Session::has('mensaje')): ?>
<?php echo e(Session::get('mensaje')); ?>

<?php endif; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Gestion Clinica')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('maestros.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Ingresar nuevo registro')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="t_datos" class="table table-striped table-hover">
                            <thead class="thead">
        <tr>
            <th>#</th>
            <th>Fecha Visita</th>
            <th>Motivo Visita</th>
            <th>Observaciones</th>
            <th>Receta Medica</th>
            <th>Acciones</th>
        </tr>
    </thead>
                                <tbody>
        <?php $__currentLoopData = $clinicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clinica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        
        <tr>
            <td><?php echo e($clinica->id); ?></td>
            <td><?php echo e($clinica->fechaVista); ?></td>
            <td><?php echo e($clinica->motivoVista); ?></td>
            <td><?php echo e($clinica->observaciones); ?></td>
            <td>
                <img class=" img-thumbnail img-fluid" src="<?php echo e(asset('storage').'/'.$clinica->recetaMedica); ?>" width="100" alt="">  
               
            </td>
            <td>

                <a href="<?php echo e(url('/clinicas/'.$clinica->id.'/edit')); ?>" class="btn btn-warning">
                    Editar
                </a>
                 | 
                <form action="<?php echo e(url('/clinicas/'. $clinica->id)); ?>" class="d-inline " method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>


                <input type="submit"  class="btn btn-danger"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $clinicas->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoEscolar\resources\views/clinicas/index.blade.php ENDPATH**/ ?>