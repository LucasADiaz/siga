{{-- @extends('layouts.app') --}}
@extends('nota.index')

@section('show')
{{-- tablaaaaaaaaaaaaaaaa --}}
  @include('nota.trimestre')
  @foreach ($categorias as $cat)
       @include('nota.modal.modal')
  @endforeach
 
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