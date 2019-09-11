@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Notificaciones</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>No leidas</h2>
            <ul class="list-group">
                
            @foreach ($unreadNotifications as $unreadNotification)
            
            <li class="list-group-item"> 
                
            <form method="POST" action="{{ route('notifications.read', $unreadNotification->id) }}" class="pull-right" >
                    <a href="{{ $unreadNotification->data['link'] }}">
                            {{ $unreadNotification->data['text'] }}
                    </a>
                    
                {{ method_field('PATCH')}}
                {{ csrf_field() }}
                <button class="btn btn-danger btn-xs ">X</button>
                                
            </form>
            </li>
                    
            @endforeach
        </ul>
        </div>
        <div class="col-md-6">
                <h2>Leidas</h2>
                <ul class="list-group">
                
                        @foreach ($readNotifications as $readNotification)
                        <li class="list-group-item"> 
                            
                            <form method="POST" action="{{ route('notifications.delete', $readNotification->id)}}" >
                                    <a href="{{$readNotification->data['link']}}">
                                            {{$readNotification->data['text']}}
                                        </a>  
                                {{ method_field('DELETE')}}
                                    {{ csrf_field() }}
                                    
                                    <button class="btn-xs btn-danger float-right">x</button>
                                
                            </form>
                        </li>
                                
                        @endforeach
                    </ul>
            </div>
    </div>
</div>
    
@endsection