<?php
include("../conexion.php");

// Obtener los valores enviados por el formulario
$id = $_POST['id'];
$Nombre_Cliente = $_POST['Nombre_Cliente'];
$N_Docs= $_POST['N_Doc'];
$Tipo_Doc = $_POST['Tipo_Doc'];
$Producto = $_POST['Producto'];

// Evitar los valores para prevenir inyección SQL
$id = mysqli_real_escape_string($enlace, $id); 
$Nombre_Cliente = mysqli_real_escape_string($enlace, $Nombre_Cliente);
$N_Docs = mysqli_real_escape_string($enlace, $N_Docs);
$Tipo_Doc = mysqli_real_escape_string($enlace, $Tipo_Doc);
$Producto = mysqli_real_escape_string($enlace, $Producto);

// Actualizar los datos en la tabla
$actualizar = "UPDATE cotizacion SET Nombre_Cliente='$Nombre_Cliente', N_Doc='$N_Docs', Tipo_Doc='$Tipo_Doc',
Producto='$Producto' WHERE cod_cotizacion ='$id'";

if (mysqli_query($enlace, $actualizar)) {
    echo "Los datos se actualizaron correctamente.";
    header("location: tabla.php");
  
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}

// Cerrar la conexión a la base de datos
mysqli_close($enlace);
?>
