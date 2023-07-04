<?php
include("../conexion.php");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['registrar'])) {
    $nombre_proveedor = mysqli_real_escape_string($enlace, $_POST['nombre_proveedor']);
    $tel_proveedor = mysqli_real_escape_string($enlace, $_POST['tel_proveedor']);
    $doc_proveedo = mysqli_real_escape_string($enlace, $_POST['doc_proveedo']);
    $fecha_compra = mysqli_real_escape_string($enlace, $_POST['fecha_compra']);
    $producto = mysqli_real_escape_string($enlace, $_POST['producto']);
    $cantidad = mysqli_real_escape_string($enlace, $_POST['cantidad']);
    $descripcion = mysqli_real_escape_string($enlace, $_POST['descripcion']);
    $valor_unitario = mysqli_real_escape_string($enlace, $_POST['valor_unitario']);
    $valor_total = mysqli_real_escape_string($enlace, $_POST['valor_total']);

    $datos = "INSERT INTO compra (nombre_proveedor, tel_proveedor, doc_proveedor, fecha_compra, producto, cantidad, descripcion, valor_unitario, valor_total)
    VALUES ('$nombre_proveedor', '$tel_proveedor', '$doc_proveedo', '$fecha_compra', '$producto','$cantidad', '$descripcion', '$valor_unitario', '$valor_total' )";

    if(mysqli_query($enlace, $datos)) {
        echo "Los datos se insertaron correctamente";
        header("location: ../../../Vista/html/compra.html");
        exit(); 
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }
} else {
    echo "Error: No se recibió ningún dato para insertar";
}

mysqli_close($enlace);
?>
