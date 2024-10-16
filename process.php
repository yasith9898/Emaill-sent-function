<?php


include "SMTP.php";
include "PHPMailer.php";
include "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$email = $_POST["e"];
$subject = $_POST["s"];
$content = $_POST["c"];

if(empty($email)){
    echo("plese Enter your Email");
}else if(empty($subject)){
    echo("plese Enter your subject");
}else if(empty($content)){
    echo("plese Enter your content");
}else{

            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = '@gmail.com';
            $mail->Password = 'uvacivyfkgdnaenc';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('@gmail.com', 'Test email');
            $mail->addReplyTo('@gmail.com', 'Test email');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $bodyContent = $content;
            $mail->Body    = $bodyContent;

            if(!$mail->send()){
                echo("email sending fail");
            }else{
                echo("success");
            }






}



?>