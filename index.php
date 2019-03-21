<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo_small.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>


<div class="goto">

  <?php
  $a='';
  if(isset($_GET['page']))
      $a=$_GET['page'];
      
			switch($a)
			{
			case '':
			case '1': 
			include('home.php');
			break;
			case '2': 
			include('details.php');
			break;
			}
			?>
    
</div>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
          <br><br>
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <h2><font color="yellow">The Sparks Foundation</font></h2>
            <p>We connect students of all financial <br>backgrounds with experts. Knowledge sharing enables equal opportunity for all.</p>
			  
			  <p>
We Help Students And Enable Them To Move Forward, Get Unstuck From Any Unfavorable Situation. We Keep An Alternative Channel Open Always To Help Them, When School And People Around Are Not Enough.
			  </p>
          </div>

         

          <div class="col-lg-6 col-md-6 footer-contact" align="right" style="text-align: center;">
            <h4>Contact Us</h4>
            <p>
             THE HANGAR, NUS ENTERPRISE<br>
21 HENG MUI KENG TERRACE, SINGAPORE, 119613
 <br>
              <strong>Phone:</strong>  +65-8402-8590 <br>
              <strong>Email:</strong>  INFO@THESPARKSFOUNDATION.SG<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

         

        </div>
      </div>
    </div>

   
  </footer>
 

</body>
</html>
