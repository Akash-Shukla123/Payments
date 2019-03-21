<?php

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
session_start();

$name='';
$number='';
$email='';
			


$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; 

$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); 


if($isValidChecksum == "TRUE") {

	
  

	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		

		if(isset($_POST['ORDERID'],$_POST['TXNAMOUNT'])){

			$order_id=$_POST['ORDERID'];
			$txn=$_POST['TXNAMOUNT'];

			$name=$_SESSION['name'];
			$number=$_SESSION['number'];
			$email=$_SESSION['email'];

		
		}

	echo "
	<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='X-UA-Compatible' content='ie=edge'>

	<link href='img/Paytm_logo.png' rel='icon'>

	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
	integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>

	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' 
	integrity='sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr' crossorigin='anonymous'>


	<title>Successful</title>
</head>
<body>
	<nav class='navbar navbar-light bg-light'>
  <a class='navbar-brand' href='#'>
    <img src='Paytm_logo.png' width='200' height='80'>
  </a>
		<ul class='nav navbar-right'>
		<li class='nav-item'><a href='http://MyPayments.000webhostapp.com/index.php?page=1'>Go To Home Page</a>
			</li>
		</ul>
</nav>
	
<div class='jumbotron text-xs-center'>
	<div class='text' align='center'>
  
<br><br>
		<div class='row'>
			
			<div class='col-lg-12' align='center'>
			<h1 class='display-3'>Thank You!</h1>
			</div>
		
		</div><br><br>
		
		<div class='row'>
			
			<div class='col-lg-12' align='center'>
			
			<h4 class='display-4'><span><i class='fa fa-check-circle' aria-hidden='true'></i></span>   
			&nbsp;Your Transaction is successful</h4>
			</div>
		
		</div>
		<br><br>
		
		
			  <table class='table' align='center'>
				
				  <tr>
				  <td align='right'>
					  <b>DONATION ID:</b></td>
				  <td>&nbsp;&nbsp;$order_id</td>
				  </tr>
				  
				  <tr>
				  <td align='right'>
					<b>NAME:</b> </td>
				  <td>&nbsp;&nbsp;$name</td>
				  </tr>
				  
				  <tr>
				 <td align='right'>
					<b>PHONE NO. :</b> </td>
				  <td>&nbsp;&nbsp;$number</td>
				  </tr>
				  
				  <tr>
				<td align='right'>
					  <b>EMAIL ID:</b></td>
				  <td>&nbsp;&nbsp;$email</td>
				  </tr>
				  
				  <tr>
				  <td align='right'>
					  <b>TRANSACTION AMOUNT:</b></td>
				  <td>&nbsp;&nbsp;$txn</td>
				  </tr>
				
				</table>
			

 
	</div>
</div>

</body>
</html>


	";

	?>

	<div style="display:none;">
		<?php

	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	
	$mail->SMTPDebug = 4;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'akashshuklavizag@gmail.com';                 // SMTP username
	$mail->Password = 'Akash@1209';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	
	$mail->setFrom('akashshuklavizag@gmail.com', 'Akash Shukla');
	$mail->addAddress($email);     // Add a recipient
	
	$mail->addReplyTo('akashshuklavizag@gmail.com', 'Akash Shukla');
	
	
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Sparks Foundation Donation Camp';
	$mail->Body    = '<h3> Thanks For Donating Rs.'.$txn.' in Sparks Foundation  <br> <b>ORDERID:' .$order_id . '</h3> <br> <h4> Your Donation will help us in future </h4> ';
	$mail->AltBody = '<a href="https://www.thesparksfoundationsingapore.org/">Go to our website. </a>';
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}

?>
</div>

<?php

		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "
	<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='X-UA-Compatible' content='ie=edge'>
	<link href='img/Paytm_logo.png' rel='icon'>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' 
	integrity='sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr' crossorigin='anonymous'>

	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
	integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
	<title>UnSuccessFul</title>
</head>
<body>
	<nav class='navbar navbar-light bg-light'>
  <a class='navbar-brand' href='#'>
    <img src='Paytm_logo.png' width='200' height='80'>
  </a>
		<ul class='nav navbar-right'>
		<li class='nav-item'><a href='http://mypayments.000webhostapp.com/index.php?page=1'>Go To Home Page</a>
			</li>
		</ul>
</nav>
	
<div class='jumbotron text-xs-center'>
	<div class='text' align='center'>
<br><br>
		
		<div class='row'>
			
			<div class='col-lg-12' align='center'>
			<h4 class='display-4'><i class='fa fa-times-circle' aria-hidden='true'></i>   
			&nbsp;Your Transaction is UnSuccessful !!!!!!</h4>
			</div>
		
		</div>
		<br><br>
 
	</div>
</div>

</body>
</html>
	";
	}
	

}
else {
	echo "<h3><b>Your Transaction is suspicious..............</b></h3>";
	//Process transaction as suspicious.
}

?>