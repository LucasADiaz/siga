

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('inicio')}}">
                <div class="card-header">Bienvenido {{ Auth::user()->name }}</div>

                <div class="card-body">
                    <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="form-group">
                        Estas logeado en el sistema <input class="btn btn-primary float-right" type="submit" value="Continuar">
                        </div>
                    


                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

