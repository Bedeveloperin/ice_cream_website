<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM - Ice Cream Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
</head>

<body>
    <?php session_start(); ?>
    <?php include "header.php"; ?>

    <!-- Start slides -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="boostrap/ice11.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Traditional Ice Cream Since 1950</h1>
                            <a href="About.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="boostrap/HD-wallpaper-ice-cream-cool-food-yummy-entertainment-fun - Copy - Copy.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Made From Our Own Organic Milk</h1>
                            <a href="About.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- End slides -->
    <!-- About Start -->
    <h1>Welcome To <span>Ice Cream Parlour</span></h1>
    <h4 class="section-title position-relative text-center mb-5">Little Story</h4>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Traditional & Delicious Ice Cream Since 1950</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">‘Havmor’ is another Indian dessert Delivery</h5>
                    <p> It is concentrated on serving surface-driven little group
                        frozen yogurts with a recharged consideration regarding
                        flavor and sense of taste. Proprietor and originator
                        build up every formula explicitly for every
                        individual flavor</p>
                    <a href="About.php" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="boostrap/Collection-of-delicious-ice-creams-vector-PNG.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>Ice cream is a sweetened frozen food typically eaten as a snack or dessert</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Viscosity</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Density</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i> Ice cream awareness</h5>
                    <a href="About.php" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="boostrap/ice3.jpg" style="object-fit: cover;">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0"><i class="fa-solid fa-indian-rupee-sign"></i>199</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Chocolate Ice Cream</h3>
                    <p class="text-white mb-4">Chocolate ice cream is a flavour of ice cream
                        which is the second most common flavour of ice cream, after vanilla.
                        Chocolate ice cream is made by blending in cocoa powder in along with
                        the eggs (optional), cream, vanilla and sugar used to make ice
                        cream.</p>
                    <a href="login.php" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->




    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">

                    <span class="lead">Ice Cream</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    <!-- Start Menu -->
    <div class="menu-box" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Special Menu</h2>
                        <p>Enjoy the new Tasty</p>
                    </div>
                </div>
            </div>

            <div class="row inner-menu-box">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="login.php" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>

                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"> Cup ice cream</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Cone ice cream</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"> Pastry</a>

                        <a class="nav-link" id="v-pills-tava-tab" data-toggle="pill" href="#v-pills-tava" role="tab" aria-controls="v-pills-tava" aria-selected="false">Cup cack</a>
                    </div>
                </div>

                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <?php include "connect.php";
                                $s = mysqli_query($con, "select * from menu");
                                while ($r = mysqli_fetch_array($s)) {
                                ?>
                                    <div class="col-lg-4 col-md-6 special-grid drinks">
                                        <div class="gallery-single fix">
                                            <img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                                            <div class="why-text">
                                                <h4><?php echo $r['title']; ?></h4>
                                                <p><?php echo $r['description']; ?></p>
                                                <p>Rs <?php echo $r['price']; ?> /-</p>
                                                <h5 align="center">
                                                    <?php if (isset($_SESSION['uid'])) {
                                                    ?>
                                                        <a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                                                </h5>

                                            <?php
                                                    } else {
                                            ?>
                                                <a href="login.php">Add Cart</a>
                                            <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row">


                                <?php include "connect.php";
                                $s = mysqli_query($con, "select * from menu where category='kathiyawadi'");
                                while ($r = mysqli_fetch_array($s)) {
                                ?>

                                    <div class="col-lg-4 col-md-6 special-grid drinks">
                                        <div class="gallery-single fix">
                                            <img src="boostrap/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                                            <div class="why-text">
                                                <h4><?php echo $r['title']; ?></h4>
                                                <p><?php echo $r['description']; ?></p>
                                                <h5>Rs <?php echo $r['price']; ?> /-</h5>
                                                <h5 align="center">
                                                    <?php if (isset($_SESSION['uid'])) {
                                                    ?>
                                                        <a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                                                </h5>

                                            <?php
                                                    } else {
                                            ?>
                                                <a href="login.php">Add Cart</a>
                                            <?php } ?>




                                            </h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row">

                                <?php include "connect.php";
                                $s = mysqli_query($con, "select * from menu where category='rajsthani'");
                                while ($r = mysqli_fetch_array($s)) {
                                ?>
                                    <div class="col-lg-4 col-md-6 special-grid drinks">
                                        <div class="gallery-single fix">
                                            <img src="boostrap/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                                            <div class="why-text">
                                                <h4><?php echo $r['title']; ?></h4>
                                                <p><?php echo $r['description']; ?></p>
                                                <h5>Rs <?php echo $r['price']; ?> /-</h5>
                                                <h5 align="center">
                                                    <?php if (isset($_SESSION['uid'])) {
                                                    ?>
                                                        <a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                                                </h5>

                                            <?php
                                                    } else {
                                            ?>
                                                <a href="login.php">Add Cart</a>
                                            <?php } ?>


                                            </h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- End Menu -->

    <!-- Start Gallery -->
    <div class="gallery-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Gallery</h2>

                    </div>
                </div>
            </div>
            <!-- Portfolio Start -->
            <div class="container-fluid my-5 py-5 px-0">
                <div class="row justify-content-center m-0">
                    <div class="col-lg-5">
                        <h1 class="section-title position-relative text-center mb-5">Delicious ice cream Pictures for ice cream Parlour Listed Here </h1>
                    </div>
                </div>
                <div class="row m-0 portfolio-container">
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="boostrap/ice16.jpg" alt="">
                            <a class="portfolio-btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="boostrap/ice15.jpg" alt="">
                            <a class="portfolio-btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="boostrap/ice14.jpg" alt="">
                            <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="boostrap/ice13.jpg" alt="">
                            <a class="portfolio-btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="boostrap/ice12.jpg" alt="">
                            <a class="portfolio-btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="boostrap/ice10.jpg" alt="">
                            <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio End -->

            <?php
            include "connect.php";
            $s = mysqli_query($con, "select * from gallery order by id desc limit 1");
            while ($r = mysqli_fetch_array($s)) {
            ?>
                <!--Portfolio 2 start-->
                <div class="container-fluid my-5 py-5 px-0">
                    <div class="row justify-content-center m-0">
                        <div class="col-lg-5">
                            <h1 class="section-tipositiontle -relative text-center mb-5">Delicious Pastry Pictures for ice cream Parlour Listed Here </h1>
                        </div>
                    </div>
                    <div class="row m-0 portfolio-container">
                        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="boostrap/ice cream 56.png" alt="">
                                <a class="portfolio-btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="boostrap/icecak3.jpg" alt="">
                                <a class="portfolio-btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="boostrap/icecak8.jpg" alt="">
                                <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="boostrap/icecak4.jpg" alt="">
                                <a class="portfolio-btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="boostrap/pastry.jpg" alt="">
                                <a class="portfolio-btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="boostrap/icecak7.jpg" alt="">
                                <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Portfolio 2 end-->


                <a class="lightbox" href="<?php echo "admin/" . $r['image']; ?>">
                    <img class="img-fluid" src="<?php echo "admin/" . $r['image']; ?>" alt="Gallery Images" style="width: 350px; height: 250px;">

                </a>
        </div>
    <?php } ?>
    </div>
    </div>
    </div>
    </div>
    <!-- End Gallery -->




    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center  mb-10">Best Services We Provide For Our Clients</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="boostrap/ice4.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Quality Maintain</h5>
                                <p>Quality ice cream should generally be smooth and soft.</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="boostrap/ice5.png" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Individual Approach</h5>
                                <p>A smart approach and increasing potential for delivery ice cream</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="boostrap/ice6.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Celebration Ice Cream</h5>
                                <p>A fun ice cream pie layered with chocolate cookies is perfect
                                    for any celebration.</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                                
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="boostrap/ice7.png" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Delivery To Any Point</h5>
                                <p>You can ship ice cream locally and internationally under the right conditions</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Experienced & Most Famous Ice Cream Chefs</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="boostrap/chef1.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="boostrap/chef 2.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="boostrap/chef 3.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="boostrap/chef 4.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <?php include "connect.php";
    $s = mysqli_query($con, "select * from review  limit 4");
    while ($r = mysqli_fetch_array($s)) {
    ?>
        <div class="carousel-item text-center ">
            <div class="img-box p-1 border rounded-circle m-auto">
                <img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
            </div>
            <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">
                    <?php echo $r['name']; ?>
                </strong></h5>
            <h6 class="text-dark m-0">Review : <?php echo $r['review']; ?></h6>
            <p class="m-0 pt-3">
                <?php echo $r['description']; ?>
            </p>
        </div>
    <?php } ?>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Clients Say About Our Famous Ice Cream</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Amazing organic ice
                                cream flavors can be found at Havmor
                                Ceremony in New Delhi such as Wild berry
                                Chocolate Crisp</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-1.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">We found the fanciest ice
                                 cream shop in the world! Full of gold sparkles and 
                                 exquisite toppings, Havmor in India is the fashion
                                  spot for ice cream! Best ice cream in New Delhi,
                                   India </h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Merry Christmas Eve! See where
                                 to find the best Ice Cream and Sweet Treats at the 
                                 Havmor. See the best finds at the Festival
                                  of Holidays 2022, only a few more days left,
                                   don’t miss out!</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Customer Reviews -->
    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>