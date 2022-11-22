<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos CAPIN bonitos y con muchos diseños</title>
    <?php include "../apis/bootstrapCssApi.php"; ?>
    <link rel="stylesheet" href="../css/main.css">

</head>
<body>
    <div class="products">
        <!-- Inicio nav -->
        <?php include "../apis/navmenu.php"; ?>
        <!-- Cierre nav -->

        <!-- Inicio header -->
        <header id="header">
            <div class="header_pro">
                <h1>Productos</h1>
            </div>
    
        </header>
        <!-- Cierre header -->

        <!-- Inicio segundoNav -->
        <nav id="filtros" class="secondNav">
            <span><b>Gorras</b></span>
            <ul>
                <li>
                    <a href="">Gorras Rojas(4)</a>
                </li>
    
                <li>
                    <a href="">Gorras Negras(4)</a>
                </li>
    
                <li>
                    <a href="">Gorras Azules(4)</a>
                </li>
    
                <li>
                    <a href="">Gorras Amarillas(4)</a>
                </li>
    
                <li>
                    <a href="">Gorras Verdes(4)</a>
                </li>
            </ul>
            
            <span><b>TAMAÑO</b></span>
                <div>
                    <label for="mediano">MD</label>
                    <input type="checkbox" id="mediano">
                </div>
                <div>
                    <label for="grande">LG</label>
                    <input type="checkbox" id="grande">
                </div>
    
        </nav>
        <!-- Cierre segundoNav -->
  

        <!-- Inicia  main -->
        <main id="productos" class="">
            <!-- Inicia  section -->
           <section class="section_productos">
            <div class="card" style="width: 28rem;">
                <img src="../img/productos/gorra1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">$149.00</h5>
                  <p class="card-text">Gorra Negra eldiez</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
  
              <div class="card" style="width: 28rem;">
                <img src="../img/productos/gorra2.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">$169.00</h5>
                  <p class="card-text">Gorra blanco con negro VANS</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
  
              <div class="card" style="width: 28rem;">
                <img src="../img/productos/gorra3.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">$169.00</h5>
                  <p class="card-text">Gorra negra VANS</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
                  
           </section>
           <!-- Termina  section -->

           <section class="section_productos">
            <div class="card" style="width: 28rem;">
                <img src="../img/productos/gorro4.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">$359.00</h5>
                  <p class="card-text">Gorro de mujer gris de pluma azul</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
  
              <div class="card" style="width: 28rem;">
                <img src="../img/productos/gorro5.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">$239.00</h5>
                  <p class="card-text">Sombrero de paja</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
  
              <div class="card" style="width: 28rem;">
                <img src="../img/productos/gorro6.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">$329.00</h5>
                  <p class="card-text">Gorro rojo </p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
                  
           </section>
       </main>
        <!-- Termina  main -->
      

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