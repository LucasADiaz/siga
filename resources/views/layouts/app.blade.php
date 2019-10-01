<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('layouts.librerias')
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

                            @include('layouts.nav.navListadoMaterias')
                            @include('layouts.nav.navLegajo')
                            @include('layouts.nav.navNota')
                            @include('layouts.nav.navSoporte')
                                    
                            <li class="nav-item dropdown-toggle-split">                         
                            <a class="nav-link disabled" >&nbsp;&nbsp;&nbsp;&nbsp;</a>        
                            </li>

                            @include('layouts.nav.navFinal')            
                            @include('layouts.nav.navSession')            
                            
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
        <main class="py-4">
            
            @yield('content')
         



        </main>
    </div>
    @yield('scripts')

</body>
</html>
{{--  --}}