<?php
$amt=$_SESSION['txn'];
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'akashshuklavizag@gmail.com';                 // SMTP username
$mail->Password = '9708674383';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('akashshuklavizag@gmail.com', 'Akash Shukla');
$mail->addAddress($_POST['email']);     // Add a recipient

$mail->addReplyTo('akashshuklavizag@gmail.com', 'Akash Shukla');


//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Sparks Foundation Donation Camp';
$mail->Body    = '<h3> Thanks For Donating Rs.'.$amt.' </h3> <br> <h4> Your Donation will help us in future </h4> ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {
    echo 'Message has been sent';

}

?>