

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <form method="POST" action="{{ route('messages.send')}}">
                {{ csrf_field() }}
                <div class="card-header">Enviar Mensaje</div>
                <div class="card-body">
                        <div class="form-group {{ $errors->has('receptor_id') ? 'has-error' : '' }} " >
                            <select name="receptor_id" id="" class="form-control">
                                <option value="">Selecciona el usuario</option>
                                @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('receptor_id',"<span class=help-block>:message</span>")!!}
                        </div>

                    <div class="form-group {{ $errors->has('asunto') ? 'has-error' : ''}} " >
                        <textarea name="asunto" id="" cols="15" rows="1" class="form-control" placeholder="Asunto del mensaje"></textarea>
                        {!! $errors->first('asunto',"<span class=help-block>:message</span>")!!}
                    </div>
                    <legend>{{ Form::radio('tipo', '1') }} &nbsp; Tipo 1 &nbsp; 
                    {{ Form::radio('tipo', '2') }} Tipo 2 &nbsp;
                    {{ Form::radio('tipo', '3') }} Difusion &nbsp;</legend>
                    <div class="form-group {{ $errors->has('mensaje') ? 'has-error' : ''}} ">
                    <textarea name="mensaje" id="" cols="15" rows="5" class="form-control" placeholder="Escribe aquí tu mensaje"></textarea>
                    {!! $errors->first('mensaje',"<span class=help-block>:message</span>")!!}
                </div>
                    <div class="form-group">
                    <button class="btn btn-primary btn-block">Enviar</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

