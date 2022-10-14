<?php
$tipodoc=(isset($_POST['tipodoc']))?$_POST['tipodoc']:"";
$numdocumento=(isset($_POST['numdocumento']))?$_POST['numdocumento']:"";
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$apellido=(isset($_POST['apellido']))?$_POST['apellido']:"";
$direc=(isset($_POST['direc']))?$_POST['direc']:"";
$telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
$mail=(isset($_POST['mail']))?$_POST['mail']:"";

$conexion = mysqli_connect("bqgj3vktraotxhl4aivy-mysql.services.clever-cloud.com", "ualk23eekc8nmjyd", "qodAs1iWoZc85lPd0lYR", "bqgj3vktraotxhl4aivy") or
die("Problemas con la conexión");
 
    $respuesta =mysqli_query($conexion," UPDATE empleado SET `tipodoc`='$tipodoc',`nombre`='$nombre',`apellido`='$apellido',`direc`='$direc',`telefono`='$telefono',`mail`='$mail'WHERE numdocumento=$numdocumento");   

header ("location:../tabla.php");

?>

