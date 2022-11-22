<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios CAPIN encuentra lo mejor</title>
    <?php include "../apis/bootstrapCssApi.php"; ?>
    <link rel="stylesheet" href="../css/main.css">

</head>
<body>
    <div class="contenedor_productos row">
        <!-- Inicio nav -->
        <?php include "../apis/navmenu.php"; ?>
        <!-- Cierre nav -->




    <!-- Inicio Main -->
    <main id="main">
         <!-- Inicia  section -->
        <h1> ¿Quienes somos?</h1>
        <section class="section_nosotros">
            <div class="caja_nosotros">
                <img src="../img/nosotros/nosotros.webp" alt="">
  
            </div>  
            <p>Somos una empresa pequeña la cual fue fundada por Izael Mejía Lozada , este proyecto se ha estado  <br> trabajando por un tiempo para que las personas puedan adquirir cualquiera de nuestros productos que están basados en muy buena calidad y sobre todo los diseños que se manejan. </p>
        </section>
        <div class="section_separador wow bounceInUp" data-wow-duration="2s">
          <p>Trabajadores</p>
          <p>Dedicados</p>
          <p>Creadores</p>
          <p>Estudiantes</p>
        </div>

        <section class="section_nosotros">
            <div class="section_texto">
              <h2>Misión</h2>
                <p>La misión de Capin es satisfacer a sus clientes en todo momento a través de la excelente atención y la moda siempre al mejor precio, ofreciendo productos especialmente para dama confeccionados bajo los más altos estándares de calidad. Buscamos la evolución manteniendo nuestros diseños al paso de las últimas tendencias del mercado.
                    Capin llenará tu guardarropa de modelos hermosos, cómodos, vanguardistas, distintivos y con mucho estilo que sigan proyectandote como una figura elegante y segura.</p>
            </div>  
                <img src="../img/nosotros/mission.webp" alt="Niños con gorras">
           
        </section>
        <!-- Cierre  section -->
        
       
    </main>
    <!-- Cierre  main -->

    <!-- Inicio footer -->
    <?php include "../apis/footer.php"; ?>
      <!-- Cierre Footer -->
</div>

  <script src="js/wow.min.js"></script>
    
    <script>
        new WOW().init();
    </script> 

<?php include "../apis/bootstrapScriptsApi.php";?>
</body>
</html>


