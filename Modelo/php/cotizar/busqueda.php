<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="cotizar.css">
    <title>cotizacion</title>
</head>
<body>
<?php
include("../conexion.php");


// Verificar si se envió el formulario de búsqueda
if (isset($_POST['enviar'])) {
    // Obtener el valor de búsqueda
    $busqueda = $_POST['busqueda'];
    
    // Preparar la consulta SQL
    $consulta = $enlace->prepare("SELECT * FROM cotizacion  WHERE Nombre_Cliente LIKE ? OR Producto LIKE ?");
    $busqueda_param = "%$busqueda%";
    $consulta->bind_param("ss", $busqueda_param, $busqueda_param);
    
    // Ejecutar la consulta
    $consulta->execute();
    
    // Obtener los resultados
    $resultado = $consulta->get_result();
    
    // Mostrar los resultados
    ?>

    <div class="container-table container-table--edit">
    <div class="table__title table__title--edit">Datos del Usuario</div>
        <div class="table__header">Nombre del cliente</div>
        <div class="table__header">Numero de Documento</div>
        <div class="table__header">Tipo de Documento</div>
        <div class="table__header">Producto</div>
        <div class="table__header">Operacion</div>
    
            <?php
            while ($row = $resultado->fetch_assoc()) {
                ?>
                <div class="table__item">
                    <?php echo $row["Nombre_Cliente"]; ?>
                </div>
                <div class="table__item">
                    <?php echo $row["N_Doc"]; ?>
                </div>
                <div class="table__item">
                    <?php echo $row["Tipo_Doc"]; ?>
                </div>
                <div class="table__item">
                    <?php echo $row["Producto"]; ?>
                </div>
                
                <div class="table__item">
                <a href="tabla.php" class="table__item__link1">Volver</a> 
            </div>
                <?php
            }
            ?>
    </div>
    <?php
    
    // Cerrar la consulta y la conexión a la base de datos
    $consulta->close();
    $enlace->close();
}
?>

</body>
</html>