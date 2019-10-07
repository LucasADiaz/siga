<fieldset>
    <hr size="8px" color="black" />
    <div class="input-group row-md-1">
        <div class="col-md-10 form-group item-form">
          <h3>Datos personales del padre</h3>
        </div>
        <div>
            <input type="checkbox" name="padre_fallecido" id="padre_fallecido" <?php if($fallecido_padre ?? '' == "si")echo "checked=\"checked\"";?> onChange="personaFallecida(this,'padre');" >Fallecido
        </div>
    </div>
  
    <div class="input-group row-md-4">
      
      <div class="col-md-3 form-group item-form">
          <label for="nombres_padre">Nombres</label>
          <input type="text" name="nombres_padre" class="form-control" id="nombres_padre" value="{{ $nombres_padre ?? '' }}"  required <?php if($nombres_padre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá tu nombre</p>
      </div>
  
      <div class="col-md-3 form-group item-form">
          <label for="apellidos_padre">Apellidos</label>
          <input type="text" name="apellidos_padre" class="form-control" id="apellidos_padre" value="{{ $apellidos_padre ?? '' }}"  required <?php if($apellidos_padre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá tu apellido</p>
      </div>
  
      <div class="col-md-3 form-group item-form">
          <label for="lugar_nac_padre">Lugar de nacimiento</label>
          <input type="text" name="lugar_nac_padre" class="form-control" id="lugar_nac_padre" value="{{ $lugar_nac_padre ?? '' }}"  required  <?php if($lugar_nac_padre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
      </div>
  
      <div class="col-md-3 form-group item-form">
          <label for="fec_nac_padre">Fecha de nacimiento</label>
          <input type="date" name="fec_nac_padre" class="form-control"  id="fec_nac_padre" value="{{ $fec_nac_padre ?? '' }}"<?php if($fec_nac_padre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá una fecha válida</p>
      </div>
  
  
    </div>
  
    <div class="input-group row-md-4">
        <div class="col-md-3 form-group item-form">
            <label for="tipo_doc_padre">Tipo de Documento</label>
            <select id="tipo_doc_padre" name="tipo_doc_padre" class="form-control"  value="{{ $tipo_doc_padre ?? '' }}"<?php if($tipo_doc_padre_disabled ?? '' == "si")echo "disabled";?>>
                <option value="{{ $tipo_doc_padre ?? '' }}" selected>{{ $tipo_doc_padre ?? '' }}</option>  
                @include('legajos.crearLegajos.opcionesSelects.opcionesDocumento');
            </select>
            <p class="help-block error hidden">Elegí un tipo de documento</p>
        </div>
  
        <div class="col-md-2 form-group item-form">
          <label for="num_doc_padre">Número de documento</label>
          <input type="number" min="1" class="form-control" id="num_doc_padre" name="num_doc_padre" value="{{ $num_doc_padre ?? '' }}"  required  <?php if($nro_doc_padre_disabled ?? '' == "si")echo "disabled";?>>
          <p class="help-block error hidden">Ingresá tu número de documento</p>
      </div>
  
  
        <div class="col-md-2 form-group item-form">
              <label for="nacionalidad_padre">Nacionalidad</label>
              <select name="nacionalidad_padre" id="nacionalidad_padre" class="form-control" value="{{ $nacionalidad_padre ?? '' }}" <?php if($nacionalidad_padre_disabled ?? '' == "si")echo "disabled";?>>
                    <option value="{{ $nacionalidad_padre ?? '' }}" selected>{{ $nacionalidad_padre ?? '' }}</option>
                @include('legajos.crearLegajos.opcionesSelects.opcionesNacionalidades');
                <p class="help-block error hidden">Ingresá nacionalidad</p>
              </select>
          </div>
  
        <div class="col-md-3 form-group item-form">
          <label>Sexo</label>
          <br>
          <label for="F" class="radio-inline">
                <input type="radio" name="sexo_padre" id="sexo_padre" value="F" <?php if($sexo_padre ?? '' =='F') echo 'checked="checked"'; ?> > Femenino
              </label>
              <br>
              <label for="M" class="radio-inline">
                    <input type="radio" name="sexo_padre" id="sexo_padre" value="M" <?php if($sexo_padre ?? '' =='M') echo 'checked="checked"'; ?> checked> Masculino
              </label>
          <p class="help-block error hidden">Ingresá tu sexo</p>
      </div>
  </div>
  </fieldset>
  
  <!-- DATOS DE CONTACTO DEL PADRE-->
    <fieldset>
      <hr>
      <div class="col-md-12 form-group item-form">
        <h3>Datos de contacto del padre</h3>
      </div>
  
      <div class="input-group row-md-4">
  
          <div class="col-md-3 form-group item-form">
              <label for="tel1_padre">Teléfono móvil</label>
              <div class="input-group">
                  <span class="input-group-addon">0</span>&nbsp;&nbsp;
                  <input aria-label="número de teléfono móvil padre" name="tel1_padre" class="form-control" id="tel1_padre"  type="text" value="{{ $tel1_padre ?? '' }}"  required <?php if($tel1_padre_disabled ?? '' == "si")echo "disabled";?>>
              </div>
              <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
          </div>
  
          <div class="col-md-3 form-group item-form">
              <label for="tel2_padre">Teléfono secundario (Opcional)</label>
              <div class="input-group">
                  <span class="input-group-addon">0</span>&nbsp;&nbsp;
                  <input aria-label="número de teléfono secundario padre" class="form-control" id="tel2_padre" name="tel2_padre" type="text" value="{{ $tel2_padre ?? '' }}" <?php if($tel2_padre_disabled ?? '' == "si")echo "disabled";?>>
              </div>
              <p class="help-block error hidden">Ingresá tu número de teléfono secundario</p>
          </div>
  
          <div class="col-md-4 form-group item-form">
            <label for="email_padre">Dirección de correo electrónico</label>
            <input type="email" name="email_padre" class="form-control" id="email_padre" value="{{ $email_padre ?? '' }}"  required <?php if($email_padre_disabled ?? '' == "si")echo "disabled";?>>
            <p class="help-block error hidden">Ingresá un correo electrónico
                <br> El correo electrónico tiene un formato no válido</p>
        </div>
      </div>
    </fieldset>
  <!-- DOMICILIO DEL PADRE-->
    <fieldset>
      <hr>
        <div class="input-group row-md-1">
            <div class="col-md-9 form-group item-form">
              <h3>Domicilio del padre </h3>
            </div>
  
            <div>
        <input type="checkbox" name="padre_mismodomicilio" id="padre_mismodomicilio" <?php $padre_mismodomicilio ?? ''; if($padre_mismodomicilio == "si"){echo "checked=\"checked\"";}?> onChange="mismoDomicilioAlumno(this,'padre');" <?php if($mismodomicilio_padre_disabled ?? '' == "si")echo "disabled"; ?> >Mismo domicilio del alumno
                  
        </div>
  
        <div class="input-group row-md-4">
  
            <div class="col-md-4 form-group item-form">
                <label for="localidad_padre">Localidad</label>
                <select id="localidad_padre" name="localidad_padre" class="form-control" <?php if($localidad_padre_disabled ?? '' == "si")echo "disabled";?>>
                    @include('legajos.crearLegajos.opcionesSelects.opcionesLocalidades');
                </select>
                <p class="help-block error hidden">Elegí una localidad</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="cod_postal_padre">Codigo Postal</label>
                <input type="text" name="cod_postal_padre" class="form-control" id="cod_postal_padre" value="{{ $cod_postal_padre ?? '' }}"  required <?php if($cod_postal_padre_disabled ?? '' == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un codigo postal</p>
            </div>
  
            <div class="col-md-4 form-group item-form">
                <label for="barrio_padre">Barrio</label>
                <input type="text" name="barrio_padre" class="form-control" id="barrio_padre" value ="{{ $barrio_padre ?? '' }}" <?php if($barrio_padre_disabled ?? '' == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un barrio</p>
            </div>
  
        </div>
  
        <div class="input-group row-md-4">
  
            <div class="col-md-4 form-group item-form">
                <label for="calle_padre">Calle</label>
                <input type="text" name="calle_padre" class="form-control" id="calle_padre" value="{{ $calle_padre ?? '' }}"  required <?php if($calle_padre_disabled ?? '' == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá una calle</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="num_calle_padre">Número de calle</label>
                <input type="text" class="form-control" name="num_calle_padre" id="num_calle_padre" value="{{ $num_calle_padre ?? '' }}"  required <?php if($num_calle_padre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá número de calle</p>
            </div>
  
            <div class="col-md-2 form-group item-form">
                <label for="piso_padre">Piso</label>
                <input type="text" name="piso_padre" class="form-control" id="piso_padre" value="{{ $piso_padre ?? '' }}" <?php if($piso_padre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un piso</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="num_depto_padre">Departamento</label>
                <input type="text" class="form-control" id="num_depto_padre" value="{{ $num_depto_padre ?? '' }}" <?php if($num_depto_padre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un un departamento</p>
            </div>
  
        </div>
  
    </fieldset>
  
  <!-- OTROS DATOS ESPECÍFICOS DEL padre-->
    <fieldset>
      <hr>
        <div class="col-md-12 form-group item-form">
            <h3>Otros datos específicos del padre</h3>
        </div>
  
        <div class="col-md-12 form-group item-form">
            <div class="input-group row-md-4">
                <div class="col-md-4 form-group item-form">
                    <label for="profesion_padre">Profesion</label>
                    <input type="text" name="profesion_padre" class="form-control" id="profesion_padre" value="{{ $profesion_padre ?? '' }}"  required <?php if($profesion_padre_disabled ?? ''  == "si")echo "disabled";?>>
                    <p class="help-block error hidden">Ingresa una profesion</p>
                </div>
                <div class="col-md-4 form-group item-form">
                    <label for="lugar_trabajo_padre">Lugar de trabajo</label>
                    <input type="text" name="lugar_trabajo_padre" class="form-control" id="lugar_trabajo_padre" value="{{ $lugar_trabajo_padre ?? '' }}"  required <?php if($lugar_trabajo_padre_disabled ?? ''  == "si")echo "disabled";?>>
                    <p class="help-block error hidden">Ingresa un lugar de trabajo</p>
                </div>
            </div>
        </div>
  
    </fieldset>
  <!-- DOMICILIO LABORAL DEL padre -->
    <fieldset>
      <hr>
        <div class="input-group row-md-1">
            
          <div class="col-md-10 form-group item-form">
            <h3>Domicilio laboral del padre </h3>
          </div>
          <div>
            <input type="checkbox" name="padre_no_trabaja" id="padre_no_trabaja" value="activado" onChange="personaNoTrabaja(this,'padre');" <?php if($notrabaja_padre_disabled ?? ''  == "si")echo "disabled";?>>No trabaja</div>
          </div>
  
        <div class="input-group row-md-4">
  
            <div class="col-md-4 form-group item-form">
                <label for="localidad_lab_padre">Localidad</label>
                <select id="localidad_lab_padre" name="localidad_lab_padre" class="form-control" <?php if($localidad_lab_padre_disabled ?? ''  == "si")echo "disabled";?>>
                    @include('legajos.crearLegajos.opcionesSelects.opcionesLocalidades');
                </select>
                <p class="help-block error hidden">Elegí una localidad</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="cod_postal_lab_padre">Codigo Postal</label>
                <input type="text" name="cod_postal_lab_padre" class="form-control" id="cod_postal_lab_padre" value="{{ $cod_postal_lab_padre ?? '' }}" <?php if($cod_postal_lab_padre_disabled ?? ''  == "si")echo "disabled";?> >
                <p class="help-block error hidden">Ingresá un codigo postal</p>
            </div>
  
            <div class="col-md-4 form-group item-form">
                <label for="calle_lab_padre">Calle</label>
                <input type="text" name="calle_lab_padre" class="form-control" id="calle_lab_padre" value="{{ $calle_lab_padre ?? '' }}" <?php if($calle_lab_padre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá una calle</p>
            </div>
  
        </div>
  
        <div class="input-group row-md-4">
            <div class="col-md-3 form-group item-form">
                <label for="num_calle_lab_padre">Número de calle</label>
                <input type="text" class="form-control" name="num_calle_lab_padre" id="num_calle_lab_padre"  value="{{ $num_calle_lab_padre ?? '' }}"  <?php if($num_calle_lab_padre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá número de calle</p>
            </div>
  
            <div class="col-md-2 form-group item-form">
                <label for="piso_lab_padre">Piso</label>
                <input type="text" name="piso_lab_padre" class="form-control" id="piso_lab_padre" name="piso_lab_padre" value="{{ $piso_lab_padre ?? '' }}" <?php if($piso_lab_padre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un piso</p>
            </div>
  
            <div class="col-md-3 form-group item-form">
                <label for="num_depto_lab_padre">Departamento</label>
                <input type="text" class="form-control" id="num_depto_lab_padre" name="num_depto_lab_padre" value="{{ $num_depto_lab_padre ?? '' }}" <?php if($num_depto_lab_padre_disabled ?? ''  == "si")echo "disabled";?>>
                <p class="help-block error hidden">Ingresá un un departamento</p>
            </div>
            <div class="col-md-3 form-group item-form">
                <label for="tel_lab_padre">Teléfono móvil</label>
                <div class="input-group">
                    <span class="input-group-addon">0</span>&nbsp;&nbsp;
                    <input aria-label="número de teléfono móvil padre" name="tel_lab_padre" class="form-control" id="tel_lab_padre"  type="text" value="{{ $tel_lab_padre ?? '' }}" <?php if($tel_lab_padre_disabled ?? ''  == "si")echo "disabled";?>>
                </div>
                <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
            </div>
  
        </div>
    </fieldset>