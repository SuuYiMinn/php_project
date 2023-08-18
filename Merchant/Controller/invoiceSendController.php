<?php
session_start();
$receiveInvoice = $_SESSION["invoice"];
// include "./common/mailSender.php";
include "../Model/model.php";
// $email =$_GET["email"];
$invoiceId =$_GET["id"];
$inDate = date("Y/m/d");
$sql = $pdo->prepare(

    "UPDATE t_order SET
    order_done = 1,
    invoice_date = :date
    WHERE id =:id
    "
);
$sql->bindValue(":date", $inDate);
$sql->bindValue(":id", $invoiceId);
$sql->execute();
//for get email
// $sql = $pdo->prepare(

//     "SELECT m_customers.c_email FROM t_order
//     JOIN m_customers ON m_customers.id = t_order.customer_id
//     WHERE t_order.id= :id
//     "
// );
// $sql->bindValue(":id", $invoiceId);

// $sql->execute();
// $_SESSION["cusInfo"] = $sql->fetchAll(PDO::FETCH_ASSOC);
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
include "./common/mailSender.php";
$to = $receiveInvoice[0][0]["c_email"];
$name = "Dennis";
$invoiceId = $receiveInvoice[0][0]["id"];
$cusName = $receiveInvoice[0][0]["c_name"];
$cusAddress = $receiveInvoice[0][0]["address"];
$cusTown = $receiveInvoice[0][0]["town"];
$cusReg = $receiveInvoice[0][0]["reg"];
$cusPayment = $receiveInvoice[0][0]["payment"];
$invoiceDate = $receiveInvoice[0][0]["invoice_date"];
$totalAmt = $receiveInvoice[0][0]["total_amt"];
// $receiveInvoice = $invoice;






ob_start();
include("../Mail/invoice/index.php");
// include("../View/Orders/invoice.php");
$message = ob_get_contents();
ob_get_clean();
// $send = mail($to, $subject, $message, $headers);
// echo ($send ? "Mail is send" : "There was an error");

$imgList = [
    "../Mail/invoice/images/image-1.png",
    "../Mail/invoice/images/image-2.png",
    "../Mail/invoice/images/image-3.png",
    "../Mail/invoice/images/image-4.png",
    "../Mail/invoice/images/image-5.png",
    "../Mail/invoice/images/image-6.png",
    "../Mail/invoice/images/image-7.gif",
    "../Mail/invoice/images/image-8.png",
    "../Mail/invoice/images/image-9.png"
];
$mail = new SendMail();
$mail->sendMail($to,"Invoice For Your Shopping", $message, $imgList);

header("Location: ../View/Orders/order.php");







// header("Location: ./mailSendController.php");

?>