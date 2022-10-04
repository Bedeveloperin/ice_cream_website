<!DOCTYPE html>
<html lang="en">

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

    <!-- Customized Bootstrap Stylesheet -->
    <style>
       .contact-box{
		
        width: 25%;
        margin: 150px;
        padding: 100px
               

	   } 
	   
             

	   
	   .moon{
		font-size: 30px;
  font-weight: 600;
  margin-bottom: 20px;
  color: #62C3E7;
  text-align: center;
	   }
.custom-btn{
background-color: #4dccc6;
margin: 30px;
background-image: linear-gradient(315deg, #4dccc6 0%, #96e4df 74%);
align-items: center;
line-height: 42px;
padding:6px;
border: none;
color:white;
}
.custom-btn:hover{
	background-color: #89d8d3;
background-image: linear-gradient(315deg, #89d8d3 0%, #03c8a8 74%);

}
@media screen and (max-width:1000px){
	.first {
         text-align: center;
     }
  
         .first h4::after {
             left: 40%;
         }

}
@media screen and (max-width:1000px)
{
	.third {
         text-align: center;
     }
  
         .third h4::after {
             left: 40% !important;
         }
}
div.contact-box{
    background-color: none;
			-webkit-backdrop-filter: blur(5px);
			backdrop-filter: blur(5px);
			filter: hue-rotate(-0.25turn);
			padding: 40px;
			margin-left: 600px;
			font-weight: bold;
			border-radius: 5px;
			

}
	</style>
</head>
<?php include "header.php"; ?> 
<body>
	
	
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container text-center">
		<h1 class="moon"> REGISTRATION US </h1>
			<div class="row">
				<div class="col-lg-12">
      <table>
     <form action="" method="POST"> 

  <tr align="center">
  	<td>
  <input type="text" name="uid" value="" placeholder="Enter user id" required=""  class="form-control"> <br>  </td>
    </tr>
   
   <tr align="center">	
 <td> <input type="password" name="pass" value="" placeholder=" Enter Your password" required=""  class="form-control  align:center;"> <br> </td>
   </tr>

  <tr align="center">  
 <td > <input type="email" name="email" value="" placeholder="Enter Your Email Address" required=""  class="form-control">  <br> </td>
</tr>
         
      <tr>   
<td> <input type="submit" name="sb" value="Registration Now" class="btn btn-primary">  <br> </td>
   </tr>
    	
    </form>
 </table>

					<?php
					if(isset($_POST['sb']))
					{
						
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						include "connect.php";
						mysqli_query($con,"insert into registration(userid, password,email) values('$uid','$pass','$email')");
						echo "<script>alert('Registration SuccessFully');</script>";
						echo "<center>Registration SuccessFully ... Click to <a href='login.php'>login</a></center>";
					}	

					?>





				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>
</body>
</html>