
<?php include('connection.php');
$usernameErr = $messageErr=$replynameErr="";
$username = $message = $replyname="";
if(isset($_POST['add'])){
    function validateFormData($formData){
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData;
    }

    if(!$_POST['fullname']){
        $usernameErr = 'please enter your fullname <br>';
    }else{
        $username = validateFormData($_POST['fullname']);
    }

    if(!$_POST['replyname']){
        $replynameErr = 'please enter the person name you want to reply <br>';
    }else{
        $replyname = validateFormData($_POST['replyname']);
    }


    if(!$_POST['reply']){
        $messageErr = 'please write down your reply <br>';
    }else{
        $message = validateFormData($_POST['reply']);
    }
   

    if($username && $message){
      
        $query = "INSERT into replymessage(id,fullname,todaydate,reply,replyname)
VALUES(NULL,'$username',CURRENT_TIMESTAMP,'$message','$replyname')";

    if(mysqli_query($conn,$query)){
        header('location:reply.php');
     }  else{
         echo "error:".$query."<br>".mysqli_error($conn);
     }
    }

    
        

}


mysqli_close($conn);


?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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

<div class="container jumbotron text-center" id="main">
<a href="community.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">main page</a>
<p class="text-danger">* required field</p>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
 
  <large class="text-danger">* <?php echo $usernameErr;?></large>
  <input type="text" placeholder='Full name'  class="form-control input-lg" name="fullname">
  <br><br>
  <large class="text-danger">* <?php echo $replynameErr;?></large>
  <input type="text" placeholder='Reply To'  class="form-control input-lg" name="replyname">
  <br><br>
  
  <large class="text-danger">* <?php echo $messageErr;?></large>
  
  <textarea class="form-control"  rows="3" type="text" placeholder="message" name="reply"></textarea>
  <br><br>
  
  <button type="submit" name="add" class="btn btn-success" >Submit</button>  
  </form>
  
</div>


        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                         <script src="jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js"></script>
                         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

