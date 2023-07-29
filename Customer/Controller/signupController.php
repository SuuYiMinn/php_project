<?php
include "../Model/model.php";

print_r($_POST);

if(count($_POST) == 0){
   header("Location: ../View/Registeration/signup.php");
}else{
    $email = $_POST["email"];
    $code  = $_POST["code"];
    
    
 }
?>