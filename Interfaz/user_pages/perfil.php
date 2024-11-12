<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión con el correo electrónico
if (!isset($_SESSION['usuario'])) {
    // Redirigir al usuario a la página de inicio de sesión si no ha iniciado sesión
    header("Location: ../mainpage.php");
    exit();
}

// Obtener el correo electrónico de la sesión
$usuario = $_SESSION['usuario'];

// Incluir el archivo de conexión a la base de datos
include '../fun_admin/php/conexion_be.php';

try {
    // Consulta para obtener los datos del usuario basado en el correo electrónico
    $query = "SELECT id, nombre_completo, usuario, correo, inventario FROM usuarios WHERE correo = '$usuario'";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id_accion = $row['id']; // Número de la acción
        $nombre_completo = $row['nombre_completo'];
        $usuario = $row['usuario'];
        $correo = $row['correo'];
        $inventario = $row['inventario'];
    } else {
        // Mensaje de error si no se encuentran resultados o hay un problema con la consulta
        echo "<script>alert('Usuario no encontrado o error en la consulta.');</script>";
        $id_accion = "Número de acción no encontrado";
        $nombre_completo = "Nombre no encontrado";
        $usuario = "Usuario no encontrado";
        $correo = "Correo no encontrado";
        $inventario = "Inventario no encontrado";
    }
} catch (Exception $e) {
    // Capturar cualquier excepción y mostrar un mensaje de error
    echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    $id_accion = "Error";
    $nombre_completo = "Error";
    $usuario = "Error";
    $correo = "Error";
    $inventario = "Error";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="../assets/css/estilo-perfil.css"> 
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Almacen de Golf</div>
            <ul class="nav-links">
                <li><a href="../mainpage.php">Inicio</a></li>
                <li><a href="bolsas.php">Bolsas de Golf</a></li>
                <li><a href="palos-de-golf.html">Palos de Golf</a></li>
                <li><a href="ropa-y-calzado.html">Ropa y Calzado</a></li>
                <li><a href="bolas-y-tees.php">Bolas y Tees</a></li>
                <li><a href="perfil.php">Perfil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Perfil de Usuario</h1>
        <div class="perfil-info">
            <h2>Información Personal</h2>
            <p><strong>Nombre Completo:</strong> <?php echo htmlspecialchars($nombre_completo); ?></p>
            <p><strong>Correo Electrónico:</strong> <?php echo htmlspecialchars($correo); ?></p>
            <p><strong>Usuario:</strong> <?php echo htmlspecialchars($usuario); ?></p>
            <p><strong>Inventario:</strong> <?php echo htmlspecialchars($inventario); ?></p>
        </div>

        <div class="perfil-acciones">
            <h2>Número de Acción</h2>
            <p><?php echo htmlspecialchars($id_accion); ?></p>
        </div>
    </main>

    <footer>
        <p>© 2024 Almacen de Golf. Todos los derechos reservados.</p>
        <!-- Botón de Cerrar Sesión -->
        <div style="text-align: center; margin-top: 20px;">
            <a href="../../login-register/php/cerrar_sesion.php" class="boton-cerrar-sesion">Cerrar Sesión</a>
        </div>
    </footer>

</body>
</html>
