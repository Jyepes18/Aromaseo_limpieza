<?php

include("../conexion.php");


$id = $_GET['id'];

$eliminar = "DELETE FROM compra WHERE numero_factura = '$id'";


if(mysqli_query($enlace, $eliminar)) {
    echo "Los datos se eliminaron correctamente.";
    header("location: compra.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}


?>