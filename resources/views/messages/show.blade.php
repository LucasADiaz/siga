@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mensaje</h1>
    <p>{{ $message->mensaje }}</p>
    <small> Enviado por {{$message->sender->name }}</small>
</div>
@endsection