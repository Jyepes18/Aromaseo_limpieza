<?php

include("../conexion.php");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['Mirar']))  {

    $cliente = $_POST['Nombre_Cliente'] ;
    $docu = $_POST['n_doc'] ;
    $tipo_doc = $_POST['Tipo_Doc']; 
    $producto = $_POST['Producto'] ;

    $Datos = "INSERT INTO cotizacion (Nombre_Cliente, n_doc, tipo_doc, Producto) VALUES
     ('$cliente', '$docu', '$tipo_doc', '$producto')";

    if (mysqli_query($enlace, $Datos)) {
        echo "Los datos se insertaron correctamente.";
        header("location: ../../../Vista/html/Cotizar.html");
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }
}

mysqli_close($enlace);

?>
