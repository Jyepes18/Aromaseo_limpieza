<?php

include("../conexion.php");


$id = $_GET['id'];

$eliminar = "DELETE FROM resgistro WHERE ID = '$id'";


if(mysqli_query($enlace, $eliminar)) {
    echo "Los datos se eliminaron correctamente.";
    header("location: edicion.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}


?>