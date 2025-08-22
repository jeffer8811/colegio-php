<?php include('includes/header.php'); ?>

<main class="ubicacion-container" style="padding: 40px; display: flex; justify-content: center; align-items: center;">
    <div style="max-width: 900px; width: 100%; background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); overflow: hidden;">
        
        <!-- Encabezado -->
        <div style="padding: 20px; background: linear-gradient(135deg, #007bff, #0056b3); color: white; text-align: center;">
            <h2 style="margin: 0; font-size: 28px;">📍 ¿Dónde nos encontramos?</h2>
        </div>

        <!-- Contenido -->
        <div style="padding: 20px; text-align: center;">
            <p style="font-size: 18px; color: #333; margin-bottom: 20px;">
                Nos ubicamos en <strong>Mariano Melgar, Arequipa - Perú</strong>.  
                Aquí te dejamos el mapa exacto:
            </p>

            <!-- Google Maps responsivo -->
            <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.15);">
                <iframe 
                  src="https://www.google.com/maps?q=-16.401842,-71.501990&hl=es&z=16&output=embed" 
                  style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" 
                  allowfullscreen="" 
                  loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>
