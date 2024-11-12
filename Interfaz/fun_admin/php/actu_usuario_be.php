<?php
include 'conexion_be.php';
header('Content-Type: text/javascript'); // Especifica que la respuesta es JavaScript

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];

    try {
        // Consulta para obtener los datos del usuario
        $query = "SELECT nombre_completo, correo, inventario FROM usuarios WHERE usuario = '$usuario'"; 
        $result = mysqli_query($conexion, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $nombre_completo = $row['nombre_completo'];
                $correo = $row['correo'];
                $inventario = $row['inventario'];

                // Devuelve solo código JavaScript
                echo '
                    document.getElementById("usuario2").value = "' . $usuario . '"; // Asigna el usuario a usuario2
                    document.getElementById("nombre_completo").value = "' . $nombre_completo . '";
                    document.getElementById("correo").value = "' . $correo . '";
                    document.getElementById("inventario").value = "' . $inventario . '"; 
                ';
            } else {
                // Devuelve un mensaje de error en formato JavaScript
                echo 'console.error("Usuario no encontrado");'; 
            }
        } else {
            echo 'console.error("Error en la consulta: ' . mysqli_error($conexion) . '");';
        }
    } catch (Exception $e) {
        echo 'console.error("Error: ' . $e->getMessage() . '");';
    }
}
?>