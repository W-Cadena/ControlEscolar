@extends('layouts.app')

@section('template_title')
    Control Materia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Control Materia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('control-materias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Materia Id</th>
										<th>Alumno Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($controlMaterias as $controlMateria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $controlMateria->materia_id }}</td>
											<td>{{ $controlMateria->alumno_id }}</td>

                                            <td>
                                                <form action="{{ route('control-materias.destroy',$controlMateria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('control-materias.show',$controlMateria->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('control-materias.edit',$controlMateria->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $controlMaterias->links() !!}
            </div>
        </div>
    </div>
@endsection
