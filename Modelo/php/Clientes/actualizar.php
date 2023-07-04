<?php
include("../conexion.php");
$id = $_GET["id"];
$cotizacion = "SELECT * FROM usuarios WHERE codigo = '$id'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="cliente.css">
    <title>Actualizar Datos</title>
</head>

<body>
    <form class="container-table container-table--edit" action="procesoa.php" method="post">
        <div class="table__title table__title--edit">Actualizar</div>
        <div class="table__header"> Documento</div>
        <div class="table__header">Tipo Documento</div>
        <div class="table__header">Nombre </div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Contraseña</div>
        <div class="table__header">Operacion</div>


        <?php
        $resultado = mysqli_query($enlace, $cotizacion);
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>

            <input type="hidden" class="table__item" value="<?php echo $row["codigo"]; ?>" name="id">
            <input type="text" class="table__input" value="<?php echo $row["documento"]; ?>" name="documento">
            <input type="text" class="table__input" value="<?php echo $row["tipo_doc"]; ?>" name="tipo_doc">
            <input type="text" class="table__input" value="<?php echo $row["nombre"]; ?>" name="nombre">
            <input type="text" class="table__input" value="<?php echo $row["apellido"]; ?>" name="apellido">
            <input type="text" class="table__input" value="<?php echo $row["telefono"]; ?>" name="telefono">
            <input type="text" class="table__input" value="<?php echo $row["correo"]; ?>" name="correo">
            <input type="text" class="table__input" value="<?php echo $row["contraseña"]; ?>" name="contraseña">
            

        <?php
        }
        mysqli_free_result($resultado);
        ?>

        <input type="submit" value="Actualizar" name="Actualizar" class="container__submit container__submit--actualizar">


    </form>
</body>

</html>
