<?php

session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

// Validar credenciales del usuario
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    $usuario = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $correo;
    
    // Verificar el rol del usuario
    if ($usuario['rol_id'] == "1") {
        // Redirigir a la página de administrador si el rol es 1
        header("Location: ../../Interfaz/mainpage_admin.php");
        exit();
    } else {
        // Redirigir a la página de usuario si el rol es 2
        header("Location: ../../Interfaz/mainpage.php");
        exit();
    }
} else {
    echo '
        <script>
            alert("Este usuario no existe, por favor verifique los datos introducidos.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

?>
