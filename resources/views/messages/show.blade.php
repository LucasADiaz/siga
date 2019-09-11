@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ URL::previous() }}">
     
        <div class="card-header "><h2 class="text-center" >Mensaje recibido</h2></div>
        <div class="card-body">
                
                        
                        <p>{{ $message->mensaje }}</p>
                        <br>
                        <div class="form-group text-right">
                
                    <p> Enviado por <b>{{$message->sender->name }} </b>- {{$message->fecha->created_at}}</p>
                    <button class="btn btn-primary float-right">Atras</button> 
        
            </div>
        </div>

        </div>
    </form>
</div>
@endsection