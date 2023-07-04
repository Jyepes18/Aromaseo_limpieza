<?php
session_start();

// Verificar si el usuario tiene el rol de cliente
if ($_SESSION['codigo_rol'] != '2') {
    // Redirigir al usuario a una página de acceso no autorizado
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/css/index.css">
    <title>Aromaseo Limpieza</title>
</head>

<body>

    <header>

        <div class="menu container">
            <a href="#" class="logo"></a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="../../../Vista/img/menu.png" alt="">
            </label>

            <nav class="navbar">
                <ul>
                    <li><a href="../Roles/index.php">Inicio</a></li>
                    <li><a href="../../../Vista/html/Cotizar.html">Cotizacion</a></li>
                    <li><a href="../../../Modelo/php/Roles/login.php">Iniciar Sesion</a></li>
                    <li><a href="../../../Vista/html/crear_cuenta.html">Crear cuenta</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="content" id="Nosotros">
                <h1>Nosotros</h1>

                <p>Fabricamos diferentes tipos de productos para la limpieza de hogar como son: jabón de ropa, jabón de
                    loza, blanqueador, desinfectante, jabón de manos entre otros. También se elaboras productos para
                    automóviles y motos y además tenemos una fabulosa marca de productos cosméticos para mascotas
                    (perros y gatos )
                </p>
                <a href="#Mision y Vision" class="btn-1">Mision y Vision</a>
            </div>
            <img src="../../../Vista/img/logo.png" alt="">
        </div>
    </header>

    <div class="wrapper">

        <div class="card">

            <img src="../../../Vista/img/servicio1.png" alt="">
            <div class="info">

                <p>Son tres productos con tres presentaciones las cuales son de cuatro litos, diez litros y veinte
                    litros
                    que se venden, los cuales son el acondicionador(Unicamente viene en presentacion de
                    cuatro litros), tambien puede contener desengrasante e hidratante
                </p>
                <a class="btn" href="../../../Vista/html/producto.html">Comprar</a>

            </div>

        </div>

        <!--Escpacio-->

        <div class="card">

            <img src="../../../Vista/img/servicio2.jpg" alt="">
            <div class="info">

                <p>Dentro de esta gama tenemos produstos tanto para el hogar como para el hoga se tiene jabonn para la
                    loza,
                    jabon para la ropa, jabon para la loza, silicona y desifectantes etc. <br>
                    En total se tienen 18 productos para el hogar
                </p>
                <a class="btn" href="../../../Vista/html/producto.2.html">Comprar</a>

            </div>

        </div>

        <!--Espacio-->

        <div class="card">

            <img src="../../../Vista/img/servicio3.png" alt="">
            <div class="info">
                <p>Dentro de la gama para vehiculos se tiene productos que limpian y lustran los vehiculos y tambien se
                    cuentas con productos para limpiar superficies fuertes en grsa o una suciedad mas fuerte en total se
                    cuenta con 18 productos para este tipo de casos
                </p>
                <a class="btn" href="../../../Vista/html/producto3.html">Comprar</a>
            </div>

        </div>

    </div>

    <section>

        <h2>Beneficios</h2>

        <div class="container">

            <div class="g-factures">

                <div class="feature">

                    <img src="../../../Vista/img/cumplimiento.png" alt="">
                    <h3>cumplimiento</h3>
                    <p>Los productos son entregados maximo a las 24 horas siguientes de haber confirmado el pedido </p>

                </div>

                <div class="feature">

                    <img src="../../../Vista/img/Garantia.png" alt="">
                    <h3>garantia</h3>
                    <p>Si algun producto tiene un defecto de fabrica se hara un cambio inmediato del producto en un
                        tiempo maximo de 7 dias de haber manipulado el producto
                    </p>

                </div>

                <div class="feature">

                    <img src="../../../Vista/img/facil_pago.jpg" alt="">
                    <h3>Facilidad de pago</h3>
                    <p>se puede pagar de con contra entrega o de forma virtula como nequi, daviplata o psi </p>

                </div>

                <div class="feature">

                    <img src="../../../Vista/img/servicio.png" alt="">
                    <h3>servicio</h3>
                    <p>se hacen los domicilios en cualquier parte de la ciudad y fuera de bogota y el pago es contra
                        entrega </p>

                </div>

                <div class="feature">

                    <img src="../../../Vista/img/personalliza.jpg" alt="">
                    <h3>Personalizacion de productos</h3>
                    <p>Se mirara la necesidad especifica y se hara una encuesta donde se analisara cuales son los
                        requerimientos y se le dara la satisfaccion al cliente
                    </p>

                </div>
            </div>
        </div>
    </section>

    <br><br><br><br>

    <footer>

        <div class="container">
            <div class="info">
                <div class="info-content" id="Mision y Vision">
                    <div class="info-price">
                        <h2>Mision</h2>
                        <p class="price"></p>
                        <p>Es emprender por la limpieza, aseo desinfección y aroma de los hogares la industria y las
                            oficinas y facilitarle al cliente con y servicios personalizado sin que se tenga que
                            desplazar desde su casa, oficina y empresa
                        </p>

                    </div>

                    <div class="info-txt">
                        <h2>vision</h2>
                        <p>Que al año 2025 debemos ampliar nuestras ventas a nivel nacional y así poder dar más
                            reconocimiento a nuestra marca
                        </p>
                        <a href="#Nosotros" class="btn-1">Nosotros</a>


                    </div>

                </div>
                <hr>
                <div class="enlaces">

                    <h3>Aromaseo
                        Limpieza
                    </h3>
                    <div class="enlace">
                        <li><a
                                href="https://web.facebook.com/?stype=lo&jlou=AfdogElHOpP2PKirm4HQ73jcfeB9studOnzYmX23yyUnsthlcPVHU5mh2Kch2-spJV9oSpbQa2oIYl3jQ79fHpsRAesTsipMjuLV1L6nWo7vlQ&smuh=62110&lh=Ac-Zrrw3yypGIlklpnQ">facebook
                            </a></li>
                        <li><a href="https://www.instagram.com/?__coig_restricted=1">Instagram </a></li>

                    </div>

                </div>
            </div>


        </div>

    </footer>


</body>

</html>