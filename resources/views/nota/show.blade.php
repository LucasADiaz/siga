{{-- IMPORTANTE : en esta vista se muestra en tiempo real, la lista de alumnos de cada curso --}}
@extends('nota.index')

@section('show')

  
{{-- con la creacion de los periodos, estos elementos deberan repetirse tantas veces como periodos existan --}}
{{-- cargamos  la lista por medio de nota.trimestre --}}
  @include('nota.trimestre')


  @foreach ($categorias as $cat)
      {{-- cargamos la vista que contiene un modal por cada categoria que exista y asignamos el nombre de la categoria en el id del modal --}}
       @include('nota.modal.modal')
  @endforeach
  {{-- cargamos la vista que controla el modal de las notas finales --}}
  @include('nota.modalNotaFinal.modal')


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



            {{-- MODAL --}}
{{-- 
             --}}

            {{-- Boton para Activar el Modal, tiene que ir dentro de la fila --}}
            
                    {{-- <button type="button" class="btn btn-dark"><a href="">Gestionar Alumno</a></button> --}}
                    
                  {{--  --<td>  
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#primerTrimestre">
                            Abrir modal
                        </button>
                    
                    
            </td>--}}