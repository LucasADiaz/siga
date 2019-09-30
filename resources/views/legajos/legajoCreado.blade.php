
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12 col-md-offset-2">
          
        <div class="card">
                <fieldset>
                        <div class="col-md-4 form-group item-form">
                            <br>
                            <h3>Legajo creado correctamente</h3>
                        </div>
                        <div class="col-md-12 form-group item-form">
                                <br>
                                <h6>El legajo de {{$alumno->nombre}} se ha creado exitosamente. Continua con la carga de documentos o redireccioná al inicio!</h6>
                            </div>
                        <div class="col-md-12 form-group item-form text-center">
                                <a href="{{route('legajos.storeDocs', $alumno->nombre)}}" class="button"><input type="button" value="Cargar documentos"></a>
        
                                <a href="{{route('inicio')}}" class="button"><input type="button" value="Inicio"></a>
        
                                </div>
            </div>
    </div>  
    </div>
</div>
         
@endsection

