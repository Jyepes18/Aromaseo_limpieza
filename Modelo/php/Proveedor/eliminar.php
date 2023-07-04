<?php

include("../conexion.php");


$id = $_GET['id'];

$eliminar = "DELETE FROM proveedor WHERE cod_proveedor = '$id'";


if(mysqli_query($enlace, $eliminar)) {
    echo "Los datos se eliminaron correctamente.";
    header("location: proveedor.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}


?>