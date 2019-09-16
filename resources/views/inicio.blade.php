
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-2">
                    <h3>{{ Auth::user()->name }} </h3><br>
                    <li class="">
                             MATERIA 1 <span class="caret"></span>
                        
            
                            
                        </li>
                        <li class="">
                                MATERIA 2 <span class="caret"></span>
                           
               
                               
                           </li>
                           <li class="">
                                MATERIA 3 <span class="caret"></span>
                           
               
                               
                           </li>
                    
                </div>
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Novedades</h2>
            @foreach (App\Post::latest()->get() as $post)
            <div class="panel panel-default">
                <div class="panel-heading"> 
                        <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('posts.show', $post) }}"> {{$post->titulo}} </a></li>
                        </ul>
                        <br>
                </div>  
            </div>
        @endforeach
            
        </div>
    </div>
</div>

@endsection
