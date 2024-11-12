<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - Almacenamiento de Golf</title>
    <link rel="stylesheet" href="assets/css/style_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

    <!-- Barra de navegación -->
    <header>
        <nav class="navbar">
            <div class="dropdown">   
                <button>
                    <i class="fas fa-user"></i>
                </button>
                <div class="dropdown-content">
                    <a href="user_pages/perfil.php">Perfil</a>
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
            </ul>
        </nav>
    </header>   

    <!-- Contenido principal -->
    <main>
        <section id="admin" class="admin">
            <h1>Panel de Administración</h1>
            <div class="carrusel-slide active">
                <img src="assets/images/golf_ball.png" alt="Imagen 1">
            </div>
            <div class="admin-buttons">
                <a href="fun_admin/registrar_usuario.php" class="btn-admin">Registrar nuevo usuario</a>
                <a href="fun_admin/actu_usuario.php" class="btn-admin">Actualizar usuario</a>
                <a href="fun_admin/borrar_usuario.php" class="btn-admin">Eliminar usuario</a>
            </div>
        </section>
    </main>

    <!-- Sección de contacto anclada al fondo -->
    <section id="contacto" class="contacto">
        <h2>Game on Gear</h2>
    </section>

</body>
</html>
