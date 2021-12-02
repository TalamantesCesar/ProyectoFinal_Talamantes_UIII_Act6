<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ARTICULOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese los datos del Articulo</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idart" placeholder="ID del Articulo">
                                    <input type="text" class="form-control mb-3" name="nombredelarticulo" placeholder="Nombre del articulo">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="tipodearticulo" placeholder="Tipo de Articulo">
                                    <input type="text" class="form-control mb-3" name="existenciadelart" placeholder="Existencia del Articulo">
                                    <input type="text" class="form-control mb-3" name="formadepago" placeholder="Forma de pago">
                                    <input type="text" class="form-control mb-3" name="promocion" placeholder="Esta en Promocion?">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href = "../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID del Articulo</th>
                                        <th>Nombre articulo</th>
                                        <th>Precio</th>
                                        <th>Tipo de articulo</th>
                                        <th>Existencia del articulo</th>
                                        <th>Forma de pago</th>
                                        <th>Promocion</th>
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
                                                <th><?php  echo $row['nombredelarticulo']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['tipodearticulo']?></th>    
                                                <th><?php  echo $row['existenciadelart']?></th>  
                                                <th><?php  echo $row['formadepago']?></th>
                                                <th><?php  echo $row['promocion']?></th>  
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