<?php

include ("vista/cabecera.php");

?>

<center>
<div class="card" style=" width: 600px; height: 500px; border-radius: 10px; border: solid 1px black; margin-top: 30px;">
  <div class="card-header"><h1>Ingrese sus datos</h1></div>
  <div class="card-body">
  <form action="tabla.php" method="post">
  <div class="form-group">
      <select id="disabledSelect" class="form-control" name="tipodoc">
        <option disabled selected>Seleccione un tipo de documento</option>
        <option value="T.I">T.I</option>
        <option value="C.C">C.C</option>
        <option value="NIT">NIT</option>
        <option value="Pasaporte">Pasaporte</option>
      </select>
  </div>
  <div class="form-group">
      <input type="number" class="form-control" placeholder="Número de documento" name="numdocumento">
  </div>
  <div class="form-row">
    <div class="col">
        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Apellido" name="apellido">
    </div>
  </div><br>
  <div class="form-group">
      <input type="text" class="form-control" placeholder="Dirección" name="direc">
  </div>
  <div class="form-group">
      <input type="number" class="form-control" placeholder="Teléfono" name="telefono">
  </div>
  <div class="form-group">
      <input type="email" class="form-control" placeholder="Correo electrónico" name="mail">
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary text-white" value="Registrar">Guardar</button>
  </div>
</div>
</div>
</center>
</form>

<?php

include ("vista/pie.php");

?>