@extends('layouts.app')

@section('template_title')
    {{ $maestro->name ?? __('Show') . " " . __('Maestro') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Maestro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $maestro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido P:</strong>
                            {{ $maestro->Apellido_p }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido M:</strong>
                            {{ $maestro->Apellido_m }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Empleado:</strong>
                            {{ $maestro->codigo_empleado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
