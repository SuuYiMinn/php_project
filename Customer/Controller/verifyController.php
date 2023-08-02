<?php 
session_start();

 $user_code = $_GET["token"]; //user input code
 include "../Model/model.php";

 $sql = $pdo->prepare(

  "SELECT * FROM m_customer WHERE code = :verifycode"

 );
 $sql->bindValue(":verifycode" , $user_code);
 $sql->execute();

 $resultcode = $sql->fetchAll(PDO::FETCH_ASSOC);



 if (count($resultcode) != 0){    
  header("Location: ../View/Registeration/finishSignup.php");
 }

 

   



//  if($user_code == $verifyCode){
//    header("Location: ../Registeration/setpassword.php");
//  }else
//  {
//    // echo("Hello");
//  }





 //print_r($_SESSION["user_email"]);

?>