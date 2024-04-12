@extends('layouts.app')

@section('template_title')
    {{ $controlMateria->name ?? __('Show') . " " . __('Control Materia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Control Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('control-materias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Materia Id:</strong>
                            {{ $controlMateria->materia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Alumno Id:</strong>
                            {{ $controlMateria->alumno_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
