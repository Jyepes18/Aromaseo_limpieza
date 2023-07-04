<?php
include("../conexion.php");


$cotizacion = "SELECT * FROM cotizacion";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="cotizari.css">
    <title>Edicion de datos</title>
</head>

<body>
<div class="container-fluid">

  <form class="d-flex input" action="busqueda.php" method="post">
      <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda">
      <button class="bnt-btn-outline-info" type="submit" name="enviar"><b>Buscar</b></button>
      </form>
  </div>


    <div class="container-table container-table--edit">
        <div class="table__title table__title--edit">Datos del Usuario</div>
        <div class="table__header">Nombre del cliente</div>
        <div class="table__header">Numero de Documento</div>
        <div class="table__header">Tipo de Documento</div>
        <div class="table__header">Producto</div>
        <div class="table__header">Operacion</div>

        <?php
        $resultado = mysqli_query($enlace, $cotizacion);
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="table__item">
                <?php echo $row["Nombre_Cliente"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["N_Doc"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["Tipo_Doc"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["Producto"]; ?>
            </div>

            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["cod_cotizacion"]; ?>" class="table__item__link1">Editar</a> |
                <a href="eliminardatos.php?id=<?php echo $row["cod_cotizacion"]; ?>" class="table__item__link">Eliminar</a> |
                <a  href="../../../Vista/html/compra.html"  class="table__item__link">Volver</a>
            </div>


        <?php }
        mysqli_free_result($resultado); ?>


    </div>

    <script src="../js/confirmacion.js"></script>
</body>

</html>
