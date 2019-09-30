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
            {{-- recorremos las notas buscando coincidencias con el primer periodo --}}
            @forelse ($alumno->notas->where('periodo_id','1') as $nota)
                <td>{{$nota->nota}}</td>
            @empty
                 <td>-</td>
            @endforelse
            
            
            {{-- recorremos las notas buscando coincidencias con el segundo periodo --}}
            @forelse ($alumno->notas->where('periodo_id','2') as $nota)
                <td>{{$nota->nota}}</td>
            @empty
                 <td>-</td>
            @endforelse
            
            {{-- recorremos las notas buscando coincidencias con el tercer periodo --}}
           
            @forelse ($alumno->notas->where('periodo_id','3') as $nota)
                <td>{{$nota->nota}}</td>
            @empty
                 <td>-</td>
            @endforelse
            
            {{-- crear funcion promedio --}}
                <td>pro</td>
 
            {{-- Botom modificar para cargar GestionNotaController --}}
            <td><button type="button" class="btn btn-dark"><a href="">Gestionar Alumno</a></button></td>
        </tr> 
        @endforeach
      
    </tbody>
  </table>
 
@endsection



           {{-- @if (empty($alumno->notas->where('periodo_id','1')->first()))
                <td>{{}}</td>
            @else
                 <td>-</td>
            @endif --}}