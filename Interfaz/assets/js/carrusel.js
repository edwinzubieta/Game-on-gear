
let slideIndex = 0;

// Función para mostrar el slide actual
function mostrarSlide(n) {
    const slides = document.querySelectorAll('.carrusel-slide');
    if (n >= slides.length) slideIndex = 0; // Volver al primer slide si supera la cantidad
    if (n < 0) slideIndex = slides.length - 1; // Ir al último slide si es negativo

    slides.forEach((slide, index) => {
        slide.classList.remove('active'); // Ocultar todos los slides
        if (index === slideIndex) {
            slide.classList.add('active'); // Mostrar el slide activo
        }
    });

    // Mover el contenedor para mostrar el slide activo
    const carruselContainer = document.querySelector('.carrusel-container');
    carruselContainer.style.transform = `translateX(-${slideIndex * 100}%)`;
}

// Función para cambiar el slide
function cambiarSlide(n) {
    slideIndex += n;
    mostrarSlide(slideIndex);
}

// Inicializa mostrando el primer slide
mostrarSlide(slideIndex);

// Función para mover el carrusel
function moveCarrusel() {
    const slides = document.querySelectorAll('.carrusel-slide');  // Selecciona todas las imágenes del carrusel
    let currentIndex = 0;  // Inicia desde la primera imagen

    // Función para mostrar la imagen siguiente
    function showNextSlide() {
        // Elimina la clase 'active' de la imagen actual
        slides[currentIndex].classList.remove('active');

        // Incrementa el índice para mostrar la siguiente imagen
        currentIndex = (currentIndex + 1) % slides.length;  // Ciclo entre las imágenes

        // Añade la clase 'active' a la siguiente imagen
        slides[currentIndex].classList.add('active');

        // Mueve el contenedor del carrusel
        const container = document.querySelector('.carrusel-container');
        container.style.transform = `translateX(-${currentIndex * 100}%)`;  // Desplaza el carrusel
    }

    // Llama a la función para mostrar la siguiente imagen cada 3 segundos
    setInterval(showNextSlide, 2500);  // Cambia la imagen cada 3 segundos
}

// Llama a la función cuando la página cargue
window.onload = moveCarrusel;

