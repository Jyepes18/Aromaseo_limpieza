<?php
include("../conexion.php");

// Obtener los valores enviados por el formulario
$id = $_POST['id'];
$nombre_proveedor = mysqli_real_escape_string($enlace, $_POST['nombre_proveedor']);
$tel_proveedor = mysqli_real_escape_string($enlace, $_POST['tel_proveedor']);
$doc_proveedor = mysqli_real_escape_string($enlace, $_POST['doc_proveedor']);
$fecha_compra = mysqli_real_escape_string($enlace, $_POST['fecha_compra']);
$producto = mysqli_real_escape_string($enlace, $_POST['producto']);
$cantidad = mysqli_real_escape_string($enlace, $_POST['cantidad']);
$descripcion = mysqli_real_escape_string($enlace, $_POST['descripcion']);
$valor_unitario = mysqli_real_escape_string($enlace, $_POST['valor_unitario']);
$valor_total = mysqli_real_escape_string($enlace, $_POST['valor_total']);

// Actualizar los datos en la tabla
$actualizar = "UPDATE compra SET nombre_proveedor='$nombre_proveedor', tel_proveedor='$tel_proveedor',
doc_proveedor='$doc_proveedor', fecha_compra='$fecha_compra', producto='$producto', cantidad='$cantidad',
descripcion='$descripcion', valor_unitario='$valor_unitario', valor_total='$valor_total' WHERE numero_factura='$id'";

if (mysqli_query($enlace, $actualizar)) {
    echo "Los datos se actualizaron correctamente.";
    header("location: compra.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($enlace);
}

// Cerrar la conexión a la base de datos
mysqli_close($enlace);
?>
