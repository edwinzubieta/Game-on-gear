<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacenamiento de Golf</title>
    <link rel="stylesheet" href="assets/css/style_main.css">
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
                <li><a href="#categorias">Categorías</a></li>
                <li><a href="mailto:info@almacendegolf.com">Contacto</a></li>
            </ul>
        </nav>
    </header> 


    <!-- Sección principal -->
    <section id="inicio" class="hero">
        <h1>Almacen de Golf</h1>
        <p>Descubre todo lo que necesitas para almacenar y cuidar tu equipo de golf.</p>
        <!-- Sección de carrusel -->
   <div class="carrusel">
        <div class="carrusel-container">
            <div class="carrusel-slide active">
                <img src="assets/images/golf_ball.png" alt="Imagen 1">
            </div>
            <div class="carrusel-slide">
                <img src="assets/images/talega.png" alt="Imagen 2">
            </div>
            <div class="carrusel-slide">
                <img src="assets/images/palos.png" alt="Imagen 3">
            </div>
            <div class="carrusel-slide">
                <img src="assets/images/ropa.png" alt="Imagen 4">
            </div>
        </div>
        <button class="carrusel-btn prev" onclick="cambiarSlide(-1)">&#10094;</button>
        <button class="carrusel-btn next" onclick="cambiarSlide(1)">&#10095;</button>
    </div>

    </section>
    </section>

    <!-- Sección de categorías -->
    <section id="categorias" class="categorias">
        <h2>Categorías de Productos</h2>
        <div class="categorias-grid">
            <a href="user_pages/bolsas.php" class="categoria-item">
                <h3>Bolsas de Golf</h3>
                <p>Encuentra la bolsa perfecta para almacenar y transportar tus palos.</p>
            </a>
            <a href="user_pages/palos.php" class="categoria-item">
                <h3>Palos de Golf</h3>
                <p>Palos de alta calidad para todos los niveles y estilos de juego.</p>
            </a>
            <a href="user_pages/bolas-y-tees.php" class="categoria-item">
                <h3>Bolas y Tees</h3>
                <p>Accesorios esenciales para cada ronda de golf.</p>
            </a>
            <a href="user_pages/ropa-y-calzado.php" class="categoria-item">
                <h3>Ropa y Calzado</h3>
                <p>Equipamiento de golf cómodo y de alta calidad.</p>
            </a>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="contacto">
        <h2>Contáctanos</h2>
        <p>¿Tienes alguna pregunta sobre nuestros productos? ¡Estamos aquí para ayudarte!</p>
        <a href="mailto:info@almacendegolf.com" class="btn">Escríbenos</a>
    </section>

    <!-- Vinculación del archivo JavaScript -->
    <script src="assets/js/carrusel.js"></script>

</body>
</html>
