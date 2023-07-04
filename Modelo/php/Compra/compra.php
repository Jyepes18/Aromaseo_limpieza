<?php
include("../conexion.php");

$usuario = "SELECT * FROM compra";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Compras.css" >
    <title>Comprar</title>
</head>

<body>

<div class="container-fluid">
  <form class="d-flex input" action="busqueda.php" method="post">
      <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda">
      <button class="bnt-btn-outline-info" type="submit" name="enviar"><b>Buscar</b></button>
      </form>
  </div>

    <div class="container-table container-table--edit">
        <div class="table__title table__title--edit">Compra</div>
        <div class="table__header">Proveedor</div>
        <div class="table__header">Tel_proveedor</div>
        <div class="table__header">Doc_Proveedor</div>
        <div class="table__header">Fecha_Compra</div>
        <div class="table__header">Producto</div>
        <div class="table__header">Cantidad</div>
        <div class="table__header">Descripcion</div>
        <div class="table__header">Valor_Unit</div>
        <div class="table__header">Valor_total</div>
        <div class="table__header">Operacion</div>


        <?php $resultado = mysqli_query($enlace, $usuario);
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="table__item">
                <?php echo $row["nombre_proveedor"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["tel_proveedor"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["doc_proveedor"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["fecha_compra"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["producto"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["cantidad"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["descripcion"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["valor_unitario"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["valor_total"]; ?>
            </div>




            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["numero_factura"];?>" class="table__item__link1">Editar</a> |
                <a href="eliminar.php?id=<?php echo $row["numero_factura"]; ?>" class=" table__item__link">Eliminar</a> |
                <a  href="../../../Vista/html/compra.html"  class="table__item__link">Volver</a>
            </div>


        <?php }
        mysqli_free_result($resultado); ?>



    </div>
</body>
</html>
