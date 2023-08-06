<?php
session_start();

if (count($_POST) == 0) {
    header("Location: ../View/Registeration/Login.php");
  } else {
    $email = $_POST["email"];
    $password = $_POST["password"];
  }
  
  include "../Model/model.php";

 $sql = $pdo->prepare(

   " SELECT * FROM m_customers WHERE c_email = :email"

 );
 $sql->bindValue(":email", $email);
 $sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

 if (count($result) != 0) {
    $dbPassword = $result[0]["c_password"];

    if(password_verify($password,$dbPassword)){
      header("Location: ../View/homepage.php");
    }  
  }
else{
  $_SESSION["loginError"] = "Email is not registered";
   header("Location: ../View/Registeration/login.php");
 }
 ?>
