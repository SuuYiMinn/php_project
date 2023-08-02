<?php
// call mailsender
include "./common/mailSender.php";
include "./common/commonfunction.php";

session_start();
print_r($_POST);

// check directly come from address bar come from signUp page
if (count($_POST) == 0) {
  header("Location: ../View/Registeration/signup.php");
} else {
  $user_email = $_POST["email"];
  $user_password = $_POST["password"];
}

// database connection
include "../Model/model.php";

// get email from database to check email is used or not 
$sql = $pdo->prepare(
  "SELECT * FROM m_customer WHERE c_email=:email"
);
$sql->bindValue(":email", $user_email);
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($result) == 0) {

  $create_date = date("Y-m-d");

  $sql = $pdo->prepare(
    "INSERT INTO m_customer(c_email,c_password,create_date) VALUE(:db_email,:db_password,:db_createDate)"
  );
  $sql->bindValue(":db_email", $user_email);
  $sql->bindValue(":db_password", password_hash($user_password,PASSWORD_DEFAULT));
  $sql->bindValue(":db_createDate", $create_date);
  $sql->execute();

  
  $verify_code = get_token(128);

  $sql = $pdo->prepare(
    "UPDATE m_customer SET code = :verifyCode WHERE c_email = :email"
  );

  $sql->bindValue(":email", $user_email);
  $sql->bindValue(":verifyCode", $verify_code);
  $sql->execute();

  $domain = $_SERVER['SERVER_NAME'];

  $mail = new SendMail ();

  $mail->sendMail($user_email,
  "Verification Link",
  
  "<h2> Here is your verification Link</h2>
  <a href = 'http://$domain/php_project/Customer/Controller/verifyController.php?token=$verify_code'> Verify </a>
  
  ");



  
} else {
  $_SESSION["registerError"] = "Already registered Email";
  header("Location: ../View/Registeration/signup.php");
}
?>




