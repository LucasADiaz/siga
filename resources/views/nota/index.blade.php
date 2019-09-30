@extends('layouts.app')

@section('content')



  @csrf
  <div class="container ">
    Modulo Notas
  </div>
  {{-- Contenedor de todo  --}}
  <div class="container" > 
    {{-- fila --}}
    <div class="row ">
      {{-- Columna que tendra la pequeña navegacion de la izquierda--}}
      <div class="col-3 card">
          {{-- seccion dentro de la columna para mostrar las materias --}}
          <div class="">
              <label for="formGroupExampleInput"><strong>Hola Profesor</strong>   {{$profesor->autoridad->persona->nombre}}</label>
                      
              <label for="formGroupExampleInput">Por favor, seleccione una <strong>Materia</strong></label>
                          
              <select class="browser-default custom-select" >
                    <option selected>Materias</option>
                      @foreach ($profesor->materias as $materia)
                      <option value='{{$materia->id}}'>{{$materia->nombre}} </option>      
                      @endforeach
                      
                  </select>
              </div>   
              {{-- seccion dentro de la columna para mostrar los cursos --}}
              <div class="form" >
                  <table class="table table-sm table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Cursos</th>
                    </tr>
                  </thead>
                  
                      @foreach ($profesor->materias->first()->cursos as $curso)
                      <tr> 
                      <th scope="row" ><a href="{{route('nota.show', $curso)}}"> {{$curso->id}} {{$curso->anio}} {{$curso->seccion}} </a></th>
                      </tr>
                    @endforeach   
                </table>
              </div>
      </div>
       {{-- Columna grande de la derecha --}}
       <div class="col-sm card text-center" aling="center">
          <title> </title><strong>Tabla de Notas por Curso</strong></title>
          @yield('show')
     
      </div>
      
      
    </div>
 </div> 
    
@endsection









            



                
                  



                 
