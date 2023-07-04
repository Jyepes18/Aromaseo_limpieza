<?php
include("../conexion.php");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['Registrar'])) {
    $Tipo_producto = mysqli_real_escape_string($enlace, $_POST['Tipo_producto']);
    $Categoria = mysqli_real_escape_string($enlace, $_POST['Categoria']);
    $Nombre = mysqli_real_escape_string($enlace, $_POST['Nombre']);
    $Valor = mysqli_real_escape_string($enlace, $_POST['Valor']);
    $Descripción = mysqli_real_escape_string($enlace, $_POST['Descripción']);
    $codigo_pedido = mysqli_real_escape_string($enlace, $_POST['codigo_pedido']);

    $datos = "INSERT INTO producto (Tipo_producto, Categoria, Nombre, Valor, Descripción, codigo_pedido)
    VALUES ('$Tipo_producto', '$Categoria', '$Nombre', '$Valor', '$Descripción', '$codigo_pedido')";

    if(mysqli_query($enlace, $datos)) {
        echo "Los datos se insertaron correctamente";
        header("location: ../../../Vista/html/productoadmi.html");
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }
} else {
    echo "Error: No se recibió ningún dato para insertar";
}

mysqli_close($enlace);
?>
