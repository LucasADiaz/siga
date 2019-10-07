<fieldset>
    <hr size="8px" color="black" />
    <div class="input-group row-md-1">
        <div class="col-md-10 form-group item-form">
          <h3>Datos personales del madre</h3>
        </div>
        <div>
            <input type="checkbox" name="madre_fallecido" id="madre_fallecido" <?php if($fallecido_madre ?? '' == "si")echo "checked=\"checked\"";?> onChange="personaFallecida(this,'madre');" >Fallecido
        </div>
    </div>
  
    <div class="input-group row-md-4">
      
      <div class="col-md-3 form-group item-form">
          <label for="nombres_madre">Nombres</label>
          <input type="text" name="nombres_madre" class="form-control" id="nombres_madre" value="{{ $nombres_madre ?? '' }}"  required <?php if($nombres_madre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá tu nombre</p>
      </div>
  
      <div class="col-md-3 form-group item-form">
          <label for="apellidos_madre">Apellidos</label>
          <input type="text" name="apellidos_madre" class="form-control" id="apellidos_madre" value="{{ $apellidos_madre ?? '' }}"  required <?php if($apellidos_madre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá tu apellido</p>
      </div>
  
      <div class="col-md-3 form-group item-form">
          <label for="lugar_nac_madre">Lugar de nacimiento</label>
          <input type="text" name="lugar_nac_madre" class="form-control" id="lugar_nac_madre" value="{{ $lugar_nac_madre ?? '' }}"  required  <?php if($lugar_nac_madre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
      </div>
  
      <div class="col-md-3 form-group item-form">
          <label for="fec_nac_madre">Fecha de nacimiento</label>
          <input type="date" name="fec_nac_madre" class="form-control"  id="fec_nac_madre" value="{{ $fec_nac_madre ?? '' }}"<?php if($fec_nac_madre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá una fecha válida</p>
      </div>
  
  
    </div>
  
    <div class="input-group row-md-4">
        <div class="col-md-3 form-group item-form">
            <label for="tipo_doc_madre">Tipo de Documento</label>
            <select id="tipo_doc_madre" name="tipo_doc_madre" class="form-control"  value="{{ $tipo_doc_madre ?? '' }}"<?php if($tipo_doc_madre_disabled ?? '' == "si")echo "disabled";?>>
                <option value="{{ $tipo_doc_madre ?? '' }}" selected>{{ $tipo_doc_madre ?? '' }}</option>  
                @include('legajos.crearLegajos.opcionesSelects.opcionesDocumento');
            </select>
            <p class="help-block error hidden">Elegí un tipo de documento</p>
        </div>
  
        <div class="col-md-2 form-group item-form">
          <label for="num_doc_madre">Número de documento</label>
          <input type="number" min="1" class="form-control" id="num_doc_madre" name="num_doc_madre" value="{{ $num_doc_madre ?? '' }}"  required  <?php if($nro_doc_madre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá tu número de documento</p>
      </div>
  
  
        <div class="col-md-2 form-group item-form">
              <label for="nacionalidad_madre">Nacionalidad</label>
              <select name="nacionalidad_madre" id="nacionalidad_madre" class="form-control" value="{{ $nacionalidad_madre ?? '' }}" <?php if($nacionalidad_madre_disabled ?? '' == "si")echo "disabled";?>>
                    <option value="{{ $nacionalidad_madre ?? '' }}" selected>{{ $nacionalidad_madre ?? '' }}</option>
                @include('legajos.crearLegajos.opcionesSelects.opcionesNacionalidades');
                <p class="help-block error hidden">Ingresá nacionalidad</p>
              </select>
          </div>
  
        <div class="col-md-3 form-group item-form">
          <label>Sexo</label>
          <br>
          <label for="F" class="radio-inline">
              <input type="radio" name="sexo_madre" id="sexo_madre" value="F" <?php if($sexo_madre=='F') echo 'checked="checked"'; ?> {{ $sexo_madre_f ?? '' }}> Femenino
            </label>
            <br>
            <label for="M" class="radio-inline">
                  <input type="radio" name="sexo_madre" id="sexo_madre" value="M" <?php if($sexo_madre=='M') echo 'checked="checked"'; ?> {{ $sexo_madre_m ?? '' }}> Masculino
            </label>
          <p class="help-block error hidden">Ingresá tu sexo</p>
      </div>
  </div>
  </fieldset>
  
  <!-- DATOS DE CONTACTO DEL madre-->
    <fieldset>
      <hr>
      <div class="col-md-12 form-group item-form">
        <h3>Datos de contacto del madre</h3>
      </div>
  
      <div class="input-group row-md-4">
  
          <div class="col-md-3 form-group item-form">
              <label for="tel1_madre">Teléfono móvil</label>
              <div class="input-group">
                  <span class="input-group-addon">0</span>&nbsp;&nbsp;
                  <input aria-label="número de teléfono móvil madre" name="tel1_madre" class="form-control" id="tel1_madre"  type="text" value="{{ $tel1_madre ?? '' }}"  required <?php if($tel1_madre_disabled ?? '' == "si")echo "disabled";?>>
              </div>
              <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
          </div>
  
          <div class="col-md-3 form-group item-form">
              <label for="tel2_madre">Teléfono secundario (Opcional)</label>
              <div class="input-group">
                  <span class="input-group-addon">0</span>&nbsp;&nbsp;
                  <input aria-label="número de teléfono secundario madre" class="form-control" id="tel2_madre" name="tel2_madre" type="text" value="{{ $tel2_madre ?? '' }}" <?php if($tel2_madre_disabled ?? '' == "si")echo "disabled";?>>
              </div>
              <p class="help-block error hidden">Ingresá tu número de teléfono secundario</p>
          </div>
  
          <div class="col-md-4 form-group item-form">
            <label for="email_madre">Dirección de correo electrónico</label>
            <input type="email" name="email_madre" class="form-control" id="email_madre" value="{{ $email_madre ?? '' }}"  required <?php if($email_madre_disabled ?? '' == "si")echo "disabled";?>>
            <p class="help-block error hidden">Ingresá un correo electrónico
                <br> El correo electrónico tiene un formato no válido</p>
        </div>
      </div>
    </fieldset>
  <!-- DOMICILIO DE LA madre-->
    <fieldset>
      <hr>
        <div class="input-group row-md-1">
            <div class="col-md-9 form-group item-form">
              <h3>Domicilio del madre </h3>
            </div>
            <div>
                <input type="checkbox" name="madre_mismodomicilio" id="madre_mismodomicilio" <?php $madre_mismodomicilio ?? ''; if($madre_mismodomicilio == "si"){echo "checked=\"checked\"";}?> onChange="mismoDomicilioAlumno(this,'madre');"  <?php if($mismodomicilio_madre_disabled ?? '' == "si")echo "disabled";?>>Mismo domicilio del alumno
               
                </div>

        </div>
  
        <div class="input-group row-md-4">
  
            <div class="col-md-4 form-group item-form">
                <label for="localidad_madre">Localidad</label>
                <select id="localidad_madre" name="localidad_madre" class="form-control" <?php if($localidad_madre_disabled ?? '' == "si")echo "disabled";?>>
                    @include('legajos.crearLegajos.opcionesSelects.opcionesLocalidades');
                </select>
                <p class="help-block error hidden">Elegí una localidad</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="cod_postal_madre">Codigo Postal</label>
                <input type="text" name="cod_postal_madre" class="form-control" id="cod_postal_madre" value="{{ $cod_postal_madre ?? '' }}"  required <?php if($cod_postal_madre_disabled ?? '' == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un codigo postal</p>
            </div>
  
            <div class="col-md-4 form-group item-form">
                <label for="barrio_madre">Barrio</label>
                <input type="text" name="barrio_madre" class="form-control" id="barrio_madre" value ="{{ $barrio_madre ?? '' }}" <?php if($barrio_madre_disabled ?? '' == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un barrio</p>
            </div>
  
        </div>
  
        <div class="input-group row-md-4">
  
            <div class="col-md-4 form-group item-form">
                <label for="calle_madre">Calle</label>
                <input type="text" name="calle_madre" class="form-control" id="calle_madre" value="{{ $calle_madre ?? '' }}"  required <?php if($calle_madre_disabled ?? '' == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá una calle</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="num_calle_madre">Número de calle</label>
                <input type="text" class="form-control" name="num_calle_madre" id="num_calle_madre" value="{{ $num_calle_madre ?? '' }}"  required <?php if($num_calle_madre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá número de calle</p>
            </div>
  
            <div class="col-md-2 form-group item-form">
                <label for="piso_madre">Piso</label>
                <input type="text" name="piso_madre" class="form-control" id="piso_madre" value="{{ $piso_madre ?? '' }}" <?php if($piso_madre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un piso</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="num_depto_madre">Departamento</label>
                <input type="text" class="form-control" id="num_depto_madre" value="{{ $num_depto_madre ?? '' }}" <?php if($num_depto_madre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un un departamento</p>
            </div>
  
        </div>
  
    </fieldset>
  
  <!-- OTROS DATOS ESPECÍFICOS DEL madre-->
    <fieldset>
      <hr>
        <div class="col-md-12 form-group item-form">
            <h3>Otros datos específicos del madre</h3>
        </div>
  
        <div class="col-md-12 form-group item-form">
            <div class="input-group row-md-4">
                <div class="col-md-4 form-group item-form">
                    <label for="profesion_madre">Profesion</label>
                    <input type="text" name="profesion_madre" class="form-control" id="profesion_madre" value="{{ $profesion_madre ?? '' }}"  required <?php if($profesion_madre_disabled ?? ''  == "si")echo "disabled";?>>
                    <p class="help-block error hidden">Ingresa una profesion</p>
                </div>
                <div class="col-md-4 form-group item-form">
                    <label for="lugar_trabajo_madre">Lugar de trabajo</label>
                    <input type="text" name="lugar_trabajo_madre" class="form-control" id="lugar_trabajo_madre" value="{{ $lugar_trabajo_madre ?? '' }}"  required <?php if($lugar_trabajo_madre_disabled ?? ''  == "si")echo "disabled";?>>
                    <p class="help-block error hidden">Ingresa un lugar de trabajo</p>
                </div>
            </div>
        </div>
  
    </fieldset>
  <!-- DOMICILIO LABORAL DEL madre -->
    <fieldset>
      <hr>
        <div class="input-group row-md-1">
            
          <div class="col-md-10 form-group item-form">
            <h3>Domicilio laboral del madre </h3>
          </div>
          <div>
            <input type="checkbox" name="madre_no_trabaja" id="madre_no_trabaja" value="desactivado" <?php if($madre_no_trabaja ?? '' == 'si'){echo "checked=\"checked\"";}else{echo "";} ?> onChange="personaNoTrabaja(this,'madre');" <?php if($notrabaja_madre_disabled ?? ''  == "si")echo "disabled";?>>No trabaja</div>
          </div>
  
        <div class="input-group row-md-4">
  
            <div class="col-md-4 form-group item-form">
                <label for="localidad_lab_madre">Localidad</label>
                <select id="localidad_lab_madre" name="localidad_lab_madre" class="form-control" <?php if($localidad_lab_madre_disabled ?? ''  == "si")echo "disabled";?>>
                    @include('legajos.crearLegajos.opcionesSelects.opcionesLocalidades');
                </select>
                <p class="help-block error hidden">Elegí una localidad</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="cod_postal_lab_madre">Codigo Postal</label>
                <input type="text" name="cod_postal_lab_madre" class="form-control" id="cod_postal_lab_madre" value="{{ $cod_postal_lab_madre ?? '' }}" <?php if($cod_postal_lab_madre_disabled ?? ''  == "si")echo "disabled";?> >
                <p class="help-block error hidden">Ingresá un codigo postal</p>
            </div>
  
            <div class="col-md-4 form-group item-form">
                <label for="calle_lab_madre">Calle</label>
                <input type="text" name="calle_lab_madre" class="form-control" id="calle_lab_madre" value="{{ $calle_lab_madre ?? '' }}" <?php if($calle_lab_madre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá una calle</p>
            </div>
  
        </div>
  
        <div class="input-group row-md-4">
            <div class="col-md-3 form-group item-form">
                <label for="num_calle_lab_madre">Número de calle</label>
                <input type="text" class="form-control" name="num_calle_lab_madre" id="num_calle_lab_madre"  value="{{ $num_calle_lab_madre ?? '' }}"  <?php if($num_calle_lab_madre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá número de calle</p>
            </div>
  
            <div class="col-md-2 form-group item-form">
                <label for="piso_lab_madre">Piso</label>
                <input type="text" name="piso_lab_madre" class="form-control" id="piso_lab_madre" name="piso_lab_madre" value="{{ $piso_lab_madre ?? '' }}" <?php if($piso_lab_madre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un piso</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="num_depto_lab_madre">Departamento</label>
                <input type="text" class="form-control" id="num_depto_lab_madre" name="num_depto_lab_madre" value="{{ $num_depto_lab_madre ?? '' }}" <?php if($num_depto_lab_madre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un un departamento</p>
            </div>
            <div class="col-md-3 form-group item-form">
                <label for="tel_lab_madre">Teléfono móvil</label>
                <div class="input-group">
                    <span class="input-group-addon">0</span>&nbsp;&nbsp;
                    <input aria-label="número de teléfono móvil madre" name="tel_lab_madre" class="form-control" id="tel_lab_madre"  type="text" value="{{ $tel_lab_madre ?? '' }}" <?php if($tel_lab_madre_disabled ?? ''  == "si")echo "disabled";?>>
                </div>
                <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
            </div>
  
        </div>
    </fieldset>