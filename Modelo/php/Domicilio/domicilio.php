<?php
include("../conexion.php");
$proveedor = "SELECT * FROM domicilios";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Domicilio.css" >
    <title>Domicilios</title>
</head>

<body>
<div class="container-fluid">
  <form class="d-flex input" action="busqueda.php" method="post">
      <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda">
      <button class="bnt-btn-outline-info" type="submit" name="enviar"><b>Buscar</b></button>
      </form>
  </div>

    <div class="container-table container-table--edit">
        <div class="table__title table__title--edit">Domicilios</div>
        <div class="table__header">Nombre Cliente</div>
        <div class="table__header">Documento</div>
        <div class="table__header">Producto</div>
        <div class="table__header">Cantidad</div>
        <div class="table__header">Telefono cliente</div>
        <div class="table__header">Direccion Cliente</div>
        <div class="table__header">Operaciones</div>
       

        <?php
        $resultado = mysqli_query($enlace, $proveedor);
        while($row = mysqli_fetch_assoc($resultado)){
            ?>
            <div class="table__item">
            <?php echo $row["Nombre_Cliente"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["Doc_Cliente"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["Producto"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["Cantidad"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["Tel_Cliente"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["Dir_Cliente"]; ?>
            </div>

            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["Cod_Domicilio"];?>" class="table__item__link1">Editar</a> |
                <a href="eliminar.php?id=<?php echo $row["Cod_Domicilio"];?>" class="table__item__link">Eliminar</a> |
                <a  href="../../../Vista/html/crear_servicio2.html"  class="table__item__link">Volver</a>
            </div>


        <?php
        }

        mysqli_free_result($resultado); ?>

    </div>

    <script href="../../../Controlador/js/confirmacion.js"></script>
</body>
</html>