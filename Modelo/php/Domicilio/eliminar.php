<?php

include("../conexion.php");


$id = $_GET['id'];

$eliminar = "DELETE FROM domicilios WHERE Cod_Domicilio = '$id'";


if(mysqli_query($enlace, $eliminar)) {
    echo "Los datos se eliminaron correctamente.";
    header("location: domicilio.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}


?>