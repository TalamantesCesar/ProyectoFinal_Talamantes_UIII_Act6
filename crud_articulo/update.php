<?php

include("conexion.php");
$con=conectar();

$idart=$_POST['idart'];
$nombredelarticulo=$_POST['nombredelarticulo'];
$precio=$_POST['precio'];
$tipodearticulo=$_POST['tipodearticulo'];
$existenciadelart=$_POST['existenciadelart'];
$formadepago=$_POST['formadepago'];
$promocion=$_POST['promocion'];

$sql = "UPDATE articulo SET nombredelarticulo='$nombredelarticulo', precio='$precio', tipodearticulo='$tipodearticulo', existenciadelart='$existenciadelart', formadepago='$formadepago', promocion='$promocion' WHERE idart='$idart'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
  
    }
    
?>