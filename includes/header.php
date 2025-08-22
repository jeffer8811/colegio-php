<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background: #0055a5;
            padding: 10px;
            text-align: center;
            position: relative;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        /* Estilo para el dropdown */
        .dropdown {
            display: inline-block;
            position: relative;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #0055a5;
            min-width: 200px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            text-align: left;
        }
        .dropdown-content a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #003366;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <h1>I.E.P - Nova Steiner  </h1>
        <p>Formando líderes con valores y excelencia académica</p>
    </header>
    <nav>
        <a href="index.php">Inicio</a>
        
        <div class="dropdown">
            <a href="nosotros.php">Nosotros ▾</a>
            <div class="dropdown-content">
                <a href="nosotros.php">Nosotros</a>
                <a href="mision-vision.php">Misión y Visión</a>

            </div>
        </div>

        <a href="contacto.php">Contacto</a>
        <a href="donde.php">Dónde nos encontramos</a>
    </nav>
</body>
</html>
