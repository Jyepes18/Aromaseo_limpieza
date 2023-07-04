<?php

include("../conexion.php");


$id = $_GET['id'];

$eliminar = "DELETE FROM  cotizacion WHERE cod_cotizacion  = '$id'";


if(mysqli_query($enlace, $eliminar)) {
    echo "Los datos se eliminaron correctamente.";
    header("location: tabla.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}


?>