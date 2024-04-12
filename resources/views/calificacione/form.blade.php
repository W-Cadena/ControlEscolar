<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('alumno_id') }}
            {{ Form::text('alumno_id', $calificacione->alumno_id, ['class' => 'form-control' . ($errors->has('alumno_id') ? ' is-invalid' : ''), 'placeholder' => 'Alumno Id']) }}
            {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia_id') }}
            {{ Form::text('materia_id', $calificacione->materia_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Materia Id']) }}
            {!! $errors->first('materia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calificacion') }}
            {{ Form::text('calificacion', $calificacione->calificacion, ['class' => 'form-control' . ($errors->has('calificacion') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion']) }}
            {!! $errors->first('calificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>