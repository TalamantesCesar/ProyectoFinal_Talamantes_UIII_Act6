<?php

include("conexion.php");
$con=conectar();

$idart=$_POST['idart'];
$idempleado=$_POST['idempleado'];
$idcliente=$_POST['idcliente'];
$preciodelart=$_POST['preciodelart'];
$fechadeventa=$_POST['fechadeventa'];
$cantidad=$_POST['cantidad'];
$nofactura=$_POST['nofactura'];

$sql = "UPDATE ventas SET idempleado='$idempleado', idcliente='$idcliente', preciodelart='$preciodelart', fechadeventa='$fechadeventa', cantidad='$cantidad', nofactura='$nofactura' WHERE idart='$idart'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
  
    }
    
?>