<?php
include("../conexion.php");
$id = $_GET["id"];
$cotizacion = "SELECT * FROM compra WHERE numero_factura = '$id'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compras.css">
    <title>Actualizar Datos</title>
</head>

<body>
    <form class="container-table container-table--edit" action="procesoa.php" method="post">
        <div class="table__title table__title--edit">Actualizar</div>
        <div class="table__header"> Proveedor</div>
        <div class="table__header">Tel_Proveedor</div>
        <div class="table__header">Documento </div>
        <div class="table__header">Fecha</div>
        <div class="table__header">Cantidad</div>
        <div class="table__header">Producto</div>
        <div class="table__header">Descripcion</div>
        <div class="table__header">Valor Unitario</div>
        <div class="table__header">Valor Total</div>
        <div class="table__header">Operacion</div>


        <?php
        $resultado = mysqli_query($enlace, $cotizacion);
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>

            <input type="hidden" class="table__item" value="<?php echo $row["numero_factura"]; ?>" name="id">
            <input type="text" class="table__input" value="<?php echo $row["nombre_proveedor"]; ?>" name="nombre_proveedor">
            <input type="text" class="table__input" value="<?php echo $row["tel_proveedor"]; ?>" name="tel_proveedor">
            <input type="text" class="table__input" value="<?php echo $row["doc_proveedor"]; ?>" name="doc_proveedor">
            <input type="text" class="table__input" value="<?php echo $row["fecha_compra"]; ?>" name="fecha_compra">
            <input type="text" class="table__input" value="<?php echo $row["cantidad"]; ?>" name="cantidad">
            <input type="text" class="table__input" value="<?php echo $row["producto"]; ?>" name="producto">
            <input type="text" class="table__input" value="<?php echo $row["descripcion"]; ?>" name="descripcion">
            <input type="text" class="table__input" value="<?php echo $row["valor_unitario"]; ?>" name="valor_unitario">
            <input type="text" class="table__input" value="<?php echo $row["valor_total"]; ?>" name="valor_total">
           

        <?php
        }
        mysqli_free_result($resultado);
        ?>

        <input type="submit" value="Actualizar" name="Actualizar" class="container__submit container__submit--actualizar">


    </form>
</body>

</html>
