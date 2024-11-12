<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena); // encriptacion de la contraseña
$rol_id = "2"; // Asigna un rol_id fijo (en este caso, 2)
$inventario = "_";

// Verificar que el rol_id existe en la tabla roles
$verificar_rol = mysqli_query($conexion, "SELECT id FROM roles WHERE id = '$rol_id'");
if (mysqli_num_rows($verificar_rol) == 0) {
    echo '
        <script>
            alert("Error: El rol especificado no existe en la base de datos.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

// Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya está registrado, intenta con uno diferente.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

// Verificar que el nombre de usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya está registrado, intenta con uno diferente.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

// Guardar usuario en la base de datos con el rol_id
$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena, rol_id) 
          VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena', '$rol_id')";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Intentelo de nuevo");
            window.location = "../index.php";
        </script>
    ';
}

?>
