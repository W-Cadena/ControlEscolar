@extends('layouts.app')

@section('template_title')
    {{ $calificacione->name ?? __('Show') . " " . __('Calificacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Calificacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calificaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Alumno Id:</strong>
                            {{ $calificacione->alumno_id }}
                        </div>
                        <div class="form-group">
                            <strong>Materia Id:</strong>
                            {{ $calificacione->materia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Calificacion:</strong>
                            {{ $calificacione->calificacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
