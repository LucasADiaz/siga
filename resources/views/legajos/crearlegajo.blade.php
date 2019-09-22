
@extends('layouts.app')

@section('content')


        <div class="container">
   
          

       <div class="row">
   
        <div class="col-md-12 col-md-offset-2">
   
         <h1>Crear Legajo del Alumno</h1>
   
         <p>Se creará el legajo de un alumno, con todos sus datos y los datos de sus familares.</p>
   
      <hr>
   
      <div class="wizard m-b-3">
        <p class="text-muted">Paso 1 de 4</p>
        <div class="progress">
         <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
          <span class="sr-only">Paso 1 de 4</span>
        </div>
      </div>
    </div>
   
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
   <form>
     <!-- EJEMPLO DE ERRORES PARA LECTOR DE VOZ -->
 <div id="errores" aria-live="polite" class="alert alert-danger" style="display:none"></div>
    <!-- DATOS PERSONALES -->
    <fieldset>
            <div class="col-md-4 form-group item-form">
                <br>
     <legend><h3>Datos personales del Alumno</h3></legend>
            </div>
     <div class="input-group row-md-4">
       <div class="col-md-3 form-group item-form">
         <label for="nombre">Nombres</label>
         <input type="text" name="name" class="form-control" id="nombre" required aria-required="true">
         <p class="help-block error hidden">Ingresá tu nombre</p>
       </div>
    
   
    <div class="col-md-3 form-group item-form">
       <label for="apellido">Apellidos</label>
       <input type="text" name="lastname" class="form-control" id="apellido" required aria-required="true">
       <p class="help-block error hidden">Ingresá tu apellido</p>
     </div>
     
     
     <div class="col-md-3 form-group item-form">
            <label for="lugarnac">Lugar de nacimiento</label>
            <input type="text" name="lugarnac" class="form-control" id="lugarnac" required aria-required="true">
            <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
          </div>

     <div class="col-md-3 form-group item-form">
       <label for="birthday">Fecha de nacimiento</label>
       <input type="date" class="form-control" id="birthday" required aria-required="true">
       <p class="help-block error hidden">Ingresá una fecha válida</p>
     </div>
     
    </div>
     
   
    <div class="input-group row-md-4">
   <div class="col-md-3 form-group item-form">
       <label for="tipoDoc">Tipo de Documento</label>
       <select id="tipoDoc" name="tipodoc" class="form-control">
        <option value="DNI" selected="">DNI</option>
        <option value="Libreta de Enrolamiento">Libreta de Enrolamiento</option>
        <option value="Libreta Cívica">Libreta Cívica</option>
        <option value="Pasaporte extranjero">Pasaporte extranjero</option>
      </select>
      <p class="help-block error hidden">Elegí un tipo de documento</p>

    </div>

    
    <div class="col-md-3 form-group item-form">
       <label for="numDoc">Número de documento</label>
       <input type="number" min="1" class="form-control" id="numDoc" required aria-required="true">
       <p class="help-block error hidden">Ingresá tu número de documento</p>
     </div>
    
     
    <div class="col-md-3 form-group item-form">
                <label for="nacionalidad">Nacionalidad</label>
                <input type="text" name="nacionalidad" class="form-control" id="nacionalidad" required aria-required="true">
                <p class="help-block error hidden">Ingresá nacionalidad</p>
              </div>
              
        <div class="col-md-3 form-group item-form">
                <label>Sexo</label><br>
                <label for="f" class="radio-inline">
                 <input type="radio" name="sexo" id="f" value="F" required aria-required="true">
                 Femenino
               </label>
                <label for="m" class="radio-inline">
                 <input type="radio" name="sexo" id="m" value="M" required aria-required="true">
                 Masculino
               </label>
               <p class="help-block error hidden">Ingresá tu sexo</p>
           </div>
    </div>
    
   </fieldset>
   
   <!-- DATOS DE CONTACTO -->
   <div class="col-md-12 form-group item-form">
   <fieldset>
     <legend>

       <h3>Datos de contacto del Alumno</h3>
     </legend>
    </div>
    

        
          <div class="input-group row-md-4">
   
              <div class="col-md-3 form-group item-form">
                  <label for="telmov">Teléfono móvil</label><br>
                  <div class="input-group">
                  <span class="input-group-addon">0</span>&nbsp;&nbsp;
                   <input aria-label="número de teléfono móvil" class="form-control" id="cellphone_number" required aria-required="true" type="text"> 
                  </div>
                 <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
               </div>
           
               
               <div class="col-md-3 form-group item-form">
                  <label for="telfijo">Teléfono fijo</label><br>
                  <div class="input-group">
                  <span class="input-group-addon">0</span>&nbsp;&nbsp;
            <input aria-label="número de teléfono fijo" class="form-control" id="phone_number" required aria-required="true" type="text"> 
                  </div>
          <p class="help-block error hidden">Ingresá tu número de teléfono fijo</p>
                </div>

                <div class="col-md-4 form-group item-form">
                        <label for="email">Dirección de correo electrónico</label>
                        <input type="email" name="email" class="form-control" id="email" required aria-required="true">
                        <p class="help-block error hidden">Ingresá un correo electrónico <br> El correo electrónico tiene un formato no válido</p>
                      </div>
               </div>
      
   
   <!-- DOMICILIO -->
   <div class="col-md-12 form-group item-form">
   <fieldset>  
     <legend><h3>Domicilio del Alumno</h3></legend>
     
    </div>
   
     <div class="input-group row-md-4">
       <div class="col-md-4 form-group item-form">
            <label for="localidad">Localidad</label>
            <select id="localidad" name="localidad" class="form-control">
             <option value="San Fernando del Valle de Catamarca" selected="">San Fernando del Valle de Catamarca</option>
             <option value="Achalco">Achalco</option>
             <option value="Aconquija">Aconquija</option>
             <option value="Agua Amarilla Pta De Balasto">Agua Amarilla Pta De Balasto</option>
             <option value="Agua Colorada">Agua Colorada</option>
             <option value="Agua De Dionisio">Agua De Dionisio</option>
             <option value="Agua Del Campo">Agua Del Campo</option>
             <option value="Aguadita">Aguadita</option>
             <option value="Agua Grande">Agua Grande</option>
             <option value="Agua Salada">Agua Salada</option>
             
           </select>
           <p class="help-block error hidden">Elegí una localidad</p>
       </div>
       <div class="col-md-3 form-group item-form">
            <label for="codigopostal">Codigo Postal</label>
            <input type="text" name="codigopostal" class="form-control" id="codigopostal" required aria-required="true">
            <p class="help-block error hidden">Ingresá un codigo postal</p>
          </div>
          <div class="col-md-4 form-group item-form">
                <label for="barrio">Barrio</label>
            <input type="text" name="barrio" class="form-control" id="barrio" required aria-required="true">
            <p class="help-block error hidden">Ingresá un barrio</p>
              </div>
        </div>
       <div class="input-group row-md-4">
       <div class="col-md-4 form-group item-form">
         <label for="address_street">Calle</label>
         <input type="text" name="address_street" class="form-control" id="address_street" required aria-required="true">
         <p class="help-block error hidden">Ingresá una calle</p>
       </div>  
   
       <div class="col-md-3 form-group item-form">
         <label for="address_street_number">Número de calle</label>
         <input type="text" class="form-control" id="address_street_number" required aria-required="true">
         <p class="help-block error hidden">Ingresá número de calle</p>
       </div> 
     

       <div class="col-md-2 form-group item-form">
         <label for="address_floor_number">Piso</label>
         <input type="text" name="address_floor_number" class="form-control" id="address_floor_number" required aria-required="true">
         <p class="help-block error hidden">Ingresá un piso</p>
        </div>
   
       <div class="col-md-3 form-group item-form">
         <label for="address_apartment_number">Departamento</label>
         <input type="text" class="form-control" id="address_apartment_number" required aria-required="true">
         <p class="help-block error hidden">Ingresá un un departamento</p>
       </div> 
     </div>  
     
   </fieldset>                  
   
   <!-- OTROS DATOS ESPECÍFICOS -->
   <fieldset>
        <div class="col-md-12 form-group item-form">
     <legend><h3>Otros datos específicos del Alumno</h3></legend>
    </div>
      <div class="col-md-12 form-group item-form">
            <div class="input-group row-md-4">
                    <div class="col-md-4 form-group item-form">
                      <label for="escuelaprocedencia">Escuela o colegio del que procede</label>
                      <input type="text" name="escuelaprocedencia" class="form-control" id="escuelaprocedencia" required aria-required="true">
                      <p class="help-block error hidden">Ingresá una escuela o colegio</p>
                    </div>  
                
                   
                  </div> 
                </div> 
                <div class="col-md-12 form-group item-form text-center">
     <a href="" class="btn btn-link">Anterior</a>
     <button onclick="mostrarErrores()">Siguiente</button>
     
   </div>
   
   </fieldset>


   </form>
</div>
</div>
</div>
</div>   

</div>
</div>   

   <script>
       $(function(){


    $('.error').removeClass("hidden");
    $('.item-form').addClass('has-error has-feedback');
    mostrarErrores();


});
      
      function mostrarErrores(){
        $("#errores").html("");
        $("#errores").html("<h5>Se han producido los siguientes errores:</h5><ol></ol>");
        var cantidadErrores = 0;
      
        $(".has-error").each(function(){
      
          if(cantidadErrores<3){// A MODO EJEMPLO SE LIMITÓ LA CANTIDAD DE ERRORES A 3
            var mensajeError = $(this).find(".help-block.error").html();
            $("#errores ol").append("<li>"+mensajeError+"</li>");
            cantidadErrores++;
          }
      
        });
      
        if(cantidadErrores >0){
          $("#errores").show();
        }
        else{
          $("#errores").hide(); 
        }
      }
      
      $('button').click(function(event) {
        mostrarErrores();
      });
      
      var content_popover = document.getElementById('content-popover');
      function popshow(){
        content_popover.classList.toggle('hidden');
      }
      function pophidde(){
        content_popover.classList.add('hidden')
      }
      </script>
      
      <script>
        $(document).ready(function(){
          $('#mostrar-tipo').text('Numero de DNI');
          $("select[name=tipodoc]").change(function(){
            //alert($('select[name=tipodoc]').val());
          if($('select[name=tipodoc]').val() === 'DNI') {
            $('#mostrar-tipo').text('Numero de DNI');
          }else if ($('select[name=tipodoc]').val() === 'Pasaporte extranjero') {
            $('#mostrar-tipo').text('Numero de Pasaporte');
          }
            //$('#mostrar-tipo').text('Pasaporte');
          });
          /*
          $("select[name=address_state]").change(function(){
            if($('select[name=address_state]').val() === 'Ciudad Autónoma de buenos Aires') {
              alert($('#address_state option:selected').val());  
              $("#municipio option[value='Prueba']").attr("selected", true);
            }
          
      
          });
          */
        });
      </script>
@endsection

