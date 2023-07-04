<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Vista/css/login.css">
    <title>Document</title>
</head>

<body>

    <form action="validacion.php"  method="post"   class="form" onsubmit="return validar();">
        <h2 class="form_title">Inicia Sesion</h2>

        <a class="form_link" href="index.php">volver</a>

        <div class="form_container">

            <div class="form_group">
                <input type="text" name="correo" id="Usuario" class="form_input" placeholder="">
                <label for="Usuario" class="form_label">Correo</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="password" name="contrasena" id="Contraseña" class="form_input" placeholder="">
                <label for="Contraseña" class="form_label">Contraseña</label>
                <span class="form_line"></span>
            </div>

            <input type="submit" class="form_submit" value="Entrar">

        </div>
    </form>

    <script src="../../../Controlador/js/login.js"></script>
</body>

</html>