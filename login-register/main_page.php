<?php

    session_start();

    if (!isset($_SESSION['usuario'])){

        echo'
        
            <script>
                alert("Para acceder, primero debes iniciar sesion");
                window.location = "index.html";
            </script>

        ';
        session_destroy();
        die();
        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game on gear</title>
</head>
<body>
    <h1> Bienvenido a GAME ON GEAR</h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>