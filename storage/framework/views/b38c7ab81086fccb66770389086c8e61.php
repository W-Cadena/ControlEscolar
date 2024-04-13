<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
    <?php echo e(Form::label('materia_id', 'Materia')); ?>

    <?php echo e(Form::select('materia_id', $materias->pluck('nombre', 'id'), $controlMateria->materia_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una materia'])); ?>

    <?php echo $errors->first('materia_id', '<div class="invalid-feedback">:message</div>'); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('alumno_id', 'Alumno')); ?>

    <?php echo e(Form::select('alumno_id', $alumnos->pluck('nombre', 'id'), $controlMateria->alumno_id, ['class' => 'form-control' . ($errors->has('alumno_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un alumno'])); ?>

    <?php echo $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>'); ?>

</div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ProyectoEscolar\resources\views/control-materia/form.blade.php ENDPATH**/ ?>