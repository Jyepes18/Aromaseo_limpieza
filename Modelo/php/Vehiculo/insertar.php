<?php
include("../conexion.php");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['Registrar'])) {
    $placa = $_POST['placa'];
    $tipo_vehiculo = $_POST['tipo_vehiculo'];

    $datos = "INSERT INTO vehiculo (placa, tipo_vehiculo)
    VALUES ('$placa', '$tipo_vehiculo')";

    if (mysqli_query($enlace, $datos)) {
        echo "Los datos se insertaron correctamente";
       
    header("Location: ../../../Vista/html/vehiculo.html");
    exit(); 
        
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }
    
}
mysqli_close($enlace);


?>