@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ URL::previous() }}">
     
        <div class="card-header "><h2 class="text-center" >{{$post->titulo}}</h2></div>
        <div class="card-body">
                
                        
                        <p>{{ $post->contenido }}</p>
                        <br>
                        <div class="form-group text-right">
                
                    
                    <button class="btn btn-primary float-right">Atras</button> 
        
            </div>
        </div>

        </div>
    </form>
</div>
@endsection