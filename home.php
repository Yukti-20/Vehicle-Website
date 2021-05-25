<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","feedback") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{

$comments = $con->real_escape_string($_POST['text']);
  //query to insert the variable data into the database
$sql="INSERT INTO feed_b (feed_bck) VALUES ('".$comments."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "";
}
?>







<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Vehicle Rental System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Vehicle Rental System" name="keywords">
        <meta content="Vehicle Rental System" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/styleh.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">

            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="home.php">
                                    <!--<h1>Housicle</h1>-->
                                     <img src="img/h3.jpeg" alt="Logo"> 
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="home.php" class="nav-item nav-link active">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                                <a href="feature.php" class="nav-item nav-link">Feature</a>
                              
                    
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Vehicles</a>
                                    <div class="dropdown-menu">
                                       <li> <a href="bicycle.html" class="dropdown-item">Bicycles</a></li>
                                        <li><a href="bike.html" class="dropdown-item">Bikes</a></li>
		                                <li><a href="car.html" class="dropdown-item">Cars</a></li>
		                                <li><a href="bus.html" class="dropdown-item">Buses</a></li>
                                    </div>
                                </div>
                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a href="login/login.php" class="btn">Get booking</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Make your trip enjoyable

</h1>
                            <p class="animated fadeInRight">You are welcome...</p>
                            <a class="btn animated fadeInUp" href="login/login.php">Get your booking now</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">make your drive best is our responsibility

</h1>
                            <p class="animated fadeInRight">You are welcome...</p>
                            <a class="btn animated fadeInUp" href="login/login.php">Get your booking now</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Experience best with us

</h1>
                            <p class="animated fadeInRight">You are welcome...</p>
                            <a class="btn animated fadeInUp" href="login/login.php">Get your booking now</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->
            
            
<!-- Top Feature Start-->
            <div class="feature-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="fa fa-bicycle" aria-hidden="true"></i>
                                <h3>Bicycle</h3>
                                <p><a href="bicycle.html">Spring metal</a></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="fa fa-motorcycle" aria-hidden="true"></i>
                               <h3>Bike</h3>
		<p >
 		<a href="bike.html">Brand new astral</a>
  </p>
		</div>
                               <!-- <p>Brand new astral</p>-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="fa fa-car" aria-hidden="true"></i>
                                <h3>Car</h3>
                                <p><a href="car.html">Dynamically agile</a></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="fa fa-bus" aria-hidden="true"></i>
                                <h3>Bus</h3>

                                <p><a href="bus.html">Cozy twin-engined</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Feature End-->
            
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>Housicle'</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Designed a dream with technology. Disappointing is not our job. We believe in providing non-stop fun.  So, drive to find the best way and be happy with the best ride. 
                                </p>
                                <p>
                                    Brightly designed vehicles and comfortably powerful. Every budget is taken care of. Hence, respecting your love and emotion, we take care of you like family. We give our best so that you can move safely and smoothly to your destination. Rewrite the rhythm for your life. We value you. 
                                </p>
                                <!--<a class="btn" href="">Learn More</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

   <!-- Service Start -->
<!-- 1 -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>More Features</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-h-square" aria-hidden="true"></i>
                                </div>
                                <h3>About Us</h3>
                                <p>
                                    For knowing more about us and our website click below.
                                </p>
                                <a class="btn" href="about.php">CLICK ME</a>
                            </div>
                        </div>
<!-- 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div>
                                <div>                                   
                                </div>                             
                            </div>
                        </div>
<!-- 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                </div>
                                <h3>Exclusive Offers</h3>
                                <p>
                                               For better price ,know our seasonal offers available.
                                </p>
                                <a class="btn" href="">OFFERS</a>
                            </div>
                        </div>
<!-- 4 -->
                          <div class="col-lg-4 col-md-6">
                            <div>
                                <div>                                   
                                </div>                             
                            </div>
                        </div>
<!-- 5 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                  <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                                <h3>Demo</h3>
                                <p>
                                   For better experience of our website take help of demo video provided.
                                </p>
                                <a class="btn" href="">DEMO</a>
                            </div>
                        </div>
<!-- 6 -->
                        <div class="col-lg-4 col-md-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
            
            
         <!-- Feature Start -->
<div class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-header">
                    <h2>Why Choose Us</h2>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <div class="feature-icon">
                            <i class="fas fa-rupee-sign"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <h3>Best Prices</h3>
                        <p>
                            We provide the best deals with our wide range of vehicles.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <h3>Efficiency & Trust</h3>
                        <p>
                             We have always maintained the trust of our customers with our efficient 
                             working strategies. 
                        </p>
                    </div>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <div class="feature-icon">
                            <i class="far fa-smile"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <h3>User Friendly</h3>
                        <p>
                            Our well organised system make it easy for our clients to locate different tools and options
                            and provides quick access to common features.
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="feature-img">
                    <img src="img/feature.jpg" alt="Feature">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

            
            
           <!-- Newsletter Start -->
<div class="newsletter">
    <div class="container">
        <div class="section-header">
            <h2>We would love to hear from you</h2>
        </div>
        <div class="form">
        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        
        <textarea name="text" class="form-control" placeholder="Write Your Review" required="required" ></textarea>
        
        <input class="btn" type="submit" name="submit" value="SUBMIT">
        </div>
       </form>
    </div>
</div>
<!-- Newsletter End -->

                        <!-- Footer Start -->
            <div class="footer">
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">HTML Codex</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/mainh.js"></script>
    </body>
</html>
