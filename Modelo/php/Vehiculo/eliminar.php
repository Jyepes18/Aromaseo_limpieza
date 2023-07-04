<?php

include("../conexion.php");


$placa = $_GET['placa'];

$eliminar = "DELETE FROM vehiculo WHERE placa = '$placa'";


if(mysqli_query($enlace, $eliminar)) {
    echo "Los datos se eliminaron correctamente.";
    header("location: vehiculo.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}


?>