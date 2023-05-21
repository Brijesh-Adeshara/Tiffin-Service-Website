<?php 

session_start(); 
if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
}
?>
<?php
include 'conn.php';
if(isset($_POST['updatep']))
{
//    $name = $_POST['uname'];
//    $number = $_POST['user_mobile'];
//    $address = $_POST['message'];
//    $email = $_POST['user_email'];
    
    $uquery = "update users_tbl set user_name = '$_POST[uname]',user_mobileno = '$_POST[user_mobile]',user_address = '$_POST[message]',user_email = '$_POST[user_email]' where user_id='{$_SESSION['user_id']}'";
    $update = mysqli_query($connection, $uquery);
    
    if($update)
    {
        echo '<script>alert("Update Successful")</script>';
    }
    else{
        echo '<script>alert("Update Unsuccessful")</script>';
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:52:54 GMT -->
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- <script src="js/jquery.js"></script> -->
    
<title>Update Profile</title>
<meta name="author" content="Surjith S M">

<meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
<meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">

<script src="../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script><link rel="shortcut icon" href="img/favicon.ico">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/plugin.css">
<link rel="stylesheet" href="css/main.css">
<!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->

  <style>
        .error{
            color:red;
        }
    </style>

   
</head>
  <style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>
<style>
    #textarea1{
        resize: none;
    }
</style>
<style>
        .select {
            margin: 0px;
           background-color: #f3f1ed;
            color: black;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
            padding: 10px;
            width: 450px;
             height: 40px;
             border-radius: 0;
           border: medium!important;
     box-shadow: none!important;
     margin-bottom: 15px;
        font-size: 15px

        }
    </style>
<body>
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

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
<h2 class="text-uppercase">Account Details</h2>
<p></p>
</div>
</div>
</div>
</section>
<div class='content'>
<section class="shop-content">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="row shop-login">
<div class="col-md-6">
<div class="box-content">
<h3 class="text-center">Update Profile</h3>
<br>
<form action="#" id="form" method="post" enctype="multipart/form-data" class="logregform">
<div class="row">
<div class="form-group">
<div class="col-md-12">
<label>User Name</label>
<input type="text" name="uname"  onkeyup ="Validatestring(this)" class="required form-control" required>
<br/>
<label>Mobile Number</label>
<input type="text" name="user_mobile" onkeyup ="Validate(this)" class="required digits form-control" required>
<br/>
<label>Address</label>
<textarea id="textarea1" style="margin-bottom: 15px;" name="message" class="required form-control" required></textarea>
<br/>
<label>E-mail Address</label>
<input type="text" name="user_email" onkeyup ="ismail(this)" class="required email form-control" required>
<br/>
</div>
</div>
</div>
<div class="clearfix space20"></div>
<div class="row">
<div class="col-md-12">
<div class="space20"></div>
<button type="submit" class="btn btn-default pull-right" name="updatep">Update Profile</button>
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



<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/vendor/jquery-1.11.2.min.js"></script>

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
				
				uname: {
					required: true,
					minlength: 3
				},
                                                                                    item:{
                                                                                        required:true,
                                                                                        
                                                                                    },
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
        
                user_mobile: {
                            required: true,
                            minlength: 10,
                            maxlength: 10
                        },
                        
                      
                        
                        message:{
                            required: true,
                            minlength: 10,
                            maxlength:150
                        },
                        
			},
			messages: {
				
				uname: {
					required: "Please Enter Name",
					minlength: "Your name must consist of at least 3 characters"
				},
                user_mobile: {
                            required: "Please Enter Your Mobile no.",
                            minlength: "Enter Your 10 digit Mobile no. only",
                            maxlength: "Enter Your 10 digit Mobile no. only",
                        },
                       
                        
				user_password: {
					required: "Please Enter Password",
					minlength: "Your password must be at least 6 characters long"
				},
				confirm_password: {
					required: "Please Confirm Password",
					minlength: "Your password must be at least 6 characters long",
					equalTo: "Please enter the same password as above"
				},
                                
	      user_email: "Please enter a valid email address",
                          item: "Please select user type",
                
                message: {
                    required: "Please enter Address",
	minlength: "Your address must be atleast 10 characters",
                      maxlength: "Your address must not be more than 150 characters"
                }
                
                
              
       
				
			}
		});
          function isEmail(user_email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

        function Validate(no) {
                   no.value = no.value.replace(/[^ 0-9\n\r]+/g, '');
               }
               
               function Validatestring(no) {
                   no.value = no.value.replace(/[^ a-z A-Z\n\r]+/g, '');
               }

              
      
     </script>
     <script type="text/javascript">	
        function JSalert(){
            swal("Success!", "Your Profile is updated!", "success");
        }
    </script>
</body>

</html>
