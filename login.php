<html>
	<head>
	<meta charset="utf-8">
    <title>iCREAM - Ice Cream Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
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
      <style>
		.container {
  padding: 10px;
  font-size: 15px;
  border-radius: 30px;
  

}
         .fa-solid{

			height: 50px;
			font-size: 50px;
			margin-left: 10px;
		 }
		 .moon{
font-size: 30px;
font-weight: 600;
margin-bottom: 40px;
color: #62C3E7;
text-align: center;
	   }
	   div.content{
            background-color: none;
			-webkit-backdrop-filter: blur(5px);
			backdrop-filter: blur(5px);
			filter: hue-rotate(-0.25turn);
			padding: 30px;
			margin: 90px;
			font-weight: bold;
			border-radius: 5px;

	   } 
		</style>

	</head>
<?php include "header.php"; ?> 
<body>


	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1  class="moon">Login</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<div class="background">
		<div class="content">
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<h1  class="moon">Login </h1>
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
<form action="loginck.php" method="post">

  <table  border="0" align="center" cellpadding="5" cellspacing="7">
	
	        <tr align="center">	
		     <td><i class="fa-solid fa-user"></i> <br>
		      <a href="registration.php"> New User?</a></td>
		 </tr>
		<tr>

        <td> <input type="text" name="uid" placeholder="Enter Your User ID" class="form-control"> <br>  </td>
		
		</tr>

		<tr>
    
 <td> <input type="Password" name="pass" placeholder="Enter Your Password" class="form-control"> <br>   </td>
		
		</tr>

		<tr align="center">	    
 <td > <input type="submit" name="cart.php" value="Login Now" class="btn btn-primary"> </td> 
</tr>
<tr>
	<td>

	<div class="container" style="background-color:#f1f1f1">
    
    <span class="psw">Forgot <a href="forget password.php">password?</a></span>
  </div>
	</td>
  </tr>
               
              
</form>
		</table>			




				</div>
			</div>
		
		</div>
	</div>
	</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>
	</html>