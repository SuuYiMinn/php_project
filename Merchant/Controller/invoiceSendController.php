<?php
session_start();
// include "./common/mailSender.php";
include "../Model/model.php";
// $email =$_GET["email"];
$invoiceId =$_GET["id"];

$sql = $pdo->prepare(

    "UPDATE t_order SET
    order_done = 1
    WHERE id =:id
    "
);
$sql->bindValue(":id", $invoiceId);
$sql->execute();
//for get email
$sql = $pdo->prepare(

    "SELECT m_customers.c_email FROM t_order
    JOIN m_customers ON m_customers.id = t_order.customer_id
    WHERE t_order.id= :id
    "
);
$sql->bindValue(":id", $invoiceId);

$sql->execute();
$_SESSION["cusInfo"] = $sql->fetchAll(PDO::FETCH_ASSOC);
//send invoice mail
// $body = file_get_contents("../Mail/invoice/index.html");
// $imgList = [
//     "../Mail/invoice/images/image-1.png"
    // "../Mail/invoice/images/image-2.png",
    // "../Mail/invoice/images/image-3.png",
    // "../Mail/invoice/images/image-4.png"
    // "../Mail/invoiceMail/images/image-5.png",
    // "../Mail/invoiceMail/images/image-6.png",
    // "../Mail/invoiceMail/images/image-7.png",
    // "../Mail/invoiceMail/images/image-8.png",
    // "../Mail/invoiceMail/images/image-9.gif"
// ];
// $mail = new SendMail();
// $mail->sendMail($email,"Invoice For Your Shopping", $body, $imgList);

header("Location: ./mailSendController.php");

?>