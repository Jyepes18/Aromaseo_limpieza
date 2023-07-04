<?php

include("../conexion.php");


$id = $_GET['id'];

$eliminar = "DELETE FROM usuarios WHERE codigo = '$id'";


if(mysqli_query($enlace, $eliminar)) {
    echo "Los datos se eliminaron correctamente.";
    header("location: clientes.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}


?>