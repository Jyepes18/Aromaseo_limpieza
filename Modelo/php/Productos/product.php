<?php
include("../conexion.php");

$producto = "SELECT * FROM producto";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Producto.css" >
    <title>Productos</title>
</head>

<body>
<div class="container-fluid">
  <form class="d-flex input" action="busqueda.php" method="post">
      <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda">
      <button class="bnt-btn-outline-info" type="submit" name="enviar"><b>Buscar</b></button>
      </form>
  </div>
    <div class="container-table container-table--edit3">
        <div class="table__title table__title--edit">Productos</div>
        <div class="table__header">Tipo Producto</div>
        <div class="table__header">Categoria</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Valor</div>
        <div class="table__header">Descripcion</div>
        <div class="table__header">codigo_pedido</div>
        <div class="table__header">Operacion</div>

        <?php
        $resultado = mysqli_query($enlace, $producto);
        while($row = mysqli_fetch_assoc($resultado)){
        ?>
            <div class="table__item">
                <?php echo $row["Tipo_producto"]; ?>
            </div>
  
            <div class="table__item">
                <?php echo $row["Categoria"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["Nombre"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["Valor"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["Descripción"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["codigo_pedido"]; ?>
            </div>

            
            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["Cod_producto"]; ?>" class="table__item__link1">Editar</a> |
                <a href="eliminar.php?id=<?php echo $row["Cod_producto"]; ?>" class="table__item__link">Eliminar</a> |
                <a  href="../../../Vista/html/productoadmi.html"  class="table__item__link">Volver</a>
            </div>
            
        <?php
        }

        mysqli_free_result($resultado); ?>
   
    </div>
</body>
</html>