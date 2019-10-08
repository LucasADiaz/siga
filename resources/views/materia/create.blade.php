@extends('layouts.app')

@section('content')

<div class="container">
    @include('errors.validacion')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Crear Nueva Materia
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('materias.store') }}" class="needs-validation">

                        @csrf
                        {{-- Nombre del Profesor --}}

                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Nombre</font>
                                </font>
                            </label>
                            <div class="col-8">
                                <input id="name" name="name" placeholder="Nombre de la Materia" type="text"
                                    class="form-control" value="{{ old('name') }}">
                            </div>
                        </div>

                        {{-- Seleccionar al Profesor --}}

                        <div class="form-group row">
                            <label for="prof" class="col-4 col-form-label">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Profesor</font>
                                </font>
                            </label>
                            <div class="col-8">
                                <select id="prof" name="per_prof" class="custom-select" required="required">

                                    {{-- Listado de profesores --}}
                                    @foreach ($persona_prof as $p)
                                    <option value="{{$p->id}}">{{ $p->nombre }} - {{$p->nro_doc}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        {{-- Radio de Caracter del profesor --}}

                        <div class="form-group row">
                            <label class="col-4">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Caracter del Profesor
                                    </font>
                                </font>
                            </label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="caracter" id="caracter_0" type="radio" required="required"
                                        class="custom-control-input" value="1">
                                    <label for="caracter_0" class="custom-control-label">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Titular</font>
                                        </font>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="caracter" id="caracter_1" type="radio" required="required"
                                        class="custom-control-input" value="2">
                                    <label for="caracter_1" class="custom-control-label">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Suplente</font>
                                        </font>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="caracter" id="caracter_2" type="radio" required="required"
                                        class="custom-control-input" value="3">
                                    <label for="caracter_2" class="custom-control-label">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Interino</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Enviar
                                        </font>
                                    </font>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection