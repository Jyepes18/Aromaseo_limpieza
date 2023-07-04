<?php
include("../conexion.php");

// Obtener los valores enviados por el formulario
$id = $_POST['id'];
$documento = mysqli_real_escape_string($enlace, $_POST['documento']);
$tipo_doc = mysqli_real_escape_string($enlace, $_POST['tipo_doc']);
$nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
$apellido = mysqli_real_escape_string($enlace, $_POST['apellido']);
$telefono = mysqli_real_escape_string($enlace, $_POST['telefono']);
$correo = mysqli_real_escape_string($enlace, $_POST['correo']);
$contraseña = mysqli_real_escape_string($enlace, $_POST['contraseña']);

// Actualizar los datos en la tabla
$actualizar = "UPDATE usuarios SET documento='$documento', tipo_doc='$tipo_doc',
nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo',
contraseña='$contraseña' WHERE codigo ='$id'";

if (mysqli_query($enlace, $actualizar)) {
    echo "Los datos se actualizaron correctamente.";
    header("location: clientes.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}

// Cerrar la conexión a la base de datos
mysqli_close($enlace);
?>
