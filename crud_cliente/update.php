<?php

include( "conexion.php" );
$con=conectar();

$curp=$_POST['curp'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];


$sql = "UPDATE cliente SET nombre='$nombre', apellido='$apellido', edad='$edad', correo='$correo', direccion='$direccion', telefono='$telefono' WHERE curp='$curp'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
  
    }
    
?>