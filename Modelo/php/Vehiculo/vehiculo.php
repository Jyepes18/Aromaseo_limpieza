<?php
include("../conexion.php");

$vehiculo = "SELECT * FROM vehiculo";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Vehiculo.css" >
    <title>Vehiculos</title>
</head>

<body>
<div class="container-fluid">
  <form class="d-flex input" action="busqueda.php" method="post">
      <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda">
      <button class="bnt-btn-outline-info" type="submit" name="enviar"><b>Buscar</b></button>
      </form>
  </div>
    <div class="container-table container-table--edit">
        <div class="table__title table__title--edit">Vehiculos</div>
        <div class="table__header">Placa Vehiculo</div>
        <div class="table__header">Tipo Vehiculo</div>
        <div class="table__header">Operacion</div>
        <?php $resultado = mysqli_query($enlace, $vehiculo);
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="table__item">
                <?php echo $row["placa"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["tipo_vehiculo"]; ?>
            </div>
            
            <div class="table__item">
                <a href="editar.php?placa=<?php echo $row["placa"]; ?>" class="table__item__link1">Editar</a> |
                <a href="eliminar.php?placa=<?php echo $row["placa"]; ?>" class=" table__item__link">Eliminar</a> |
                <a  href="../../../Vista/html/vehiculo.html"  class="table__item__link">Volver</a>
            </div>


        <?php }
        mysqli_free_result($resultado); ?>
    </div>
    
</body>
</html>