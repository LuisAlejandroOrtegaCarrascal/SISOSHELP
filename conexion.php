
<?php
  $conexion = mysqli_connect("", "", "", "") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into empleado(numdocumento, tipodoc, nombre, apellido, telefono, direc, mail) values ('$_REQUEST[numdocumento]','$_REQUEST[tipodoc]','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[telefono]','$_REQUEST[direc]','$_REQUEST[mail]')")
    or die("Problemas en el select" . mysqli_error($conexion));
    header('location:tabla.php');

 mysqli_close($conexion);

 if ($_POST)  { ?>
   
   <script>
       Swal.fire({
       icon: 'success',
       title: "Usted ha sido registrado con exito ",
       showConfirmButton: false,
       timer: 1500
       })
   </script>
   
<?php  }
?>

<?php

include ("Vista/pie.php");

?>  