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

            header('location:membership.php');
            
        }else{
            $loginError = '<div class="alert alert-danger">Incorrect password or username.Please try again.</div>';
        }
    }else{
        $loginError = '<div class="alert alert-danger">Incorrect password or username.Please try again.<a class="close" data-dismiss="alert">&times;</a></div>';
       
       
    }
    mysqli_close($conn);
}

//$password = password_hash('
//g158c2s 
//',PASSWORD_DEFAULT);
//echo $password;
?>




<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MYSQL select</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   
     <link rel="stylesheet" href="signup.css">

     
</head>!-->
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
    
    <!--link rel="stylesheet" href="signup.css"-->
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
<div class="container text-center" id="main">
<h1>Welcome To <span>Muscle Factory Gym</span></h1>
    <p class="lead">Please Log in first</p>
     
    <?php echo $loginError; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <div class="form-group">
      <label for="login-username" class="sr-only">Username</label>
      <input name="username" type="text" class="input-lg" id="login-username" placeholder="username">
      </div>
      <div class="form-group">
      <label for="login-password" class="sr-only">Password</label>
      <input name="password" placeholder="password" type="text" class="input-lg" id="login-password">
      </div>
      <button type="submit" class="btn btn-success" name="login">Login</button>
      
    </form>
    <h3>Don't have an account???<a href="signup.php"><span>Sign Up</span></a> Please</h3>
</div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

