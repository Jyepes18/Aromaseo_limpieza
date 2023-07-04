<?php
include("../conexion.php");
$placa = $_GET["placa"];
$vehiculo = "SELECT * FROM vehiculo WHERE placa = '$placa' ";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Vehiculo.css">
    <title>Actualizar Datos</title>
</head>

<body>
    <form class="container-table container-table--edit" action="procesar_actualizar.php"  method="post">
        <div class="table__title table__title--edit">Datos a editar</div>
        <div class="table__header">Placa del Vehiculo</div>
        <div class="table__header">Tipo de Vehiculo</div>
        <div class="table__header">Operacion</div>

        

        <?php $resultado = mysqli_query($enlace, $vehiculo);
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>

            <input type="text"  class="table__input" value="<?php echo $row["placa"]; ?>"name="placa">
            <input type="text"  class="table__input " value="<?php echo $row["tipo_vehiculo"]; ?>" name="tipo_vehiculo" >
            

                <?php }
        mysqli_free_result($resultado); ?>
      
        <input type="submit" value="Actualizar" name="Actualizar" class="container__submit container__submit--actualizar" >


    </form>
</body>

</html>