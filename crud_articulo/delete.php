<?php

include("conexion.php");
$con=conectar();

$idart=$_GET['id'];

$sql="DELETE FROM articulo WHERE idart='$idart'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>