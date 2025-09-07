<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I.E.P </title>
  <link rel="stylesheet" href="/assets/css/header.css">
</head>
<body>
<header class="site-header">
    
  <!-- Logo -->
  <div class="logo">
    <a href="index.php">
      <img src="assets/images/img.png" alt="Logo ">
    </a>
  </div>

  <!-- Menú -->
  <nav class="menu">
    <ul>
      <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Inicio</a></li>
<li class="dropdown">
  <a href="nosotros.php" class="<?= $current_page == 'nosotros.php' ? 'active' : '' ?>">Nosotros ▾</a>
  <div class="dropdown-content">
      <a href="nosotros.php" class="<?= $current_page == 'nosotros.php' ? 'active' : '' ?>">Misión y Visión</a>
      
  </div>
</li>
<li>
  <a href="servicios.php">Programas ▾</a>
  <div class="dropdown-content">
    <a href="servicios.php#inicial">Inicial</a>
    <a href="servicios.php#primaria">Primaria</a>
    <a href="servicios.php#secundaria">Secundaria</a>
  </div>
</li>

      <li><a href="contacto.php" class="<?= $current_page == 'contacto.php' ? 'active' : '' ?>">Contacto</a></li>
    </ul>
  </nav>

  <!-- Botón contacto -->
  <a href="tel:+51997896046" class="contact-btn">📞 +51 000 0000 000</a>
</header>
