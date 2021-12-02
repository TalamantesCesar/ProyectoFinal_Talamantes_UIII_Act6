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


$sql="INSERT INTO articulo VALUES('$idart','$nombredelarticulo','$precio','$tipodearticulo','$existenciadelart','$formadepago','$promocion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulo.php");
    
}else {
}
?>