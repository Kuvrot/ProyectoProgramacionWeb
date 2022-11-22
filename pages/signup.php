<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <?php include "../apis/bootstrapCssApi.php"; ?>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 
    <section class="h-100 " style="background-color:#9A616D;" >
        <div class="container py-5"  >
          <div class="row d-flex justify-content-center align-items-center ">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <a href="../index.php">
                      <img src="../img/stock_4.jpg" alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                    </a>
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <a href="index.php"><img src="../img/logo.png" alt="CAPIN" style="padding-bottom:25px;"></a>
                      <h3 class="mb-5 text-uppercase">Registro</h3>
      
                      <form action="../apis/newUserApi.php" method="post" id="signup_form">

                        <div class="row">
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input type="text" id="form3Example1m" name = "given_name" class="form-control form-control-lg" required />
                              <label class="form-label" for="form3Example1m">Nombre(s)</label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input type="text" id="form3Example1n" name="last_name" class="form-control form-control-lg"  required/>
                              <label class="form-label" for="form3Example1n">Apellido(s)</label>
                            </div>
                          </div>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" id="form3Example97" name="email" class="form-control form-control-lg" required/>
                          <label class="form-label" for="form3Example97">Correo electrónico</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="password" id="form3Example98" name="password" class="form-control form-control-lg" required/>
                          <label class="form-label" for="form3Example98">Contraseña</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" id="form3Example99" name="phone" class="form-control form-control-lg" required/>
                          <label class="form-label" for="form3Example99">Teléfono</label>
                        </div>
        
                        <div class="row">
                          <div class="col-md-6 mb-4">
        
                            <select class="select" name="state" required>
                              <option value="1">Estado</option>
                              <option value="2">Hidalgo</option>
                            </select>
        
                          </div>
                          <div class="col-md-6 mb-4">
        
                            <select class="select" name="city" required>
                              <option value="1">Ciudad</option>
                              <option value="2">Pachuca</option>
                              <option value="3">Tulancingo</option>
                              <option value="4">Mineral de la reforma</option>
                              <option value="5">Real del Monte</option>
                              <option value="5">Real del Monte</option>

                            </select>
        
                          </div>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" required/>
                          <label class="form-label" for="form3Example8">Dirección</label>
                        </div>
        
                        <div class="form-outline mb-4">
                          <input type="text" id="form3Example91" name="zipcode" class="form-control form-control-lg" required/>
                          <label class="form-label" for="form3Example91">Codigo postal</label>
                        </div>

                        <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya tienes una cuenta? <a href="login.php"
                          style="color: #393f81;">Ingresa aquí</a>
                        </p>
                    
                      <div class="d-flex justify-content-end pt-3" id="signup_btn">
                        <input type="submit" class="btn btn-secondary" value="Registrarse">
                      </div>

                    </form>
                    
                    <a href="#!" class="small text-muted">Términos de uso.</a>
                    <a href="#!" class="small text-muted">Política de privacidad</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include "../apis/bootstrapScriptsApi.php";?>
      
</body>
</html>