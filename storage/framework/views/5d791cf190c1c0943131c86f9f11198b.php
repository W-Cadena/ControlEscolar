    <h1> <?php echo e($modo); ?> Receta</h1>


    <?php if(count($errors)>0): ?>
        <div class="alert alert-danger" role="alert">
            <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    <?php endif; ?>

    <div class="form-group">
    <label for="fechaVista"> Fecha Visita</label>
    <input type="text"  class="form-control" name="fechaVista"  value="<?php echo e(isset($clinica->fechaVista)? $clinica->fechaVista:old('fechaVista')); ?>" id="fechaVista">

    </div>

    <div class="form-group">
    <label for="motivoVista"> Motivo Visita</label>
    <input type="text" class="form-control" name="motivoVista"  value="<?php echo e(isset($clinica->motivoVista)?$clinica->motivoVista:old('motivoVista')); ?>" id="motivoVista" >

    </div>

    <div class="form-group">
    <label for="observaciones">  Obvservaciones</label>
    <input type="text" class="form-control" name="observaciones" value="<?php echo e(isset($clinica->observaciones)? $clinica->observaciones:old('observaciones')); ?>" id="observaciones">
    </div>

    <div class="form-group">
    <label for="recetaMedica"> Receta Medica</label>
    <?php if(isset($clinica->recetaMedica)): ?>
    <img class=" img-thumbnail img-fluid" src="<?php echo e(asset('storage').'/'.$clinica->recetaMedica); ?>" width="100" alt="">
    <?php endif; ?>
    <input type="file" class="form-control" name="recetaMedica" value="" id="recetaMedica" >
    </div>

    
    <input class="btn btn-success" type="submit" value ="<?php echo e($modo); ?> Datos">

    <a  class="btn btn-primary" href="<?php echo e(url('clinicas/')); ?>">Regresar</a>
    <br><?php /**PATH C:\xampp\htdocs\ProyectoEscolar\resources\views/clinicas/form.blade.php ENDPATH**/ ?>