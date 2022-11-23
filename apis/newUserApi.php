<?php 

//Aqui se realiza el query de insertar para agregar a un nuevo usuario.

//Se trabajan dos tablas distintas, una con el email y contraseña y otra con los datos personales.

//Primero revisa si estos tres datos se han ingresado, (todos los campos son requeridos, por lo tanto el usuario es incapáz de dejar uno vacío pero hago la comprobación 
//por si acaso), si se quiere se pueden hacer un isset para todos los datos que se piden ya que si un tercero facilmente podría provocar glitches.
//Si no se han enviado estos (por ejemplo si entro directamente a newUserApi.php sin haber hecho el formulario, entonces me va a regresar a register.php)
if (isset($_POST["given_name"]) && isset($_POST["last_name"]) && isset($_POST["phone"])){


    include "connect.php";
    
    //Inserción a tabla de datos personales.
    $stmt = $conn->prepare("INSERT INTO user_personal_data (given_name , last_name , address , phone, state , city, zipcode) value (:given_name , :last_name , :address , :phone ,:state , :city , :zipcode)");
    $stmt->execute([
    
    ':given_name' => $_POST['given_name'],
    ':last_name' => $_POST['last_name'],
    ':address' => $_POST['address'],
    ':phone' => $_POST['phone'],
    ':state' => $_POST['state'],
    ':city' => $_POST['city'],
    ':zipcode' => $_POST['zipcode']
    
    ]);
    
    //inserción a la otra tabla
    $stmt = $conn->prepare("INSERT INTO users (email , password) value (:email , :password)");
    $stmt->execute([
    
    ':email' => $_POST["email"],
    ':password' => $_POST["password"]  

    ]);

    header("Location:../pages/login.php");

}else{

    header("Location:../pages/signup.php");

}

?>
