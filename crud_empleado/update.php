<?php

include( "conexion.php" );
$con=conectar();

$curp=$_POST['curp'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];

$sql = "UPDATE empleado SET nombre='$nombre', apellido='$apellido', telefono='$telefono', edad='$edad', direccion='$direccion', correo='$correo' WHERE curp='$curp'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
  
    }
    
?>