<?php
session_start();
$message="";
?>

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
</head>
<body>
<?php
include './conn.php';
if(isset($_POST['submitbtn']))
{
    $email = mysqli_real_escape_string($connection, $_POST['user_email']);
    $emailquery="Select * from users_tbl where user_email='$email'";
    $query = mysqli_query($connection, $emailquery);
    $emailcount = mysqli_num_rows($query);
    if($emailcount){
        $userdata = mysqli_fetch_assoc($query);
        $username = $userdata['user_name'];
        $user_password = $userdata['user_password'];
        $subject = "Password Reset";
        $body = "Hi, $username . Your Password is $user_password";
        $sender = "From: tiffinserviceahmd@gmail.com";
        if(mail($email, $subject, $body, $sender)){
            $_SESSION['msg'] = "Please Check your email : $email";
            header('location:ForgotPassword-sent.php');
          
        }
        else{
        $message = '<div class="alert alert-warning" role="alert">Failed to send Email, Try again</div>';
        }
}
else{
    $message = '<div class="alert alert-warning" role="alert">No Email Found, Please Try Again </div>';
    }
}
?>

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
<h2 class="text-uppercase">Account</h2>
<p>Please login or signup to continue </p>
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
<h3 class="text-center">Forgot Password</h3>
<br>
<form id="form" method="post" enctype="multipart/form-data" class="logregform" >
<div class="row">
<div class="form-group">
<div class="col-md-12">
<?php echo $message; ?>
<br/>
</div>
<div class="col-md-12">
<label>E-mail Address</label>
<input type="text"  name="user_email" class="required email form-control" required>
<br/>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-6">
        <button type="submit" class="btn btn-default" name="submitbtn">Send My Password</button>
</div>
</div>
 </form>
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

</body>
</html>