<?php include('connection.php');
$usernameErr = $emailErr=$passwordErr=$addressErr=$phoneErr="";
$username = $email = $password=$address=$phone="";
if(isset($_POST['add'])){
    function validateFormData($formData){
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData;
    }

    if(!$_POST['username']){
        $usernameErr = 'please enter your username <br>';
    }else{
        $username = validateFormData($_POST['username']);
    }

    if(!$_POST['email']){
        $emailErr = 'please enter your email address <br>';
    }else{
        $email = validateFormData($_POST['email']);
    }

    if(!$_POST['password']){
        $passwordErr = 'please enter your password <br>';
    }else{
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    }

    if(!$_POST['phone']){
        $phoneErr = 'please enter your phone no <br>';
    }else{
        $phone = validateFormData($_POST['phone']);
    }

    if(!$_POST['address']){
        $addressErr = 'please enter your address <br>';
    }else{
        $address = validateFormData($_POST['address']);
    }

    if($username && $email && $password && $address && $phone){
      
        $query = "INSERT into users(id,username,password,email,signup_date,address,phone)
VALUES(NULL,'$username','$password','$email',CURRENT_TIMESTAMP,'$address','$phone')";

    if(mysqli_query($conn,$query)){
        header('location:freetrialsuccess.php');
     }  else{
         echo "error:".$query."<br>".mysqli_error($conn);
     }
    }

    
        

}


mysqli_close($conn);

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
     <div class="img-responsive" style="background: url('image/trainingmain.JPG') no-repeat center; background-size: cover; height: 600px; margin:-20px 0 10px 0 !important;">
     
    </div>
    
       </div>
</section>

<!-- text-->
<section>
<div class="jumbotron text-center">
<h1><b class="text-danger">SIGN UP FOR YOUR FREE TRIAL
</b></h1>
<p><b>Tell us your details and we’ll call to arrange a tour of your chosen club, with absolutely no obligations. Enjoy 1 day free access to all our classes and facilities, including our Signature Classes.</b></p>



</div>
</section>


<div class="container text-center" id="main" >
<h1>Welcome To <span>Muscle Factory Gym</span></h1>
    <p class="lead">Please signup first</p>   

<p class="text-danger">* required field</p>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
 
  <large class="text-danger">* <?php echo $usernameErr;?></large>
  <input type="text" placeholder='name'  class="input-lg" name="username">
  <br><br>
  <large class="text-danger">* <?php echo $emailErr;?></large>
  <input type="text" placeholder='email'  class="input-lg" name="email">
  <br><br>
  <large class="text-danger">* <?php echo $passwordErr;?></large>
  <input type="password" placeholder='password'  class="input-lg" name="password">
  <br><br>
  <large class="text-danger">* <?php echo $phoneErr;?></large>
  <input type="number" placeholder='phone no'  class="input-lg" name="phone">
  <br><br>
  <large class="text-danger">* <?php echo $addressErr;?></large>
  <input type="text" placeholder='address'  class="input-lg" name="address">
  <br><br>
  
  
  <button type="submit" name="add" class="btn btn-success" >Signup</button>  
  </form>
  
</div>
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