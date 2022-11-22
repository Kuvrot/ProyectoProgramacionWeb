<?php 

session_start();

if (session_status() === PHP_SESSION_ACTIVE){
    //session_unset();
    session_destroy();
    header("Location: ../index.php");
    
}else{
    echo "ERROR: no se hizo nada :) \n por algún motivo y no se porqué xd";
}


?>