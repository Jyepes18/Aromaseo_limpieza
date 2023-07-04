<?php
 include("../conexion.php");
if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['Registrar'])) {
    $documento = $_POST['documento'];
    $tipo_doc = $_POST['tipo_doc'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $codigo_rol = $_POST['codigo_rol'];



    $datos = "INSERT INTO usuarios (documento, tipo_doc, nombre, apellido, telefono, correo, contraseña, codigo_rol )
    VALUES ('$documento', '$tipo_doc', '$nombre ', '$apellido', '$telefono','$correo', '$contraseña', '$codigo_rol')";

    if (mysqli_query($enlace, $datos)) {
        echo "Los datos se insertaron correctamente";
        //header("location: ../../../Vista/html/Cliente.html");
        
    
    exit(); 
        
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }
    
}
mysqli_close($enlace);


?>