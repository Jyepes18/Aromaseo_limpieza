<?php
include("../conexion.php");
$usuario = "SELECT * FROM usuarios";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="cliente.css" >
    <title>Cliente</title>
</head>

<body>

<div class="container-fluid">
  <form class="d-flex input" action="busqueda.php" method="post">
      <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda">
      <button class="bnt-btn-outline-info" type="submit" name="enviar"><b>Buscar</b></button>
      </form>
  </div>

    
    
    <div class="container-table container-table--edit table_id" >
        <div class="table__title table__title--edit">Clientes</div>
        <div class="table__header">Documento</div>
        <div class="table__header">Tipo doc</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Contraseña</div>
        <div class="table__header">Procedimiento</div>

        
     
        <?php
        $resultado = mysqli_query($enlace, $usuario);
        while($row = mysqli_fetch_assoc($resultado)){
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
                <?php echo $row["correo"]; ?>
            </div>


            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["codigo"]; ?>" class="table__item__link1">Editar</a> |
                <a href="eliminar.php?id=<?php echo $row["codigo"]; ?>" class="table__item__link">Eliminar</a> |
                <a href="../../../Vista/html/Cliente.html" class="table__item__link">volver</a>
            </div>

        <?php
        }

        mysqli_free_result($resultado); ?>

    
    
    
    </div>







</body>
</html>
