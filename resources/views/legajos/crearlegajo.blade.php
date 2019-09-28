
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12 col-md-offset-2">
          <h1>Crear Legajo del Alumno</h1>
          <p>Se creará el legajo de un alumno, con todos sus datos y los datos de sus familares.</p>
          <hr>

            <div class="wizard m-b-3">
                <p class="text-muted">Paso 1 de 2</p>
                <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                  <span class="sr-only">Paso 1 de 2</span>
                </div>
              </div>
            </div> 
        

          
              
      <div class="col-md-12">
          <div class="card">


            

              <form method="POST" action="{{ route('legajos.guardar')}}" >
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
                    <a href="" class="btn btn-link">Anterior</a>
                <button type="submit" >Siguiente</button>
                </div>
            </form>
        </div>
    </div>
      </div>
  </div>
</div>
                  
   <script>
       
       function mismoDomicilioMadre(checkbox) {
var localidad = document.getElementById('localidad_madre');
var cod_postal = document.getElementById('cod_postal_madre');
var barrio = document.getElementById('barrio_madre');
var calle = document.getElementById('calle_madre');
var num_calle = document.getElementById('num_calle_madre');
var piso = document.getElementById('piso_madre');
var depto = document.getElementById('num_depto_madre');

if(checkbox.checked){
localidad.disabled = checkbox.checked;
cod_postal.disabled = checkbox.checked;
barrio.disabled = checkbox.checked;
calle.disabled = checkbox.checked;
num_calle.disabled = checkbox.checked;
piso.disabled = checkbox.checked;
depto.disabled = checkbox.checked;

localidad.value = document.getElementById('localidad_alu').value;
cod_postal.value = document.getElementById('cod_postal_alu').value;
barrio.value = document.getElementById('barrio_alu').value;
calle.value = document.getElementById('calle_alu').value;
num_calle.value = document.getElementById('num_calle_alu').value;
piso.value = document.getElementById('piso_alu').value;
depto.value = document.getElementById('num_depto_alu').value;
}
else{
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    clearThis(cod_postal);
    clearThis(barrio);
    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);

}
}

function clearThis(target) {
        target.value= "";
    }

function madreNoTrabaja(checkbox) {

var lugar_trabajo = document.getElementById('lugar_trabajo_madre');
var localidad = document.getElementById('localidad_lab_madre');
var cod_postal = document.getElementById('cod_postal_lab_madre');
var calle = document.getElementById('calle_lab_madre');
var num_calle = document.getElementById('num_calle_lab_madre');
var piso = document.getElementById('piso_lab_madre');
var depto = document.getElementById('num_depto_lab_madre');
var tel_lab = document.getElementById('tel_lab_madre');

if(checkbox.checked){

lugar_trabajo.disabled = checkbox.checked;
localidad.disabled = checkbox.checked;
cod_postal.disabled = checkbox.checked;
calle.disabled = checkbox.checked;
num_calle.disabled = checkbox.checked;
piso.disabled = checkbox.checked;
depto.disabled = checkbox.checked;
tel_lab.disabled = checkbox.checked;

}
else{
    lugar_trabajo.removeAttribute("disabled");
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    tel_lab.removeAttribute("disabled");
    clearThis(lugar_trabajo);
    clearThis(cod_postal);
    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);
    clearThis(tel_lab);
   
}
}

function madreFallecida(checkbox) {

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



if(checkbox.checked){

    nombres.disabled = checkbox.checked;
    apellidos.disabled = checkbox.checked;
    lugar_nac.disabled = checkbox.checked;
    fec_nac.disabled = checkbox.checked;
    tipo_doc.disabled = checkbox.checked;
    num_doc.disabled = checkbox.checked;
    nacionalidad.disabled = checkbox.checked;
   
    tel1.disabled = checkbox.checked;
    tel2.disabled = checkbox.checked;
    email.disabled = checkbox.checked;
    madre_mismodomicilio.disabled=true;
    madre_no_trabaja.disabled=true;
    localidad.disabled = checkbox.checked;
    cod_postal.disabled = checkbox.checked;
    barrio.disabled = checkbox.checked;
    calle.disabled = checkbox.checked;
    num_calle.disabled = checkbox.checked;
    piso.disabled = checkbox.checked;
    depto.disabled = checkbox.checked;
    

    lugar_trabajo.disabled = checkbox.checked;
    profesion.disabled = checkbox.checked
    localidad_lab.disabled = checkbox.checked;
    cod_postal_lab.disabled = checkbox.checked;
    calle_lab.disabled = checkbox.checked;
    num_calle_lab.disabled = checkbox.checked;
    piso_lab.disabled = checkbox.checked;
    depto_lab.disabled = checkbox.checked;
    tel_lab.disabled = checkbox.checked;
}
else{
   
    nombres.removeAttribute("disabled");
    apellidos.removeAttribute("disabled");
    lugar_nac.removeAttribute("disabled");
    fec_nac.removeAttribute("disabled");
    tipo_doc.removeAttribute("disabled");
    num_doc.removeAttribute("disabled");
    nacionalidad.removeAttribute("disabled");
    tel1.removeAttribute("disabled");
    tel2.removeAttribute("disabled");
    email.removeAttribute("disabled");
    madre_mismodomicilio.removeAttribute("disabled");
    madre_no_trabaja.removeAttribute("disabled");
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    profesion.removeAttribute("disabled");
    lugar_trabajo.removeAttribute("disabled");
    localidad_lab.removeAttribute("disabled");
    cod_postal_lab.removeAttribute("disabled");
    calle_lab.removeAttribute("disabled");
    num_calle_lab.removeAttribute("disabled");
    piso_lab.removeAttribute("disabled");
    depto_lab.removeAttribute("disabled");
    tel_lab.removeAttribute("disabled");
    


}

}

function mismoDomicilioPadre(checkbox) {
var localidad = document.getElementById('localidad_padre');
var cod_postal = document.getElementById('cod_postal_padre');
var barrio = document.getElementById('barrio_padre');
var calle = document.getElementById('calle_padre');
var num_calle = document.getElementById('num_calle_padre');
var piso = document.getElementById('piso_padre');
var depto = document.getElementById('num_depto_padre');

if(checkbox.checked){
localidad.disabled = checkbox.checked;
cod_postal.disabled = checkbox.checked;
barrio.disabled = checkbox.checked;
calle.disabled = checkbox.checked;
num_calle.disabled = checkbox.checked;
piso.disabled = checkbox.checked;
depto.disabled = checkbox.checked;

localidad.value = document.getElementById('localidad_alu').value;
cod_postal.value = document.getElementById('cod_postal_alu').value;
barrio.value = document.getElementById('barrio_alu').value;
calle.value = document.getElementById('calle_alu').value;
num_calle.value = document.getElementById('num_calle_alu').value;
piso.value = document.getElementById('piso_alu').value;
depto.value = document.getElementById('num_depto_alu').value;
}
else{
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    clearThis(cod_postal);
    clearThis(barrio);
    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);

}
}


function padreNoTrabaja(checkbox) {

var lugar_trabajo = document.getElementById('lugar_trabajo_padre');
var localidad = document.getElementById('localidad_lab_padre');
var cod_postal = document.getElementById('cod_postal_lab_padre');
var calle = document.getElementById('calle_lab_padre');
var num_calle = document.getElementById('num_calle_lab_padre');
var piso = document.getElementById('piso_lab_padre');
var depto = document.getElementById('num_depto_lab_padre');
var tel_lab = document.getElementById('tel_lab_padre');


if(checkbox.checked){

lugar_trabajo.disabled = checkbox.checked;
localidad.disabled = checkbox.checked;
cod_postal.disabled = checkbox.checked;
calle.disabled = checkbox.checked;
num_calle.disabled = checkbox.checked;
piso.disabled = checkbox.checked;
depto.disabled = checkbox.checked;
tel_lab.disabled = checkbox.checked;

}
else{
    lugar_trabajo.removeAttribute("disabled");
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    tel_lab.removeAttribute("disabled");
    clearThis(lugar_trabajo);
    clearThis(cod_postal);

    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);
    clearThis(tel_lab);
}
}

function padreFallecido(checkbox) {

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



if(checkbox.checked){

    nombres.disabled = checkbox.checked;
    apellidos.disabled = checkbox.checked;
    lugar_nac.disabled = checkbox.checked;
    fec_nac.disabled = checkbox.checked;
    tipo_doc.disabled = checkbox.checked;
    num_doc.disabled = checkbox.checked;
    nacionalidad.disabled = checkbox.checked;
   
    tel1.disabled = checkbox.checked;
    tel2.disabled = checkbox.checked;
    email.disabled = checkbox.checked;
    madre_mismodomicilio.disabled=true;
    madre_no_trabaja.disabled=true;
    localidad.disabled = checkbox.checked;
    cod_postal.disabled = checkbox.checked;
    barrio.disabled = checkbox.checked;
    calle.disabled = checkbox.checked;
    num_calle.disabled = checkbox.checked;
    piso.disabled = checkbox.checked;
    depto.disabled = checkbox.checked;
    

    lugar_trabajo.disabled = checkbox.checked;
    profesion.disabled = checkbox.checked
    localidad_lab.disabled = checkbox.checked;
    cod_postal_lab.disabled = checkbox.checked;
    calle_lab.disabled = checkbox.checked;
    num_calle_lab.disabled = checkbox.checked;
    piso_lab.disabled = checkbox.checked;
    depto_lab.disabled = checkbox.checked;
    tel_lab.disabled = checkbox.checked;
}
else{
   
    nombres.removeAttribute("disabled");
    apellidos.removeAttribute("disabled");
    lugar_nac.removeAttribute("disabled");
    fec_nac.removeAttribute("disabled");
    tipo_doc.removeAttribute("disabled");
    num_doc.removeAttribute("disabled");
    nacionalidad.removeAttribute("disabled");
    tel1.removeAttribute("disabled");
    tel2.removeAttribute("disabled");
    email.removeAttribute("disabled");
    madre_mismodomicilio.removeAttribute("disabled");
    madre_no_trabaja.removeAttribute("disabled");
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    profesion.removeAttribute("disabled");
    lugar_trabajo.removeAttribute("disabled");
    localidad_lab.removeAttribute("disabled");
    cod_postal_lab.removeAttribute("disabled");
    calle_lab.removeAttribute("disabled");
    num_calle_lab.removeAttribute("disabled");
    piso_lab.removeAttribute("disabled");
    depto_lab.removeAttribute("disabled");
    tel_lab.removeAttribute("disabled");
    


}

}



function mismoDomicilioMadre(checkbox) {
var localidad = document.getElementById('localidad_madre');
var cod_postal = document.getElementById('cod_postal_madre');
var barrio = document.getElementById('barrio_madre');
var calle = document.getElementById('calle_madre');
var num_calle = document.getElementById('num_calle_madre');
var piso = document.getElementById('piso_madre');
var depto = document.getElementById('num_depto_madre');

if(checkbox.checked){
localidad.disabled = checkbox.checked;
cod_postal.disabled = checkbox.checked;
barrio.disabled = checkbox.checked;
calle.disabled = checkbox.checked;
num_calle.disabled = checkbox.checked;
piso.disabled = checkbox.checked;
depto.disabled = checkbox.checked;

localidad.value = document.getElementById('localidad_alu').value;
cod_postal.value = document.getElementById('cod_postal_alu').value;
barrio.value = document.getElementById('barrio_alu').value;
calle.value = document.getElementById('calle_alu').value;
num_calle.value = document.getElementById('num_calle_alu').value;
piso.value = document.getElementById('piso_alu').value;
depto.value = document.getElementById('num_depto_alu').value;
}
else{
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    clearThis(cod_postal);
    clearThis(barrio);
    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);

}
}

function tutorNoTrabaja(checkbox) {

var lugar_trabajo = document.getElementById('lugar_trabajo_madre');
var localidad = document.getElementById('localidad_lab_madre');
var cod_postal = document.getElementById('cod_postal_lab_madre');
var barrio = document.getElementById('barrio_lab_madre');
var calle = document.getElementById('calle_lab_madre');
var num_calle = document.getElementById('num_calle_lab_madre');
var piso = document.getElementById('piso_lab_madre');
var depto = document.getElementById('num_depto_lab_madre');
var tel_lab = document.getElementById('tel_lab_madre');

if(checkbox.checked){

lugar_trabajo.disabled = checkbox.checked;
localidad.disabled = checkbox.checked;
cod_postal.disabled = checkbox.checked;
barrio.disabled = checkbox.checked;
calle.disabled = checkbox.checked;
num_calle.disabled = checkbox.checked;
piso.disabled = checkbox.checked;
depto.disabled = checkbox.checked;
tel_lab.disabled = checkbox.checked;

}
else{
    lugar_trabajo.removeAttribute("disabled");
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    tel_lab.removeAttribute("disabled");
    clearThis(lugar_trabajo);
    clearThis(cod_postal);
    clearThis(barrio);
    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);
    clearThis(tel_lab);
   
}
}

function madreFallecida(checkbox) {

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



if(checkbox.checked){

    nombres.disabled = checkbox.checked;
    apellidos.disabled = checkbox.checked;
    lugar_nac.disabled = checkbox.checked;
    fec_nac.disabled = checkbox.checked;
    tipo_doc.disabled = checkbox.checked;
    num_doc.disabled = checkbox.checked;
    nacionalidad.disabled = checkbox.checked;
   
    tel1.disabled = checkbox.checked;
    tel2.disabled = checkbox.checked;
    email.disabled = checkbox.checked;
    madre_mismodomicilio.disabled=true;
    madre_no_trabaja.disabled=true;
    localidad.disabled = checkbox.checked;
    cod_postal.disabled = checkbox.checked;
    barrio.disabled = checkbox.checked;
    calle.disabled = checkbox.checked;
    num_calle.disabled = checkbox.checked;
    piso.disabled = checkbox.checked;
    depto.disabled = checkbox.checked;
    

    lugar_trabajo.disabled = checkbox.checked;
    profesion.disabled = checkbox.checked
    localidad_lab.disabled = checkbox.checked;
    cod_postal_lab.disabled = checkbox.checked;
    calle_lab.disabled = checkbox.checked;
    num_calle_lab.disabled = checkbox.checked;
    piso_lab.disabled = checkbox.checked;
    depto_lab.disabled = checkbox.checked;
    tel_lab.disabled = checkbox.checked;
}
else{
   
    nombres.removeAttribute("disabled");
    apellidos.removeAttribute("disabled");
    lugar_nac.removeAttribute("disabled");
    fec_nac.removeAttribute("disabled");
    tipo_doc.removeAttribute("disabled");
    num_doc.removeAttribute("disabled");
    nacionalidad.removeAttribute("disabled");
    tel1.removeAttribute("disabled");
    tel2.removeAttribute("disabled");
    email.removeAttribute("disabled");
    madre_mismodomicilio.removeAttribute("disabled");
    madre_no_trabaja.removeAttribute("disabled");
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    profesion.removeAttribute("disabled");
    lugar_trabajo.removeAttribute("disabled");
    localidad_lab.removeAttribute("disabled");
    cod_postal_lab.removeAttribute("disabled");
    calle_lab.removeAttribute("disabled");
    num_calle_lab.removeAttribute("disabled");
    piso_lab.removeAttribute("disabled");
    depto_lab.removeAttribute("disabled");
    tel_lab.removeAttribute("disabled");
    


}

}

function mismoDomicilioPadre(checkbox) {
var localidad = document.getElementById('localidad_padre');
var cod_postal = document.getElementById('cod_postal_padre');
var barrio = document.getElementById('barrio_padre');
var calle = document.getElementById('calle_padre');
var num_calle = document.getElementById('num_calle_padre');
var piso = document.getElementById('piso_padre');
var depto = document.getElementById('num_depto_padre');

if(checkbox.checked){
localidad.disabled = checkbox.checked;
cod_postal.disabled = checkbox.checked;
barrio.disabled = checkbox.checked;
calle.disabled = checkbox.checked;
num_calle.disabled = checkbox.checked;
piso.disabled = checkbox.checked;
depto.disabled = checkbox.checked;

localidad.value = document.getElementById('localidad_alu').value;
cod_postal.value = document.getElementById('cod_postal_alu').value;
barrio.value = document.getElementById('barrio_alu').value;
calle.value = document.getElementById('calle_alu').value;
num_calle.value = document.getElementById('num_calle_alu').value;
piso.value = document.getElementById('piso_alu').value;
depto.value = document.getElementById('num_depto_alu').value;
}
else{
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    clearThis(cod_postal);
    clearThis(barrio);
    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);

}
}



function esLaMadre(checkbox) {
    
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

if(checkbox.checked){
    nombres.disabled = checkbox.checked;
    apellidos.disabled = checkbox.checked;
    lugar_nac.disabled = checkbox.checked;
    fec_nac.disabled = checkbox.checked;
    tipo_doc.disabled = checkbox.checked;
    num_doc.disabled = checkbox.checked;
    nacionalidad.disabled = checkbox.checked;
    tel1.disabled = checkbox.checked;
    tel2.disabled = checkbox.checked;
    email.disabled = checkbox.checked;
    localidad.disabled = checkbox.checked;
    cod_postal.disabled = checkbox.checked;
    barrio.disabled = checkbox.checked;
    calle.disabled = checkbox.checked;
    num_calle.disabled = checkbox.checked;
    piso.disabled = checkbox.checked;
    depto.disabled = checkbox.checked;
    tutor_mismodomicilio.disabled=true;
    tutor_no_trabaja.disabled=true;
    profesion.disabled = checkbox.checked;
    lugar_trabajo.disabled = checkbox.checked;
    localidad_lab.disabled = checkbox.checked;
    cod_postal_lab.disabled = checkbox.checked;
    calle_lab.disabled = checkbox.checked;
    num_calle_lab.disabled = checkbox.checked;
    piso_lab.disabled = checkbox.checked;
    depto_lab.disabled = checkbox.checked;
    tel_lab.disabled = checkbox.checked;

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
}
else{
    nombres.removeAttribute("disabled");
    apellidos.removeAttribute("disabled");
    fec_nac.removeAttribute("disabled");
    lugar_nac.removeAttribute("disabled");
    tipo_doc.removeAttribute("disabled");
    num_doc.removeAttribute("disabled");
    nacionalidad.removeAttribute("disabled");
    tel1.removeAttribute("disabled");
    tel2.removeAttribute("disabled");
    email.removeAttribute("disabled");
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    profesion.removeAttribute("disabled");
    lugar_trabajo.removeAttribute("disabled");
    tutor_mismodomicilio.removeAttribute("disabled");
    tutor_no_trabaja.removeAttribute("disabled");
    localidad_lab.removeAttribute("disabled");
    cod_postal_lab.removeAttribute("disabled");
    calle_lab.removeAttribute("disabled");
    num_calle_lab.removeAttribute("disabled");
    piso_lab.removeAttribute("disabled");
    depto_lab.removeAttribute("disabled");
    tel_lab.removeAttribute("disabled");
    clearThis(nombres);
    clearThis(apellidos);
    clearThis(fec_nac);
    clearThis(lugar_nac);
    clearThis(tipo_doc);
    clearThis(num_doc);
    clearThis(nacionalidad);
    clearThis(tel1);
    clearThis(tel2);
    clearThis(email);
    clearThis(localidad);
    clearThis(cod_postal);
    clearThis(barrio);
    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);
    clearThis(profesion);
    clearThis(lugar_trabajo);
    clearThis(localidad_lab);
    clearThis(cod_postal_lab);
    clearThis(calle_lab);
    clearThis(piso_lab);
    clearThis(depto_lab);
    clearThis(tel_lab);

}
}

function esElPadre(checkbox) {
    
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
    
    if(checkbox.checked){
        nombres.disabled = checkbox.checked;
        apellidos.disabled = checkbox.checked;
        lugar_nac.disabled = checkbox.checked;
        fec_nac.disabled = checkbox.checked;
        tipo_doc.disabled = checkbox.checked;
        num_doc.disabled = checkbox.checked;
        nacionalidad.disabled = checkbox.checked;
        tel1.disabled = checkbox.checked;
        tel2.disabled = checkbox.checked;
        email.disabled = checkbox.checked;
        localidad.disabled = checkbox.checked;
        cod_postal.disabled = checkbox.checked;
        barrio.disabled = checkbox.checked;
        calle.disabled = checkbox.checked;
        num_calle.disabled = checkbox.checked;
        piso.disabled = checkbox.checked;
        depto.disabled = checkbox.checked;
        tutor_mismodomicilio.disabled=true;
        tutor_no_trabaja.disabled=true;
        profesion.disabled = checkbox.checked;
        lugar_trabajo.disabled = checkbox.checked;
        localidad_lab.disabled = checkbox.checked;
        cod_postal_lab.disabled = checkbox.checked;
        calle_lab.disabled = checkbox.checked;
        num_calle_lab.disabled = checkbox.checked;
        piso_lab.disabled = checkbox.checked;
        depto_lab.disabled = checkbox.checked;
        tel_lab.disabled = checkbox.checked;
    
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
    else{
        nombres.removeAttribute("disabled");
        apellidos.removeAttribute("disabled");
        lugar_nac.removeAttribute("disabled");
        fec_nac.removeAttribute("disabled");
        tipo_doc.removeAttribute("disabled");
        num_doc.removeAttribute("disabled");
        nacionalidad.removeAttribute("disabled");
        tel1.removeAttribute("disabled");
        tel2.removeAttribute("disabled");
        email.removeAttribute("disabled");
        localidad.removeAttribute("disabled");
        cod_postal.removeAttribute("disabled");
        barrio.removeAttribute("disabled");
        calle.removeAttribute("disabled");
        num_calle.removeAttribute("disabled");
        piso.removeAttribute("disabled");
        depto.removeAttribute("disabled");
        profesion.removeAttribute("disabled");
        lugar_trabajo.removeAttribute("disabled");
    
        localidad_lab.removeAttribute("disabled");
        cod_postal_lab.removeAttribute("disabled");
        calle_lab.removeAttribute("disabled");
        num_calle_lab.removeAttribute("disabled");
        piso_lab.removeAttribute("disabled");
        depto_lab.removeAttribute("disabled");
        tel_lab.removeAttribute("disabled");
        clearThis(nombres);
        clearThis(apellidos);
        clearThis(fec_nac);
        clearThis(lugar_nac);
        clearThis(tipo_doc);
        clearThis(num_doc);
        clearThis(nacionalidad);
        clearThis(tel1);
        clearThis(tel2);
        clearThis(email);
        clearThis(localidad);
        clearThis(cod_postal);
        clearThis(barrio);
        clearThis(calle);
        clearThis(num_calle);
        clearThis(piso);
        clearThis(depto);
        clearThis(profesion);
        clearThis(lugar_trabajo);
        clearThis(localidad_lab);
        clearThis(cod_postal_lab);
        clearThis(calle_lab);
        clearThis(piso_lab);
        clearThis(depto_lab);
        clearThis(tel_lab);
    
    }
    }

    function mismoDomicilioTutor(checkbox) {
var localidad = document.getElementById('localidad_tutor');
var cod_postal = document.getElementById('cod_postal_tutor');
var barrio = document.getElementById('barrio_tutor');
var calle = document.getElementById('calle_tutor');
var num_calle = document.getElementById('num_calle_tutor');
var piso = document.getElementById('piso_tutor');
var depto = document.getElementById('num_depto_tutor');

if(checkbox.checked){
localidad.disabled = checkbox.checked;
cod_postal.disabled = checkbox.checked;
barrio.disabled = checkbox.checked;
calle.disabled = checkbox.checked;
num_calle.disabled = checkbox.checked;
piso.disabled = checkbox.checked;
depto.disabled = checkbox.checked;

localidad.value = document.getElementById('localidad_alu').value;
cod_postal.value = document.getElementById('cod_postal_alu').value;
barrio.value = document.getElementById('barrio_alu').value;
calle.value = document.getElementById('calle_alu').value;
num_calle.value = document.getElementById('num_calle_alu').value;
piso.value = document.getElementById('piso_alu').value;
depto.value = document.getElementById('num_depto_alu').value;
}
else{
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    barrio.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    clearThis(cod_postal);
    clearThis(barrio);
    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);

}
}

function clearThis(target) {
        target.value= "";
    }

function tutorNoTrabaja(checkbox) {

var lugar_trabajo = document.getElementById('lugar_trabajo_tutor');
var localidad = document.getElementById('localidad_lab_tutor');
var cod_postal = document.getElementById('cod_postal_lab_tutor');
var calle = document.getElementById('calle_lab_tutor');
var num_calle = document.getElementById('num_calle_lab_tutor');
var piso = document.getElementById('piso_lab_tutor');
var depto = document.getElementById('num_depto_lab_tutor');
var tel_lab = document.getElementById('tel_lab_tutor');

if(checkbox.checked){

lugar_trabajo.disabled = checkbox.checked;
localidad.disabled = checkbox.checked;
cod_postal.disabled = checkbox.checked;
calle.disabled = checkbox.checked;
num_calle.disabled = checkbox.checked;
piso.disabled = checkbox.checked;
depto.disabled = checkbox.checked;
tel_lab.disabled = checkbox.checked;

}
else{
    lugar_trabajo.removeAttribute("disabled");
    localidad.removeAttribute("disabled");
    cod_postal.removeAttribute("disabled");
    calle.removeAttribute("disabled");
    num_calle.removeAttribute("disabled");
    piso.removeAttribute("disabled");
    depto.removeAttribute("disabled");
    tel_lab.removeAttribute("disabled");
    clearThis(lugar_trabajo);
    clearThis(cod_postal);
    clearThis(barrio);
    clearThis(calle);
    clearThis(num_calle);
    clearThis(piso);
    clearThis(depto);
    clearThis(tel_lab);
   
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

