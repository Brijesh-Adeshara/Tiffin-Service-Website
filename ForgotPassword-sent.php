<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Forgot Password</title>
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
<h2 class="text-uppercase">Reset Password</h2>
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
<h3 class="text-center">We have Emailed you your password via your registered email.</h3>
<center>If you don't see a mail from us please check that you have entered the correct email address and also checked your spam folder</center>
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
<script>
$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "login.php";
    }, 10000);
});
</script>
</body>


</html>
