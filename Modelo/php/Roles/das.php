<?php

session_start();

// Verificar si el usuario tiene el rol de administrador
if ($_SESSION['codigo_rol'] != '1') {
    // Redirigir al usuario a una página de acceso no autorizado
    header("Location: das.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../../Vista/bootstrap css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../Vista/css/dashboard.css">


</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <a href="../../../Modelo/php/Roles/index.php"><img class="logo" src="../../../Vista/img/logo.png"></a>
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">

                    <a href="../../../Vista/html/proveedor.html"><span>Registo de Proveedor</span></a>
                    <a href="../../../Vista/html/Cliente.html"><span>Registro de Cliente</span></a>
                    <a href="../../../Vista/html/vehiculo.html"><span>Registro de vehiculo</span></a>
                    <a href="../../../Vista/html/Productoadmi.html"><span>Registro de Productos</span></a>
                    <a href="../../../Vista/html/Servicio.html"><span>Registrar Servicio</span></a>
                    <a href="../../../Vista/html/crear_servicio2.html"><span>Crear Servicio Domiciliario</span></a>
                    <a href="../../../Vista/html/compra.html"><span>Registrar Compra</span></a>
                    <a href="../../Modelo/php/cotizar/tabla.php"><span>Visualizar Cotizaciones</span></a>
                    <a href="../../Modelo/php/Pedido/pedido.php"><span>Visualizar Pedidos</span></a>

                </nav>
                </nav>
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-6">
                        <H4>Bienvenido administrador</H4>
                    </div>

                </div>
        </div>
    </div>





    <script src="../../../Controlador/bootstrap js/js/bootstrap.min.js "></script>
    <script src="../../../Controlador/bootstrap js/js/bootstrap.bundle.js"></script>
</body>

</html>