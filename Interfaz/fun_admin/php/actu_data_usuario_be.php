<?php
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $inventario = $_POST['inventario']; 

    try {
        // Consulta base para actualizar los datos del usuario
        $query = "UPDATE usuarios SET nombre_completo = ?, correo = ?, inventario = ?";
        
        // Agregar la contraseña a la consulta si se proporciona
        if (!empty($_POST['contrasena'])) {
            $contrasena = hash('sha512', $_POST['contrasena']); 
            $query .= ", contrasena = ?";
        }
        $query .= " WHERE usuario = ?";

        $stmt = $conexion->prepare($query);

        // Vincular los parámetros según si se proporciona una nueva contraseña
        if (!empty($_POST['contrasena'])) {
            $stmt->bind_param("sssss", $nombre_completo, $correo, $inventario, $contrasena, $usuario); 
        } else {
            $stmt->bind_param("ssss", $nombre_completo, $correo, $inventario, $usuario); 
        }

        $result = $stmt->execute(); 

        if ($result) {
            echo '<script>
                    alert("Usuario actualizado correctamente");
                    window.location.href = "../../mainpage_admin.php"; 
                  </script>';
            exit(); 
        } else {
            echo '<script>console.error("Error al actualizar el usuario: ' . $stmt->error . '");</script>';
        }

        $stmt->close(); 
    } catch (Exception $e) {
        echo '<script>console.error("Error: ' . $e->getMessage() . '");</script>';
    }
}
?>