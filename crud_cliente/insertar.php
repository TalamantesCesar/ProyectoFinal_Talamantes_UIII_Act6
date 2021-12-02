<?php
include("conexion.php");
$con=conectar();

$curp=$_POST['curp'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];


$sql="INSERT INTO cliente VALUES('$curp','$nombre','$apellido','$edad','$correo','$direccion','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>