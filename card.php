<?php
session_start();
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title data-tid="elements_examples.meta.title"></title>
  <meta data-tid="elements_examples.meta.description" name="description" content="Build beautiful, smart checkout flows.">

  <link href="img/logo_small.png" rel="icon">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon/180x180.png">
  <link rel="icon" href="img/apple-touch-icon/180x180.png">

  <script src="https://js.stripe.com/v3/"></script>
  <script src="js/index.js" data-rel-js></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/base.css" data-rel-css="" />
  <link rel="stylesheet" type="text/css" href="css/example4.css" data-rel-css="" />
</head>
<body>

<main>
    <section class="container-lg">
      
 <?php


 if(isset($_POST['debit']) || isset($_POST['credit'])){
      
$name=$_POST['first_name'];
$email=$_POST['email'];
$phone=$_POST['night_phone_a'];
$amount=$_POST['amount'];


$_SESSION['email']=$email;
$_SESSION['amount']=$amount;
 }

 ?>


      <div class="cell example example4" id="example-4" style="height:500px;">

        <form id="payment-form" action="mail.php" method="POST">
          <div id="example4-paymentRequest">
            <!--Stripe paymentRequestButton Element inserted here-->
          </div>
          <fieldset>

          
            <legend class="card-only" data-tid="elements_examples.form.pay_with_card">Pay with card</legend>
            <legend class="payment-request-available" data-tid="elements_examples.form.enter_card_manually">Or enter card details</legend>
            <div class="container">
              <div id="example4-card"></div>
              <button type="submit" data-tid="elements_examples.form.donate_button" name="donate">Donate</button>
            </div>
          </fieldset>
          <div class="error" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
              <path class="base" fill="#000" d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z"></path>
              <path class="glyph" fill="#FFF" d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,
              11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,
              8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z"></path>
            </svg>
            <span class="message"></span></div>
        </form>
        <div class="success">
          <div class="icon">
            <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <circle class="border" cx="42" cy="42" r="40" stroke-linecap="round" stroke-width="4" stroke="#000" fill="none"></circle>
              <path class="checkmark" stroke-linecap="round" stroke-linejoin="round" d="M23.375 42.5488281 36.8840688 56.0578969 64.891932 28.0500338" stroke-width="4" stroke="#000" fill="none"></path>
            </svg>
          </div>
          <h3 class="title" data-tid="elements_examples.success.title">Payment successful</h3>
          <p class="message"><span data-tid="elements_examples.success.message"><b>Thanks for Donating.</b> <br> <b>Your Donation Will help in betterment of our lives </b><br>
        <br>  Your Token No. is: </span><span class="token"></span></p>
       <p class="message"><span data-tid="elements_examples.success.message"> Name :  </span><span class="name" id="yourname"><?php echo $name ?></span></p>
          <p class="message"><span data-tid="elements_examples.success.message"> Amount :  </span><span class="name" id="youramount">Rs. <?php echo $amount ?></span></p>
          <p class="message"><span data-tid="elements_examples.success.message"> Phone No. :  </span><span class="name"><?php echo $phone ?></span></p>
          <p class="message"><span data-tid="elements_examples.success.message"> Email Address :  </span><span class="name" id="youremail"><?php echo $email ?></span></p>
 <a class="reset" href="#">
           <h4><a href="mail.php">Go To Home Page</a></h2>
          </a><br>
        </div>


        <input type="hidden" value="<?php echo $amount ?>" name="amt" id="amt">
        <input type="hidden" class="token" name="token" value="">
        <br><br>
       
        
      </div>

     </section>   
    </main>
    
   

  <script src="js/l10n.js" data-rel-js></script>


  <script src="js/example4.js" data-rel-js></script>

</body>
</html>
