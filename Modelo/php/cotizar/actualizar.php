<?php
include("../conexion.php");
$id = $_GET["id"];
$cotizacion = "SELECT * FROM cotizacion WHERE cod_cotizacion = '$id' ";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cotizar.css">
    <title>Actualizar Datos</title>
</head>

<body>
    <form class="container-table container-table--edit" action="procesodeactualizar.php"  method="post">
        <div class="table__title table__title--edit">Datos a editar</div>
        <div class="table__header">Nombre del cliente</div>
        <div class="table__header">Numero de Documento</div>
        <div class="table__header">Tipo de Documento</div>
        <div class="table__header">Producto</div>
        <div class="table__header">Operacion</div>

        <?php $resultado = mysqli_query($enlace, $cotizacion);
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>

            <input type="hidden"  class="table__item " value="<?php echo $row["cod_cotizacion"]; ?>" name="id" >
            <input type="text"  class="table__input " value="<?php echo $row["Nombre_Cliente"]; ?>" name="Nombre_Cliente" >
            <input type="text"  class="table__input" value="<?php echo $row["N_Doc"]; ?>" name="N_Doc" >
            <input type="text"  class="table__input" value="<?php echo $row["Tipo_Doc"]; ?>" name="Tipo_Doc" >
            <input type="text"  class="table__input" value="<?php echo $row["Producto"]; ?>" name="Producto" >
           

                <?php }
        mysqli_free_result($resultado); ?>
      
        <input type="submit" value="Actualizar" name="Actualizar" class="container__submit container__submit--actualizar" >


    </form>
</body>

</html>