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
.conta{
	max-width: 600px;
        width: 100;
        margin: 50px auto;
         padding: 30px
}
.contact{
	width: 100%;
  margin: 60px;
  outline: none;
  font-size: 15px;
  padding: 15px 20px;
  border-radius: 3px;
  transition: all 0.3s ease;

}
.Box-shadow{
	margin-left: 500px;
	width: 650px;
  height: 60vh;
  box-shadow: 
    0 2px 2px rgba(0,0,0,0.1),
    0 4px 4px rgba(0,0,0,0.1),
    0 6px 6px rgba(0,0,0,0.1),
    0 8px 8px rgba(0,0,0,0.1);
  background: #F195B2;
  border-radius: 10px;

}
/* .online{
  margin-right: 10px;
  pading: 20px;
} */


		</style>
</head>
<body>
<?php session_start();
include "header.php";
?>

<div class="conta"></div>
<div>
		<div>
		
<?php include  "connect.php"; ?>
<div class="Box-shadow">
	<form class="contact" action="order.php" method="post">

		<table>
          <tr>
			<th> <h3>Fill up details to deliver your item</h3> </th>
		<br>
            </tr>
			
			    <tr>

			    	<td>  Enter your name  <br>
			        <input type="text" name="nm" placeholder="Enter your name"  required="" pattern="[a-z,A-Z]*"></td>
			    		


			    </tr>

			    <tr>

          <div>
</div>
			    	<td >   Enter Mobile no <br>
			        <input type="no" name="mo" placeholder="Enter Mobile no"  required="" pattern="\d{10}"></td>
			    </tr>
          

			    <tr>
			    	<td>   Enter Email address <br>
			        <input type="Email" name="em" placeholder="Enter email address"></td>
			    </tr>
         
          
          <br> <br>

                <tr>
                	<td> Enter address <br>
                 <input type="text" name="ad" placeholder="enter your address">
                </tr>	

                <tr>
                
                  
                	<td colspan="4" > <input type="submit" name=""value="cash on delivery" class="btn btn-info"> </td>
                  
                </tr>
                

                  
                
                </table>
       
			</form>
      
    
                <div class="online py-1 px-5">	<a href="payment.php"> <input type="submit" value="Online Payment" class="btn btn-info">
</a></div>

                

                  
          


</div>
		           <br> <br>



	</div>
</div>


<?php include "footer.php"; ?>
</body>
</html>