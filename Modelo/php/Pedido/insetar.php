<?php
include("../conexion.php");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['registrar'])) {
    $Nombre_Cliente = $_POST['Nombre_Cliente'];
    $Doc_Cliente = $_POST['Doc_Cliente'];
    $Producto = $_POST['Producto'];
    $Cantidad = $_POST['Cantidad'];
    $Tel_Cliente = $_POST['Tel_Cliente'];
    $Dir_Cliente = $_POST['Dir_Cliente'];
    $Cod_Domicilio = $_POST['Cod_Domicilio'];

    $datos = "INSERT INTO pedido (Nombre_Cliente, Doc_Cliente, Producto, Cantidad, Tel_Cliente, Dir_Cliente, Cod_Domicilio)
    VALUES ('$Nombre_Cliente', '$Doc_Cliente', '$Producto', '$Cantidad', '$Tel_Cliente', '$Dir_Cliente', '$Cod_Domicilio')";

    if (mysqli_query($enlace, $datos)) {
        echo "Los datos se insertaron correctamente";
        header("location: ../../../Vista/html/Hacer pedido.html");
        
        
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }
} else {
    echo "No se ha enviado el formulario.";
}

mysqli_close($enlace);
?>
