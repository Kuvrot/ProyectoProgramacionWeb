<?php 
// Esta api adquiere los datos del ususario para posteriormente mostrarlos en user.php

include "connect.php";


$id = $_SESSION["m_id"];

$stmt = $conn->prepare("SELECT * FROM users JOIN user_personal_data WHERE users.id = '$id' AND user_personal_data.id = '$id' ");
$stmt->execute();

if ($row = $stmt->fetch()){

    $_SESSION["m_name"] = $row["given_name"];
    $_SESSION["m_last_name"] = $row["last_name"];
    $_SESSION["m_address"] = $row["address"];
    $_SESSION["m_phone"] = $row["phone"];
    $_SESSION["m_state"] = $row["state"];
    $_SESSION["m_city"] = $row["city"];
    $_SESSION["m_zipcode"] = $row["zipcode"];

}

?>