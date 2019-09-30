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
                 <li ><a href="">Home</a></li>
                 <li><a href="freetrial.php">Free Trial</a></li>
                 <li><a href="signup.php" type="submit" name="submit">Membership</a></li>
                 <li><a href="privilege.php">Privileges</a></li>
                 <li><a href="contact.php">Contact</a></li>
             </ul>
          </div>
        </div>
     </nav>

 <!--carousel-->
 <div class="container-fluid" style="padding: 0; margin-top: -20px !important;" >

<div id="carousel-example-generic" style="max-height: 500px !important;" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
                <div class="item active">
                        <div class="img-responsive" style="background: url('image/carousel1.jpg') no-repeat center; background-size: cover; height: 600px;"></div> 
                        
                        
                        <!--<img width="100%" src="image/mensfashion.png" alt="...">-->
                        <div class="carousel-caption">
                            <h1></h1>
                                 
                        </div>
                </div>
                <div class="item">
                        <!--<img width="100%" src="image/womensfashion.png" class="img-fluid" alt="...">-->
                        <div class="img-responsive" style="background: url('image/carousel2.jpg') no-repeat center; background-size: cover; height: 600px;"></div>
                        <div class="carousel-caption">
                            <h1></h1>
                               
                        </div>
                </div>
                <div class="item">
                        <!--<img width="100%" src="image/electronics.png" class="img-fluid" alt="...">-->
                         <div class="img-responsive" style="background: url('image/carousel3.png') no-repeat center; background-size: cover; height: 600px;"></div> 
                        <div class="carousel-caption">
                            <h1></h1>
                                
                        </div>
                </div>
                <div class="item">
                        <!--<img width="100%" src="image/homeandfurniture.png" class="img-fluid" alt="...">-->
                        <div class="img-responsive" style="background: url('image/carousel4.jpg') no-repeat center; background-size: cover; height: 600px;"></div>
                        <div class="carousel-caption">
                            <h1></h1>
                            
                        </div>
                </div>
               
                
                ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
        </a>
</div>

</div>
<br><hr>
<!-- text-->
<section>
<div class="jumbotron text-center" style="background-color:black;">
<h1><b class="text-danger">Free Trial</b></h1>
<h2><b>Get a free fitness pass and experiences our signature class today !!</b></h2>



</div>

<!--card-->
</section>
<div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                          <div class="col-sm-12">
                                        <div class="card" style="width: 18rem;">
                                                        <img class="card-img-top" src="image/strength.jpg" style="width: 300px;height: 200px;" alt="Card image cap">
                                                        <div class="card-body">
                                                          <h5 class="card-title" style="color:red;"><b>FREESTYLE TRAINING</b></h5>
                                                          <p class="card-text">There’s nothing quite like engaging in a group workout. Our Freestyle Group Training is a seamless mix of the latest gym equipment.</p>
                                                          <a href="#" class="btn btn-primary">Learn More</a>
                                                        </div>
                                                      </div>
                          </div>
                          <div class="col-sm-12">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="image/hardcore.jpg" style="width: 300px;height: 200px;" alt="Card image cap">
                                        <div class="card-body">
                                          <h5 class="card-title" style="color:red;"><b>SIGNATURE CLASSES</b></h5>
                                          <p class="card-text">Our Exclusive Signature Classes are designed around your body’s natural movement. You will increase strength, flexibility and all-round fitness.</p>
                                          <a href="#" class="btn btn-primary">Learn More</a>
                                        </div>
                                      </div>
                          </div>

                        </div>
                        <div class="col-sm-6">
                            
                            
                               
                                <h3 class="text-secondary" style="font-family:fantasy">Ask queston to our community and get a quick feedback</h3>
                                <div class="embed-responsive embed-responsive-16by9" style="height:700px;" >
                                        <iframe class="embed-responsive-item" src="community.php" ></iframe>
                                        </div>
                            
                           </div>

                    </div>

                </div>

            </div>
</section>


<hr>
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

     </html>