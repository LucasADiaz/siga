<fieldset>
    <hr size="8px" color="black" />
    <div class="input-group row-md-1">
      <div class="col-md-9 form-group item-form">
        <h3>Datos personales del tutor</h3>
      </div>
      <div>
   
        <input type="checkbox" name="madre_es_tutor" id="madre_es_tutor" value="activado" <?php $madre_es_tutor ?? ''; if($madre_es_tutor == "si")echo "checked";?>  onChange="esElTutor(this,'madre');">Es la madre
      </div>&nbsp;&nbsp;
      <div>
        <input type="checkbox" name="padre_es_tutor" id="padre_es_tutor" value="activado" onChange="esElTutor(this,'padre');">Es el padre
      </div>&nbsp;&nbsp;
    </div>

    <div class="input-group row-md-4">

        <div class="col-md-3 form-group item-form">
            <label for="nombres_tutor">Nombres</label>
            <input type="text" name="nombres_tutor" class="form-control" id="nombres_tutor" value="{{ $nombres_tutor ?? '' }}"  required>
            <p class="help-block error hidden">Ingresá tu nombre</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="apellidos_tutor">Apellidos</label>
            <input type="text" name="apellidos_tutor" class="form-control" id="apellidos_tutor" value="{{ $apellidos_tutor ?? '' }}"  required>
            <p class="help-block error hidden">Ingresá tu apellido</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="lugar_nac_tutor">Lugar de nacimiento</label>
            <input type="text" name="lugar_nac_tutor" class="form-control" id="lugar_nac_tutor" value="{{ $lugar_nac_tutor ?? '' }}"  required>
            <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="fec_nac_tutor">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fec_nac_tutor" name="fec_nac_tutor" value="{{ $fec_nac_tutor ?? '' }}" required>
            <p class="help-block error hidden">Ingresá una fecha válida</p>
        </div>

    </div>

    <div class="input-group row-md-4">
        <div class="col-md-3 form-group item-form">
            <label for="tipo_doc_tutor">Tipo de Documento</label>
            <select id="tipo_doc_tutor" name="tipo_doc_tutor" class="form-control">
                <option value="{{ $tipo_doc_tutor ?? '' }}" selected>{{ $tipo_doc_tutor ?? '' }}</option>  
                @include('legajos.crearLegajos.opcionesSelects.opcionesDocumento');
            </select>
            <p class="help-block error hidden">Elegí un tipo de documento</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="num_doc_tutor">Número de documento</label>
            <input type="number" min="1" class="form-control" id="num_doc_tutor" name="num_doc_tutor" value="{{ $num_doc_tutor ?? '' }}"  required>
            <p class="help-block error hidden">Ingresá tu número de documento</p>
        </div>

        <div class="col-md-2 form-group item-form">
                <label for="nacionalidad_tutor">Nacionalidad</label>
                <select name="nacionalidad_tutor" id="nacionalidad_tutor" class="form-control">
                        <option value="{{ $nacionalidad_tutor ?? '' }}" selected>{{ $nacionalidad_tutor ?? '' }}</option>
                    @include('legajos.crearLegajos.opcionesSelects.opcionesNacionalidades');
                      <p class="help-block error hidden">Ingresá nacionalidad</p>
                </select>
            </div>
            <div class="col-md-2 form-group item-form">
                <label>Sexo</label>
                <br>
                <label for="F" class="radio-inline">
            <input type="radio" name="sexo_tutor" id="sexo_tutor" value="F" <?php if($sexo_tutor ?? '' =='F') echo 'checked="checked"'; ?> > Femenino
          </label>
          <br>
          <label for="M" class="radio-inline">
                <input type="radio" name="sexo_tutor" id="sexo_tutor" value="M" <?php if($sexo_tutor ?? '' =='M') echo 'checked="checked"'; ?> > Masculino
          </label>
                <p class="help-block error hidden">Ingresá tu sexo</p>
            </div>
           <div class="col-md-2 form-group item-form">
            <label for="parentesco_tutor">Parentesco</label>
            <select id="parentesco_tutor" name="parentesco_tutor" class="form-control">
                <option value="{{ $parentesco_tutor ?? '' }}" selected ="">{{ $parentesco_tutor ?? '' }}</option>
                <option value="Hermano">Hermano</option>
                <option value="Hermana" >Hermana</option>
                <option value="Tio">Tio</option>
                <option value="Tia">Tia</option>
                <option value="Abuelo">Abuelo</option>
                <option value="Abuela">Abuela</option>
                <option value="Padre" style="display:none;">Padre</option>
                <option value="Madre" style="display:none;">Madre</option>
               
            </select>
            <p class="help-block error hidden">Elegí un parentesco</p>
        </div>

    </div>

  </fieldset>

<!-- DATOS DE CONTACTO DEL TUTOR-->
  <fieldset>
    <hr>
    <div class="col-md-12 form-group item-form">
      <h3>Datos de contacto del tutor</h3>
    </div>

    <div class="input-group row-md-4">

      <div class="col-md-3 form-group item-form">
          <label for="tel1_tutor">Teléfono móvil</label>
          <br>
          <div class="input-group">
              <span class="input-group-addon">0</span>&nbsp;&nbsp;
              <input aria-label="número de teléfono móvil del tutor" class="form-control" id="tel1_tutor" name="tel1_tutor" type="text" value="{{ $tel1_tutor ?? '' }}"  required>
          </div>
          <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
      </div>

      <div class="col-md-3 form-group item-form">
          <label for="tel2_tutor">Teléfono secundario (Opcional)</label>
          <br>
          <div class="input-group">
              <span class="input-group-addon">0</span>&nbsp;&nbsp;
              <input aria-label="número de teléfono secundario del tutor" class="form-control" id="tel2_tutor" name="tel2_tutor" value="{{ $tel2_tutor ?? '' }}" type="text">
          </div>
          <p class="help-block error hidden">Ingresá tu número de teléfono secundario</p>
      </div>

      <div class="col-md-4 form-group item-form">
          <label for="email_tutor">Dirección de correo electrónico</label>
          <input type="email" name="email_tutor" class="form-control" id="email_tutor" value="{{ $email_tutor ?? '' }}"  required>
          <p class="help-block error hidden">Ingresá un correo electrónico
              <br> El correo electrónico tiene un formato no válido</p>
      </div>
    </div>
  </fieldset>

<!-- DOMICILIO DEL TUTOR-->
  <fieldset>
    <hr>
    <div class="input-group row-md-1">
        <div class="col-md-9 form-group item-form">
          <h3>Domicilio del tutor </h3>
        </div>
        <div>
                <input type="checkbox" name="tutor_mismodomicilio" id="tutor_mismodomicilio" value="desactivado" <?php $tutor_mismodomicilio ?? ''; if($tutor_mismodomicilio == "si")echo "checked";?> onChange="mismoDomicilioAlumno(this,'tutor');" <?php if($mismodomicilio_tutor_disabled ?? '' == "si")echo "disabled"; ?> >Mismo domicilio del alumno
            </div>
    </div>

    <div class="input-group row-md-4">

        <div class="col-md-4 form-group item-form">
            <label for="localidad_tutor">Localidad</label>
            <select id="localidad_tutor" name="localidad_tutor" id="localidad_tutor" class="form-control">
                <option value="{{ $localidad_tutor ?? '' }}" selected="">{{ $localidad_tutor ?? '' }}</option>
                @include('legajos.crearLegajos.opcionesSelects.opcionesLocalidades');
            </select>
            <p class="help-block error hidden">Elegí una localidad</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="cod_postal_tutor">Codigo Postal</label>
            <input type="text" name="cod_postal_tutor" class="form-control" id="cod_postal_tutor" value="{{ $cod_postal_tutor ?? '' }}"  required>
            <p class="help-block error hidden">Ingresá un codigo postal</p>
        </div>

        <div class="col-md-4 form-group item-form">
            <label for="barrio_tutor">Barrio</label>
            <input type="text" name="barrio_tutor" class="form-control" id="barrio_tutor" value="{{ $barrio_tutor ?? '' }}">
            <p class="help-block error hidden">Ingresá un barrio</p>
        </div>

    </div>

    <div class="input-group row-md-4">

        <div class="col-md-4 form-group item-form">
            <label for="calle_tutor">Calle</label>
            <input type="text" name="calle_tutor" class="form-control" id="calle_tutor" value="{{ $calle_tutor ?? '' }}"  required >
            <p class="help-block error hidden">Ingresá una calle</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="num_calle_tutor">Número de calle</label>
            <input type="text" class="form-control" id="num_calle_tutor" name="num_calle_tutor" value="{{ $num_calle_tutor ?? '' }}"  required>
            <p class="help-block error hidden">Ingresá número de calle</p>
        </div>

        <div class="col-md-2 form-group item-form">
            <label for="piso_tutor">Piso</label>
            <input type="text" name="piso_tutor" class="form-control" id="piso_tutor" value="{{ $piso_tutor ?? '' }}">
            <p class="help-block error hidden">Ingresá un piso</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="num_depto_tutor">Departamento</label>
            <input type="text" class="form-control" id="num_depto_tutor" name="num_depto_tutor" value="{{ $num_depto_tutor ?? '' }}">
            <p class="help-block error hidden">Ingresá un un departamento</p>
        </div>

    </div>

  </fieldset>

<!-- OTROS DATOS ESPECÍFICOS DEL TUTOR-->
<fieldset>
    <hr>
      <div class="col-md-12 form-group item-form">
          <h3>Otros datos específicos del padre</h3>
      </div>

      <div class="col-md-12 form-group item-form">
          <div class="input-group row-md-4">
              <div class="col-md-4 form-group item-form">
                  <label for="profesion_tutor">Profesion</label>
                  <input type="text" name="profesion_tutor" class="form-control" id="profesion_tutor" value="{{ $profesion_tutor ?? '' }}"  required>
                  <p class="help-block error hidden">Ingresa una profesion</p>
              </div>
              <div class="col-md-4 form-group item-form">
                  <label for="lugar_trabajo_tutor">Lugar de trabajo</label>
                  <input type="text" name="lugar_trabajo_tutor" class="form-control" id="lugar_trabajo_tutor"value="{{ $lugar_trabajo_tutor ?? '' }}" >
                  <p class="help-block error hidden">Ingresa un lugar de trabajo</p>
              </div>
          </div>
      </div>

  </fieldset>
  
<!-- DOMICILIO LABORAL DEL TUTOR-->
  <fieldset>
    <hr>
      <div class="input-group row-md-1">
          <div class="col-md-10 form-group item-form">
            <h3>Domicilio laboral del tutor </h3>
          </div>
          <div>
              <input type="checkbox" name="tutor_no_trabaja" value="activado" id="tutor_no_trabaja" onChange="personaNoTrabaja(this,'tutor');">No trabaja
          </div>
      </div>

      <div class="input-group row-md-4">

        <div class="col-md-4 form-group item-form">
            <label for="localidad_lab_tutor">Localidad</label>
            <select id="localidad_lab_tutor" name="localidad_lab_tutor" class="form-control">
                <option value="{{ $localidad_lab_tutor ?? '' }}" selected="">{{ $localidad_lab_tutor ?? '' }}</option>
                @include('legajos.crearLegajos.opcionesSelects.opcionesLocalidades');

            </select>
            <p class="help-block error hidden">Elegí una localidad</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="cod_postal_lab_tutor">Codigo Postal</label>
            <input type="text" name="cod_postal_lab_tutor" class="form-control" id="cod_postal_lab_tutor" value="{{ $cod_postal_lab_tutor ?? '' }}"  >
            <p class="help-block error hidden">Ingresá un codigo postal</p>
        </div>

        <div class="col-md-4 form-group item-form">
            <label for="calle_lab_tutor">Calle</label>
            <input type="text" name="calle_lab_tutor" class="form-control" id="calle_lab_tutor" value="{{ $calle_lab_tutor ?? '' }}" >
            <p class="help-block error hidden">Ingresá una calle</p>
        </div>

    </div>

    <div class="input-group row-md-4">
        <div class="col-md-3 form-group item-form">
            <label for="num_calle_lab_tutor">Número de calle</label>
            <input type="text" class="form-control" name="num_calle_lab_tutor" id="num_calle_lab_tutor"  value="{{ $num_calle_lab_tutor ?? '' }}"  >
            <p class="help-block error hidden">Ingresá número de calle</p>
        </div>

        <div class="col-md-2 form-group item-form">
            <label for="piso_lab_tutor">Piso</label>
            <input type="text" name="piso_lab_tutor" class="form-control" id="piso_lab_tutor" name="piso_lab_tutor" value="{{ $piso_lab_tutor ?? '' }}">
            <p class="help-block error hidden">Ingresá un piso</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="num_depto_lab_tutor">Departamento</label>
            <input type="text" class="form-control" id="num_depto_lab_tutor" name="num_depto_lab_tutor" value="{{ $num_depto_lab_tutor ?? '' }}">
            <p class="help-block error hidden">Ingresá un un departamento</p>
        </div>
        <div class="col-md-3 form-group item-form">
            <label for="tel_lab_tutor">Teléfono móvil</label>
            <div class="input-group">
                <span class="input-group-addon">0</span>&nbsp;&nbsp;
                <input aria-label="número de teléfono móvil padre" name="tel_lab_tutor" class="form-control" id="tel_lab_tutor"  type="text" value="{{ $tel_lab_tutor ?? '' }}">
            </div>
            <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
        </div>

    </div>
  </fieldset>