<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
    {{ Form::label('materia_id', 'Materia') }}
    {{ Form::select('materia_id', $materias->pluck('nombre', 'id'), $controlMateria->materia_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una materia']) }}
    {!! $errors->first('materia_id', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    {{ Form::label('alumno_id', 'Alumno') }}
    {{ Form::select('alumno_id', $alumnos->pluck('nombre', 'id'), $controlMateria->alumno_id, ['class' => 'form-control' . ($errors->has('alumno_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un alumno']) }}
    {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
</div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>