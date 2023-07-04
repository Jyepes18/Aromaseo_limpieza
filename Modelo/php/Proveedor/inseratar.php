<?php
include("../conexion.php");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['Guardar'])) {
    $documento = $_POST['documento'];
    $tipo_doc = $_POST['tipo_doc'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['Apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $datos = "INSERT INTO proveedor (documento, tipo_doc, nombre, apellido, telefono, correo)
    VALUES ('$documento', '$tipo_doc', '$nombre', '$apellido', '$telefono', '$correo')";

    if (mysqli_query($enlace, $datos)) {
        echo "Los datos se insertaron correctamente";
        header("location: ../../../Vista/html/proveedor.html");
        
        exit(); 
        
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }
}

mysqli_close($enlace);
?>