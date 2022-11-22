<?php

header('Access-Control-Allow-Origin: *');

//Este archivo crea la conexión con la base de datos

$servername = "localhost";
$username = "root";
$password = "superman";
$dbname = "users";



try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  //echo "Connected successfully";
} catch(PDOException $e) {
 echo "Connection failed: " . $e->getMessage();
}

?> 