<?php
include("conexion.php");
$con=conectar();

$curp=$_POST['curp'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];


$sql="INSERT INTO empleado VALUES('$curp','$nombre','$apellido','$telefono','$edad','$direccion','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>
