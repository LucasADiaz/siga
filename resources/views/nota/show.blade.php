{{-- @extends('layouts.app') --}}
@extends('nota.index')

@section('show')
{{-- tablaaaaaaaaaaaaaaaa --}}
<table class="table table-hover">

    {{-- cabecerad de la tabla --}}
        <thead>
          <tr>
            <th scope="col-2">Alumno</th>
            <th scope="col-2">1er Trimestre</th>
            <th scope="col-2">2do Trimestre</th>
            <th scope="col-2">3er Trimestre</th>
            <th scope="col-2">Promedio</th>
            <th scope="col-2">Gestion</th>

          </tr>
        </thead>


    <tbody>
        {{-- traemos las notas del alumno, por periodo y controlamos existencia --}}
        @foreach ($curso->alumnos as $alumno)
        <tr>

           {{-- imprimimos el nombre del alumno --}}
            <th scope="row"> {{$alumno->persona->nombre}} </th>



            {{-- traemos las notas buscando coincidencias con el primer periodo y que la nota sea de la materia --}}
            @if ((empty($alumno->notas->where('periodo_id','1')->where('materia_id','67')->first())) == true)
            <td>-</td>   
            @else 
            <td>{{$alumno->notas->where('periodo_id','1')->where('materia_id','67')->first()->nota}}</td>
            @endif
            


            {{-- recorremos las notas buscando coincidencias con el segundo periodo y que la nota sea de la materia --}}
             @if ((empty($alumno->notas->where('periodo_id','2')->where('materia_id','67')->first())) == true)
             <td>-</td>   
             @else 
             <td>{{$alumno->notas->where('periodo_id','2')->where('materia_id','67')->first()->nota}}</td>
             @endif



            {{-- recorremos las notas buscando coincidencias con el tercer periodo y que la nota sea de la materia --}}
            @if ((empty($alumno->notas->where('periodo_id','3')->where('materia_id','67')->first())) == true)
            <td>-</td>   
            @else 
            <td>{{$alumno->notas->where('periodo_id','3')->where('materia_id','67')->first()->nota}}</td>
            @endif
            


            {{-- crear funcion promedio --}}
                <td>pro</td>
 
            {{-- Botom modificar para cargar GestionNotaController --}}
            <td>
                {{-- <button type="button" class="btn btn-dark"><a href="">Gestionar Alumno</a></button> --}}
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#miAlumno">
                        Abrir modal
                    </button>
                
                
            </td>
        </tr>
        <div class="modal fade" id="miAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>
                        </div>
                        <div class="modal-body">
                            Texto del modal
                        </div>
                    </div>
                </div>
        </div> 
        @endforeach
      
    </tbody>
  </table>
 
@endsection


{{-- POSIBILIDAD DE HACERLO DIFERENTE!!  --}}
          

            {{-- @forelse ($alumno->notas->where('periodo_id','1') as $nota)
                <td>{{$nota->nota}}</td>
            @empty
                 <td>-</td>
            @endforelse --}}




            {{-- @forelse ($alumno->notas->where('periodo_id','2') as $nota)
                <td>{{$nota->nota}}</td>
            @empty
                 <td>-</td>
            @endforelse
             --}}


                {{-- @forelse ($alumno->notas->where('periodo_id','3') as $nota)
                <td>{{$nota->nota}}</td>
            @empty
                 <td>-</td>
            @endforelse --}}
