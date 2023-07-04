<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "aromaseolimpieza";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
mysqli_set_charset($enlace, "utf8");

?>