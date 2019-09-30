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
     <div class="img-responsive" style="background: url('image/contactmain.png') no-repeat center; background-size: cover; height: 600px; margin:-20px 0 10px 0 !important;">
     
    </div>
    
       </div>
</section>
<!-- text-->
<section>
<div class="jumbotron text-center">
<h3><b class="text-success">SEND US A MESSAGE
</b></h3>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img style="height:100px;width:100px;" src='image/win-together_red.svg'>
    <h3><b>WIN TOGETHER 
</b></h3>
    </div>
    <div class="col-sm-3">
      <img style="height:100px;width:100px;" src='image/aim-higher_red.svg'>  
    <h3><b>AIM HIGHER
</b></h3>
    </div>
    <div class="col-sm-3">
	   <img style="height:100px;width:100px;" src='image/we-care_red.svg'>
    <h3><b>WE CARE
</b></h3><br>

    </div>
    <div class="col-sm-3">
	   <img style="height:100px;width:100px;" src='image/love-what-we-do_red.svg'>
    <h3><b>LOVE WHAT WE DO
</b></h3><br>

    </div>
  </div>
</div>
</div>


</section>
<!--message form-->
 <section id="message">
           <div id="commune">
             
              <div class="container">
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                             <h4>If you have any feedback or questions about our clubs, our website or our services in general, please contact us by filling out the form.<br><hr>All form fields are required unless otherwise indicated.</h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div id="sending">
                                        <form method="post" action="message_mail.php">
                                                <div class="form-group">
                                                  <label>First name</label>
                                                  <input name="name" type="text" class="form-control">
                                                  
                                                </div>
                                                <div class="form-group">
                                                  <label>Last name</label>
                                                  <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                  <label>Your Email address</label>
                                                  <input name="email" type="email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                   <label>Telephone no</label>
                                                   <input type="tel" class="form-control">
                                                 </div>
                                                 <div class="form-group">
                                                        <label>Comment</label><br>
                                                        <textarea class="form-control"  rows="3"></textarea>
                                                      </div>
                                                
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                              </form>
                                </div>
                             </div>

                      </div>

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
                
                </div>
     
              </div>
              <p class="text-center">Copyright &copy; 2019 | Muscle Factory Gym</p>
          </footer>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

     </body>