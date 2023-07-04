<?php

include("../conexion.php");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['Registrarse'])) {
    $documento = $_POST['documento'];
    $tipo_doc = $_POST['tipo_doc'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $codigo_rol = $_POST['codigo_rol'];

    // Utilizar sentencias preparadas para evitar inyección SQL
    $insertarDatos = "INSERT INTO usuarios (documento, tipo_doc, nombre, apellido, telefono, correo, contraseña, codigo_rol) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($enlace, $insertarDatos);
    
    // Vincular parámetros a la declaración preparada
    mysqli_stmt_bind_param($stmt, "ssssssss", $documento, $tipo_doc, $nombre, $apellido, $telefono, $correo, $contraseña, $codigo_rol);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "Los datos se insertaron correctamente.";
        header("location: ../../../Vista/html/crear_cuenta.html");
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($enlace);

?>
