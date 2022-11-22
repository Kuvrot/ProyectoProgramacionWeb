<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPIN - gorras con estilo</title>
     <?php include "../apis/bootstrapCssApi.php"; ?>
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <div class="contenedor">
        <!-- Inicio nav -->
         <?php include "../apis/navmenu.php"; ?>
        <!-- Cierre nav -->

        <!-- Inicio header -->
        <header class="cabeza" id="header">
          
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true"  >
            
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h1 style="color:white;">BIENVENIDO</h1>
                <img src="../img/headers/header.jpg" class="d-block w-100" alt="niña con gorra rosa">
              </div>
              <div class="carousel-item">
                <h2 style="color:white;" >ENCUENTRA</h2>
                <img src="../img/headers/header2.jpg" class="d-block w-100" alt="joven con sombrero cafe">
              </div>
              <div class="carousel-item">
                <h2 style="color:white;">LO MEJOR</h2>
                <img src="../img/headers/header3.jpg" class="d-block w-100" alt="joven con gorra azul">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


        </header>
        <!-- Cierre header -->

        <!-- Inicio main -->
        <main id="productos" class="wow bounceInUp" data-wow-duration="2s">
          <div class="productos_texto " >
              <h2>Nuevo</h2>
              <p>Adquiere los nuevos productos en nuestra pagina online <br>Todo lo que necesitas es Capin y un sueño</p>
                
          </div>
  
           <!-- Inicia  section -->
          <section class="section_productos">
            <div class="card" style="width: 28rem;">
              <img src="../img/productos/gorro1.webp" class="card-img-top " alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Agregar</a>
              </div>s
            </div>

          </section>

          <ul class="navbar-nav" style="display: inline-table; margin-top: 5%; ">
            <li class="nav-item " style="text-align: center; align-content: center; ">
              <a class="navlink-light" style=" text-decoration: none; font-size: 150%;  " href="productos.php">Ver todo</a>
            </li>
           <!-- <li class="nav-item navlink-light">
              <a class="nav-link" href="pages/accesorios.html">Accesorios</a>
            </li>
          </ul> -->
          <!-- Cierre  section -->
      </main>
        <!-- Cierre main -->

        <!-- Inicio footer -->
          <?php include "../apis/footer.php"; ?>
        <!-- Cierre Footer -->


    </div>
    <script src="../js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script> 
   <?php include "../apis/bootstrapScriptsApi.php";?>
  </body>
</html>