<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="Compras.css">
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
    $consulta = $enlace->prepare("SELECT * FROM compra WHERE nombre_proveedor LIKE ? OR producto LIKE ?");
    $busqueda_param = "%$busqueda%";
    $consulta->bind_param("ss", $busqueda_param, $busqueda_param);
    
    // Ejecutar la consulta
    $consulta->execute();
    
    // Obtener los resultados
    $resultado = $consulta->get_result();
    
    // Mostrar los resultados
    ?>
    <div class="container-table container-table--edit" >
    <div class="table__title table__title--edit">Compra</div>
        <div class="table__header">Proveedor</div>
        <div class="table__header">Tel_proveedor</div>
        <div class="table__header">Doc_Proveedor</div>
        <div class="table__header">Fecha_Compra</div>
        <div class="table__header">Producto</div>
        <div class="table__header">Cantidad</div>
        <div class="table__header">Descripcion</div>
        <div class="table__header">Valor_Unit</div>
        <div class="table__header">Valor_total</div>
        <div class="table__header">Operacion</div>
    <?php
    while ($row = $resultado->fetch_assoc()) {
        ?>
        <div class="table__item">
            <?php echo $row["nombre_proveedor"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["tel_proveedor"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["doc_proveedor"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["fecha_compra"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["producto"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["cantidad"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["descripcion"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["valor_unitario"]; ?>
        </div>
        <div class="table__item">
            <?php echo $row["valor_total"]; ?>
        </div>

        <div class="table__item">
                <a href="compra.php" class="table__item__link1">Volver</a> 
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
