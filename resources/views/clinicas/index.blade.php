@extends('layouts.app')

@section('template_title')
    Maestro
@endsection

@section('content')


@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Gestion Clinica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('maestros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar nuevo registro') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="t_datos" class="table table-striped table-hover">
                            <thead class="thead">
        <tr>
            <th>#</th>
            <th>Fecha Visita</th>
            <th>Motivo Visita</th>
            <th>Observaciones</th>
            <th>Receta Medica</th>
            <th>Acciones</th>
        </tr>
    </thead>
                                <tbody>
        @foreach($clinicas as $clinica)
            
        
        <tr>
            <td>{{$clinica->id}}</td>
            <td>{{$clinica->fechaVista}}</td>
            <td>{{$clinica->motivoVista}}</td>
            <td>{{$clinica->observaciones}}</td>
            <td>
                <img class=" img-thumbnail img-fluid" src="{{ asset('storage').'/'.$clinica->recetaMedica}}" width="100" alt="">  
               
            </td>
            <td>

                <a href="{{url('/clinicas/'.$clinica->id.'/edit')}}" class="btn btn-warning">
                    Editar
                </a>
                 | 
                <form action="{{url('/clinicas/'. $clinica->id)}}" class="d-inline " method="post">
                    @csrf
                    {{method_field('DELETE')}}

                <input type="submit"  class="btn btn-danger"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clinicas->links() !!}
            </div>
        </div>
    </div>
@endsection



    