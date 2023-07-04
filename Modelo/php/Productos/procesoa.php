<?php
include("../conexion.php");

// Obtener los valores enviados por el formulario
$id = $_POST['id'];
$Tipo_producto = $_POST['Tipo_producto'];
$Categoria = $_POST['Categoria'];
$Nombre = $_POST['Nombre'];
$Valor = $_POST['Valor'];
$Descripción = $_POST['Descripción'];

// Verificar si se enviaron todos los campos obligatorios

// Actualizar los datos en la tabla
$actualizar = "UPDATE  producto SET Tipo_producto='$Tipo_producto', Categoria='$Categoria',
Nombre='$Nombre', Valor='$Valor', Descripción='$Descripción' WHERE Cod_producto='$id'";

if (mysqli_query($enlace, $actualizar)) {
    echo "Los datos se actualizaron correctamente.";
    header("location: product.php");
  
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}

// Cerrar la conexión a la base de datos
mysqli_close($enlace);
?>
