<?php
include("../conexion.php");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener los valores enviados por el formulario;
$placa = $_POST['placa'];
$tipo_vehiculo = $_POST['tipo_vehiculo'];


// Actualizar los datos en la tabla
$actualizar = "UPDATE vehiculo  SET tipo_vehiculo='$tipo_vehiculo' WHERE placa='$placa'";

if (mysqli_query($enlace, $actualizar)) {
    echo "Los datos se actualizaron correctamente.";
    header("location: vehiculo.php");
  
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}

// Cerrar la conexión a la base de datos
mysqli_close($enlace);
?>
