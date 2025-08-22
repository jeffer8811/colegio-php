<?php include "includes/header.php"; ?>

<!-- Banner tipo galería con fade -->
<section class="banner-slider">
    <div class="slide active" style="background-image: url('assets/images/admision-2026.jpg');">
        <div class="banner-overlay">
            <h1>Admisión 2026</h1>
            <p>¡Inscríbete y sé parte de nuestra familia educativa!</p>
        </div>
    </div>
    <div class="slide" style="background-image: url('assets/images/1.jpg');">
        <div class="banner-overlay">
            <h1>Feria Escolar</h1>
            <p>Participa en nuestras actividades y eventos escolares.</p>
        </div>
    </div>
    <div class="slide" style="background-image: url('assets/images/2.jpg');">
        <div class="banner-overlay">
            <h1>Semana de la Ciencia</h1>
            <p>Descubre los proyectos innovadores de nuestros alumnos.</p>
        </div>
    </div>
</section>

<style>
/* Slider con fade */
.banner-slider {
    position: relative;
    width: 100%;
    height: 70vh; /* altura más compacta para todo tipo de dispositivos */
    min-height: 400px;
    max-height: 800px;
    overflow: hidden;
}

.slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}

.slide.active {
    opacity: 1;
    z-index: 1;
}

/* Overlay del texto */
.banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
}

.banner-overlay h1 {
    font-size: 3rem;
    margin: 0;
}

.banner-overlay p {
    font-size: 1.5rem;
}

/* Responsivo */
@media (max-width: 1024px) {
    .banner-slider { height: 50vh; }
    .banner-overlay h1 { font-size: 2rem; }
    .banner-overlay p { font-size: 1rem; }
}

@media (max-width: 768px) {
    .banner-slider { height: 40vh; }
    .banner-overlay h1 { font-size: 1.5rem; }
    .banner-overlay p { font-size: 0.9rem; }
}
</style>

<script>
const slides = document.querySelectorAll('.slide');
let currentIndex = 0;

function showNextSlide() {
    slides[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.add('active');
}

// Cambiar slide cada 3 segundos
setInterval(showNextSlide, 3000);
</script>
