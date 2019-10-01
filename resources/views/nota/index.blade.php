@extends('layouts.app')

@section('content')


  @csrf
  <div class="container  text-center">
    <h1><strong> Modulo Notas </strong></h1>  
  </div>
  {{-- Contenedor de todo  --}}
  <div class="container" > 
    {{-- fila --}}
    <div class="row ">
      {{-- Columna que tendra la pequeña navegacion de la izquierda--}}
      <div class="col-3 card" >
          {{-- seccion dentro de la columna para mostrar las materias --}}
          <div class="form-group">
            <br>
              <label for="formGroupExampleInput"><strong>Hola Profesor</strong>   {{$profesor->autoridad->persona->nombre}}</label>
                      
              <label for="formGroupExampleInput">Por favor, seleccione una <strong>Materia</strong></label>
                          
              <select class="form-control" id="materia" onchange="cursos();" style="width:100%">
                    <option>Materia</option>
                      @foreach ($profesor->materias as $materia)
                      <option value='{{$materia->id}}' {{isset($id_materia) ? ($id_materia == $materia->id ? 'selected' : '') : '' }}>{{$materia->nombre}} </option>     
                      @endforeach
                      {{-- todo el isset detnro del tag option, realiza una selecion dinamica en el caso de haber seleccionado una option previamente, para no perder la informacion anterior
                        en los select --}}
                  </select>
              </div>  
              
              
            <br>
              

           
              {{-- seccion dentro de la columna para mostrar los cursos --}}
              <div class="form" >
                  <label for="formGroupExampleInput">Por favor, seleccione un <strong>Curso</strong></label>
                  <select class="form-control" id="curso" onchange="alumnos();" oninput="alumnos();">
                  </select>
                    
                </div> 
                <br> 
              {{-- link se usa en jquerry  --}}
                <div class="form-group text-center" id="link"> 

              </div>
      </div>
      
       {{-- Columna grande de la derecha --}}
       <div class="col-sm card text-center" aling="center">
          <h4>Tabla de Notas por Curso</h4>
          @yield('show')
     
      </div>
      
      
    </div>
 </div> 
@endsection

@section('scripts')
<script>

  /* $('#materia').select2({
    placeholder: "Materia..."
  });
  $('#curso').select2({
    placeholder: "Materia..."
  }); */


/*en el caso que se manden los id... va a tratar de llamar la funcion, el isset pregunta si fue seteado en primera isntancia antes de activarlo*/
  {{isset($id_materia, $id_curso) ?(($id_materia && $id_curso) ? 'cursos('.$id_curso.')' : '') : ''}}
  
  function cursos(id_curso){
    if($('#materia').val() != 'Materia'){
      let valor = $('#materia').val()
      $.ajax({
          type: "get",
          url: "/obtener_curso/"+$('#materia').val(),
          success: function( respuesta ){
            if(respuesta.length > 0){
              $('#curso').empty();
              $('#link').empty();
              $.each(respuesta, function (key, value) {
                  $("#curso").append('<option value="'+ value.id +'">'+ value.anio + value.seccion+'</option>');
              });
              if(id_curso){
                $('#curso').val(id_curso);
              }
              $('#curso').trigger('change')
            }
          },
          error: function(){
            console.log("hay error");
          }
      });
    }
  }

// actualiza dinamicamente los alumnos mendiante el uso del boton 
  function alumnos(){
    if($('#curso').val() != '' && $('#materia').val() != ''){
      let curso = $('#curso').val()
      let materia = $('#materia').val()
      $('#link').empty();
      $("#link").append('<button type="button" class="btn-ls btn-link card text-center"><a href="/nota/'+materia+'/'+curso+'">Notas</a></button>');
    }
  }
  



</script>

    
@endsection





            



                
                  



                 
