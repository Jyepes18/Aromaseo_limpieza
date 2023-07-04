<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Producto.css">
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
    $consulta = $enlace->prepare("SELECT * FROM producto WHERE Nombre LIKE ? OR Categoria LIKE ?");
    $busqueda_param = "%$busqueda%";
    $consulta->bind_param("ss", $busqueda_param, $busqueda_param);
    
    // Ejecutar la consulta
    $consulta->execute();
    
    // Obtener los resultados
    $resultado = $consulta->get_result();
    
    // Mostrar los resultados
    ?>
    <div class="container-table container-table--edit">
        <div class="table__title table__title--edit">Productos</div>
        <div class="table__header">Tipo Producto</div>
        <div class="table__header">Categoria</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Valor</div>
        <div class="table__header">Descripcion</div>
        <div class="table__header">codigo_pedido</div>
        <div class="table__header">Operacion</div>


    <?php
    while ($row = $resultado->fetch_assoc()) {
        ?>
       <div class="table__item">
                <?php echo $row["Tipo_producto"]; ?>
            </div>
  
            <div class="table__item">
                <?php echo $row["Categoria"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["Nombre"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["Valor"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["Descripción"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["codigo_pedido"]; ?>
            </div>

        <div class="table__item">
                <a href="product.php" class="table__item__link1">Volver</a> 
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

