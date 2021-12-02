<?php

include("conexion.php");
$con=conectar();

$idart=$_GET['id'];

$sql="DELETE FROM ventas WHERE idart='$idart'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>