<?php
require('mailer/PHPMailerAutoload.php');

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$fromname='contact us';
$row='daphniedonnell@gmail.com';
//$mail->isSMTP(); //comment the this line if you want to test it online on your hosting not comment this line if you going to test it on your loca; computer.
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '@gmail.com';	                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->FromName=$fromname;
$mail->addBCC($row,$fromname);           // Name is optional
$mail->addReplyTo($_POST['email']); // add reply email here
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'received mesage from '.$_POST['name'].' ';
$mail->Body    = '<b><font color=green>HI, Admin you have received message from '.$_POST['name'].' detail is below:</font></b><br>Name: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'<br>Thank you ... ';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo ' <div class="text-success"><strong>Thank you, Form has been submitted successfully !</strong></div>';
    echo'<script>$("#reset")[0].reset()</script>';
}
