<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $alumno->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido_p') }}
            {{ Form::text('Apellido_p', $alumno->Apellido_p, ['class' => 'form-control' . ($errors->has('Apellido_p') ? ' is-invalid' : ''), 'placeholder' => 'Apellido P']) }}
            {!! $errors->first('Apellido_p', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido_m') }}
            {{ Form::text('Apellido_m', $alumno->Apellido_m, ['class' => 'form-control' . ($errors->has('Apellido_m') ? ' is-invalid' : ''), 'placeholder' => 'Apellido M']) }}
            {!! $errors->first('Apellido_m', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_alumno') }}
            {{ Form::text('codigo_alumno', $alumno->codigo_alumno, ['class' => 'form-control' . ($errors->has('codigo_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Alumno']) }}
            {!! $errors->first('codigo_alumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>