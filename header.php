<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Ice cream delivery system</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
     

     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="https://www.havmor.com/faq">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="https://www.havmor.com/awards">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="https://www.havmor.com/terms-of-use">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://www.facebook.com/HavmorIcecreams">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="https://twitter.com/HavmorIceCreams">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.linkedin.com/company/havmor-ice-cream-ltd/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.instagram.com/havmoricecreams/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="https://www.youtube.com/user/HAVMORICECREAM">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-2" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">I</span>CREAM</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="product.php" class="nav-item nav-link">Product</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                    </div>
                    <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">I</span>CREAM</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        
                        
					 <a href="cart.php" class="nav-item nav-link">Cart</a>&nbsp; 
						
                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <?php
					if(isset($_SESSION['uid']))
					{
					?>
                        <a href="#" class="nav-item nav-link" style="color:;"> Hi <?php echo $_SESSION['uid']; ?></a>
                        <a href="logout.php" class="nav-item nav-link" style="color:red;"> Logout </a>
                        <?php	
					}
					else
					{	
					?>
                    <a href="registration.php" class="nav-item nav-link">Sign Up</a><a href="login.php" class="nav-item nav-link">Login</a>
					<?php
					}
					?>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
					
					 
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li> -->
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li> -->
						<!--<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
					
	<!-- End header -->
