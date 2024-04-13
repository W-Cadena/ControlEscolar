<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre', $alumno->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Apellido_p')); ?>

            <?php echo e(Form::text('Apellido_p', $alumno->Apellido_p, ['class' => 'form-control' . ($errors->has('Apellido_p') ? ' is-invalid' : ''), 'placeholder' => 'Apellido P'])); ?>

            <?php echo $errors->first('Apellido_p', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Apellido_m')); ?>

            <?php echo e(Form::text('Apellido_m', $alumno->Apellido_m, ['class' => 'form-control' . ($errors->has('Apellido_m') ? ' is-invalid' : ''), 'placeholder' => 'Apellido M'])); ?>

            <?php echo $errors->first('Apellido_m', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('codigo_alumno')); ?>

            <?php echo e(Form::text('codigo_alumno', $alumno->codigo_alumno, ['class' => 'form-control' . ($errors->has('codigo_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Alumno'])); ?>

            <?php echo $errors->first('codigo_alumno', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ProyectoEscolar\resources\views/alumno/form.blade.php ENDPATH**/ ?>