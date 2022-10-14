<?php 

if ($_POST){
      $numdocumento=$_POST['numdocumento'];
      $accion=$_POST['accion'];
  
  switch ($accion) {
   case "Borrar": 
     $registros = mysqli_query($conexion, "delete from empleado where numdocumento=$numdocumento");
    break;

    case "Registrar": 
      mysqli_query($conexion, "insert into empleado(numdocumento, tipodoc, nombre, apellido, telefono, direc, mail) values ('$_REQUEST[numdocumento]','$_REQUEST[tipodoc]','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[telefono]','$_REQUEST[direc]','$_REQUEST[mail]')")
      or die("Problemas en el select" . mysqli_error($conexion));
      header("location:../tabla.php");
      mysqli_close($conexion);
break;
    
   default:
     echo "No existe";
  }
  }

  ?>