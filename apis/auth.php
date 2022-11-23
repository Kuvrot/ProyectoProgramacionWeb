<?php 
//Esta api autentifica al usuario, es decir revisa si el nombre de usuario existe y revisa si la contraseña y el usuario
//coinciden con los de la base de datos

//incluyo la conexión previa que se hizo con la base de datos

//header('Access-Control-Allow-Origin: *');

include "connect.php";
$pass = false;

function response ($text) {
    
    echo ($text);


}

if (isset($_POST["email"])) {

    $email = $_POST["email"];

    if (isset($_POST["password"])) {

        $password = $_POST["password"];

        

        //Hace una consulta de tipo SELECT y si no arroja ninguna columna los datos son erroneos, de lo contrario son correctos 
        //y la sesión iniciará
        $stmt = $conn->query("SELECT * FROM users where email = '$email' AND password = '$password'");
        if ($row = $stmt->fetch()){

                        

            //iniciar la sesión
            session_start();
            
            //Se crea una variable global de nombre m_email y se le asigna el valor email que recibimos en el post
            $_SESSION["m_email"] = $email;
            $_SESSION["m_id"] = $row["id"];
            $pass = true;
        }else{
            //echo json_encode(array_map('utf8_encode', "correo electrónico o contraseña incorrectos"));
            response("correo electrónico o contraseña incorrectos");
        }


    }else{

        header("Location:../pages/login.php");
    }


}

if ($pass){

response("TRUE");

}











?>