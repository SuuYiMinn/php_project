<?php 

 $resetcode =$_GET["resetverifiedcode"];
 $password = $_POST["new_password"];
 $retype_password = $_POST["retype_password"];

 include "../Model/model.php";

 if( $password ==  $retype_password ){ 

   echo("hello");

    $sql = $pdo->prepare(
   
       "UPDATE m_customers SET c_password = :userpassword WHERE code = :usercode"
    );
   
    $sql -> bindValue(":userpassword", password_hash($password,PASSWORD_DEFAULT) );
    $sql -> bindValue(":usercode",$resetcode );
    $sql -> execute();

    header("Location: ../View/homepage.php?code=$resetcode");

   

 }





?>