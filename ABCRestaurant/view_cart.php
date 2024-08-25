<!DOCTYPE html>
<html>
<head>
     <!-- basic -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- mobile metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title> Menu</title>
    <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.c
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="menu.php">Menu</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                     </li>
                     <li class="nav-item">
                     <a href="Book.php" class="btn btn-primary py-2 px-4">Book A Table</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link" href="signup.html">Sign in</a>
                 </li>
                 
                    <li class="nav-item">
                       <a class="nav-link" href="search.html"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
                 </ul>
              </div>
           </nav>
        </div>
     </div>
    
    <div class="col-md-12">
<?php 
echo $quantity=$_POST['quantity'];
echo $food_item=$_POST['food_item'];

?>
    </div>
	
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-3 col-sm-6">
                 <h3 class="useful_text">About</h3>
                 <p class="footer_text">Our goal is to create an unforgettable dining experience for every guest.Join us for a memorable dining experience...</p>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h3 class="useful_text">Menu</h3>
                 <div class="footer_menu">
                    <ul>
                    <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="menu.php">Menu</a></li>
                           <li><a href="gallery.html">Gallery</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="contact.php">Contact Us</a></li>
                           <li><a href="Book.php">Book a table</a></li>
                    </ul>
                 </div>
              </div>
              
              <div class="col-lg-3 col-sm-6">
                 <h1 class="useful_text">Contact Us</h1>
                 <div class="location_text">
                    <ul>
                       <li>
                          <a href="#">
                          <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address no:1,Sridhrmarama road,Colombo-3</span>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                          <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : +011-67788888</span>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                          <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : abcrestaurant@gmail.com</span>
                          </a>
                       </li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- footer section end -->
     
        
     
    
     <!-- Javascript files-->
     <script src="js/jquery.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/jquery-3.0.0.min.js"></script>
     <script src="js/plugin.js"></script>
     <!-- sidebar -->
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="js/custom.js"></script>     
  </body>
</html>
  <!-- footer section end -->


</body>
</html>