<?php
include("../conexion.php");
$id = $_GET["id"];
$resgistro = "SELECT * FROM usuarios  WHERE codigo  = '$id' ";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="crear.css">
    <title>Actualizar Datos</title>
</head>

<body>
    <form class="container-table container-table--edit" action="procesar_actualizar.php"  method="post">
        <div class="table__title table__title--edit">Datos a editar</div>
        <div class="table__header">Nombres</div>
        <div class="table__header">Apellidos</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Usuario</div>
        <div class="table__header">Contraseña</div>
        <div class="table__header">Operacion</div>

        <?php $resultado = mysqli_query($enlace, $resgistro);
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>

            <input type="hidden"  class="table__item " value="<?php echo $row["ID"]; ?>" name="id" >
            <input type="text"  class="table__input " value="<?php echo $row["nombres"]; ?>" name="nombres" >
            <input type="text"  class="table__input" value="<?php echo $row["apellidos"]; ?>" name="apellidos" >
            <input type="text"  class="table__input" value="<?php echo $row["telefono"]; ?>" name="telefono" >
            <input type="text"  class="table__input" value="<?php echo $row["usuario"]; ?>" name="usuario" >
            <input type="text"  class="table__input" value="<?php echo $row["contraseña"]; ?>" name="contraseña" >

                <?php }
        mysqli_free_result($resultado); ?>
      
        <input type="submit" value="Actualizar" name="Actualizar" class="container__submit container__submit--actualizar" >


    </form>
</body>

</html>