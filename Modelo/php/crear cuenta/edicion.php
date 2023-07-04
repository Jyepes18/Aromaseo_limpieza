<?php
include("../conexion.php");

$resgistro = "SELECT * FROM usuarios";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crear.css">
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
        <div class="table__title table__title--edit">Datos del Usuarior</div>
        <div class="table__header">Documento</div>
        <div class="table__header">T.D</div>
        <div class="table__header">Nombres</div>
        <div class="table__header">Apellidos</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Usuario</div>
        <div class="table__header">Contraseña</div>
        <div class="table__header">Rol</div>
        <div class="table__header">Operacion</div>

        <?php $resultado = mysqli_query($enlace, $resgistro);
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="table__item">
                <?php echo $row["documento"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["tipo_doc"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["nombre"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["apellido"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["telefono"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["correo"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["contraseña"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["codigo_rol"]; ?>
            </div>

            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["codigo"]; ?>" class="table__item__link1">Editar</a> |
                <a href="procesar_eliminar.php?id=<?php echo $row["codigo"]; ?>" class=" table__item__link">Eliminar</a> |
                
            </div>


        <?php }
        mysqli_free_result($resultado); ?>


    </div>

    <script src="../../../Controlador/js/confirmacion.js"></script>
</body>

</html>