<?php
include("../conexion.php");

// Obtener los valores enviados por el formulario
$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Verificar si se enviaron todos los campos obligatorios
if (empty($id) || empty($nombres) || empty($apellidos) || empty($telefono) || empty($usuario) || empty($contraseña)) {
    echo "Por favor, complete todos los campos.";
    exit; // Detener la ejecución del código
}

// Evitar los valores para prevenir inyección SQL
$id = mysqli_real_escape_string($enlace, $id);
$nombres = mysqli_real_escape_string($enlace, $nombres);
$apellidos = mysqli_real_escape_string($enlace, $apellidos);
$telefono = mysqli_real_escape_string($enlace, $telefono);
$usuario = mysqli_real_escape_string($enlace, $usuario);
$contraseña = mysqli_real_escape_string($enlace, $contraseña);

// Actualizar los datos en la tabla
$actualizar = "UPDATE resgistro SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', usuario='$usuario', contraseña='$contraseña' WHERE ID='$id'";

if (mysqli_query($enlace, $actualizar)) {
    echo "Los datos se actualizaron correctamente.";
  
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}

// Cerrar la conexión a la base de datos
mysqli_close($enlace);
?>
