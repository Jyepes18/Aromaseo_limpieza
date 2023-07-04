<?php
include("../conexion.php");



if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['Actualizar'])) {
    $documento = $_POST['documento'];
    $tipo_doc = $_POST['tipo_doc'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $datos = "UPDATE proveedor SET tipo_doc='$tipo_doc', nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo' WHERE documento='$documento'";

    if (mysqli_query($enlace, $datos)) {
        echo "Los datos se actualizaron correctamente";
        header("location: proveedor.php");
        exit();
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($enlace);
    }
}

mysqli_close($enlace);
?>
