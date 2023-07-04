<?php
include("../conexion.php");
$id = $_GET["id"];

$resgistro = "SELECT * FROM domicilios WHERE Cod_Domicilio = '$id' ";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Domicilio.css">
    <title>Actualizar Datos</title>
</head>

<body>
    <form class="container-table container-table--edit" action="procesoa.php"  method="post">
    <div class="table__title table__title--edit">Datos a editar</div>
        <div class="table__header">Nombre Cliente</div>
        <div class="table__header">Documento</div>
        <div class="table__header">Producto</div>
        <div class="table__header">Cantidad</div>
        <div class="table__header">Telefono cliente</div>
        <div class="table__header">Direccion Cliente</div>
        <div class="table__header">Operaciones</div>

        <?php $resultado = mysqli_query($enlace, $resgistro);
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>

            <input type="hidden"  class="table__item " value="<?php echo $row["Cod_Domicilio"];?>" name="id">
            <input type="text"  class="table__input " value="<?php echo $row["Nombre_Cliente"]; ?>" name="Nombre_Cliente">
            <input type="text"  class="table__input" value="<?php echo $row["Doc_Cliente"]; ?>" name="Doc_Cliente">
            <input type="text"  class="table__input" value="<?php echo $row["Producto"]; ?>" name="Producto">
            <input type="text"  class="table__input" value="<?php echo $row["Cantidad"]; ?>" name="Cantidad">
            <input type="text"  class="table__input" value="<?php echo $row["Tel_Cliente"]; ?>" name="Tel_Cliente">
            <input type="text"  class="table__input" value="<?php echo $row["Dir_Cliente"]; ?>" name="Dir_Cliente">

                <?php }
        mysqli_free_result($resultado); ?>
      
        <input type="submit" value="Actualizar" name="Actualizar" class="container__submit container__submit--actualizar" >


    </form>
</body>

</html>