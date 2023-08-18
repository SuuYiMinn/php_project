<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './lib/PHPMailer/src/Exception.php';
require './lib/PHPMailer/src/PHPMailer.php';
require './lib/PHPMailer/src/SMTP.php';


class SendMail
{
    public function sendMail($toMail,$subject,$body,$imgs)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   
            $mail->isSMTP();                                         
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = 'g3phpproject03@gmail.com';   //<< change   
            $mail->Password   = 'gdmfaeburjhwjypk';          //<< change                     
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;  

            for ($i=0; $i < count($imgs); $i++) {
                $mail->addEmbeddedImage($imgs[$i], "img$i");
            }

            //Recipients
            $mail->setFrom('g3phpproject03@gmail.com',"GoDeal"); //<<change
            $mail->addAddress($toMail);      

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
