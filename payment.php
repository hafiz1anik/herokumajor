<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "my_first_database");

if(isset($_POST["add_to_cart"]))

{
	
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("This membership is Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				
				echo '<script>window.location="membership.php"</script>';
			}
		}
	}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gym</title>
    <link href="jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
    
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.1.1-web/fontawesome-free-5.1.1-web/css/all.css">
    
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="sr-only">Toggle navigation</span>  
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
             </button>
             <img src="image/logo.png">
             <a class="navbar-brand" href=""><p class="text-danger">Muscle Factory Gym</p></a>

          </div>
          <div class="collapse navbar-collapse" id="navbar-collapse">
             <ul class="nav navbar-nav navbar-right">
                 <li ><a href="home.php">Home</a></li>
                 
                 <li><a href="freetrial.php">Free Trial</a></li>
                 <li><a href="signup.php" type="submit" name="submit">Membership</a></li>
                 <li><a href="privilege.php">Privileges</a></li>
                 <li><a href="contact.php">Contact</a></li>
             </ul>
          </div>
        </div>
     </nav>
     <!--main image-->
     <section>
     <div id="main">
     <div class="img-responsive" style="background: url('image/signup4.jpg') no-repeat center; background-size: cover; height: 600px; margin:-20px 0 10px 0 !important;">
     
    </div>
    
       </div>
</section>

<!-- text-->
<section>
<div class="jumbotron text-center">

<h3><b class="text-success">PAY NOW
 
</b></h3>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    <img class="img-responsive" src='image/freestyleleft.jpg'>
    
    </div>
    <div class="col-sm-4">
      <img class="img-responsive" src='image/freestylemiddle.jpg'>  
    
    </div>
    <div class="col-sm-4">
	   <img class="img-responsive" src='image/freestyle.jpg'>
    <

    </div>
  </div>
</div>
<h3><b class="text-success">AND ENJOY A GREAT PRIVILEGE WITH US!! 


 
</b></h3>
</div>


</section>
<!--suggested class-->
<section>

<div class="container">
			
			<h3>Membership Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Membership Type</th>
						
						<th width="60%">Price</th>
						
						
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						
						<td> <?php echo $values["item_price"]; ?></td>
			
						<td><a href="membership.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							//$total = $total + ( $values["item_price"]);
						}
					?>
				
					<?php
					}
					?>
					
                </table>
                
                
                 
			</div>
		</div>

</section>

<!--payment card-->
<section>

   <div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form accept-charset="UTF-8" action="payment_mail.php" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
          <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Full name</label>
                <input name="name" class='form-control' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Your email address</label>
                <input name="email" class='form-control' size='4' type='text'>
              </div>
              <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Membership type</label>
                <input name="type" class='form-control' size='4' type='text'>
              </div>
            </div>
           
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Total amount</label>
                <input name="amount" class='form-control' size='4' type='text'>
              </div>
            </div>
           
            <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'><?php echo $values["item_price"]; ?></span>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please fill up the required fields and try again.
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>
</section>
<!--footer-->
<footer id="main-footer">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="icon" style="margin: 24px 0;" class="text-center">
                      
                      <h2>Follow us in social media for special offer</h2>
                        <a href="#"><i class="fab fa-facebook-square fa-5x"></i></a> 
                        <a href="#"><i class="fab fa-twitter-square fa-5x"></i></a>  
                        <a href="#"><i class="fab fa-linkedin fa-5x"></i></a>  
                        <a href="#"><i class="fab fa-instagram fa-5x"></i></a> 
                        </div>
                     </div>
                  <p class="text-center">Copyright &copy; 2019 | Muscle Factory Gym</p>
                </div>
     
              </div>
            
          </footer>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <script src="payment.js"></script>
     </body>