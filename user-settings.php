<?php
session_start();
include 'conn.php';
$msg = "";
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

if ($_POST) {
    $old_pass = mysqli_real_escape_string($connection, $_POST['old_password']);
    $new_pass = mysqli_real_escape_string($connection, $_POST['user_password']);
    $confirm_pass = mysqli_real_escape_string($connection, $_POST['confirm_password']);

    $oldpassquery = mysqli_query($connection, "select user_password from users_tbl where user_id='{$_SESSION['user_id']}'") or die(mysqli_error($connection));
    $oldpassfromdb = mysqli_fetch_array($oldpassquery);
    if ($oldpassfromdb['user_password'] == $old_pass) {
        if ($new_pass == $confirm_pass) {
            if ($old_pass == $new_pass) {
                $msg = "<div class='alert alert-warning' role='alert'> New and old Password must be different </div>";
            } else {
                $updateq = mysqli_query($connection, "update users_tbl set user_password='{$new_pass}' where user_id='{$_SESSION['user_id']}'") or die(mysqli_error($connection));
                if ($updateq) {
                    $msg = "<div class='alert alert-success' role='alert'>Password change sucessfully</div>";
                }
            }
        } else {
            $msg = '<div class="alert alert-warning" role="alert"> New and confirm Password must be same </div>';
        }
    } else {
        $msg = "<div class='alert alert-warning' role='alert'> Old Password doesn't match </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Account Settings</title>
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
<h2 class="text-uppercase">Account Settings</h2>
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
<h3 class="text-center">Change Password</h3>
<br>
<form action="#" id="form" method="post" enctype="multipart/form-data" class="logregform" >
<div class="row">
<div class="form-group">
<div class="col-md-12">
<?php echo $msg; ?>
<br/>
</div>
<div class="col-md-12">
<label>Enter old Password</label>
<input type="password" id="old_password" name="old_password" class="required form-control" required>
<br/>
</div>
<div class="col-md-12">
<label>Enter New Password</label>
<input type="password" id="user_password" name="user_password" class="required form-control" required>
<br/>
</div>
<div class="col-md-12">
<label>Confirm New Password</label>
<input type="password" id="confirm_password"  name="confirm_password" class="required form-control" required>
<br/>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-6">
        <button type="submit" class="btn btn-default">Change Password</button>
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
				
				old_password:{
                                    required: true,
                                    minlength: 6
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
//            
                        
			},
			messages: {
				
				old_password:{
                                    required: "Please Enter Old Password",
				minlength: "Your password must be at least 6 characters long"
                                },
                                confirm_password:{
                                    required: "Please Confirm New Password",
				minlength: "Your password must be at least 6 characters long",
                                equalTo: "Please enter the same password as above"
                                },
            
                        
				user_password: {
					required: "Please Enter New Password",
					minlength: "Your password must be at least 6 characters long"
				},
                                

	      user_email: "Please enter a valid email address",
                
           	
			}
		});
      
              
      
     </script>
<!--<script type="text/javascript">	
        function JSalert(){
            swal("Success!", "Your Password is Changed", "success");
        }
        
    </script>-->
</body>


</html>
