<?php 

if (isset($_POST["given_name"]) && isset($_POST["last_name"]) && isset($_POST["phone"])){


    include "connect.php";

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