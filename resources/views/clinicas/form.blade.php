    <h1> {{$modo}} Receta</h1>


    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            @foreach($errors -> all() as $error)
            <li>{{$error}}</li>
            
        @endforeach

        </div>
    @endif

    <div class="form-group">
    <label for="fechaVista"> Fecha Visita</label>
    <input type="text"  class="form-control" name="fechaVista"  value="{{ isset($clinica->fechaVista)? $clinica->fechaVista:old('fechaVista')}}" id="fechaVista">

    </div>

    <div class="form-group">
    <label for="motivoVista"> Motivo Visita</label>
    <input type="text" class="form-control" name="motivoVista"  value="{{isset($clinica->motivoVista)?$clinica->motivoVista:old('motivoVista')}}" id="motivoVista" >

    </div>

    <div class="form-group">
    <label for="observaciones">  Obvservaciones</label>
    <input type="text" class="form-control" name="observaciones" value="{{isset($clinica->observaciones)? $clinica->observaciones:old('observaciones')}}" id="observaciones">
    </div>

    <div class="form-group">
    <label for="recetaMedica"> Receta Medica</label>
    @if(isset($clinica->recetaMedica))
    <img class=" img-thumbnail img-fluid" src="{{ asset('storage').'/'.$clinica->recetaMedica}}" width="100" alt="">
    @endif
    <input type="file" class="form-control" name="recetaMedica" value="" id="recetaMedica" >
    </div>

    
    <input class="btn btn-success" type="submit" value ="{{$modo}} Datos">

    <a  class="btn btn-primary" href="{{url('clinicas/')}}">Regresar</a>
    <br>