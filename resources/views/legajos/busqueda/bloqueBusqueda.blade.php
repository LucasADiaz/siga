<br>
<br>
<div class="col-md-12 form-group ">
    <div class="input-group row-md-1">
            <form method="GET" class="navbar-form " role="search" action="{{ route($routeListado) }}">
            <div class="col-md-15 form-group item-form">
                <div class="input-group row-md-1">
                <select name="alumno[]" id="alumno"  class="form-control ">
                    <option value="0">Selecciona un alumno</option>
                    @foreach ($alumnos as $alumno)
                <option value="{{ $alumno->id }}">{{$alumno->persona->nombre }} {{$alumno->persona->apellido}}</option>
                    @endforeach
                </select>
                <button>Seleccionar Alumno</button>
               </div>
            </div>
           </form>
            <div class="col-md-3 form-group item-form">
            </div>
                    
            <form method="GET" class="navbar-form navbar-left" role="search" action="{{ route($routeDNI) }}">
                    <div class="input-group row-md-4">
                      <input type="search" id="dni" name="dni" class="form-control">
                      <button>Buscar por DNI</button>
                    </div>
                  </form> 
    </div>       
</div>