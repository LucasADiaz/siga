

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas logeado en el sistema!
                    <form action="{{ route('inicio')}}" class="pull-rigth">
                            <input type="submit"  value="Continuar"></a>
                    </form>
                    


                </div>
                </div>
           
            </div>
        </div>
    </div>
</div>
@endsection

