<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

 require 'E:\xampp\htdocs\src\Exception.php';
 require 'E:\xampp\htdocs\src\PHPMailer.php';
 require 'E:\xampp\htdocs\src\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$email=$_POST['Em'];
$uname=$_POST["Us"];
$sub=$_POST["Sub"];
$desc=$_POST["Desc"];

try {
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'shrutikapatil726@gmail.com';                    
    $mail->Password   = 'xciixfhnkfgecleo';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    $mail->setFrom("$email", "$uname");
    $mail->addAddress('shrutika8846@gmail.com', 'Shrutika patil');   
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = "$sub";
    $mail->Body    = "$desc";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<h1>Message has been sent</h1>';
} catch (Exception $e) {
    echo "<h1>Message could not be sent. Mailer Error:</h1> {$mail->ErrorInfo} ";
}