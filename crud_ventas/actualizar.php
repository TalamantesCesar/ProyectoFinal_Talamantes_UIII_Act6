<?php
include( "conexion.php" );
$con = conectar();

$idart = $_GET['id'];

$sql = "SELECT * FROM ventas WHERE idart='$idart'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="text" class="form-control mb-3" name="idart" placeholder="ID del Articulo" value="<?php echo $row['idart']  ?>">
            <input type="text" class="form-control mb-3" name="idempleado" placeholder="ID del Empleado" value="<?php echo $row['idempleado']  ?>">
            <input type="text" class="form-control mb-3" name="idcliente" placeholder="ID del Cliente" value="<?php echo $row['idcliente']  ?>">
            <input type="text" class="form-control mb-3" name="preciodelart" placeholder="Precio del Articulo" value="<?php echo $row['preciodelart']  ?>">
            <input type="text" class="form-control mb-3" name="fechadeventa" placeholder="Fecha de Venta" value="<?php echo $row['fechadeventa']  ?>">
            <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad']  ?>">
            <input type="text" class="form-control mb-3" name="nofactura" placeholder="Numero de Factura" value="<?php echo $row['nofactura']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>