<?php 

session_start(); 
if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Terms And Conditions</title>
<meta name="author" content="Surjith S M">

<meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
<meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">

<script src="../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script><link rel="shortcut icon" href="img/favicon.ico">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/plugin.css">
<link rel="stylesheet" href="css/main.css">

  <style>
        .error{
            color:red;
        }
    </style>
</head>
<style>
    #textarea1{
        resize: none;
    }
</style>
<style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>
<body>


<div class="preloder animated">
<div class="scoket">
<img src="img/preloader.svg" alt="" />
</div>
</div>
<div class="body">
<div class="main-wrapper">

<?php
include './themefolder/header.php';
?>

<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Terms And Conditions</h2>
<p></p>
</div>
</div>
</div>
</section>
<div class="content">
<section class="shop-content">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="row shop-login">
<div class="col-md-6">
<div class="box-content">
<h3 class="text-center">Terms Of Service</h3>
<h4 class="text-center">The Buyer agrees and acknowledges that We shall not be responsible for:</h4><br>

1.  The services or goods provided by the TiffinSeller including but not limited to serving of food Orders suiting your requirements and taste.<br>
  
  2.   The availability or unavailability of certain items on the menu.<br>

  3.  The TiffinSeller serving the incorrect Orders. <br>

   4.  Product liability of goods provided by TiffinSellers


</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>


<?php
include './themefolder/footer.php';
?>
</div>
</div>



<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/jquery.flexslider-min.js"></script>
<script src="js/vendor/spectragram.js"></script>
<script src="js/vendor/owl.carousel.min.js"></script>
<script src="js/vendor/velocity.min.js"></script>
<script src="js/vendor/velocity.ui.min.js"></script>
<script src="js/vendor/bootstrap-datepicker.min.js"></script>
<script src="js/vendor/bootstrap-clockpicker.min.js"></script>
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/wow.min.js"></script>
<script src="js/animation.js"></script>
<script src="js/vendor/vegas/vegas.min.js"></script>
<script src="js/vendor/jquery.mb.YTPlayer.js"></script>
<script src="js/vendor/jquery.stellar.js"></script>
<script src="js/main.js"></script>
<script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
<script src="js/vendor/mc/main.js"></script>
<script src="js/jquery-3.1.1.js"></script>    
<script src="js/jquery.validate.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <script>
         
     
		$("#form").validate({
			rules: {
				
				
				user_password: {
					required: true,
					minlength: 6
				},
				confirm_password: {
					required: true,
					minlength: 6,
					equalTo: "#user_password"
				},
                                                                               user_email: {
					required: true,
                                      
					email: true
				},
//            
                        
			},
			messages: {
				
				
            
                        
				user_password: {
					required: "Please Enter Password",
					minlength: "Your password must be at least 6 characters long"
				},
                                

	      user_email: "Please enter a valid email address",
                
           	
			}
		});
      
              
      
     </script>
<script type="text/javascript">	
        function JSalert(){
            swal("Success!", "Your password is sent to your E-Mail!", "success");
        }
    </script>
</body>


</html>
