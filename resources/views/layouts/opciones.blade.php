@section('opciones')

<li class="nav-item ">
    <a class="nav-link dropdown-item" href="{{route('inicio')}}" >
        Inicio <span class="caret"></span>
    </a>

    
</li>
    
<li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Listado de Materias <span class="caret"></span>
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href=""> Materia 1
            </a>

        
           <a class="dropdown-item" href=""> Materia 2
                </a>

            <a class="dropdown-item" href=""> Materia 3
                    </a>

        </div>
</li>
    
<li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            ABM Legajo/Alumno <span class="caret"></span>
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('legajos.create')}}"> Crear Legajo
            </a>

        
           <a class="dropdown-item" href=""> Modificar Legajo
                </a>

            <a class="dropdown-item" href=""> Eliminar Legajo
                    </a>

        </div>
</li>

<li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            ABM Notas (Prof) <span class="caret"></span>
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href=""> Cargar Nota
            </a>

        
           <a class="dropdown-item" href=""> Modificar Nota
                </a>

            <a class="dropdown-item" href=""> Mensaje Difusion Curso
                    </a>

        </div>
</li>

<li class="nav-item ">
                <a id="navbarDropdown" class="nav-link dropdown-item" href="{{route('posts.crear')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Soporte <span class="caret"></span>
                </a>

                
</li>

<li class="nav-item dropdown-toggle-split">
                                           
                    <a class="nav-link disabled" >&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>

                    
</li>

<li class="nav-item ">
                    <a class="nav-link dropdown-item" href="{{route('posts.crear')}}" >
                        Nuevo Post <span class="caret"></span>
                    </a>

                    
</li> 

<li class="nav-item ">
                <a id="dropdown-menu" class="nav-link dropdown-item" href="{{route('notifications.index')}}" aria-haspopup="true" aria-expanded="false" v-pre>
                        Notificaciones 
                        @if ($count = Auth::user()->unreadNotifications->count())
                       
                    <span class="badge">{{$count}}</span> 
                        @endif
                        <span class="caret"></span>
                    </a>

</li>

<li class="nav-item ">
                    <a class="nav-link dropdown-item" href="{{route('messages.create')}}" >
                        Enviar mensaje <span class="caret"></span>
                    </a>
</li>  

@endsection