<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA VENTAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese sus datos Ventas</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idart" placeholder="ID del Articulo">
                                    <input type="text" class="form-control mb-3" name="idempleado" placeholder="ID del Empleado">
                                    <input type="text" class="form-control mb-3" name="idcliente" placeholder="ID del Cliente">
                                    <input type="text" class="form-control mb-3" name="preciodelart" placeholder="Precio del Articulo">
                                    <input type="text" class="form-control mb-3" name="fechadeventa" placeholder="Fecha de Venta">
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad">
                                    <input type="text" class="form-control mb-3" name="nofactura" placeholder="Numero de Factura">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href = "../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID del Articulo</th>
                                        <th>ID del Empleado</th>
                                        <th>ID del Cliente</th>
                                        <th>Precio Del Articulo</th>
                                        <th>Fecha De Venta</th>
                                        <th>Cantidad</th>
                                        <th>Noumero de Factura</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idart']?></th>
                                                <th><?php  echo $row['idempleado']?></th>
                                                <th><?php  echo $row['idcliente']?></th>
                                                <th><?php  echo $row['preciodelart']?></th>    
                                                <th><?php  echo $row['fechadeventa']?></th>  
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><?php  echo $row['nofactura']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['idart'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idart'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                           } 
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>