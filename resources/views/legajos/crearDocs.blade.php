
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


            

              <form method="POST" action="{{ route('legajos.store')}}" >
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <!-- DATOS DEL ALUMNO -->
                @include('legajos.alumno.alumnoform')
                <!--DATOS PERSONALES DE LA MADRE-->
                @include('legajos.madre.madreform')
                <!--DATOS PERSONALES DEL PADRE-->
                @include('legajos.padre.padreform')
                <!--DATOS PERSONALES DEL TUTOR-->
                @include('legajos.tutor.tutorform')
                <!-- DATOS DE TUTORES SUPLENTES -->
                @include('legajos.tutorsup.tutorsupform')

                                  
                <div class="col-md-12 form-group item-form text-center">
      
                <button type="submit" >Guardar Legajo</button>
                </div>
            </form>
        </div>
    </div>
      </div>
  </div>
</div>
                  
   <script>

//Funciones utilizadas
    //Limpiar campo
    function clearThis(target) {
        target.value= "";
    }
    //Deshabilitar campo
    function deshabilitarCampo(elemento) {
        elemento.disabled= true;
    }
    //Habilitar campo
    function habilitarCampo(elemento) {
        elemento.removeAttribute("disabled");
    }
    
    function limpiarCampos(elemento) {
        clearThis(elemento);
    }

//Mismo domicilio que el alumno (Copia datos de domicilio de alumno en la persona correspondiente)
function mismoDomicilioAlumno(checkbox, persona) {

//En base a la persona se definen los elementos de que persona va a tener los mismos que el alumno
if(persona == "madre"){
        var localidad = document.getElementById('localidad_madre');
        var cod_postal = document.getElementById('cod_postal_madre');
        var barrio = document.getElementById('barrio_madre');
        var calle = document.getElementById('calle_madre');
        var num_calle = document.getElementById('num_calle_madre');
        var piso = document.getElementById('piso_madre');
        var depto = document.getElementById('num_depto_madre');
}else if(persona == "padre"){
        var localidad = document.getElementById('localidad_padre');
        var cod_postal = document.getElementById('cod_postal_padre');
        var barrio = document.getElementById('barrio_padre');
        var calle = document.getElementById('calle_padre');
        var num_calle = document.getElementById('num_calle_padre');
        var piso = document.getElementById('piso_padre');
        var depto = document.getElementById('num_depto_padre');
}else{
        var localidad = document.getElementById('localidad_tutor');
        var cod_postal = document.getElementById('cod_postal_tutor');
        var barrio = document.getElementById('barrio_tutor');
        var calle = document.getElementById('calle_tutor');
        var num_calle = document.getElementById('num_calle_tutor');
        var piso = document.getElementById('piso_tutor');
        var depto = document.getElementById('num_depto_tutor');
}
array = [localidad, cod_postal, barrio, calle, num_calle, piso, depto]

//Si la madre tiene el mismo domicilio que el alumno
if(checkbox.checked){
    //Se deshabilita todos los elementos de domicilio de madre
    array.forEach(function(array) {
        deshabilitarCampo(array)
});
        //Se copia los datos de domicilio de alumno
        localidad.value = document.getElementById('localidad_alu').value;
        cod_postal.value = document.getElementById('cod_postal_alu').value;
        barrio.value = document.getElementById('barrio_alu').value;
        calle.value = document.getElementById('calle_alu').value;
        num_calle.value = document.getElementById('num_calle_alu').value;
        piso.value = document.getElementById('piso_alu').value;
        depto.value = document.getElementById('num_depto_alu').value;

}
else{
    //Se vuelve a habilitar los campos
    array.forEach(function(array) {
        habilitarCampo(array)
    });
    //Se limpian los campos
    array.forEach(function(array) {
            limpiarCampos(array)
    });
    
    }
}


//PersonaNoTrabaja (Deshabilita los campos de trabajo en la persona correspondiente)
function personaNoTrabaja(checkbox, persona) {
    //Segun la persona cargamos los elementos a deshabilitar
if(persona == "madre"){
//Elementos de trabajo de madre
        var lugar_trabajo = document.getElementById('lugar_trabajo_madre');
        var localidad = document.getElementById('localidad_lab_madre');
        var cod_postal = document.getElementById('cod_postal_lab_madre');
        var calle = document.getElementById('calle_lab_madre');
        var num_calle = document.getElementById('num_calle_lab_madre');
        var piso = document.getElementById('piso_lab_madre');
        var depto = document.getElementById('num_depto_lab_madre');
        var tel_lab = document.getElementById('tel_lab_madre');
}else if(persona == "padre"){
        //Elementos de trabajo de padre
        var lugar_trabajo = document.getElementById('lugar_trabajo_padre');
        var localidad = document.getElementById('localidad_lab_padre');
        var cod_postal = document.getElementById('cod_postal_lab_padre');
        var calle = document.getElementById('calle_lab_padre');
        var num_calle = document.getElementById('num_calle_lab_padre');
        var piso = document.getElementById('piso_lab_padre');
        var depto = document.getElementById('num_depto_lab_padre');
        var tel_lab = document.getElementById('tel_lab_padre');
        var padre_es_tutor = document.getElementById('padre_es_tutor');
}else{
        //Elementos de tutor
        var lugar_trabajo = document.getElementById('lugar_trabajo_tutor');
        var localidad = document.getElementById('localidad_lab_tutor');
        var cod_postal = document.getElementById('cod_postal_lab_tutor');
        var barrio = document.getElementById('barrio_lab_tutor');
        var calle = document.getElementById('calle_lab_tutor');
        var num_calle = document.getElementById('num_calle_lab_tutor');
        var piso = document.getElementById('piso_lab_tutor');
        var depto = document.getElementById('num_depto_lab_tutor');
        var tel_lab = document.getElementById('tel_lab_tutor');
}

array = [lugar_trabajo, localidad, cod_postal, calle, num_calle, piso, depto, tel_lab]
    //Si la madre no trabaja
    if(checkbox.checked){
    //Se deshabilitan los campos de trabajo
    array.forEach(function(array) {
        deshabilitarCampo(array)
    });

}
else{
    //Se habilitan los campos nuevamente
    array.forEach(function(array) {
        habilitarCampo(array)
    });

    /*array.forEach(function(array) {
            limpiarCampos(array)
    });*/
    
}
}
//Persona Fallecida (Deshabilita los campos de la persona fallecida)
function personaFallecida(checkbox, persona) {
    //Segun la persona fallecida se seleccionan los elementos a deshabilitar
if(persona == "madre"){
        //Elementos de Madre
        var nombres = document.getElementById('nombres_madre');
        var apellidos = document.getElementById('apellidos_madre');
        var lugar_nac = document.getElementById('lugar_nac_madre');
        var fec_nac = document.getElementById('fec_nac_madre');
        var tipo_doc = document.getElementById('tipo_doc_madre');
        var num_doc = document.getElementById('num_doc_madre');
        var nacionalidad = document.getElementById('nacionalidad_madre');
        var tel1 = document.getElementById('tel1_madre');
        var tel2 = document.getElementById('tel2_madre');
        var email = document.getElementById('email_madre');
        var madre_mismodomicilio = document.getElementById('madre_mismodomicilio');
        var localidad = document.getElementById('localidad_madre');
        var cod_postal = document.getElementById('cod_postal_madre');
        var calle = document.getElementById('calle_madre');
        var num_calle = document.getElementById('num_calle_madre');
        var barrio = document.getElementById('barrio_madre');
        var piso = document.getElementById('piso_madre');
        var depto = document.getElementById('num_depto_madre');
        var madre_no_trabaja = document.getElementById('madre_no_trabaja');
        var profesion = document.getElementById('profesion_madre');
        var lugar_trabajo = document.getElementById('lugar_trabajo_madre');
        var localidad_lab = document.getElementById('localidad_lab_madre');
        var cod_postal_lab = document.getElementById('cod_postal_lab_madre');
        var calle_lab = document.getElementById('calle_lab_madre');
        var num_calle_lab = document.getElementById('num_calle_lab_madre');
        var piso_lab = document.getElementById('piso_lab_madre');
        var depto_lab = document.getElementById('num_depto_lab_madre');
        var tel_lab = document.getElementById('tel_lab_madre');
        var madre_es_tutor = document.getElementById('madre_es_tutor');
}else if(persona == "padre"){
        //Elementos de trabajo de padre
        //Elementos de padre
        var nombres = document.getElementById('nombres_padre');
        var apellidos = document.getElementById('apellidos_padre');
        var lugar_nac = document.getElementById('lugar_nac_padre');
        var fec_nac = document.getElementById('fec_nac_padre');
        var tipo_doc = document.getElementById('tipo_doc_padre');
        var num_doc = document.getElementById('num_doc_padre');
        var nacionalidad = document.getElementById('nacionalidad_padre');
        var tel1 = document.getElementById('tel1_padre');
        var tel2 = document.getElementById('tel2_padre');
        var email = document.getElementById('email_padre');
        var madre_mismodomicilio = document.getElementById('padre_mismodomicilio');
        var madre_no_trabaja = document.getElementById('padre_no_trabaja');
        var localidad = document.getElementById('localidad_padre');
        var cod_postal = document.getElementById('cod_postal_padre');
        var barrio = document.getElementById('barrio_padre');
        var calle = document.getElementById('calle_padre');
        var num_calle = document.getElementById('num_calle_padre');
        var piso = document.getElementById('piso_padre');
        var depto = document.getElementById('num_depto_padre');
        var profesion = document.getElementById('profesion_padre');
        var lugar_trabajo = document.getElementById('lugar_trabajo_padre');
        var localidad_lab = document.getElementById('localidad_lab_padre');
        var cod_postal_lab = document.getElementById('cod_postal_lab_padre');
        var calle_lab = document.getElementById('calle_lab_padre');
        var num_calle_lab = document.getElementById('num_calle_lab_padre');
        var piso_lab = document.getElementById('piso_lab_padre');
        var depto_lab = document.getElementById('num_depto_lab_padre');
        var tel_lab = document.getElementById('tel_lab_padre');
        var padre_es_tutor = document.getElementById('padre_es_tutor');
}

array = [nombres, apellidos, lugar_nac, fec_nac, tipo_doc, num_doc, nacionalidad, tel1, tel2, email, madre_mismodomicilio,
        localidad, cod_postal, calle, num_calle, barrio, piso, depto, madre_no_trabaja, profesion, lugar_trabajo, cod_postal_lab,
        calle_lab, num_calle_lab, piso_lab, depto_lab, tel_lab, madre_es_tutor]

//Si la madre esta fallecida
if(checkbox.checked){
    //Deshabilitamos todos los campos de madre
    array.forEach(function(array) {
        deshabilitarCampo(array)
});
    
}
else{ //Si no está fallecida los habilitamos
    array.forEach(function(array) {
        habilitarCampo(array)
    });

}

}


//Copia los datos de la persona seleccionada como el tutor (padre o madre)
function esElTutor(checkbox, persona) {
    //Elementos de tutor
        var nombres = document.getElementById('nombres_tutor');
        var apellidos = document.getElementById('apellidos_tutor');
        var lugar_nac = document.getElementById('lugar_nac_tutor');
        var fec_nac = document.getElementById('fec_nac_tutor');
        var tipo_doc = document.getElementById('tipo_doc_tutor');
        var num_doc = document.getElementById('num_doc_tutor');
        var nacionalidad = document.getElementById('nacionalidad_tutor');
        var tel1 = document.getElementById('tel1_tutor');
        var tel2 = document.getElementById('tel2_tutor');
        var email = document.getElementById('email_tutor');
        var localidad = document.getElementById('localidad_tutor');
        var cod_postal = document.getElementById('cod_postal_tutor');
        var calle = document.getElementById('calle_tutor');
        var num_calle = document.getElementById('num_calle_tutor');
        var barrio = document.getElementById('barrio_tutor');
        var piso = document.getElementById('piso_tutor');
        var depto = document.getElementById('num_depto_tutor');
        var profesion = document.getElementById('profesion_tutor');
        var lugar_trabajo = document.getElementById('lugar_trabajo_tutor');
        var localidad_lab = document.getElementById('localidad_lab_tutor');
        var cod_postal_lab = document.getElementById('cod_postal_lab_tutor');
        var calle_lab = document.getElementById('calle_lab_tutor');
        var num_calle_lab = document.getElementById('num_calle_lab_tutor');
        var piso_lab = document.getElementById('piso_lab_tutor');
        var depto_lab = document.getElementById('num_depto_lab_tutor');
        var tel_lab = document.getElementById('tel_lab_tutor');
        var tutor_mismodomicilio = document.getElementById('tutor_mismodomicilio');
        var tutor_no_trabaja = document.getElementById('tutor_no_trabaja');
        var padre_es_tutor = document.getElementById('padre_es_tutor');
        var madre_es_tutor = document.getElementById('madre_es_tutor');

array = [nombres, apellidos, lugar_nac, fec_nac, tipo_doc, num_doc, nacionalidad, tel1, tel2, email,
        localidad, cod_postal, calle, num_calle, barrio, piso, depto, tutor_no_trabaja, profesion, lugar_trabajo, cod_postal_lab,
        calle_lab, num_calle_lab, piso_lab, depto_lab, tel_lab, tutor_mismodomicilio]
    
    //Si la madre es el tutor
    if(checkbox.checked){
        //Deshabilitamos los campos de tutor
    array.forEach(function(array) {
        deshabilitarCampo(array)
});
if(persona == "madre"){
    deshabilitarCampo(padre_es_tutor)
//Elementos de trabajo de madre
//Copiamos los datos de la madre a tutor
        nombres.value = document.getElementById('nombres_madre').value;
        apellidos.value = document.getElementById('apellidos_madre').value;
        lugar_nac.value = document.getElementById('lugar_nac_madre').value;
        fec_nac.value = document.getElementById('fec_nac_madre').value;
        tipo_doc.value = document.getElementById('tipo_doc_madre').value;
        num_doc.value = document.getElementById('num_doc_madre').value;
        nacionalidad.value = document.getElementById('nacionalidad_madre').value;
        tel1.value = document.getElementById('tel1_madre').value;
        tel2.value = document.getElementById('tel2_madre').value;
        email.value = document.getElementById('email_madre').value;
        localidad.value = document.getElementById('localidad_madre').value;
        cod_postal.value = document.getElementById('cod_postal_madre').value;
        barrio.value = document.getElementById('barrio_madre').value;
        calle.value = document.getElementById('calle_madre').value;
        num_calle.value = document.getElementById('num_calle_madre').value;
        piso.value = document.getElementById('piso_madre').value;
        depto.value = document.getElementById('num_depto_madre').value;
        profesion.value = document.getElementById('profesion_madre').value;
        lugar_trabajo.value = document.getElementById('lugar_trabajo_madre').value;
        localidad_lab.value = document.getElementById('lugar_trabajo_madre').value;
        cod_postal_lab.value = document.getElementById('cod_postal_lab_madre').value;
        calle_lab.value = document.getElementById('calle_lab_madre').value;
        num_calle_lab.value = document.getElementById('num_calle_lab_madre').value;
        piso_lab.value = document.getElementById('piso_lab_madre').value;
        depto_lab.value = document.getElementById('num_depto_lab_madre').value;
        tel_lab.value = document.getElementById('tel_lab_madre').value;
}else if(persona == "padre"){
    deshabilitarCampo(madre_es_tutor)
//Copiamos los datos del padre al tutor
        nombres.value = document.getElementById('nombres_padre').value;
        apellidos.value = document.getElementById('apellidos_padre').value;
        lugar_nac.value = document.getElementById('lugar_nac_padre').value;
        fec_nac.value = document.getElementById('fec_nac_padre').value;
        tipo_doc.value = document.getElementById('tipo_doc_padre').value;
        num_doc.value = document.getElementById('num_doc_padre').value;
        nacionalidad.value = document.getElementById('nacionalidad_padre').value;
        tel1.value = document.getElementById('tel1_padre').value;
        tel2.value = document.getElementById('tel2_padre').value;
        email.value = document.getElementById('email_padre').value;
        localidad.value = document.getElementById('localidad_padre').value;
        cod_postal.value = document.getElementById('cod_postal_padre').value;
        barrio.value = document.getElementById('barrio_padre').value;
        calle.value = document.getElementById('calle_padre').value;
        num_calle.value = document.getElementById('num_calle_padre').value;
        piso.value = document.getElementById('piso_padre').value;
        depto.value = document.getElementById('num_depto_padre').value;
        profesion.value = document.getElementById('profesion_padre').value;
        lugar_trabajo.value = document.getElementById('lugar_trabajo_padre').value;
        localidad_lab.value = document.getElementById('lugar_trabajo_padre').value;
        cod_postal_lab.value = document.getElementById('cod_postal_lab_padre').value;
        calle_lab.value = document.getElementById('calle_lab_padre').value;
        num_calle_lab.value = document.getElementById('num_calle_lab_padre').value;
        piso_lab.value = document.getElementById('piso_lab_padre').value;
        depto_lab.value = document.getElementById('num_depto_lab_padre').value;
        tel_lab.value = document.getElementById('tel_lab_padre').value;
}

}
else{//Si no es la tutor habilitamos los campos de tutor nuevamente
    array.forEach(function(array) {
        habilitarCampo(array)
    });
    habilitarCampo(madre_es_tutor)
    habilitarCampo(padre_es_tutor)
    //Limpiamos los campos de tutor
    array.forEach(function(array) {
            limpiarCampos(array)
    });

}
}

function puedeSerRetirado(checkbox) {

var contenido = document.getElementById("puede_ser_retirado");


if(checkbox.checked){
    contenido.style.display='block';
}
else{
    contenido.style.display='none';
}
}

      </script>
@endsection

