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
    $dbcode = $result[0]["code"];

    if(password_verify($password,$dbPassword)){

      if( ($dbPassword = $result[0]["verify"])==1){

        header("Location: ../View/homepage.php?code=$dbcode");
      }else {

        $_SESSION["loginError"] = "Your account is not verified yet";
        header("Location: ../View/Registeration/login.php");
        
      }
     
    }  else{
      $_SESSION["wrongPassword"] = "!Wrong Password";
       header("Location: ../View/Registeration/login.php");
     }
  }
else{
  $_SESSION["loginError"] = "Email is not registered";
   header("Location: ../View/Registeration/login.php");
 }
 ?>
