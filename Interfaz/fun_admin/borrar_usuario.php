<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar - Almacenamiento de Golf</title>
    <link rel="stylesheet" href="../assets/css/style_admin.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

/* Estilos para el formulario */
form {
    width: 300px;
    margin: 2rem auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #264653;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

/* Agrega esta regla para el espacio */
input[type="submit"] + label { 
    margin-top: 20px; /* Ajusta el valor según el espacio que desees */
}
    </style>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="dropdown"> 
                <button>
                    <i class="fas fa-user"></i>
                </button>
                <div class="dropdown-content">
                    <a href="perfil.html">Perfil</a>
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="../mainpage_admin.php">Inicio</a></li>
            </ul>
        </nav>
    </header>  

    <main>
    <section>
    <h1>Eliminar usuario</h1>

    <h3>Ingrese el nombre de usuario del cual desea eliminar registro</h3>

    <section>
    <form id="formulario-actualizar" action="php/borrar_usuario_be.php" method="POST"> 
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" placeholder="Usuario" name="usuario">

        <input type="submit" value="Eliminar"> 

</section>

</section>
    </main>

    <section id="contacto" class="contacto">
        <h2>Game on Gear</h2>
    </section>

    <script src="../assets/js/actu.js"></script>

</body>
</html>
