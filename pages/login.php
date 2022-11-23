<?php 
//La página de login para que el usuario se registre

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <?php include "../apis/bootstrapCssApi.php"; ?>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
  <section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block" style="width:30%;">
                <img src="../img/stock_2.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; " />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form id="login_data">
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0"><a href="../index.php"><img src="../img/logo.png" alt="CAPIN" style="padding-bottom:25px;"></a></span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresar con tu cuenta</h5>
                    <h6 style="color:red;" id="auth_response"></h6>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Correo electrónico</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" name = "password" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Contraseña</label>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" id="login" type="button">Ingresar</button>
                    </div>
  
                    <a class="small text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes una cuenta aún? <a href="signup.php"
                        style="color: #393f81;">Regístrate aquí</a></p>
                      <a href="#!" class="small text-muted">Términos de uso.</a>
                      <a href="#!" class="small text-muted">Política de privacidad</a>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "../apis/bootstrapScriptsApi.php";?>
      <script type="text/javascript" src="../js/auth.js"></script>
</body>
</html>
