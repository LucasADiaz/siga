<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('inicio') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        
                        @else
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

                                    <a class="dropdown-item" href="{{route('documentos.create')}}"> Crear Documentos
                                        </a>
                                
                                   <a class="dropdown-item" href="{{  route('legajos.edit') }}"> Modificar Legajo
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
                                        <a id="navbarDropdown" class="nav-link dropdown-item" href="{{route('posts.create')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Soporte <span class="caret"></span>
                                        </a>
        
                                        
                                    </li>
                                    <li class="nav-item dropdown-toggle-split">
                                                                   
                                            <a class="nav-link disabled" >&nbsp;&nbsp;&nbsp;&nbsp;
                                                </a>
            
                                            
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link dropdown-item" href="{{route('posts.create')}}" >
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
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if (session()->has('flash'))
        <div class="container">
        <div class="alert alert-success">{{session('flash')}}</div>
        </div>
        @endif
        @if (session()->has('flasherror'))
        <div class="container">
        <div class="alert alert-danger">{{session('flasherror')}}</div>
        </div>
        @endif
        <main class="py-4">
            
            @yield('content')

        </main>
    </div>
</body>
</html>
