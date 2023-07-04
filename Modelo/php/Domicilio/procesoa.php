<?php
include("../conexion.php");

// Obtener los valores enviados por el formulario
$id = $_POST['id'];
$Nombre_Cliente = $_POST['Nombre_Cliente'];
$Doc_Cliente = $_POST['Doc_Cliente'];
$Producto = $_POST['Producto'];
$Cantidad = $_POST['Cantidad'];
$Tel_Cliente = $_POST['Tel_Cliente'];
$Dir_Cliente = $_POST['Dir_Cliente'];

// Verificar si se enviaron todos los campos obligatorios

// Actualizar los datos en la tabla
$actualizar = "UPDATE domicilios SET Nombre_Cliente='$Nombre_Cliente', Doc_Cliente='$Doc_Cliente',

Producto='$Producto', Cantidad='$Cantidad', Tel_Cliente='$Tel_Cliente', Dir_Cliente='$Dir_Cliente' WHERE Cod_Domicilio='$id'";

if (mysqli_query($enlace, $actualizar)) {
    echo "Los datos se actualizaron correctamente.";
    header("location: domicilio.php");
  
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}

// Cerrar la conexión a la base de datos
mysqli_close($enlace);
?>
