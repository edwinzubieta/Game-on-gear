<?php
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];

    try {
        // Consulta para eliminar el usuario (usando sentencias preparadas)
        $query = "DELETE FROM usuarios WHERE usuario = ?"; 

        $stmt = $conexion->prepare($query); // Preparar la consulta
        $stmt->bind_param("s", $usuario); // Vincular el parámetro
        $result = $stmt->execute(); // Ejecutar la consulta

        if ($result) {
            echo '<script>
                alert("Usuario eliminado correctamente");
                window.location.href = "../../mainpage_admin.php"; // Redirigir al usuario
            </script>';
            exit(); // Detener la ejecución del script después de la redirección
        } else {
            echo '<script>console.error("Error al eliminar el usuario: ' . $stmt->error . '");</script>';
        }

        $stmt->close(); // Cerrar la sentencia preparada
    } catch (Exception $e) {
        echo '<script>console.error("Error: ' . $e->getMessage() . '");</script>';
    }
}
?>