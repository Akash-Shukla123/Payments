<?php
session_start();
?>
<div style="display:none">
<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                             

$mail->isSMTP();                                     
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                             
$mail->Username = 'akashshuklavizag@gmail.com';                
$mail->Password = '';                        
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                               

$mail->setFrom('akashshuklavizag@gmail.com', 'Akash Shukla');
$mail->addAddress($_SESSION['email']);     // Add a recipient

$mail->addReplyTo('akashshuklavizag@gmail.com', 'Akash Shukla');


//$mail->addAttachment('/var/tmp/file.tar.gz');         
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    
$mail->isHTML(true);                                 

$mail->Subject = 'Sparks Foundation Donation Camp';
$mail->Body    = '<h3> Thanks For Donating Rs.'.$_SESSION['amount'].' in Sparks Foundation <br></h3> <br> <h4> Your Donation will help us in future </h4> ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
</div>
<script>
    document.location.href="index.php";
</script>
