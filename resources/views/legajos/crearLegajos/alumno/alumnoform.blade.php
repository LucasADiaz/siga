                  <fieldset>
                      <div class="col-md-4 form-group item-form">
                          <br>
                          <h3>Datos personales del Alumno</h3>
                      </div>

                      <div class="input-group row-md-4">
                        
                          <div class="col-md-3 form-group item-form">
                              <label for="nombres_alu">Nombres</label>
                              <input type="text" name="nombres_alu" class="form-control" id="nombres_alu" value="{{ $nombres_alu }}" required>
                              <p class="help-block error hidden">Ingresá tu nombre</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="apellidos_alu">Apellidos</label>
                              <input type="text" name="apellidos_alu" class="form-control" id="apellidos_alu" value="{{ $apellidos_alu }}"  required>
                              <p class="help-block error hidden">Ingresá tu apellido</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="lugar_nac_alu">Lugar de nacimiento</label>
                              <input type="text" name="lugar_nac_alu" class="form-control" id="lugar_nac_alu" value="{{ $lugar_nac_alu }}"  required>
                              <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
                          </div>

                          <div class="col-md-3 form-group item-form">
                              <label for="fec_nac_alu">Fecha de nacimiento</label>
                              <input type="date" name="fec_nac_alu" class="form-control"  id="fec_nac_alu" value="{{ $fec_nac_alu }}" required>
                              <p class="help-block error hidden">Ingresá una fecha válida</p>
                          </div>

                      </div>

                      <div class="input-group row-md-4">

                          <div class="col-md-3 form-group item-form">
                              <label for="tipo_doc_alu">Tipo de Documento</label>
                              <select id="tipo_doc_alu" name="tipo_doc_alu" class="form-control">
                                    <option value="{{ $tipo_doc_alu ?? '' }}" selected>{{ $tipo_doc_alu ?? '' }}</option>
                                @include('legajos.crearLegajos.opcionesSelects.opcionesDocumento');
                              </select>
                              <p class="help-block error hidden">Elegí un tipo de documento</p>
                          </div>

                          <div class="col-md-2 form-group item-form">
                              <label for="num_doc_alu">Número de documento</label>
                              <input type="number" min="1" class="form-control" id="num_doc_alu" name="num_doc_alu" value="{{ $num_doc_alu }}"  required>
                              <p class="help-block error hidden">Ingresá tu número de documento</p>
                          </div>

                          <div class="col-md-2 form-group item-form">
                              <label for="nacionalidad_alu">Nacionalidad</label>
                              <select name="nacionalidad_alu" id="nacionalidad_alu" class="form-control">
                                    <option value="{{ $nacionalidad_alu ?? '' }}" selected>{{ $nacionalidad_alu ?? '' }}</option>
                                @include('legajos.crearLegajos.opcionesSelects.opcionesNacionalidades');
                                    <p class="help-block error hidden">Ingresá nacionalidad</p>
                              </select>
                          </div>

                          <div class="col-md-2 form-group item-form">
                              <label>Sexo</label>
                              <br>
                              <label for="F" class="radio-inline">
                                <input type="radio" name="sexo_alu" id="sexo_alu" value="F" <?php if($sexo_alu=='F') echo 'checked="checked"'; ?> {{ $sexo_alu_f ?? '' }}> Femenino
                              </label>
                              <br>
                              <label for="M" class="radio-inline">
                                    <input type="radio" name="sexo_alu" id="sexo_alu" value="M" <?php if($sexo_alu=='M') echo 'checked="checked"'; ?> {{ $sexo_alu_m ?? '' }}> Masculino
                              </label>
                              <p class="help-block error hidden">Ingresá tu sexo</p>
                          </div>
                          <div class="col-md-2 form-group item-form">
                                <label>Grupo y Factor</label>
                                <select id="grupo_factor_alu" name="grupo_factor_alu" class="form-control" >
                                        <option value="{{ $grupo_factor_alu }}" selected="">{{ $grupo_factor_alu }}</option>
                                        <option value="A+" selected="">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>  
                                        <option value="0-" >0-</option>
                                        <option value="0+">0+</option>
                                                
                                </select>
                                <p class="help-block error hidden">Ingresá tu grupo y factor</p>
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
                                <input type="text" name="tel1_alu" class="form-control" id="tel1_alu" value="{{ $tel1_alu}}"  required>
                                <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
                                </div>
                            </div>
                      

                            <div class="col-md-3 form-group item-form">
                                    <label for="tel2_alu">Teléfono Secundario</label>
                                    <div class="input-group">
                                    <span class="input-group-addon">0</span>&nbsp;&nbsp;
                                    <input type="text" name="tel2_alu" class="form-control" id="tel2_alu" value="{{ $tel2_alu }}" >
                                    <p class="help-block error hidden">Ingresá tu número de teléfono secundario</p>
                                    </div>
                                </div>

                      <div class="col-md-4 form-group item-form">
                          <label for="email_alu">Dirección de correo electrónico</label>
                          <input type="email" name="email_alu" class="form-control" id="email_alu" value="{{ $email_alu }}"  required>
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
                            @include('legajos.crearLegajos.opcionesSelects.opcionesLocalidades');
                          </select>
                          <p class="help-block error hidden">Elegí una localidad</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="cod_postal_alu">Codigo Postal</label>
                          <input type="text" name="cod_postal_alu" class="form-control" id="cod_postal_alu" value="{{ $cod_postal_alu }}"  required>
                          <p class="help-block error hidden">Ingresá un codigo postal</p>
                      </div>

                      <div class="col-md-4 form-group item-form">
                          <label for="barrio_alu">Barrio</label>
                          <input type="text" name="barrio_alu" class="form-control" id="barrio_alu" value="{{ $barrio_alu }}" >
                          <p class="help-block error hidden">Ingresá un barrio</p>
                      </div>

                  </div>

                  <div class="input-group row-md-4">
                      <div class="col-md-4 form-group item-form">
                          <label for="calle_alu">Calle</label>
                          <input type="text" name="calle_alu" class="form-control" id="calle_alu" value="{{ $calle_alu }}"  required>
                          <p class="help-block error hidden">Ingresá una calle</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                            <label for="num_calle_alu">N° Calle</label>
                            <input type="text" name="num_calle_alu" class="form-control" id="num_calle_alu" value="{{ $num_calle_alu }}"  required>
                            <p class="help-block error hidden">Ingresá un numero de calle</p>
                      </div>

                      <div class="col-md-2 form-group item-form">
                          <label for="piso_alu">Piso</label>
                          <input type="text" name="piso_alu" class="form-control" id="piso_alu" value="{{ $piso_alu }}">
                          <p class="help-block error hidden">Ingresá un piso</p>
                      </div>

                      <div class="col-md-3 form-group item-form">
                          <label for="num_depto_alu">Departamento</label>
                          <input type="text" class="form-control" id="num_depto_alu" value="{{ $num_depto_alu }}">
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
                                  <input type="text" name="esc_procedencia_alu" class="form-control" id="esc_procedencia_alu" value="{{ $esc_procedencia_alu }}"  required>
                                  <p class="help-block error hidden">Ingresá una escuela o colegio</p>
                              </div>

                          </div>
                      </div>
                    
</fieldset>