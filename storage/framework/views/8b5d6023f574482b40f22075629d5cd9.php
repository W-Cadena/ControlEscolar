<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre', $materia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('maestro_id')); ?>

            <?php echo e(Form::text('maestro_id', $materia->maestro_id, ['class' => 'form-control' . ($errors->has('maestro_id') ? ' is-invalid' : ''), 'placeholder' => 'Maestro Id'])); ?>

            <?php echo $errors->first('maestro_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ProyectoEscolar\resources\views/materia/form.blade.php ENDPATH**/ ?>