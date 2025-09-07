<?php include "includes/header.php"; ?>

<!-- Banner tipo galería con fade -->
<section class="banner-slider">
    <div class="slide active" style="background-image: url('assets/images/img.png');">
        <div class="banner-overlay">
            <h1>Admisión 2026</h1>
            <p>¡Inscríbete y sé parte de nuestra familia educativa!</p>
            <a href="contacto.php" class="btn-banner">Postúlate ahora</a>
        </div>
    </div>
    <div class="slide" style="background-image: url('assets/images/img.png');">
        <div class="banner-overlay">
            <h1>Feria Escolar</h1>
            <p>Participa en nuestras actividades y eventos escolares.</p>
            <a href="eventos.php" class="btn-banner">Ver eventos</a>
        </div>
    </div>
    <div class="slide" style="background-image: url('assets/images/img.png');">
        <div class="banner-overlay">
            <h1>Semana de la Ciencia</h1>
            <p>Descubre los proyectos innovadores de nuestros alumnos.</p>
            <a href="noticias.php" class="btn-banner">Explorar más</a>
        </div>
    </div>

    <!-- Controles del slider -->
    <div class="slider-controls">
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
    </div>

    <!-- Indicadores -->
    <div class="slider-dots"></div>
</section>

<!-- Sección de Bienvenida -->
<section class="bienvenida">
    <h2>Bienvenidos a la I.E.P. </h2>
    <p>
       Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat doloremque laudantium porro, quo autem possimus error quam cupiditate, debitis, rem fugiat officiis eum unde pariatur. Vel voluptates quo eligendi rerum.
    </p>
    <a href="nosotros.php" class="btn-general">Conócenos más</a>
</section>

<!-- Sección de Servicios -->
<section class="servicios">
    <h2>🎓 Nuestros Servicios Educativos</h2>
    <p class="intro">Conoce los niveles que ofrecemos para formar líderes con valores y excelencia académica.</p>
    <div class="servicios-grid">
        
        <div class="servicio-card">
            <a href="servicios.php#inicial">
                <img src="assets/images/img.png" alt="Nivel Inicial">
                <div class="card-content">
                    <h3>Educación Inicial</h3>
                    <p>Espacio seguro y creativo para el desarrollo temprano de los niños.</p>
                </div>
            </a>
        </div>

        <div class="servicio-card">
            <a href="servicios.php#primaria">
                <img src="assets/images/img.png" alt="Nivel Primaria">
                <div class="card-content">
                    <h3>Educación Primaria</h3>
                    <p>Formación integral en valores, ciencias, arte y deporte.</p>
                </div>
            </a>
        </div>

        <div class="servicio-card">
            <a href="servicios.php#secundaria">
                <img src="assets/images/img.png" alt="Nivel Secundaria">
                <div class="card-content">
                    <h3>Educación Secundaria</h3>
                    <p>Preparación académica y vocacional para su futuro.</p>
                </div>
            </a>
        </div>

    </div>
</section>
<!-- Sección de Logros -->
<section class="logros">
  <div class="container">
    <h2>Nuestros Logros</h2>
    <div class="logros-lista">

      <div class="logro-item">
        <h3>🥁 Concurso de Bandas Escolares 2023</h3>
        <p>Primer puesto a nivel regional con la participación de más de 20 colegios.</p>
      </div>

      <div class="logro-item">
        <h3>📚 Olimpiada Nacional de Matemáticas</h3>
        <p>Estudiantes destacados que lograron medallas de plata y bronce en la competencia nacional.</p>
      </div>

      <div class="logro-item">
        <h3>⚽ Campeonato Interescolar de Fútbol</h3>
        <p>Equipo campeón en la categoría Sub-15, demostrando talento y disciplina deportiva.</p>
      </div>

      <div class="logro-item">
        <h3>🎭 Festival de Arte y Cultura</h3>
        <p>Reconocidos por la creatividad de nuestros estudiantes en danza y teatro escolar.</p>
      </div>

    </div>
  </div>
</section>

<!-- Contacto Rápido -->
<section class="cta">
    <h2>📞 ¿Quieres más información?</h2>
    <p>Estamos listos para resolver tus dudas y brindarte toda la información que necesites.</p>
    <a href="contacto.php" class="btn-general">Contáctanos ahora</a>
</section>

<?php include "includes/footer.php"; ?>

<!-- Importar estilos y scripts -->
<link rel="stylesheet" href="assets/css/slider.css">
<link rel="stylesheet" href="assets/css/home.css"> <!-- nuevo para bienvenida/cta -->
<script src="assets/js/slider.js"></script>
