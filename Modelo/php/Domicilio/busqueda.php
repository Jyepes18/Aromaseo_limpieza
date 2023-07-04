<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Domicilio.css">
    <title>Document</title>
</head>
<body>

<?php
include("../conexion.php");



// Verificar si se envió el formulario de búsqueda
if (isset($_POST['enviar'])) {
    // Obtener el valor de búsqueda
    $busqueda = $_POST['busqueda'];
    
    // Preparar la consulta SQL
    $consulta = $enlace->prepare("SELECT * FROM domicilios WHERE Nombre_Cliente LIKE ? OR Producto LIKE ?");
    $busqueda_param = "%$busqueda%";
    $consulta->bind_param("ss", $busqueda_param, $busqueda_param);
    
    // Ejecutar la consulta
    $consulta->execute();
    
    // Obtener los resultados
    $resultado = $consulta->get_result();
    
    // Mostrar los resultados
    ?>
    <div class="container-table container-table--edit" >
        <div class="table__title table__title--edit">Domicilios</div>
        <div class="table__header">Nombre Cliente</div>
        <div class="table__header">Documento</div>
        <div class="table__header">Producto</div>
        <div class="table__header">Cantidad</div>
        <div class="table__header">Telefono cliente</div>
        <div class="table__header">Direccion Cliente</div>
        <div class="table__header">Operaciones</div>

    <?php
    while ($row = $resultado->fetch_assoc()) {
        ?>
        <div class="table__item">
            <?php echo $row["Nombre_Cliente"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["Doc_Cliente"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["Producto"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["Cantidad"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["Tel_Cliente"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["Dir_Cliente"]; ?>
        </div>
      

        <div class="table__item">
                <a href="domicilio.php" class="table__item__link1">Volver</a> 
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

