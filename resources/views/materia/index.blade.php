@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $titulo }}
                    <a class="btn btn-info" href="{{ route('materias.create') }}">
                        <span class="oi oi-plus"></span>
                    </a>
                </div>

                <div class="card-body">
                    @forelse($materias as $m)
                    <div class="media text-muted pt-3">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">{{ $m->nombre }}</strong>

                        </p>
                        <div class="btn-group" role="group">
                            <a class="btn btn-info" href="{{ route('materias.edit', ['id' => $m->id]) }}">
                                <span class="oi oi-pencil"></span>
                            </a>
                            <form action="{{ route('materias.destroy', $m) }}" method="post">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-info"
                                    href="{{ route('materias.destroy', ['id' => $m->id]) }}">
                                    <span class="oi oi-trash"></span>
                                </button>
                            </form>
                            <a class="btn btn-info" href="{{ route('materias.show', ['id' => $m->id]) }}">
                                <span class="oi oi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="media text-muted pt-3">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">No tenemos Usuarios aun</strong>
                        </p>
                    </div>
                    @endforelse
                </div>
                
            </div>
        </div>
    </div>
</div>


<small class="d-block text-right mt-3">
    <a href="#">All updates</a>
</small>
@endsection