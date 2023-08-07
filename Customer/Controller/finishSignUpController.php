<?php 
   
  $verified_code = $_GET["verifiedcode"];
  $username = $_POST["username"];
  
   if($username != null){

    include "../Model/model.php";
    $sql= $pdo->prepare(
  
      "UPDATE m_customers SET c_name = :customername WHERE code = :usercode"  
    );

    $sql ->bindValue(":customername",$username);
    $sql ->bindValue(":customername",$verified_code);
   }


  header("Location: ../View/homepage.php?code=$verified_code");


?>