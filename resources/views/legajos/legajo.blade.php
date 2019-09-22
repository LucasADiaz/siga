<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
    
                <form method="POST" action="{{ route('posts.enviar')}}">
                    {{ csrf_field() }}
                    <div class="card-header">Crear Legajo de un Alumno</div>
                    <div class="card-body">
                    <div class="input-group row-md-4">
                        <div class="form-group {{ $errors->has('nombrealu') ? 'has-error' : ''}} " >
                            <input type="text" name="nombrealu" id=""  class="form-control" placeholder="Nombres Alumno"/>
                            {!! $errors->first('nombrealu',"<span class=help-block>:message</span>")!!}
                        </div>&nbsp;&nbsp;
                        <div class="form-group {{ $errors->has('apellidoalu') ? 'has-error' : ''}} " >
                            <input type="text" name="apellidoalu" id=""  class="form-control" placeholder="Apellidos Alumno"/>
                            {!! $errors->first('apellidoalu',"<span class=help-block>:message</span>")!!}
                        </div>&nbsp;&nbsp;
                        <div class="form-group" >
                                <input type="date" name="fecha" class="form-control">
                        </div>	&nbsp;&nbsp;
                        <div class="form-group {{ $errors->has('lugarnacimiento') ? 'has-error' : ''}} " >
                                <input type="text" name="lugarnacimiento" id=""  class="form-control" placeholder="Lugar Nacimiento"/>
                                {!! $errors->first('lugarnacimiento',"<span class=help-block>:message</span>")!!}
                        </div>&nbsp;&nbsp;
    
                    </div>
                        <div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}} ">
                        <textarea name="contenido" id="" cols="15" rows="5" class="form-control" placeholder="Escribe aquí el contenido del post"></textarea>
                        {!! $errors->first('contenido',"<span class=help-block>:message</span>")!!}
                    </div>
                        <div class="form-group">
                        <button class="btn btn-primary btn-block">Crear Legajo</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    