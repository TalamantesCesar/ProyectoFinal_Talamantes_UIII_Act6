<?php

include("conexion.php");
$con=conectar();

$curp=$_GET['id'];

$sql="DELETE FROM empleado WHERE curp='$curp'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>