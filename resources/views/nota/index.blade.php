@extends('layouts.app')

@section('content')



  @ctrf
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control">
        <div class="">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="" aria-haspopup="true" aria-expanded="false">
             {{-- {{$usuarios}} --}} <strong>Profesores</strong> 
          </button> 
             
        </div>

            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Elegir Profesor
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">{{$usuarios1->name}}</a>
                <a class="dropdown-item" href="#">{{$usuarios2->name}}</a>
                <a class="dropdown-item" href="#">{{$usuarios3->name}}</a>
              </div>
            </div>
    </div>
  </div>
              
          
@endsection
