<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('alumno_id')); ?>

            <?php echo e(Form::text('alumno_id', $calificacione->alumno_id, ['class' => 'form-control' . ($errors->has('alumno_id') ? ' is-invalid' : ''), 'placeholder' => 'Alumno Id'])); ?>

            <?php echo $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('materia_id')); ?>

            <?php echo e(Form::text('materia_id', $calificacione->materia_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Materia Id'])); ?>

            <?php echo $errors->first('materia_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('calificacion')); ?>

            <?php echo e(Form::text('calificacion', $calificacione->calificacion, ['class' => 'form-control' . ($errors->has('calificacion') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion'])); ?>

            <?php echo $errors->first('calificacion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ProyectoEscolar\resources\views/calificacione/form.blade.php ENDPATH**/ ?>