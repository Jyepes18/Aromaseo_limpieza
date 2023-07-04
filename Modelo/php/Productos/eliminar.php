<?php

include("../conexion.php");


$id = $_GET['id'];

$eliminar = "DELETE FROM  producto WHERE Cod_producto = '$id'";


if(mysqli_query($enlace, $eliminar)) {
    echo "Los datos se eliminaron correctamente.";
    header("location: product.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}


?>