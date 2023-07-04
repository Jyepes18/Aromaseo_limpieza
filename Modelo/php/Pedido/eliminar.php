<?php

include("../conexion.php");


$id = $_GET['id'];

$eliminar = "DELETE FROM  pedido WHERE Cod_pedido = '$id'";


if(mysqli_query($enlace, $eliminar)) {
    echo "Los datos se eliminaron correctamente.";
    header("location: pedido.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}


?>