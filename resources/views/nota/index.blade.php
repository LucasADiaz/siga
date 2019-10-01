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
              <form method="POST" action="{{route('nota.index')}}" >  
                  @csrf
                <div>
                  <select class="browser-default custom-select" id="materias" name="materias" >
                        <option selected>Materias</option>
                          @foreach ($profesor->materias as $materia)
                            <option value='{{$materia->id}}'>{{$materia->nombre}} </option>
                          @endforeach
                      
                  </select>

                </div>
                <br>
                <div>
                  <select class="browser-default custom-select" id="cursos" name="cursos" >
               
                    
                  </select>

                </div>
                <br>
                <div>
                  <button type="submit">
                      Cargar
                  </button>
                </div>
              </form>     
          </div>   

      </div>

       {{-- Columna grande de la derecha --}}
       <div class="col-sm card text-center" aling="center">
          <title> </title><strong>Tabla de Notas por Curso</strong></title>
          @yield('show')
     
      </div>
      
      
    </div>
 </div> 



<script>

$(function(){
  $('#materias').on('change',function(){
    var materia_id=$(this).val();
    if($.trim(materia_id)!=''){
      $.get('/nota/cargar',{materia_id:materia_id},function(cursos){

        $('#cursos').empty();
        $('#cursos').append("<option value=''>Seleccione un Curso </option>");
        $.each(cursos,function(index,value){
          $('#cursos').append("<option value='"+index+"'>" + value +" </option>");
        }); 
      });
    }
  });
});


</script>

    
@endsection
{{-- 
@section('scripts')


    
@endsection --}}





            



                
                  



                 
