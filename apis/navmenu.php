<?php 

header('Access-Control-Allow-Origin: *');

include "auth.php"; session_start();?>

<nav class="navbar navbar-expand-lg  sticky-top primerNav " id="mainnav">
          <div class="container-fluid ">
            <a href="../index.php"><img src="../img/logo.png" alt="CAPIN"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <img src="img/navbar.png" alt="">
            </button>
            <div class="collapse navbar-collapse " id="navbarNav" >
              <ul class="navbar-nav" style="font-size:115%;">
                <li class="nav-item">
                  <a class="nav-link " href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="accesorios.html">Carrito [xx]</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="nosotros.php">Nosotros</a>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto" style="font-size:115%;">

              <?php 
              //if (session_status() === PHP_SESSION_NONE) {
                if (isset($_SESSION["m_email"])) {
            ?>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="user/user.php">Pedidos</a>
                </li> -->
                
                <?php if ($_SESSION["m_email"] == "admin@123.com"){?>
                <li class="nav-item">
                  <a class="nav-link" href="user.php">Admin panel</a>
                </li> <?php } ?>
                <li class="nav-item">
                  <a class="nav-link" href="user.php"><?php echo $_SESSION['m_email'];?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="user/logout.php">Cerrar sesión</a>
                </li>
                
            <?php }else{?>    
                <li class="nav-item">
                  <a class="nav-link " href="login.php">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup.php">Registrarse</a>
                </li>
               <?php }?>
              </ul>
            </div>
          </div>
    </nav>  