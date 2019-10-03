{{-- esta vista, controla el Primer periodo, es decir la primer columna de la tabla madre, (1er trimestre)
    y en su interior hay una segunda tabla con las categorias de notas que pueden ser tp, evaluaciones, conceptual, y por carpeta --}}


<table class="table table-hover table-striped">

    {{-- cabecerad de la tabla --}}
        <thead>
          <tr>
            <th scope="col-2">Alumno</th>
             @foreach ($categorias as $cat)
             <th scope="col-1">{{$cat->nombre}}  <button type="button" class="btn btn-ls btn-dark" data-toggle="modal" data-target="#{{$cat->nombre}}"><i class="fa fa-pencil"></i>e</button></th>
             @endforeach
             <th class="table-dark ">Nota Final {{$periodos['0']}}</th> 
         
          </tr>
        </thead>


    <tbody>
        {{-- traemos las notas del alumno, por periodo y controlamos existencia --}}
        @foreach ($alumnos as $alumno)
        <tr>

           {{-- imprimimos el nombre del alumno --}}
            <th scope="row"> {{$alumno->persona->nombre}} </th>


            @foreach ($categorias as $cat)
            
              {{-- traemos las notas buscando coincidencias con el primer periodo y que la nota sea de la materia --}}
            @if ((empty($alumno->notas->where('periodo_id','1')->where('materia_id',$id_materia)->where('categoria_nota_id',$cat->id)->first())) == true)
            <td>-</td>   
            @else 
            <td>{{$alumno->notas->where('periodo_id','1')->where('materia_id',$id_materia)->where('categoria_nota_id',$cat->id)->first()->nota}}</td>
            @endif
            {{-- final foreah categorias --}}
            @endforeach
              <td class="table-dark">-</td>
          

           
            


            {{-- recorremos las notas buscando coincidencias con el segundo periodo y que la nota sea de la materia --}}
             {{-- @if ((empty($alumno->notas->where('periodo_id','2')->where('materia_id','67')->first())) == true)
             <td>-</td>   
             @else 
             <td>{{$alumno->notas->where('periodo_id','2')->where('materia_id','67')->first()->nota}}</td>
             @endif --}}



            {{-- recorremos las notas buscando coincidencias con el tercer periodo y que la nota sea de la materia --}}
            {{-- @if ((empty($alumno->notas->where('periodo_id','3')->where('materia_id','67')->first())) == true)
            <td>-</td>   
            @else 
            <td>{{$alumno->notas->where('periodo_id','3')->where('materia_id','67')->first()->nota}}</td>
            @endif --}}
   
            {{-- Botom modificar para cargar GestionNotaController --}}  
        </tr> 
        {{-- final foreah alumno --}}
        @endforeach
      
    </tbody>
  </table>