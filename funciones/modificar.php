<?php 

//include("vista/cabecera.php"); 

?> 

<?php

/*$conexion = mysqli_connect("localhost", "root", "", "SisosHelp") or
die("Problemas con la conexión");
    
$registro1 = mysqli_query($conexion, "select numdocumento, tipodoc, nombre, apellido, telefono, direc, mail from empleado where numdocumento='$_REQUEST[numdocumento]'") or
die("Problemas en el select:" . mysqli_error($conexion));
 
?>

<!-- <center>
<div class="card" style=" width: 600px; height: 500px; border-radius: 10px; border: solid 1px black; margin-top: 30px;">
<div class="card-header"><h1>Actualizacion de datos</h1></div>
  <div class="card-body">
  <form action="modificar2.php" method="post" >
  <div class="form-group">
  <?php //if ($reg = mysqli_fetch_array($registros)) { ?>
      <select id="disabledSelect" class="form-control" name="tipodoc" value="<?php //echo $reg['tipodoc'] ; ?>">
        <option disabled selected>Seleccione un tipo de documento</option>
        <option value="T.I">T.I</option>
        <option value="C.C">C.C</option>
        <option value="NIT">NIT</option>
        <option value="Pasaporte">Pasaporte</option>
      </select>
  </div>
  <div class="form-group">
      <input type="number" class="form-control" required readonly placeholder="Número de documento" name="numdocumento" value="<?php //echo $reg['numdocumento'] ; ?>">
  </div>
  <div class="form-row">
    <div class="col">
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php //echo $reg['nombre'] ; ?>">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="<?php //echo $reg['apellido'] ; ?>">
    </div>
  </div><br>
  <div class="form-group">
      <input type="text" class="form-control" placeholder="Dirección" name="direc" value="<?php //echo $reg['direc'] ; ?>">
  </div>
  <div class="form-group">
      <input type="number" class="form-control" placeholder="Teléfono" name="telefono" value="<?php //echo $reg['telefono'] ; ?>">
  </div>
  <div class="form-group">
      <input type="email" class="form-control" placeholder="Correo electrónico" name="mail" value="<?php //echo $reg['mail'] ; ?>">
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary text-white" value="Registrar">Guardar</button>
  </div>
</div>
</div>
<?php //} ?>
</center> 
</form> -->
     
<?php 

//include("vista/pie.php");

?>