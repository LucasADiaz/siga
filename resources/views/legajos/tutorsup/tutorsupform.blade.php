
<fieldset>
    <hr size="8px" color="black" />
  <div>&nbsp;&nbsp;&nbsp;¿El alumno puede ser retirado por otra persona?&nbsp;&nbsp;
    <input type="checkbox" name="tutor_suplente_ok" id="tutor_suplente_ok" value="activado" onChange="puedeSerRetirado(this);" checked>Si
  </div>
  <br>
  <div class="col-md-12 form-group item-form">
      <h3>Tutores suplentes</h3>
  </div>
  <div id="puede_ser_retirado">
  <div class="input-group row-md-4" >

      <div class="col-md-3 form-group item-form">
          <label for="nombres_tutor_sup1">Nombres</label>
          <input type="text" name="nombres_tutor_sup1" class="form-control" id="nombres_tutor_sup1" >
          <p class="help-block error hidden">Ingresá tu nombre</p>
      </div>

      <div class="col-md-3 form-group item-form">
          <label for="apellidos_tutor_sup1">Apellidos</label>
          <input type="text" name="apellidos_tutor_sup1" class="form-control" id="apellidos_tutor_sup1" >
          <p class="help-block error hidden">Ingresá tu apellido</p>
      </div>

      <div class="col-md-2 form-group item-form">
        <label for="parentesco_tutor_sup1">Parentesco</label>
        <select id="parentesco_tutor_sup1" name="parentesco_tutor_sup1" class="form-control">
            <option value="Hermano" selected="">Hermano</option>
            <option value="Hermana" >Hermana</option>
            <option value="Tio">Tio</option>
            <option value="Tia">Tia</option>
            <option value="Abuelo">Abuelo</option>
            <option value="Abuela">Abuela</option>
        </select>
        <p class="help-block error hidden">Elegí un parentesco</p>
    </div>

      <div class="col-md-3 form-group item-form">
          <label for="tel_tutor_sup1">Teléfono</label>
          <br>
          <div class="input-group">
              <span class="input-group-addon">0</span>&nbsp;&nbsp;
              <input aria-label="número de teléfono tutor suplente 1" class="form-control" id="cellphone_number"  type="text">
          </div>
          <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
      </div>

  </div>

  <div class="input-group row-md-4">

      <div class="col-md-3 form-group item-form">
          <label for="nombres_tutor_sup2">Nombres</label>
          <input type="text" name="nombres_tutor_sup2" class="form-control" id="nombres_tutor_sup2" >
          <p class="help-block error hidden">Ingresá tu nombre</p>
      </div>

      <div class="col-md-3 form-group item-form">
          <label for="apellidos_tutor_sup2">Apellidos</label>
          <input type="text" name="apellidos_tutor_sup2" class="form-control" id="apellidos_tutor_sup2" >
          <p class="help-block error hidden">Ingresá tu apellido</p>
      </div>

      <div class="col-md-2 form-group item-form">
        <label for="parentesco_tutor_sup2">Parentesco</label>
        <select id="parentesco_tutor_sup2" name="parentesco_tutor_sup2" class="form-control">
            <option value="Hermano" selected="">Hermano</option>
            <option value="Hermana" >Hermana</option>
            <option value="Tio">Tio</option>
            <option value="Tia">Tia</option>
            <option value="Abuelo">Abuelo</option>
            <option value="Abuela">Abuela</option>
        </select>
        <p class="help-block error hidden">Elegí un parentesco</p>
    </div>

      <div class="col-md-3 form-group item-form">
          <label for="tel_tutor_sup2">Teléfono móvil</label>
          <br>
          <div class="input-group">
              <span class="input-group-addon">0</span>&nbsp;&nbsp;
              <input aria-label="número de teléfono tutor suplente 2" class="form-control" id="tel_tutor_sup2"  type="text">
          </div>
          <p class="help-block error hidden">Ingresá tu número de teléfono móvil</p>
      </div>
    </div>
  </div>

</fieldset>