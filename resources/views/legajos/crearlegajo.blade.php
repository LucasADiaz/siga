
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12 col-md-offset-2">
          <h1>Crear Legajo del Alumno</h1>
          <p>Se creará el legajo de un alumno, con todos sus datos y los datos de sus familares.</p>
          <hr>

          <!--  <div class="wizard m-b-3">
                <p class="text-muted">Paso 1 de 4</p>
                <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                  <span class="sr-only">Paso 1 de 4</span>
                </div>
              </div>
            </div> 
            -->

          
              
      <div class="col-md-12">
          <div class="card">
              <form>
                <!-- DATOS DEL ALUMNO -->
                  <fieldset>
                      <div class="col-md-4 form-group item-form">
                          <br>
                          <h3>Datos personales del Alumno</h3>
                      </div>

                      <div class="input-group row-md-4">
                        
                          <div class="col-md-3 form-group item-form">
                              <label for="nombres_alu">Nombres</label>
                              <input type="text" name="nombres_alu" class="form-control" id="nombres_alu" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu nombre</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="apellidos_alu">Apellidos</label>
                              <input type="text" name="apellidos_alu" class="form-control" id="apellidos_alu" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu apellido</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="lugar_nac_alu">Lugar de nacimiento</label>
                              <input type="text" name="lugar_nac_alu" class="form-control" id="lugar_nac_alu" required aria-required="true">
                              <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="fec_nac_alu">Fecha de nacimiento</label>
                              <input type="date" class="form-control" id="fec_nac_alu" required aria-required="true">
                              <p class="help-block error hidden">Ingresá una fecha válida</p>
                          </div>

                      </div>

                      <div class="input-group row-md-4">

                          <div class="col-md-3 form-group item-form">
                              <label for="tipo_doc_alu">Tipo de Documento</label>
                              <select id="tipo_doc_alu" name="tipo_doc_alu" class="form-control">
                                  <option value="DNI" selected="">DNI</option>
                                  <option value="Libreta de Enrolamiento">Libreta de Enrolamiento</option>
                                  <option value="Libreta Cívica">Libreta Cívica</option>
                                  <option value="Pasaporte extranjero">Pasaporte extranjero</option>
                              </select>
                              <p class="help-block error hidden">Elegí un tipo de documento</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="num_doc_alu">Número de documento</label>
                              <input type="number" min="1" class="form-control" id="num_doc_alu" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu número de documento</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="nacionalidad_alu">Nacionalidad</label>
                              <input type="text" name="nacionalidad_alu" class="form-control" id="nacionalidad_alu" required aria-required="true">
                              <p class="help-block error hidden">Ingresá nacionalidad</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label>Sexo</label>
                              <br>
                              <label for="f" class="radio-inline">
                                  <input type="radio" name="sexo_alu" id="f" value="F" required aria-required="true"> Femenino
                              </label>
                              <label for="m" class="radio-inline">
                                  <input type="radio" name="sexo_alu" id="m" value="M" required aria-required="true"> Masculino
                              </label>
                              <p class="help-block error hidden">Ingresá tu sexo</p>
                          </div>

                      </div>

                  </fieldset>

                <!-- DATOS DE CONTACTO DEL ALUMNO -->
                  <hr>
                  <fieldset>
                  <div class="col-md-12 form-group item-form">
                      <h3>Datos de contacto del Alumno</h3>
                  </div>

                  <div class="input-group row-md-4">

                      <div class="col-md-3 form-group item-form">
                          <label for="tel1_alu">Teléfono</label>
                          <div class="input-group">
                              <span class="input-group-addon">0</span>&nbsp;&nbsp;
                              <input aria-label="número de teléfono" class="form-control" id="tel1_alu" required aria-required="true" type="text">
                          </div>
                          <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="tel2_alu">Teléfono Secundario (Opcional)</label>
                          <div class="input-group">
                              <span class="input-group-addon">0</span>&nbsp;&nbsp;
                              <input aria-label="número de teléfono secundario" class="form-control" id="tel2_alu" aria-required="true" type="text">
                          </div>
                          <p class="help-block error hidden">Ingresá tu número de teléfono secundario</p>
                      </div>

                      <div class="col-md-4 form-group item-form">
                          <label for="email_alu">Dirección de correo electrónico</label>
                          <input type="email" name="email_alu" class="form-control" id="email_alu" required aria-required="true">
                          <p class="help-block error hidden">Ingresá un correo electrónico
                              <br> El correo electrónico tiene un formato no válido</p>
                      </div>
                  </div>

                <!-- DOMICILIO DEL ALUMNO -->
                  <hr>
                  <fieldset>
                  <div class="col-md-12 form-group item-form">
                    <h3>Domicilio del Alumno</h3>
                  </div>

                  <div class="input-group row-md-4">
                      <div class="col-md-4 form-group item-form">
                          <label for="localidad_alu">Localidad</label>
                          <select id="localidad_alu" name="localidad_alu" class="form-control">
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
                          <label for="cod_postal_alu">Codigo Postal</label>
                          <input type="text" name="cod_postal_alu" class="form-control" id="cod_postal_alu" required aria-required="true">
                          <p class="help-block error hidden">Ingresá un codigo postal</p>
                      </div>

                      <div class="col-md-4 form-group item-form">
                          <label for="barrio_alu">Barrio</label>
                          <input type="text" name="barrio_alu" class="form-control" id="barrio_alu" aria-required="true">
                          <p class="help-block error hidden">Ingresá un barrio</p>
                      </div>

                  </div>

                  <div class="input-group row-md-4">
                      <div class="col-md-4 form-group item-form">
                          <label for="calle_alu">Calle</label>
                          <input type="text" name="calle_alu" class="form-control" id="calle_alu" required aria-required="true">
                          <p class="help-block error hidden">Ingresá una calle</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="num_calle_alu">Número de calle</label>
                          <input type="text" class="form-control" id="num_calle_alu" required aria-required="true">
                          <p class="help-block error hidden">Ingresá número de calle</p>
                      </div>

                      <div class="col-md-2 form-group item-form">
                          <label for="piso_alu">Piso</label>
                          <input type="text" name="piso_alu" class="form-control" id="piso_alu" aria-required="true">
                          <p class="help-block error hidden">Ingresá un piso</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="depto_alu">Departamento</label>
                          <input type="text" class="form-control" id="depto_alu" aria-required="true">
                          <p class="help-block error hidden">Ingresá un un departamento</p>
                      </div>
                  </div>

                  </fieldset>

                <!-- OTROS DATOS ESPECÍFICOS DEL ALUMNO -->
                  <fieldset>
                      <hr>
                      <div class="col-md-12 form-group item-form">
                          <h3>Otros datos específicos del Alumno</h3>
                      </div>

                      <div class="col-md-12 form-group item-form">
                          <div class="input-group row-md-4">
                              <div class="col-md-4 form-group item-form">
                                  <label for="esc_procedencia_alu">Escuela o colegio del que procede</label>
                                  <input type="text" name="esc_procedencia_alu" class="form-control" id="esc_procedencia_alu" required aria-required="true">
                                  <p class="help-block error hidden">Ingresá una escuela o colegio</p>
                              </div>

                          </div>
                      </div>
                <!--DATOS PERSONALES DE LA MADRE-->
                  <fieldset>
                      <hr>
                      <div class="input-group row-md-1">
                          <div class="col-md-10 form-group item-form">
                            <h3>Datos personales de la madre</h3>
                          </div>

                          <div>
                              <input type="checkbox" name="madre_fallecida" value="activado">Fallecida
                          </div>
                      </div>

                      <div class="input-group row-md-4">
                          <div class="col-md-3 form-group item-form">
                              <label for="nombres_madre">Nombres</label>
                              <input type="text" name="nombres_madre" class="form-control" id="nombres_madre" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu nombre</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="apellidos_madre">Apellidos</label>
                              <input type="text" name="apellidos_madre" class="form-control" id="apellidos_madre" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu apellido</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="lugar_nac_madre">Lugar de nacimiento</label>
                              <input type="text" name="lugar_nac_madre" class="form-control" id="lugar_nac_madre" required aria-required="true">
                              <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="fec_nac_madre">Fecha de nacimiento</label>
                              <input type="date" class="form-control" id="fec_nac_madre" required aria-required="true">
                              <p class="help-block error hidden">Ingresá una fecha válida</p>
                          </div>

                      </div>

                      <div class="input-group row-md-4">
                          <div class="col-md-3 form-group item-form">
                              <label for="tipo_doc_madre">Tipo de Documento</label>
                              <select id="tipo_doc_madre" name="tipo_doc_madre" class="form-control">
                                  <option value="DNI" selected="">DNI</option>
                                  <option value="Libreta de Enrolamiento">Libreta de Enrolamiento</option>
                                  <option value="Libreta Cívica">Libreta Cívica</option>
                                  <option value="Pasaporte extranjero">Pasaporte extranjero</option>
                              </select>
                              <p class="help-block error hidden">Elegí un tipo de documento</p>

                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="num_doc_madre">Número de documento</label>
                              <input type="number" min="1" class="form-control" id="num_doc_madre" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu número de documento</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="nacionalidad_madre">Nacionalidad</label>
                              <input type="text" name="nacionalidad_madre" class="form-control" id="nacionalidad_madre" required aria-required="true">
                              <p class="help-block error hidden">Ingresá nacionalidad</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label>Sexo</label>
                              <br>
                              <label for="f" class="radio-inline">
                                  <input type="radio" name="sexo_madre" id="f" value="F" required aria-required="true" checked> Femenino
                              </label>
                              <label for="m" class="radio-inline">
                                  <input type="radio" name="sexo_madre" id="m" value="M" required aria-required="true"> Masculino
                              </label>
                              <p class="help-block error hidden">Ingresá tu sexo</p>
                          </div>
                      </div>

                  </fieldset>

                <!-- DATOS DE CONTACTO DE LA MADRE-->
                  <fieldset>
                    <hr>
                    <div class="col-md-12 form-group item-form">
                      <h3>Datos de contacto de la madre</h3>
                    </div>

                    <div class="input-group row-md-4">

                      <div class="col-md-3 form-group item-form">
                          <label for="tel1_madre">Teléfono móvil</label>
                          <div class="input-group">
                            <span class="input-group-addon">0</span>&nbsp;&nbsp;
                            <input aria-label="número de teléfono móvil" class="form-control" id="tel1_madre" required aria-required="true" type="text">
                          </div>
                          <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="tel2_madre">Teléfono secundario (Opcional)</label>
                          <br>
                          <div class="input-group">
                              <span class="input-group-addon">0</span>&nbsp;&nbsp;
                              <input aria-label="número de teléfono secundario" class="form-control" id="tel2_madre" aria-required="true" type="text">
                          </div>
                          <p class="help-block error hidden">Ingresá tu número de teléfono secundario</p>
                      </div>

                      <div class="col-md-4 form-group item-form">
                          <label for="email_madre">Dirección de correo electrónico</label>
                          <input type="email" name="email_madre" class="form-control" id="email_madre" required aria-required="true">
                          <p class="help-block error hidden">Ingresá un correo electrónico
                              <br> El correo electrónico tiene un formato no válido</p>
                      </div>
                    </div>
                  </fieldset>
                <!-- DOMICILIO DE LA MADRE-->
                  <fieldset>
                    <hr>
                      <div class="input-group row-md-1">
                        <div class="col-md-9 form-group item-form">
                          <h3>Domicilio de la madre </h3>
                        </div>
                        <div>
                          <input type="checkbox" name="madre_mismodomicilio" value="activado">Mismo domicilio del alumno
                        </div>
                      </div>

                      <div class="input-group row-md-4">
                        <div class="col-md-4 form-group item-form">
                          <label for="localidad_madre">Localidad</label>
                          <select id="localidad_madre" name="localidad_madre" class="form-control">
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
                          <label for="cod_postal_madre">Codigo Postal</label>
                          <input type="text" name="cod_postal_madre" class="form-control" id="cod_postal_madre" required aria-required="true">
                          <p class="help-block error hidden">Ingresá un codigo postal</p>
                        </div>
                        <div class="col-md-4 form-group item-form">
                            <label for="barrio_madre">Barrio</label>
                            <input type="text" name="barrio_madre" class="form-control" id="barrio_madre" required aria-required="true">
                            <p class="help-block error hidden">Ingresá un barrio</p>
                        </div>
                      </div>
                      <div class="input-group row-md-4">
                        <div class="col-md-4 form-group item-form">
                            <label for="calle_madre">Calle</label>
                            <input type="text" name="calle_madre" class="form-control" id="calle_madre" required aria-required="true">
                            <p class="help-block error hidden">Ingresá una calle</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="num_calle_madre">Número de calle</label>
                            <input type="text" class="form-control" id="num_calle_madre" required aria-required="true">
                            <p class="help-block error hidden">Ingresá número de calle</p>
                        </div>

                        <div class="col-md-2 form-group item-form">
                            <label for="piso_madre">Piso</label>
                            <input type="text" name="piso_madre" class="form-control" id="piso_madre" aria-required="true">
                            <p class="help-block error hidden">Ingresá un piso</p>
                        </div>  

                        <div class="col-md-3 form-group item-form">
                            <label for="num_depto_madre">Departamento</label>
                            <input type="text" class="form-control" id="num_depto_madre" aria-required="true">
                            <p class="help-block error hidden">Ingresá un un departamento</p>
                        </div>

                      </div>

                  </fieldset>

                <!-- OTROS DATOS ESPECÍFICOS DE LA MADRE-->
                <fieldset>
                    <hr>
                    <div class="col-md-12 form-group item-form">
                        <h3>Otros datos específicos de la madre</h3>
                    </div>

                    <div class="col-md-12 form-group item-form">
                        <div class="input-group row-md-4">
                            <div class="col-md-4 form-group item-form">
                                <label for="profesion_madre">Profesion</label>
                                <input type="text" name="profesion_madre" class="form-control" id="profesion_madre" required aria-required="true">
                                <p class="help-block error hidden">Ingresa una profesion</p>
                            </div>
                            <div class="col-md-4 form-group item-form">
                                <label for="lugar_trabajo_madre">Lugar de trabajo</label>
                                <input type="text" name="lugar_trabajo_madre" class="form-control" id="lugar_trabajo_madre" aria-required="true">
                                <p class="help-block error hidden">Ingresa un lugar de trabajo</p>
                            </div>
                        </div>
                    </div>

                </fieldset>
              <!-- DOMICILIO LABORAL DE LA MADRE-->
                <fieldset>
                  <hr>
                  <div class="input-group row-md-1">
                      <div class="col-md-10 form-group item-form">
                          <h3>Domicilio laboral del madre </h3>
                      </div>

                      <div>
                          <input type="checkbox" name="madre_no_trabaja" value="activado">No trabaja
                      </div>
                  </div>

                  <div class="input-group row-md-4">
                      <div class="col-md-4 form-group item-form">
                          <label for="localidad_lab_madre">Localidad</label>
                          <select id="localidad_lab_madre" name="localidad_lab_madre" class="form-control">
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
                          <label for="cod_postal_lab_madre">Codigo Postal</label>
                          <input type="text" name="cod_postal_lab_madre" class="form-control" id="cod_postal_lab_madre" required aria-required="true">
                          <p class="help-block error hidden">Ingresá un codigo postal</p>
                      </div>

                      <div class="col-md-4 form-group item-form">
                          <label for="calle_lab_madre">Calle</label>
                          <input type="text" name="calle_lab_madre" class="form-control" id="calle_lab_madre" required aria-required="true">
                          <p class="help-block error hidden">Ingresá una calle</p>
                      </div>

                  </div>
                  <div class="input-group row-md-4">
                      <div class="col-md-3 form-group item-form">
                          <label for="num_calle_lab_madre">Número de calle</label>
                          <input type="text" class="form-control" id="num_calle_lab_madre" required aria-required="true">
                          <p class="help-block error hidden">Ingresá número de calle</p>
                      </div>

                      <div class="col-md-2 form-group item-form">
                          <label for="piso_lab_madre">Piso</label>
                          <input type="text" name="piso_lab_madre" class="form-control" id="piso_lab_madre" aria-required="true">
                          <p class="help-block error hidden">Ingresá un piso</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="num_depto_lab_madre">Departamento</label>
                          <input type="text" class="form-control" id="num_depto_lab_madre" aria-required="true">
                          <p class="help-block error hidden">Ingresá un un departamento</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="tel_lab_madre">Teléfono laboral</label>
                          <br>
                          <div class="input-group">
                              <span class="input-group-addon">0</span>&nbsp;&nbsp;
                              <input aria-label="número de teléfono laboral madre" class="form-control" id="tel_lab_madre" required aria-required="true" type="text">
                          </div>
                          <p class="help-block error hidden">Ingresá tu número de teléfono laboral</p>
                      </div>

                  </div>
                </fieldset>
              <!--DATOS PERSONALES DEL PADRE-->
                <fieldset>
                  <hr>
                  <div class="input-group row-md-1">
                      <div class="col-md-10 form-group item-form">
                        <h3>Datos personales del padre</h3>
                      </div>
                      <div>
                          <input type="checkbox" name="padre_fallecido" value="activado">Fallecido
                      </div>
                  </div>

                  <div class="input-group row-md-4">
                    
                    <div class="col-md-3 form-group item-form">
                        <label for="nombres_padre">Nombres</label>
                        <input type="text" name="nombres_padre" class="form-control" id="nombres_padre" required aria-required="true">
                        <p class="help-block error hidden">Ingresá tu nombre</p>
                    </div>

                    <div class="col-md-3 form-group item-form">
                        <label for="apellidos_padre">Apellidos</label>
                        <input type="text" name="apellidos_padre" class="form-control" id="apellidos_padre" required aria-required="true">
                        <p class="help-block error hidden">Ingresá tu apellido</p>
                    </div>

                    <div class="col-md-3 form-group item-form">
                        <label for="lugar_nac_padre">Lugar de nacimiento</label>
                        <input type="text" name="lugar_nac_padre" class="form-control" id="lugar_nac_padre" required aria-required="true">
                        <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
                    </div>

                    <div class="col-md-3 form-group item-form">
                        <label for="fec_nac_padre">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fec_nac_padre" required aria-required="true">
                        <p class="help-block error hidden">Ingresá una fecha válida</p>
                    </div>

                  </div>

                  <div class="input-group row-md-4">
                      <div class="col-md-3 form-group item-form">
                          <label for="tipo_doc_padre">Tipo de Documento</label>
                          <select id="tipo_doc_padre" name="tipo_doc_padre" class="form-control">
                              <option value="DNI" selected="">DNI</option>
                              <option value="Libreta de Enrolamiento">Libreta de Enrolamiento</option>
                              <option value="Libreta Cívica">Libreta Cívica</option>
                              <option value="Pasaporte extranjero">Pasaporte extranjero</option>
                          </select>
                          <p class="help-block error hidden">Elegí un tipo de documento</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="num_doc_padre">Número de documento</label>
                          <input type="number" min="1" class="form-control" id="num_doc_padre" required aria-required="true">
                          <p class="help-block error hidden">Ingresá tu número de documento</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="nacionalidad_padre">Nacionalidad</label>
                          <input type="text" name="nacionalidad_padre" class="form-control" id="nacionalidad_padre" required aria-required="true">
                          <p class="help-block error hidden">Ingresá nacionalidad</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label>Sexo</label>
                          <br>
                          <label for="f" class="radio-inline">
                              <input type="radio" name="sexo_padre" id="f" value="F" required aria-required="true"> Femenino
                          </label>
                          <label for="m" class="radio-inline">
                              <input type="radio" name="sexo_padre" id="m" value="M" required aria-required="true" checked> Masculino
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
                              <input aria-label="número de teléfono móvil padre" class="form-control" id="tel1_padre" required aria-required="true" type="text">
                          </div>
                          <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="tel2_padre">Teléfono secundario (Opcional)</label>
                          <div class="input-group">
                              <span class="input-group-addon">0</span>&nbsp;&nbsp;
                              <input aria-label="número de teléfono secundario padre" class="form-control" id="tel2_padre" required aria-required="true" type="text">
                          </div>
                          <p class="help-block error hidden">Ingresá tu número de teléfono secundario</p>
                      </div>

                      <div class="col-md-4 form-group item-form">
                          <label for="email_padre">Dirección de correo electrónico</label>
                          <input type="email" name="email_padre" class="form-control" id="email_padre" required aria-required="true">
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
                            <input type="checkbox" name="padre_mismodomicilio" value="activado">Mismo domicilio del alumno
                          </div>
                    </div>

                    <div class="input-group row-md-4">

                        <div class="col-md-4 form-group item-form">
                            <label for="localidad_padre">Localidad</label>
                            <select id="localidad_padre" name="localidad_padre" class="form-control">
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
                            <label for="cod_postal_padre">Codigo Postal</label>
                            <input type="text" name="cod_postal_padre" class="form-control" id="cod_postal_padre" required aria-required="true">
                            <p class="help-block error hidden">Ingresá un codigo postal</p>
                        </div>

                        <div class="col-md-4 form-group item-form">
                            <label for="barrio_padre">Barrio</label>
                            <input type="text" name="barrio_padre" class="form-control" id="barrio_padre" aria-required="true">
                            <p class="help-block error hidden">Ingresá un barrio</p>
                        </div>

                    </div>

                    <div class="input-group row-md-4">

                        <div class="col-md-4 form-group item-form">
                            <label for="calle_padre">Calle</label>
                            <input type="text" name="calle_padre" class="form-control" id="calle_padre" required aria-required="true">
                            <p class="help-block error hidden">Ingresá una calle</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="num_calle_padre">Número de calle</label>
                            <input type="text" class="form-control" id="num_calle_padre" required aria-required="true">
                            <p class="help-block error hidden">Ingresá número de calle</p>
                        </div>

                        <div class="col-md-2 form-group item-form">
                            <label for="piso_padre">Piso</label>
                            <input type="text" name="piso_padre" class="form-control" id="piso_padre" aria-required="true">
                            <p class="help-block error hidden">Ingresá un piso</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="num_depto_padre">Departamento</label>
                            <input type="text" class="form-control" id="num_depto_padre" aria-required="true">
                            <p class="help-block error hidden">Ingresá un un departamento</p>
                        </div>

                    </div>

                </fieldset>

              <!-- OTROS DATOS ESPECÍFICOS DEL PADRE-->
                <fieldset>
                  <hr>
                    <div class="col-md-12 form-group item-form">
                        <h3>Otros datos específicos del padre</h3>
                    </div>

                    <div class="col-md-12 form-group item-form">
                        <div class="input-group row-md-4">
                            <div class="col-md-4 form-group item-form">
                                <label for="profesion_padre">Profesion</label>
                                <input type="text" name="profesion_padre" class="form-control" id="profesion_padre" required aria-required="true">
                                <p class="help-block error hidden">Ingresa una profesion</p>
                            </div>
                            <div class="col-md-4 form-group item-form">
                                <label for="lugar_trabajo_padre">Lugar de trabajo</label>
                                <input type="text" name="lugar_trabajo_padre" class="form-control" id="lugar_trabajo_padre" aria-required="true">
                                <p class="help-block error hidden">Ingresa un lugar de trabajo</p>
                            </div>
                        </div>
                    </div>

                </fieldset>
              <!-- DOMICILIO LABORAR DEL PADRE -->
                <fieldset>
                  <hr>
                    <div class="input-group row-md-1">
                        
                      <div class="col-md-10 form-group item-form">
                        <h3>Domicilio laboral del padre </h3>
                      </div>
                      <div>
                        <input type="checkbox" name="padre_no_trabaja" value="activado">No trabaja</div>
                      </div>

                    <div class="input-group row-md-4">

                        <div class="col-md-4 form-group item-form">
                            <label for="localidad_lab_padre">Localidad</label>
                            <select id="localidad_lab_padre" name="localidad_lab_padre" class="form-control">
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
                            <label for="cod_postal_lab_padre">Codigo Postal</label>
                            <input type="text" name="codigopostal" class="form-control" id="cod_postal_lab_padre" required aria-required="true">
                            <p class="help-block error hidden">Ingresá un codigo postal</p>
                        </div>

                        <div class="col-md-4 form-group item-form">
                            <label for="calle_lab_padre">Calle</label>
                            <input type="text" name="calle_lab_padre" class="form-control" id="calle_lab_padre" required aria-required="true">
                            <p class="help-block error hidden">Ingresá una calle</p>
                        </div>

                    </div>

                    <div class="input-group row-md-4">
                        <div class="col-md-3 form-group item-form">
                            <label for="num_calle_lab_padre">Número de calle</label>
                            <input type="text" class="form-control" id="num_calle_lab_padre" required aria-required="true">
                            <p class="help-block error hidden">Ingresá número de calle</p>
                        </div>

                        <div class="col-md-2 form-group item-form">
                            <label for="piso_lab_padre">Piso</label>
                            <input type="text" name="piso_lab_padre" class="form-control" id="piso_lab_padre" aria-required="true">
                            <p class="help-block error hidden">Ingresá un piso</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="num_depto_lab_padre">Departamento</label>
                            <input type="text" class="form-control" id="num_depto_lab_padre"  aria-required="true">
                            <p class="help-block error hidden">Ingresá un un departamento</p>
                        </div>
                        <div class="col-md-3 form-group item-form">
                            <label for="tel_lab_padre">Teléfono laboral</label>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">0</span>&nbsp;&nbsp;
                                <input aria-label="número de teléfono móvil laboral padre" class="form-control" id="tel_lab_padre" required aria-required="true" type="text">
                            </div>
                            <p class="help-block error hidden">Ingresá tu número de teléfono laboral</p>
                        </div>

                    </div>
                </fieldset>
              <!--DATOS PERSONALES DEL TUTOR-->
                <fieldset>
                    <hr>
                    <div class="input-group row-md-1">
                      <div class="col-md-9 form-group item-form">
                        <h3>Datos personales del tutor</h3>
                      </div>
                      <div>
                        <input type="checkbox" name="madre_es_tutor" value="activado">Es la madre
                      </div>&nbsp;&nbsp;
                      <div>
                        <input type="checkbox" name="padre_es_tutor" value="activado">Es el padre
                      </div>&nbsp;&nbsp;
                    </div>

                    <div class="input-group row-md-4">

                        <div class="col-md-3 form-group item-form">
                            <label for="nombres_tutor">Nombres</label>
                            <input type="text" name="nombres_tutor" class="form-control" id="nombres_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá tu nombre</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="apellidos_tutor">Apellidos</label>
                            <input type="text" name="apellidos_tutor" class="form-control" id="apellidos_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá tu apellido</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="lugar_nac_tutor">Lugar de nacimiento</label>
                            <input type="text" name="lugar_nac_tutor" class="form-control" id="lugar_nac_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="fec_nac_tutor">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fec_nac_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá una fecha válida</p>
                        </div>

                    </div>

                    <div class="input-group row-md-4">
                        <div class="col-md-3 form-group item-form">
                            <label for="tipo_doc_tutor">Tipo de Documento</label>
                            <select id="tipo_doc_tutor" name="tipo_doc_tutor" class="form-control">
                                <option value="DNI" selected="">DNI</option>
                                <option value="Libreta de Enrolamiento">Libreta de Enrolamiento</option>
                                <option value="Libreta Cívica">Libreta Cívica</option>
                                <option value="Pasaporte extranjero">Pasaporte extranjero</option>
                            </select>
                            <p class="help-block error hidden">Elegí un tipo de documento</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="num_doc_tutor">Número de documento</label>
                            <input type="number" min="1" class="form-control" id="num_doc_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá tu número de documento</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="nacionalidad_tutor">Nacionalidad</label>
                            <input type="text" name="nacionalidad_tutor" class="form-control" id="nacionalidad_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá nacionalidad</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label>Sexo</label>
                            <br>
                            <label for="f" class="radio-inline">
                                <input type="radio" name="sexo_tutor" id="f" value="F" required aria-required="true" checked> Femenino
                            </label>
                            <label for="m" class="radio-inline">
                                <input type="radio" name="sexo_tutor" id="m" value="M" required aria-required="true"> Masculino
                            </label>
                            <p class="help-block error hidden">Ingresá tu sexo</p>
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
                              <input aria-label="número de teléfono móvil del tutor" class="form-control" id="tel1_tutor" required aria-required="true" type="text">
                          </div>
                          <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="tel2_tutor">Teléfono secundario (Opcional)</label>
                          <br>
                          <div class="input-group">
                              <span class="input-group-addon">0</span>&nbsp;&nbsp;
                              <input aria-label="número de teléfono secundario del tutor" class="form-control" id="tel2_tutor" required aria-required="true" type="text">
                          </div>
                          <p class="help-block error hidden">Ingresá tu número de teléfono secundario</p>
                      </div>

                      <div class="col-md-4 form-group item-form">
                          <label for="email_tutor">Dirección de correo electrónico</label>
                          <input type="email" name="email_tutor" class="form-control" id="email_tutor" required aria-required="true">
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
                            <input type="checkbox" name="mismodomicilio" value="activado">Mismo domicilio del alumno
                        </div>
                    </div>

                    <div class="input-group row-md-4">

                        <div class="col-md-4 form-group item-form">
                            <label for="localidad_tutor">Localidad</label>
                            <select id="localidad_tutor" name="localidad_tutor" class="form-control">
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
                            <label for="cod_postal_tutor">Codigo Postal</label>
                            <input type="text" name="cod_postal_tutor" class="form-control" id="cod_postal_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá un codigo postal</p>
                        </div>

                        <div class="col-md-4 form-group item-form">
                            <label for="barrio_tutor">Barrio</label>
                            <input type="text" name="barrio_tutor" class="form-control" id="barrio_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá un barrio</p>
                        </div>

                    </div>

                    <div class="input-group row-md-4">

                        <div class="col-md-4 form-group item-form">
                            <label for="calle_tutor">Calle</label>
                            <input type="text" name="calle_tutor" class="form-control" id="calle_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá una calle</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="num_calle_tutor">Número de calle</label>
                            <input type="text" class="form-control" id="num_calle_tutor" required aria-required="true">
                            <p class="help-block error hidden">Ingresá número de calle</p>
                        </div>

                        <div class="col-md-2 form-group item-form">
                            <label for="piso_tutor">Piso</label>
                            <input type="text" name="piso_tutor" class="form-control" id="piso_tutor" aria-required="true">
                            <p class="help-block error hidden">Ingresá un piso</p>
                        </div>

                        <div class="col-md-3 form-group item-form">
                            <label for="num_depto_tutor">Departamento</label>
                            <input type="text" class="form-control" id="num_depto_tutor" aria-required="true">
                            <p class="help-block error hidden">Ingresá un un departamento</p>
                        </div>

                    </div>

                  </fieldset>

                <!-- OTROS DATOS ESPECÍFICOS DEL TUTOR-->
                  <fieldset>
                    <hr>
                    <div class="col-md-12 form-group item-form">
                        <h3>Otros datos específicos del tutor</h3>
                    </div>

                    <div class="col-md-12 form-group item-form">
                        <div class="input-group row-md-4">

                            <div class="col-md-4 form-group item-form">
                                <label for="profesion_tutor">Profesion</label>
                                <input type="text" name="profesion_tutor" class="form-control" id="profesion_tutor" required aria-required="true">
                                <p class="help-block error hidden">Ingresa una profesion</p>
                            </div>

                            <div class="col-md-4 form-group item-form">
                                <label for="lugar_trabajo_tutor">Lugar de trabajo</label>
                                <input type="text" name="lugar_trabajo_tutor" class="form-control" id="lugar_trabajo_tutor" required aria-required="true">
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
                              <input type="checkbox" name="tutor_no_trabaja" value="activado">No trabaja
                          </div>
                      </div>

                      <div class="input-group row-md-4">

                          <div class="col-md-4 form-group item-form">
                              <label for="localidad_lab_tutor">Localidad</label>
                              <select id="localidad_lab_tutor" name="localidad_lab_tutor" class="form-control">
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
                              <label for="cod_postal_lab_tutor">Codigo Postal</label>
                              <input type="text" name="cod_postal_lab_tutor" class="form-control" id="cod_postal_lab_tutor" required aria-required="true">
                              <p class="help-block error hidden">Ingresá un codigo postal</p>
                          </div>

                          <div class="col-md-4 form-group item-form">
                              <label for="calle_lab_tutor">Calle</label>
                              <input type="text" name="calle_lab_tutor" class="form-control" id="calle_lab_tutor" required aria-required="true">
                              <p class="help-block error hidden">Ingresá una calle</p>
                          </div>
                      </div>

                      <div class="input-group row-md-4">

                          <div class="col-md-3 form-group item-form">
                              <label for="num_calle_lab_tutor">Número de calle</label>
                              <input type="text" class="form-control" id="num_calle_lab_tutor" required aria-required="true">
                              <p class="help-block error hidden">Ingresá número de calle</p>
                          </div>

                          <div class="col-md-2 form-group item-form">
                              <label for="piso_lab_tutor">Piso</label>
                              <input type="text" name="piso_lab_tutor" class="form-control" id="piso_lab_tutor" aria-required="true">
                              <p class="help-block error hidden">Ingresá un piso</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="num_depto_lab_tutor">Departamento</label>
                              <input type="text" class="form-control" id="num_depto_lab_tutor" aria-required="true">
                              <p class="help-block error hidden">Ingresá un un departamento</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="tel_lab_tutor">Teléfono laboral</label>
                              <br>
                              <div class="input-group">
                                  <span class="input-group-addon">0</span>&nbsp;&nbsp;
                                  <input aria-label="número de teléfono laboral tutor" class="form-control" id="tel_lab_tutor" required aria-required="true" type="text">
                              </div>
                              <p class="help-block error hidden">Ingresá tu número de teléfono laboral</p>
                          </div>

                      </div>
                  </fieldset>
                    
                <!-- DATOS DE TUTORES SUPLENTES -->
                  <fieldset>
                    <hr>
                      <div>&nbsp;&nbsp;&nbsp;¿El alumno puede ser retirado por otra persona?&nbsp;&nbsp;
                        <input type="checkbox" name="tutor_suplente_ok" value="activado">Si
                      </div>
                      <br>
                      <div class="col-md-12 form-group item-form">
                          <h3>Tutores suplentes</h3>
                      </div>

                      <div class="input-group row-md-4">

                          <div class="col-md-3 form-group item-form">
                              <label for="nombres_tutor_sup1">Nombres</label>
                              <input type="text" name="nombres_tutor_sup1" class="form-control" id="nombres_tutor_sup1" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu nombre</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="apellidos_tutor_sup1">Apellidos</label>
                              <input type="text" name="apellidos_tutor_sup1" class="form-control" id="apellidos_tutor_sup1" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu apellido</p>
                          </div>

                          <div class="col-md-2 form-group item-form">
                              <label for="parentesco_tutor_sup1">Parentesco</label>
                              <input type="text" name="parentesco_tutor_sup1" class="form-control" id="parentesco_tutor_sup1" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu nombre</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="tel_tutor_sup1">Teléfono</label>
                              <br>
                              <div class="input-group">
                                  <span class="input-group-addon">0</span>&nbsp;&nbsp;
                                  <input aria-label="número de teléfono tutor suplente 1" class="form-control" id="cellphone_number" required aria-required="true" type="text">
                              </div>
                              <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
                          </div>

                      </div>

                      <div class="input-group row-md-4">

                          <div class="col-md-3 form-group item-form">
                              <label for="nombres_tutor_sup2">Nombres</label>
                              <input type="text" name="nombres_tutor_sup2" class="form-control" id="nombres_tutor_sup2" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu nombre</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="apellidos_tutor_sup2">Apellidos</label>
                              <input type="text" name="apellidos_tutor_sup2" class="form-control" id="apellidos_tutor_sup2" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu apellido</p>
                          </div>

                          <div class="col-md-2 form-group item-form">
                              <label for="parentesco_tutor_sup2">Parentesco</label>
                              <input type="text" name="parentesco_tutor_sup2" class="form-control" id="parentesco_tutor_sup2" required aria-required="true">
                              <p class="help-block error hidden">Ingresá tu nombre</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="tel_tutor_sup2">Teléfono móvil</label>
                              <br>
                              <div class="input-group">
                                  <span class="input-group-addon">0</span>&nbsp;&nbsp;
                                  <input aria-label="número de teléfono tutor suplente 2" class="form-control" id="tel_tutor_sup2" required aria-required="true" type="text">
                              </div>
                              <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
                          </div>

                      </div>

                  </fieldset>

                                  
                  <div class="col-md-12 form-group item-form text-center">
                      <a href="" class="btn btn-link">Anterior</a>
                      <button onclick="mostrarErrores()">Siguiente</button>

                  </div>

                              

              </form>
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

