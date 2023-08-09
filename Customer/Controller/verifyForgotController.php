<?php 

$user_code = $_GET["token"];


echo($user_code);
include "../Model/model.php"; 




$sql = $pdo->prepare(

    "SELECT * FROM m_customers WHERE code = :verifyCode"

);
$sql->bindValue(":verifyCode",$user_code);
$sql->execute();



$resultCode = $sql->fetch(PDO::FETCH_ASSOC);


if(count($resultCode)!=0){

    header("Location: ../View/Registeration/resetpassword.php?resetverifiedcode=$user_code");

}



?>