<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "my_first_database");

if(isset($_POST["add_to_cart"]))

{
	echo '<script>window.location="payment.php"</script>';
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
     <div class="img-responsive" style="background: url('image/carousel2.png') no-repeat center; background-size: cover; height: 600px; margin:-20px 0 10px 0 !important;">
     
    </div>
    
       </div>
</section>

<!-- text-->
<section>
<div class="jumbotron text-center">

<h3><b class="text-success">WHAT'S YOUR PLAN?
 
</b></h3>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    <img style="height:100px;width:100px;" src='image/posture.svg'>
    <h3><b>POSTURE 
</b></h3>
    </div>
    <div class="col-sm-4">
      <img style="height:100px;width:100px;" src='image/cardio.svg'>  
    <h3><b>CARDIO
</b></h3>
    </div>
    <div class="col-sm-4">
	   <img style="height:100px;width:100px;" src='image/strength.svg'>
    <h3><b>STRENGTH
</b></h3><br>

    </div>
  </div>
</div>
<h3><b class="text-success">Find the plan that best fits your life. 


 
</b></h3>
</div>


</section>
<!--suggested class-->
<section>
<h3 class="text-center" style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><b>CHOOSE A SUITABLE MEMBERSHIP OFFER FOR YOU</b></h3>
<div class="container">
			
			<?php
				$query = "SELECT * FROM product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="membership.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="padding:16px;" align="center">
						<img src="image/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger"><?php echo $row["price"]; ?></h4>

						

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                       
						<input id="join" type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Pay now" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<!--div style="clear:both">
			<br />
			<h3>Membership Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Membership Type</th>
						
						<th width="60%">Price</th>
						
						
					</tr>
					<--?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><--?php echo $values["item_name"]; ?></td>
						
						<td> <--?php echo $values["item_price"]; ?></td>
			
						<td><a href="membership.php?action=delete&id=<--?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<--?php
							//$total = $total + ( $values["item_price"]);
						}
					?>
				
					<--?php
					}
					?>
					
                </table>
                
                 <button class="btn btn-dark"><a href="payment.php">Complete</a></button>
                 
			</div>
		</div>

</section>


<--footer-->
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
                
                </div>
     
              </div>
              <p class="text-center">Copyright &copy; 2019 | Muscle Factory Gym</p>
          </footer>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

     </body>