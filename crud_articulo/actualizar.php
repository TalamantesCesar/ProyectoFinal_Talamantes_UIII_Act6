<?php
include("conexion.php");
$con = conectar();

$idart = $_GET['id'];

$sql = "SELECT * FROM articulo WHERE idart='$idart'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Actualizar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="text" class="form-control mb-3" name="idart" placeholder="id art" value="<?php echo $row['idart']  ?>">
            <input type="text" class="form-control mb-3" name="nombredelarticulo" placeholder="Nombre del Articulo" value="<?php echo $row['nombredelarticulo']  ?>">
            <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
            <input type="text" class="form-control mb-3" name="tipodearticulo" placeholder="Tipo de Articulo" value="<?php echo $row['tipodearticulo']  ?>">
            <input type="text" class="form-control mb-3" name="existenciadelart" placeholder="Existencia del Articulo" value="<?php echo $row['existenciadelart']  ?>">
            <input type="text" class="form-control mb-3" name="formadepago" placeholder="Forma de pago" value="<?php echo $row['formadepago']  ?>">
            <input type="text" class="form-control mb-3" name="promocion" placeholder="Promocion" value="<?php echo $row['promocion']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>