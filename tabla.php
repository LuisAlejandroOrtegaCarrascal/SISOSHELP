<?php

include ("vista/cabecera.php");

?>

<?php
  $conexion = mysqli_connect("", "", "", "") or
  die("Problemas con la conexión");

  include ("funciones/eliminar.php");
  
  $registros = mysqli_query($conexion, "select * from empleado") or
  die("Problemas en el select:" . mysqli_error($conexion));
?> 

<center>
<div class="card" >
    <div class="card-header"><h1>TABLA DE DATOS</h1></div>
        <div class="card-body">
            <table class="table  table-striped table-bordered table-hover display"  id="tablaempleado">
                <thead>
                <tr>
                    <th>Número de documento</th>
                    <th>Tipo de documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo electrónico</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php while ($reg = mysqli_fetch_array($registros)) { ?> 
                    <td> <?php echo  $reg['tipodoc'] . "<br>"; ?></td>
                    <td> <?php echo  $reg['numdocumento'] . "<br>"; ?></td>
                    <td> <?php echo  $reg['nombre'] . "<br>"; ?></td>
                    <td> <?php echo  $reg['apellido'] . "<br>"; ?></td>
                    <td> <?php echo $reg['direc'] . "<br>"; ?></td>
                    <td> <?php echo  $reg['telefono'] . "<br>"; ?></td>
                    <td> <?php echo  $reg['mail'] . "<br>"; ?></td>

                        <td> <form action="" method="post">
                        <input type="hidden" name="numdocumento" value="<?php echo $reg['numdocumento'] ; ?>">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1" data-whatever="@getbootstrap" name="accion" value="Borrar">Editar</button></form></td>
                        
                            <?php
                                $registro1 = mysqli_query($conexion, "select numdocumento, tipodoc, nombre, apellido, telefono, direc, mail from empleado where numdocumento='$reg[numdocumento]'") or
                                die("Problemas en el select:" . mysqli_error($conexion));
                            ?>

                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary" id="exampleModalLabel">Modificación de datos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="funciones/modificar2.php" method="post" >
                                            <div class="form-group">
                                             <?php if ($reg = mysqli_fetch_array($registro1)) { ?> 
                                                <select id="disabledSelect" class="form-control" name="tipodoc" value="<?php echo $reg['tipodoc'] ; ?>">
                                                    <option disabled selected>Seleccione un tipo de documento</option>
                                                    <option value="T.I">T.I</option>
                                                    <option value="C.C">C.C</option>
                                                    <option value="NIT">NIT</option>
                                                    <option value="Pasaporte">Pasaporte</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Número de documento" name="numdocumento" value="<?php echo $reg['numdocumento'] ; ?>">
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $reg['nombre'] ; ?>">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="<?php echo $reg['apellido'] ; ?>">
                                                </div>
                                            </div><br>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Dirección" name="direc" value="<?php echo $reg['direc'] ; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Teléfono" name="telefono" value="<?php echo $reg['telefono'] ; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Correo electrónico" name="mail" value="<?php echo $reg['mail'] ; ?>">
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary text-white" value="Registrar">Guardar</button>
                                            </div>
                                        <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <td><form action="" method="post">
                        <input type="hidden" name="numdocumento" value="<?php echo $reg['numdocumento'] ; ?>">
                        <button type="submit" class="btn btn-danger" name="accion" value="Borrar">Borrar</button></form></td> 
                        </tr>
                    <?php } ?>
                
                </tbody>
            </table>

          <center>
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nuevo empleado</button>
            <div>
          </center>
          
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="exampleModalLabel">Ingrese sus datos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        <form action="conexion.php" method="post">
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
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary text-white" value="Registrar">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<script>
    var tabla=document.querySelector("#tablaempleado");

    var dataTable = new DataTable(tabla,{
      perPage:3,
      perPageSelect:[3,6,9,12]
    });
  </script>
</center>

<?php

include ("vista/pie.php");

?>