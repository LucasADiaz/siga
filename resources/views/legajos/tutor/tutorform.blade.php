<fieldset>
    <hr size="8px" color="black" />
    <div class="input-group row-md-1">
      <div class="col-md-9 form-group item-form">
        <h3>Datos personales del tutor</h3>
      </div>
      <div>
        <input type="checkbox" name="madre_es_tutor" id="madre_es_tutor" value="activado" onChange="esLaMadre(this);">Es la madre
      </div>&nbsp;&nbsp;
      <div>
        <input type="checkbox" name="padre_es_tutor" id="padre_es_tutor" value="activado" onChange="esElPadre(this);">Es el padre
      </div>&nbsp;&nbsp;
    </div>

    <div class="input-group row-md-4">

        <div class="col-md-3 form-group item-form">
            <label for="nombres_tutor">Nombres</label>
            <input type="text" name="nombres_tutor" class="form-control" id="nombres_tutor" value="NombreTutor"  required>
            <p class="help-block error hidden">Ingresá tu nombre</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="apellidos_tutor">Apellidos</label>
            <input type="text" name="apellidos_tutor" class="form-control" id="apellidos_tutor" value="NombreTutor"  required>
            <p class="help-block error hidden">Ingresá tu apellido</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="lugar_nac_tutor">Lugar de nacimiento</label>
            <input type="text" name="lugar_nac_tutor" class="form-control" id="lugar_nac_tutor" value="LugarNacimientoTutor"  required>
            <p class="help-block error hidden">Ingresá el lugar de nacimiento</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="fec_nac_tutor">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fec_nac_tutor" name="fec_nac_tutor" required>
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
            <input type="number" min="1" class="form-control" id="num_doc_tutor" name="num_doc_tutor" value="50234234"  required>
            <p class="help-block error hidden">Ingresá tu número de documento</p>
        </div>

        <div class="col-md-2 form-group item-form">
                <label for="nacionalidad_tutor">Nacionalidad</label>
                <select name="nacionalidad_tutor" id="nacionalidad_tutor" class="form-control">
                      <option value="ARG" selected>Argentina</option>                        
                      <option value="BRA">Brasil</option>                        
                      <option value="URY">Uruguay</option>                        
                      <option value="PRY">Paraguay</option>                        
                      <option value="CHL">Chile</option>                        
                      <option value="BOL">Bolivia</option>                                        
                      <option value="AFG">Afganistán</option>                        
                      <option value="ALB">Albania</option>                        
                      <option value="DEU">Alemania</option>                        
                      <option value="AND">Andorra</option>                        
                      <option value="AGO">Angola</option>                        
                      <option value="AIA">Anguila</option>                        
                      <option value="ATA">Antártida</option>                        
                      <option value="ATG">Antigua y Barbuda</option>                        
                      <option value="SAU">Arabia Saudita</option>                        
                      <option value="DZA">Argelia</option>                        
                      <option value="ARM">Armenia</option>                        
                      <option value="ABW">Aruba</option>                        
                      <option value="AUS">Australia</option>                        
                      <option value="AUT">Austria</option>                        
                      <option value="AZE">Azerbaiyán</option>                        
                      <option value="BHS">Bahamas</option>                        
                      <option value="BGD">Bangladés</option>                        
                      <option value="BRB">Barbados</option>                        
                      <option value="BHR">Baréin</option>                        
                      <option value="BEL">Bélgica</option>                        
                      <option value="BLZ">Belice</option>                        
                      <option value="BEN">Benín</option>                        
                      <option value="BMU">Bermudas</option>                        
                      <option value="BLR">Bielorrusia</option>                        
                      <option value="BES">Bonaire</option>                        
                      <option value="BIH">Bosnia y Herzegovina</option>                        
                      <option value="BWA">Botsuana</option>                        
                      <option value="BRN">Brunéi Darussalam</option>                        
                      <option value="BGR">Bulgaria</option>                        
                      <option value="BFA">Burkina Faso</option>                        
                      <option value="BDI">Burundi</option>                        
                      <option value="BTN">Bután</option>                        
                      <option value="CPV">Cabo Verde</option>                        
                      <option value="KHM">Camboya</option>                        
                      <option value="CMR">Camerún</option>                        
                      <option value="CAN">Canadá</option>                        
                      <option value="QAT">Catar</option>                        
                      <option value="TCD">Chad</option>                        
                      <option value="CHL">Chile</option>                        
                      <option value="CHN">China</option>                        
                      <option value="CYP">Chipre</option>                        
                      <option value="COL">Colombia</option>                        
                      <option value="COM">Comoras</option>                        
                      <option value="COG">Congo</option>                        
                      <option value="KOR">Corea</option>                        
                      <option value="CIV">Costa de Marfil</option>                        
                      <option value="CRI">Costa Rica</option>                        
                      <option value="HRV">Croacia</option>                        
                      <option value="CUB">Cuba</option>                        
                      <option value="CUW">Curaçao</option>                        
                      <option value="DNK">Dinamarca</option>                        
                      <option value="DMA">Dominica</option>                        
                      <option value="ECU">Ecuador</option>                        
                      <option value="EGY">Egipto</option>                        
                      <option value="SLV">El Salvador</option>                        
                      <option value="ARE">Emiratos Árabes Unidos</option>                        
                      <option value="ERI">Eritrea</option>                        
                      <option value="SVK">Eslovaquia</option>                        
                      <option value="SVN">Eslovenia</option>                        
                      <option value="ESP">España</option>                        
                      <option value="USA">Estados Unidos</option>                        
                      <option value="EST">Estonia</option>                        
                      <option value="ETH">Etiopía</option>                        
                      <option value="PHL">Filipinas</option>                        
                      <option value="FIN">Finlandia</option>                        
                      <option value="FJI">Fiyi</option>                        
                      <option value="FRA">Francia</option>                        
                      <option value="GAB">Gabón</option>                        
                      <option value="GMB">Gambia</option>                        
                      <option value="GEO">Georgia</option>                        
                      <option value="SGS">Georgia del sur y las islas sandwich del sur</option>                        
                      <option value="GHA">Ghana</option>                        
                      <option value="GIB">Gibraltar</option>                        
                      <option value="GRD">Granada</option>                        
                      <option value="GRC">Grecia</option>                        
                      <option value="GRL">Groenlandia</option>                        
                      <option value="GLP">Guadalupe</option>                        
                      <option value="GUM">Guam</option>                        
                      <option value="GTM">Guatemala</option>                        
                      <option value="GUF">Guayana Francesa</option>                        
                      <option value="GGY">Guernsey</option>                        
                      <option value="GIN">Guinea</option>                        
                      <option value="GNB">Guinea-Bisáu</option>                        
                      <option value="GNQ">Guinea Ecuatorial</option>                        
                      <option value="GUY">Guyana</option>                        
                      <option value="HTI">Haití</option>                        
                      <option value="HND">Honduras</option>                        
                      <option value="HKG">Hong Kong</option>                        
                      <option value="HUN">Hungría</option>                        
                      <option value="IND">India</option>                        
                      <option value="IDN">Indonesia</option>                        
                      <option value="IRQ">Irak</option>                        
                      <option value="IRN">Irán</option>                        
                      <option value="IRL">Irlanda</option>                        
                      <option value="BVT">Isla Bouvet</option>                        
                      <option value="IMN">Isla de Man</option>                        
                      <option value="CXR">Isla de Navidad</option>                        
                      <option value="HMD">Isla Heard e Islas McDonald</option>                        
                      <option value="ISL">Islandia</option>                        
                      <option value="NFK">Isla Norfolk</option>                        
                      <option value="CYM">Islas Caimán</option>                        
                      <option value="CCK">Islas Cocos</option>                        
                      <option value="COK">Islas Cook</option>                        
                      <option value="UMI">Islas de Ultramar Menores de Estados Unidos</option>                        
                      <option value="FRO">Islas Feroe</option>                        
                      <option value="FLK">Islas Malvinas</option>                        
                      <option value="MNP">Islas Marianas del Norte</option>                        
                      <option value="MHL">Islas Marshall</option>                        
                      <option value="SLB">Islas Salomón</option>                        
                      <option value="TCA">Islas Turcas y Caicos</option>                        
                      <option value="VIR">Islas Vírgenes</option>                        
                      <option value="ISR">Israel</option>                        
                      <option value="ITA">Italia</option>                        
                      <option value="JAM">Jamaica</option>                        
                      <option value="JPN">Japón</option>                        
                      <option value="JEY">Jersey</option>                        
                      <option value="JOR">Jordania</option>                        
                      <option value="KAZ">Kazajistán</option>                        
                      <option value="KEN">Kenia</option>                        
                      <option value="KGZ">Kirguistán</option>                        
                      <option value="KIR">Kiribati</option>                        
                      <option value="KWT">Kuwait</option>                        
                      <option value="LAO">Lao</option>                        
                      <option value="LSO">Lesoto</option>                        
                      <option value="LVA">Letonia</option>                        
                      <option value="LBN">Líbano</option>                        
                      <option value="LBR">Liberia</option>                        
                      <option value="LBY">Libia</option>                        
                      <option value="LIE">Liechtenstein</option>                        
                      <option value="LTU">Lituania</option>                        
                      <option value="LUX">Luxemburgo</option>                        
                      <option value="MAC">Macao</option>                        
                      <option value="MKD">Macedonia</option>                        
                      <option value="MDG">Madagascar</option>                        
                      <option value="MYS">Malasia</option>                        
                      <option value="MWI">Malaui</option>                        
                      <option value="MDV">Maldivas</option>                        
                      <option value="MLI">Malí</option>                        
                      <option value="MLT">Malta</option>                        
                      <option value="MAR">Marruecos</option>                        
                      <option value="MTQ">Martinica</option>                        
                      <option value="MUS">Mauricio</option>                        
                      <option value="MRT">Mauritania</option>                        
                      <option value="MYT">Mayotte</option>                        
                      <option value="MEX">México</option>                        
                      <option value="FSM">Micronesia</option>                        
                      <option value="MDA">Moldavia</option>                        
                      <option value="MCO">Mónaco</option>                        
                      <option value="MNG">Mongolia</option>                        
                      <option value="MNE">Montenegro</option>                        
                      <option value="MSR">Montserrat</option>                        
                      <option value="MOZ">Mozambique</option>                        
                      <option value="MMR">Myanmar</option>                        
                      <option value="NAM">Namibia</option>                        
                      <option value="NRU">Nauru</option>                        
                      <option value="NPL">Nepal</option>                        
                      <option value="NIC">Nicaragua</option>                        
                      <option value="NER">Níger</option>                        
                      <option value="NGA">Nigeria</option>                        
                      <option value="NIU">Niue</option>                        
                      <option value="NOR">Noruega</option>                        
                      <option value="NCL">Nueva Caledonia</option>                        
                      <option value="NZL">Nueva Zelanda</option>                        
                      <option value="OMN">Omán</option>                        
                      <option value="NLD">Países Bajos</option>                        
                      <option value="PAK">Pakistán</option>                        
                      <option value="PLW">Palaos</option>                        
                      <option value="PSE">Palestina, Estado de</option>                        
                      <option value="PAN">Panamá</option>                        
                      <option value="PNG">Papúa Nueva Guinea</option>                        
                      <option value="PER">Perú</option>                        
                      <option value="PCN">Pitcairn</option>                        
                      <option value="PYF">Polinesia Francesa</option>                        
                      <option value="POL">Polonia</option>                        
                      <option value="PRT">Portugal</option>                        
                      <option value="PRI">Puerto Rico</option>                        
                      <option value="GBR">Reino Unido</option>                        
                      <option value="CAF">República Centroafricana</option>                        
                      <option value="CZE">República Checa</option>                        
                      <option value="DOM">República Dominicana</option>                        
                      <option value="REU">Reunión</option>                        
                      <option value="RWA">Ruanda</option>                        
                      <option value="ROU">Rumania</option>                        
                      <option value="RUS">Rusia</option>                        
                      <option value="ESH">Sahara Occidental</option>                        
                      <option value="WSM">Samoa</option>                        
                      <option value="ASM">Samoa Americana</option>                        
                      <option value="BLM">San Bartolomé</option>                        
                      <option value="KNA">San Cristóbal y Nieves</option>                        
                      <option value="SMR">San Marino</option>                        
                      <option value="MAF">San Martín</option>                        
                      <option value="SPM">San Pedro y Miquelón</option>                        
                      <option value="SHN">Santa Helena</option>                        
                      <option value="LCA">Santa Lucía</option>                        
                      <option value="STP">Santo Tomé y Príncipe</option>                        
                      <option value="VCT">San Vicente y las Granadinas</option>                        
                      <option value="SEN">Senegal</option>                        
                      <option value="SRB">Serbia</option>                        
                      <option value="SYC">Seychelles</option>                        
                      <option value="SLE">Sierra leona</option>                        
                      <option value="SGP">Singapur</option>                        
                      <option value="SXM">Sint Maarten</option>                        
                      <option value="SYR">Siria</option>                        
                      <option value="SOM">Somalia</option>                        
                      <option value="LKA">Sri Lanka</option>                        
                      <option value="SWZ">Suazilandia</option>                        
                      <option value="ZAF">Sudáfrica</option>                        
                      <option value="SDN">Sudán</option>                        
                      <option value="SSD">Sudán del Sur</option>                        
                      <option value="SWE">Suecia</option>                        
                      <option value="CHE">Suiza</option>                        
                      <option value="SUR">Surinam</option>                        
                      <option value="SJM">Svalbard y Jan Mayen</option>                        
                      <option value="THA">Tailandia</option>                        
                      <option value="TWN">Taiwán</option>                        
                      <option value="TZA">Tanzania</option>                        
                      <option value="TJK">Tayikistán</option>                        
                      <option value="IOT">Territorio Británico del Océano Índico</option>                        
                      <option value="ATF">Territorios Australes Franceses</option>                        
                      <option value="TLS">Timor-Leste</option>                        
                      <option value="TGO">Togo</option>                        
                      <option value="TKL">Tokelau</option>                        
                      <option value="TON">Tonga</option>                        
                      <option value="TTO">Trinidad y Tobago</option>                        
                      <option value="TUN">Túnez</option>                        
                      <option value="TKM">Turkmenistán</option>                        
                      <option value="TUR">Turquía</option>                        
                      <option value="TUV">Tuvalu</option>                        
                      <option value="UKR">Ucrania</option>                        
                      <option value="UGA">Uganda</option>                        
                      <option value="UZB">Uzbekistán</option>                        
                      <option value="VUT">Vanuatu</option>                        
                      <option value="VEN">Venezuela</option>                        
                      <option value="VNM">Vietnam</option>                        
                      <option value="WLF">Wallis y Futuna</option>                        
                      <option value="YEM">Yemen</option>                        
                      <option value="DJI">Yibuti</option>                        
                      <option value="ZMB">Zambia</option>                        
                      <option value="ZWE">Zimbabue</option> 
                      <p class="help-block error hidden">Ingresá nacionalidad</p>
                </select>
            </div>
            <div class="col-md-2 form-group item-form">
                <label>Sexo</label>
                <br>
                <label for="f" class="radio-inline">
                    <input type="radio" name="sexo_tutor" id="f" value="F" checked> Femenino
                </label>
                <br>
                <label for="m" class="radio-inline">
                    <input type="radio" name="sexo_tutor" id="m" value="M" > Masculino
                </label>
                <p class="help-block error hidden">Ingresá tu sexo</p>
            </div>
           <div class="col-md-2 form-group item-form">
            <label for="parentesco_tutor">Parentesco</label>
            <select id="parentesco_tutor" name="parentesco_tutor" class="form-control">
                <option value="Hermano" selected="">Hermano</option>
                <option value="Hermana" >Hermana</option>
                <option value="Tio">Tio</option>
                <option value="Tia">Tia</option>
                <option value="Abuelo">Abuelo</option>
                <option value="Abuela">Abuela</option>
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
              <input aria-label="número de teléfono móvil del tutor" class="form-control" id="tel1_tutor" name="tel1_tutor" type="text" value="3834505050"  required>
          </div>
          <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
      </div>

      <div class="col-md-3 form-group item-form">
          <label for="tel2_tutor">Teléfono secundario (Opcional)</label>
          <br>
          <div class="input-group">
              <span class="input-group-addon">0</span>&nbsp;&nbsp;
              <input aria-label="número de teléfono secundario del tutor" class="form-control" id="tel2_tutor" name="tel2_tutor" type="text">
          </div>
          <p class="help-block error hidden">Ingresá tu número de teléfono secundario</p>
      </div>

      <div class="col-md-4 form-group item-form">
          <label for="email_tutor">Dirección de correo electrónico</label>
          <input type="email" name="email_tutor" class="form-control" id="email_tutor" value="emailtutor@ejemplo.com"  required>
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
            <input type="checkbox" name="tutor_mismodomicilio" id="tutor_mismodomicilio" value="activado" onChange="mismoDomicilioTutor(this);">Mismo domicilio del alumno
        </div>
    </div>

    <div class="input-group row-md-4">

        <div class="col-md-4 form-group item-form">
            <label for="localidad_tutor">Localidad</label>
            <select id="localidad_tutor" name="localidad_tutor" id="localidad_tutor" class="form-control">
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
            <input type="text" name="cod_postal_tutor" class="form-control" id="cod_postal_tutor" value="4700"  required>
            <p class="help-block error hidden">Ingresá un codigo postal</p>
        </div>

        <div class="col-md-4 form-group item-form">
            <label for="barrio_tutor">Barrio</label>
            <input type="text" name="barrio_tutor" class="form-control" id="barrio_tutor" >
            <p class="help-block error hidden">Ingresá un barrio</p>
        </div>

    </div>

    <div class="input-group row-md-4">

        <div class="col-md-4 form-group item-form">
            <label for="calle_tutor">Calle</label>
            <input type="text" name="calle_tutor" class="form-control" id="calle_tutor" value="CalleTutor"  required >
            <p class="help-block error hidden">Ingresá una calle</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="num_calle_tutor">Número de calle</label>
            <input type="text" class="form-control" id="num_calle_tutor" name="num_calle_tutor" value="44"  required>
            <p class="help-block error hidden">Ingresá número de calle</p>
        </div>

        <div class="col-md-2 form-group item-form">
            <label for="piso_tutor">Piso</label>
            <input type="text" name="piso_tutor" class="form-control" id="piso_tutor">
            <p class="help-block error hidden">Ingresá un piso</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="num_depto_tutor">Departamento</label>
            <input type="text" class="form-control" id="num_depto_tutor" name="num_depto_tutor">
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
                  <input type="text" name="profesion_tutor" class="form-control" id="profesion_tutor" value="ProfesionTutor"  required>
                  <p class="help-block error hidden">Ingresa una profesion</p>
              </div>
              <div class="col-md-4 form-group item-form">
                  <label for="lugar_trabajo_tutor">Lugar de trabajo</label>
                  <input type="text" name="lugar_trabajo_tutor" class="form-control" id="lugar_trabajo_tutor"value="LugarTrabajoTutor" >
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
              <input type="checkbox" name="tutor_no_trabaja" value="activado" id="tutor_no_trabaja" onChange="tutorNoTrabaja(this);">No trabaja
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
            <input type="text" name="cod_postal_lab_tutor" class="form-control" id="cod_postal_lab_tutor" value="4700"  >
            <p class="help-block error hidden">Ingresá un codigo postal</p>
        </div>

        <div class="col-md-4 form-group item-form">
            <label for="calle_lab_tutor">Calle</label>
            <input type="text" name="calle_lab_tutor" class="form-control" id="calle_lab_tutor" value="CalleLaboralTutor" >
            <p class="help-block error hidden">Ingresá una calle</p>
        </div>

    </div>

    <div class="input-group row-md-4">
        <div class="col-md-3 form-group item-form">
            <label for="num_calle_lab_tutor">Número de calle</label>
            <input type="text" class="form-control" name="num_calle_lab_tutor" id="num_calle_lab_tutor"  value="0002"  >
            <p class="help-block error hidden">Ingresá número de calle</p>
        </div>

        <div class="col-md-2 form-group item-form">
            <label for="piso_lab_tutor">Piso</label>
            <input type="text" name="piso_lab_tutor" class="form-control" id="piso_lab_tutor" name="piso_lab_tutor">
            <p class="help-block error hidden">Ingresá un piso</p>
        </div>

        <div class="col-md-3 form-group item-form">
            <label for="num_depto_lab_tutor">Departamento</label>
            <input type="text" class="form-control" id="num_depto_lab_tutor" name="num_depto_lab_tutor">
            <p class="help-block error hidden">Ingresá un un departamento</p>
        </div>
        <div class="col-md-3 form-group item-form">
            <label for="tel_lab_tutor">Teléfono móvil</label>
            <div class="input-group">
                <span class="input-group-addon">0</span>&nbsp;&nbsp;
                <input aria-label="número de teléfono móvil padre" name="tel_lab_tutor" class="form-control" id="tel_lab_tutor"  type="text" value="3834544449">
            </div>
            <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
        </div>

    </div>
  </fieldset>