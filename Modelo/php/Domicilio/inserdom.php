<?php
include("../conexion.php");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['enviar'])) {
    $Nombre_Cliente = $_POST['Nombre_Cliente'];
    $Doc_Cliente = $_POST['Doc_Cliente'];
    $Producto = $_POST['Producto'];
    $Cantidad = $_POST['Cantidad'];
    $Tel_Cliente = $_POST['Tel_Cliente'];
    $Dir_Cliente = $_POST['Dir_Cliente'];

    $datos = "INSERT INTO domicilios (Nombre_Cliente, Doc_Cliente, Producto, Cantidad, Tel_Cliente, Dir_Cliente)
    VALUES ('$Nombre_Cliente', '$Doc_Cliente', '$Producto', '$Cantidad', '$Tel_Cliente', '$Dir_Cliente')";

    if (mysqli_query($enlace, $datos)) {
        echo "Los datos se insertaron correctamente";
        header("location: ../../../Vista/html/crear_servicio2.html");
        
        exit(); 
        
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }
}else{
    "mal";
}
mysqli_close($enlace);
?>