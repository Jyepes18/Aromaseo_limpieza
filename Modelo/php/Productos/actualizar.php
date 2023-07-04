<?php
include("../conexion.php");
$id = $_GET["id"];
$cotizacion = "SELECT * FROM producto WHERE Cod_producto = '$id'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Producto.css">
    <title>Actualizar Datos</title>
</head>

<body>
    <form class="container-table container-table--edit" action="procesoa.php" method="post">
        <div class="table__title table__title--edit">Actualizar</div>
        <div class="table__header">Tipo Producto</div>
        <div class="table__header">Categoria</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Valor</div>
        <div class="table__header">Descripcion</div>
        <div class="table__header">Operacion</div>

        <?php
        $resultado = mysqli_query($enlace, $cotizacion);
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>

            <input type="hidden" class="table__item" value="<?php echo $row["Cod_producto"]; ?>" name="id">
            <input type="text" class="table__input" value="<?php echo $row["Tipo_producto"]; ?>" name="Tipo_producto">
            <input type="text" class="table__input" value="<?php echo $row["Categoria"]; ?>" name="Categoria">
            <input type="text" class="table__input" value="<?php echo $row["Nombre"]; ?>" name="Nombre">
            <input type="text" class="table__input" value="<?php echo $row["Valor"]; ?>" name="Valor">
            <input type="text" class="table__input" value="<?php echo $row["Descripción"]; ?>" name="Descripción">

        <?php
        }
        mysqli_free_result($resultado);
        ?>

        <input type="submit" value="Actualizar" name="Actualizar" class="container__submit container__submit--actualizar">


    </form>
</body>

</html>
