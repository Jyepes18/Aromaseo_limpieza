<?php


// Verificar si se envió el formulario de búsqueda
if (isset($_POST['enviar'])) {
    // Obtener el valor de búsqueda
    $busqueda = $_POST['busqueda'];
    
    // Preparar la consulta SQL
    $consulta = $enlace->prepare("SELECT * FROM usuarios  WHERE nombre LIKE ? OR apellido LIKE ?");
    $busqueda_param = "%$busqueda%";
    $consulta->bind_param("ss", $busqueda_param, $busqueda_param);
    
    // Ejecutar la consulta
    $consulta->execute();
    
    // Obtener los resultados
    $resultado = $consulta->get_result();
    
    // Mostrar los resultados
    ?>
    <div class="container-table container-table--edit">
    <div class="table__title table__title--edit">Datos a editar</div>
        <div class="table__header">Nombres</div>
        <div class="table__header">Apellidos</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Usuario</div>
        <div class="table__header">Contraseña</div>
        <div class="table__header">Operacion</div>
    <?php
    while ($row = $resultado->fetch_assoc()) {
        ?>
         <div class="table__item">
                <?php echo $row["documento"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["tipo_doc"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["nombre"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["apellido"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["telefono"]; ?>
            </div>
            <div class="table__item">
                <?php echo $row["correo"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["contraseña"]; ?>
            </div>

            <div class="table__item">
                <?php echo $row["codigo_rol"]; ?>
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
