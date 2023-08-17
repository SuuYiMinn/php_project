<?php
session_start();
include "./common/mailSender.php";

$email =$_SESSION["cusInfo"];




// send invoice mail
$body = file_get_contents("../Mail/invoice/index.html");
$imgList = [
    "../Mail/invoice/images/image-1.png"
    // "../Mail/invoice/images/image-2.png",
    // "../Mail/invoice/images/image-3.png",
    // "../Mail/invoice/images/image-4.png"
    // "../Mail/invoiceMail/images/image-5.png",
    // "../Mail/invoiceMail/images/image-6.png",
    // "../Mail/invoiceMail/images/image-7.png",
    // "../Mail/invoiceMail/images/image-8.png",
    // "../Mail/invoiceMail/images/image-9.gif"
];
$mail = new SendMail();
$mail->sendMail($email[0]["c_email"],"Invoice For Your Shopping", $body, $imgList);

header("Location: ../View/Orders/order.php");

?>