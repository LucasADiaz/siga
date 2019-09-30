@extends('layouts.app')

@section('content')



  
  
  <div class="col-lg-3">
      <div class="form-group">
      <label for="formGroupExampleInput"><strong>Hola Profesor</strong>   {{$profesor->titulo}}</label>
      
      <label for="formGroupExampleInput">Por favor, seleccione una <strong>Materia</strong></label>
          
      <select class="browser-default custom-select" id="materias">
            <option selected>Materias</option>
              @foreach ($profesor->materias as $materia)
              <option value='{{$materia->id}}'>{{$materia->nombre}} </option>      
              @endforeach
              
          </select>
      </div>
  </div>  
  
  <div class="col-lg-3">
      <div class="form-group">
          <label for="formGroupExampleInput">A continuacion seleccione un Curso</label>
          <select class="browser-default custom-select" id="cursos">
              
          </select>
      </div>
  </div>     
  



     
 @endsection

@section('scripts')
    <script src="/js/admin/users/edit.js">
    </script>
@endsection

