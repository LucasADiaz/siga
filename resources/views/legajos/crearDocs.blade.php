
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12 col-md-offset-2">
          <h1>Crear Legajo del Alumno</h1>
          <p>Se creará el legajo de un alumno, con todos sus datos y los datos de sus familares.</p>
          <hr>

            <div class="wizard m-b-3">
                <p class="text-muted">Paso 2 de 2</p>
                <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                  <span class="sr-only">Paso 2 de 2</span>
                </div>
              </div>
            </div> 
        

          
              
        <div class="col-md-12">
          <div class="card">


            

            <form runat="server" action="{{ route('inicio')}}">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <br>
                      <div class="col-md-12 form-group item-form">
                      <h3>Selecciona los documentos del alumno {{$alumno->nombre}}</h3>
                      </div>

                      <div class="col-md-12 form-group item-form">
                          <div class="input-group row-md-4">
                              <div class="col-md-4 form-group item-form">
                                  
                                  <input type="file" multiple id="gallery-photo-add">
                                  
                                </div>

                          </div>
                          <div class="col-md-12 form-group item-form text-center">
                                <a href="javascript:pruebaDivAPdf()" class="button"><input type="button" value="Pasar a PDF"></a>
                                <a href="{{route('inicio')}}" class="button"><input type="button" value="Cargar luego"></a>
                            </div>
                      </div>
                    
                </fieldset>

            </form>
        </div>
        </div>
    </div>
    &nbsp;
    <div class="container">
            <div class="row">

                <div class="col-md-12 col-md-offset-2">
                        <div class="col-md-12">
                                <div class="card">
                    <div id="imprimir">
                            <br>
                            <div class="col-md-12 form-group item-form">
                                    <h3>Documentos del legajo de {{$alumno->nombre}} </h3>
                                </div>
                                <hr>
                            <div align="center"><div class="gallery"></div></div>
                            
                        
                    </div>           
                                                        
                        
                </div>
    
        </div></div>           
                                                        
                        
    </div>
    </div>
</div>
</div>
                  
   <script>

$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<br><img width="530" height="700">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});

function pruebaDivAPdf() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('#imprimir')[0];

        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
        margins = {
            top: 20,
            bottom: 20,
            left: 40,
            width: 500
        };

        pdf.fromHTML(
            source, 
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, 
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                pdf.save('Legajo.pdf');
            }, margins
        );
    }


      </script>


@endsection

