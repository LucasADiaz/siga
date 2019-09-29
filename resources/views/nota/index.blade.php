@extends('layouts.app')

@section('content')



  @csrf
  
  <div class="col-lg-3">
      <div class="form-group">
      <label for="formGroupExampleInput"><strong>Hola Profesor</strong>   {{$profesor->titulo}}</label>
      
      <label for="formGroupExampleInput">Por favor, seleccione una <strong>Materia</strong></label>
          
      <select class="browser-default custom-select">
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
          <select class="browser-default custom-select" disabled='{{}}'>
            <option selected>Cursos</option>
              {{-- @foreach ($profesor->materias->first() as $user)
              <option >{{$user->materias}} </option>      
              @endforeach --}}
              <option value="1">One</option>
          </select>
      </div>
  </div>     
  
  
@endsection