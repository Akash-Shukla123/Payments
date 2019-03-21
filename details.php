

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Details</title>
        <link href="img/logo_small.png" rel="icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
       
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


        <style>
           * {
  box-sizing: border-box;
}

                .form-container{
                    padding: 20px;
                }

      

                #radio_bt{
                    background:white;
                    width:100%;
                }
                #radio_bt:hover{
                    background: black;
                    color:white;
                }

        </style>


    </head>
    <script src="https://js.stripe.com/v3/"></script>
    <body>

    <script>
        function paytm(){
            document.getElementById("reused_form").action ="paytm/PaytmKit/pgRedirect.php";
        }

        function paypal(){
            document.getElementById("reused_form").action ="https://www.sandbox.paypal.com/cgi-bin/webscr";
        }

        function card(){
            document.getElementById("reused_form").action ="card.php";
        }


        function usd(){
         document.getElementById("usd").style.display = "block";     
		 }

         function data(){
         document.getElementById("data").style.display = "block";     
		 }

        </script>

		<div class="row" style="height:80%;padding:50px;">
			<div class="col-lg-6">	
                
            
            <div class="container">
                <div class="form-container z-depth-5">
                   
                    <div class="row">
                        <form class="col s12" id="reused_form" method="POST">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="name" type="text" required name="first_name" class="validate">
                                    
                                    <INPUT TYPE="hidden" NAME="return" value="http://mypayments.000webhostapp.com/">
                                    
                                    <input type="hidden" name="currency_code" value="USD">
                                    
                                    <input type="hidden" name="business" value="akashshuklavizag@gmail.com">
                                    <input type="hidden" name="page_style" value="paypal">
                                   
                                    <label for="name">Name</label>
                                </div>
                            </div>
							<div class="row">
                                <div class="input-field col s12">
                                    <input id="phone" type="number" required name="night_phone_a" class="validate" maxlength="10">
                                    <label for="name">Phone Number</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" onclick="data()" required name="email"  class="validate">
                                    <label for="email">Email</label>
                                    <div class="alert alert-warning" role="alert" id="data" style="display:none;">
                            If paying via Paypal then enter email address linked to your paypal account. </b>.
                                </div>
                                </div>
                            </div>
							<div class="row">
								<div class="input-field col s12">
                                    <input id="amount" type="number" required name="amount" class="validate" onclick="usd()">
                                    <label for="name">Amount</label>
                                </div>
                                
							</div>

                            <div class="alert alert-warning" role="alert" id="usd" style="display:none;">
                            If paying via Paypal amount will be in <b> USD($) Dollars </b>.
                                </div>

                            <div class="row">
								
                                <div class="input-field col s12">
									<h4>Choose Payments Methods :</h4><br>
									
									<img src="img/mastercard_logo.png"> &nbsp;&nbsp;
									<img src="img/visa_logo.png">&nbsp;&nbsp;
									<img src="img/paypal_logo.png">&nbsp;&nbsp;
									<img src="img/Paytm_logo.png" width="100" height="50">&nbsp;&nbsp;
                                    <br><br>
                                    <!--
                                    <input type="radio" name="card" value="1">
                                   <label for="Debit"> <h5 style="color: black;">Debit Card</h5></label>
									
									<br>
									<input type="radio" name="card" value="2">
                                    <label for="Debit"><h5 style="color: black;">Credit Card</h5></label>
									
									<br>
									<input type="radio" name="card" value="3">
                                    <label for="Debit"><h5 style="color: black;">Paypal</h5></label>
									
									<br>
									<input type="radio" name="card" value="4">
                                    <label for="Debit"><h5 style="color: black;">Paytm</h5></label>-->
                                    <br><br>

                                    <div class="row">

                                    <div class="col-lg-6">
                                        <button type="submit" name="debit"
                                        value="1" onclick="card()"  class="btn btn-outline-dark abc" id="radio_bt">Debit Card</button>
                                    </div>


                                    <div class="col-lg-6">
                                    <button type="submit" onclick="card()" name="credit" class="btn btn-outline-dark" id="radio_bt">Credit Card</button> 
                                    </div>

                                </div>
                                    <div class="row">
                                        <div class="col-lg-12" id="debit_credit_card">


                                            </div>
                                     </div>




                                    <div class="row">

                                    <div class="col-lg-6">
                                    <button type="submit" name="cmd" value="_donations" 
                                    onclick="paypal()" class="btn btn-outline-dark" id="radio_bt">Pay Via PayPal</button>
                                    </div>

                                    <div class="col-lg-6">
                                    <button type="submit" value="4" name="pay"  class="btn btn-outline-dark" onclick="paytm()" id="radio_bt">Pay Via Paytm</button>
                                    </div>

                                    </div>

                                </div>
                            </div>
							
                           
                        </form>
                        <div id="error_message" style="width:100%; height:100%; display:none; ">
                            <h4>
                                Error
                            </h4>
                            Sorry there was an error sending your form. 
                        </div>
                        <div id="success_message" style="width:100%; height:100%; display:none; ">
                            <h4>
                                Success! Your Message was Sent Successfully.
                            </h4>
                        </div>
                    </div>
                
				
			</div>
			
            </div>
			</div>
			<div class="col-lg-6">
				<div class="text" style="padding: 20px;">
				<p>
                <h3>Thank you for your generous donation</h3><br>
               
It’s thanks to people like you that our organization is able to enrich the lives of<br> young students and help them gain exposure to the types of programs that will inspire and excite them to continue on in valuable STEM careers. <br><br>

<h6>*** All donations are secure and tax deductable</h6>

                        <section id="about">
                                

                                        <h3>Levels of Support:</h3>
                                  <div class=" about-container">
                          
                                    <div class="col-lg-8 content order-lg-1 order-2">
                                      
                          
                                      <div class="icon-box wow fadeInUp">
                                        <div class="icon"> 95 </div>                                        
                                      <p class="description">Provides a scholarship for one child to attend
                                             a 5-week after school STEM workshop.</p>
                                      </div>
                          
                                      <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="icon">400 </div>
                                        <p class="description">Provides a valuable science camp experience for a child 
                                            whose family is unable to pay.</p>
                                      </div>
                          
                                      <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="icon">600</div>
                                        <p class="description">Provides an in-school classroom visitation for an entire class. </p>
                                      </div>
										
										<div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="icon">2500</div>
                                        <p class="description">Provides an in-school classroom visitation for an entire class. </p>
                                      </div>
										
										<div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="icon">10,000</div>
                                        <p class="description">Provides an in-school classroom visitation for an entire class. </p>
                                      </div>
                                      

                                        </div>
                                    </div>                         
                                
                              </section>
                </p>
			</div>
                </div>
            </div>
			
            <!--Import jQuery before materialize.js-->

            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        </div>
    </body>
</html>