
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <form method="POST" action="{{ route('posts.enviar')}}">
                {{ csrf_field() }}
                <div class="card-header">Crear nuevo post - Se enviará mensaje a todos los usuarios </div>
                <div class="card-body">
                        

                    <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}} " >
                        <textarea name="titulo" id="" cols="15" rows="1" class="form-control" placeholder="Titulo del post"></textarea>
                        {!! $errors->first('titulo',"<span class=help-block>:message</span>")!!}
                    </div>
                    
                    <div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}} ">
                    <textarea name="contenido" id="" cols="15" rows="5" class="form-control" placeholder="Escribe aquí el contenido del post"></textarea>
                    {!! $errors->first('contenido',"<span class=help-block>:message</span>")!!}
                </div>
                    <div class="form-group">
                    <button class="btn btn-primary btn-block">Difundir</button>
                    <input type="checkbox" name="whatsapp" value="activado">Enviar por whatsapp
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection

