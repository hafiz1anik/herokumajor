<?php

$loginError='';
if(isset($_POST['login'])){
    //validate form
    function validateFormData($formData){
        $formData = trim(stripcslashes(htmlspecialchars($formData)));
        return $formData;
    }

    //create variables
    //wrap the data with our function
    $formUser = validateFormData($_POST['username']);
    $formPass = validateFormData($_POST['password']);

    //connect to database
    include('connection.php');

    //create sql query
    $query = "SELECT username,email,password FROM users WHERE username='$formUser'";
     
    //store the result
    $result = mysqli_query($conn,$query);
    
    //varify if result is returned
    if(mysqli_num_rows($result)>0){
        //store basic user data in variables
        while($row = mysqli_fetch_assoc($result)){
            $user = $row['username'];
            $email = $row['email'];
            $hashedPass = $row['password'];
            
            
        }
   
        //varify hashedpassword with typed password

        if(password_verify($formPass,$hashedPass)){
            //correct login details
            //start the session
            session_start();
            //store data in session variables
            $_SESSION['loggedInUser']=$user;
            $_SESSION['loggedInEmail']=$email;

            echo '<script>alert("Congratulation!! You have redeemed your reward successfully.Collect your reward from our gym center")</script>';
            
        }else{
            $loginError = '<div class="alert alert-danger">Sorry! this promo code is not valid for this product.Please try another product.<a class="close" data-dismiss="alert">&times;</a></div>';
        }
    }else{
        $loginError = '<div class="alert alert-danger">Sorry! this promo code is not valid for this product.Please try another product.<a class="close" data-dismiss="alert">&times;</a></div>';
       
       
    }
    mysqli_close($conn);
}

//$password = password_hash('
//g158c2s 
//',PASSWORD_DEFAULT);
//echo $password;
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
     <div class="img-responsive" style="background: url('image/membership1.jpg') no-repeat center; background-size: cover; height: 700px; margin:-20px 0 10px 0 !important;">
      
    </div>
    
       </div>
</section>

<!-- text-->
<section>
<div class="text-center">

<h2><b class="text-warning">GET REWARDED
 
</b></h2>

<h3><b class="text-success">Enjoy the benefits that come with being our member.
 
 </b></h3>

<h3><b class="text-primary">Use your promo code and try to find out your particular reward. 
 
 </b></h3>
<div class="container">
  <div class="row">
  <?php echo $loginError; ?>
    <div class="col-sm-4">
    
    <img class="img-responsive" src="image/shaker2.png" style="height:357px;">
    <h2><b class="text-success">Darkshaker
 
</b></h2>
    

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <div class="form-group">
      <label for="login-username" class="">Write exact name written below product</label>
      <input name="username" type="text" class="input-lg" id="login-username" placeholder="Product name">
      </div>
      <div class="form-group">
      <label for="login-password" class="sr-only">Password</label>
      <input name="password" placeholder="Insert Promo code" type="text" class="input-lg" id="login-password">
      </div>
      <button type="submit" class="btn btn-success" name="login">Redeem</button>
      
    </form>
    </div>

    <div class="col-sm-4">
    <img class="img-responsive" src="image/tshirt2.png" style="height:357px;">
    <h2><b class="text-success">Yellowjersey
 
</b></h2>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <div class="form-group">
      <label for="login-username" class="">Write exact name written below product</label>
      <input name="username" type="text" class="input-lg" id="login-username" placeholder="Product name">
      </div>
      <div class="form-group">
      <label for="login-password" class="sr-only">Password</label>
      <input name="password" placeholder="Insert Promo code" type="text" class="input-lg" id="login-password">
      </div>
      <button type="submit" class="btn btn-success" name="login">Redeem</button>
      
    </form>
</div>
    <div class="col-sm-4">
    <img class="img-responsive" src="image/yogapilatesmats.jpg" style="height:357px;">
    <h2><b class="text-success">Yogamats
 
</b></h2>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <div class="form-group">
      <label for="login-username" class="">Write exact name written below product</label>
      <input name="username" type="text" class="input-lg" id="login-username" placeholder="Product name">
      </div>
      <div class="form-group">
      <label for="login-password" class="sr-only">Password</label>
      <input name="password" placeholder="Insert Promo code" type="text" class="input-lg" id="login-password">
      </div>
      <button type="submit" class="btn btn-success" name="login">Redeem</button>
      
    </form>
    </div>
    
  </div>
</div>




</section>
<br><hr>
<!--reward-->

<section>
<div class="text-center">

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    
    <img class="img-responsive" src="image/bluetowel.jpg" style="height:270px;">
    <h2><b class="text-success">Bluetowel
 
</b></h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <div class="form-group">
      <label for="login-username" class="">Write exact name written below product</label>
      <input name="username" type="text" class="input-lg" id="login-username" placeholder="Product name">
      </div>
      <div class="form-group">
      <label for="login-password" class="sr-only">Password</label>
      <input name="password" placeholder="Insert Promo code" type="text" class="input-lg" id="login-password">
      </div>
      <button type="submit" class="btn btn-success" name="login">Redeem</button>
      
    </form>
    </div>
    <div class="col-sm-4">
    <img class="img-responsive" src="image/tshirt1.png" style="height:270px;">
    <h2><b class="text-success">Redjersey
 
</b></h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <div class="form-group">
      <label for="login-username" class="">Write exact name written below product</label>
      <input name="username" type="text" class="input-lg" id="login-username" placeholder="Product name">
      </div>
      <div class="form-group">
      <label for="login-password" class="sr-only">Password</label>
      <input name="password" placeholder="Insert Promo code" type="text" class="input-lg" id="login-password">
      </div>
      <button type="submit" class="btn btn-success" name="login">Redeem</button>
      
    </form>
</div>
    <div class="col-sm-4">
    <img class="img-responsive" src="image/shaker1.png" style="height:270px;">
    <h2><b class="text-success">Greyshaker
 
</b></h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <div class="form-group">
      <label for="login-username" class="">Write exact name written below product</label>
      <input name="username" type="text" class="input-lg" id="login-username" placeholder="Product name">
      </div>
      <div class="form-group">
      <label for="login-password" class="sr-only">Password</label>
      <input name="password" placeholder="Insert Promo code" type="text" class="input-lg" id="login-password">
      </div>
      <button type="submit" class="btn btn-success" name="login">Redeem</button>
      
    </form>
    </div>
    
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

     </body>