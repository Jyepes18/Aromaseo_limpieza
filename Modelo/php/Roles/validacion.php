<?php
session_start();

// Incluir el archivo de conexión
require_once '../conexion.php';

// Verificar si se ha enviado una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta preparada para verificar las credenciales en la base de datos
    $sql = "SELECT * FROM usuarios WHERE correo = ? AND contraseña = ?";
    $stmt = $enlace->prepare($sql);
    $stmt->bind_param("ss", $correo, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $fila = $result->fetch_assoc();
        $rol = $fila['codigo_rol'];

        // Iniciar sesión y asignar el rol a una variable de sesión
        session_start();
        $_SESSION['codigo_rol'] = $rol;

        // Redirigir según el rol del usuario
        switch ($rol) {
            case 1:
                header("Location: das.php");
                break;
            case 2:
                header("Location: index.php");
                break;
            
            default:
                echo 'Error en la autenticación de datos.';
                break;
        }
    } else {
        echo "<script>alert('Error en la autenticación de datos.'); window.location.href = 'login.php';</script>";
    }

    // Cerrar la consulta preparada y la conexión
    $stmt->close();
    $conn->close();
}
?>