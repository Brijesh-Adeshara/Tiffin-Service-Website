<?php 

session_start(); 
require './conn.php';
$userid = $_SESSION['user_id'];
if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
}
$query = mysqli_query($connection, "select * from users_tbl where user_id = $userid");
$result = mysqli_fetch_array($query);
if($_POST){
    $id = $_SESSION['user_id'];
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address =$_POST['message'];
    $currentdate = date('d-m-Y');
    $orderq = mysqli_query($connection, "insert into orders_tbl (user_id,user_name,order_date,order_status,mobile_number,delivery_address) values('{$id}','{$name}','{$currentdate}','Pending','{$mobile}','{$address}')") or die(mysqli_error($connection));
    $orderid = mysqli_insert_id($connection);
    foreach ($_SESSION['cart'] as $key => $value) {
        $productq = mysqli_query($connection, "select * from tiffins_tbl where tiffin_id ='{$value}'") or die(mysqli_error($connection));
        $row = mysqli_fetch_array($productq);
        $qty = $_SESSION['qtycart'][$key];
        $orderdetailsq = mysqli_query($connection, "insert into orders_details_tbl (order_id,tiffin_id,tiffin_name,quantity,rate) values ('{$orderid}','{$value}','{$row['tiffin_name']}','{$qty}','{$row['tiffin_price']}')") or die(mysqli_error($connection));            $finalamount = $row['tiffin_price'] * $qty;
        $paymentq = mysqli_query($connection,"insert into payment_tbl (user_id,order_id,order_amount,payment_status,payment_date) values('{$id}','{$orderid}','{$finalamount}','Pending','{$currentdate}')") or die(mysqli_error($connection));
    }
    unset($_SESSION['cart']);
    unset($_SESSION['count']);
    unset($_SESSION['qtycart']);
    echo '<script>alert("Your Order has been placed")</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:53:11 GMT -->
<head>
<meta charset="utf-8">
<title>Checkout</title>
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
    <style>
    #textarea1{
        resize: none;
    }
</style>
</head>

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
<h2 class="text-uppercase">Checkout</h2>
<p>Enter your address and get these items in your doorstep</p>
</div>
</div>
</div>
</section>

<section class="shop-content">
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="row">
<div class="col-md-6">
<div class="billing-details">
<h3 class="text-left">Billing Details</h3>
<h4 class="text-left">Please Review your Details</h4>
<form id="form" method="post" enctype="multipart/form-data">
<div class="clearfix space20"></div>
<div class="row">
<div class="col-md-6">
<label>Full Name </label>
<input class="form-control" onKeyPress="return ValidateAlpha(event);" name="uname" placeholder="Enter Name" value="<?php echo "{$result['user_name']}"?>" type="text" style="width: 457px;">
</div>
</div>
<div class="clearfix space20"></div>
<label>Email Address </label>
<input class="form-control" name="email" placeholder="Enter Email Address" value="<?php echo "{$result['user_email']}"?>" type="text">
<div class="clearfix space20"></div>
<label>Phone </label>
<input class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))" name="mobile" id="billing_phone" placeholder="Enter Mobile Number" value="<?php echo "{$result['user_mobileno']}"?>" type="text">
<label>Address</label>
<textarea id="textarea1" style="margin-bottom: 15px;" name="message" placeholder="Enter Address" class="required form-control"><?php echo "{$result['user_address']}"?></textarea>
<input name="checkboxG2" id="check" class="css-checkbox" type="checkbox"/><span style="font-size: 15px;">I've read and accept the<a href="terms_conditions.php"> terms &amp; conditions</a></span>
<br>
<br>
<input type="submit" id="btncheck" class="btn btn-default btn-lg" value='Order Now'>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/jquery-3.1.1.js"></script>    
<script src="js/jquery.validate.js"></script>
<script>
         $(document).ready(function() {
           $('#check').change(function () {
            $('#btncheck').prop("disabled", !this.checked);
            }).change();
         });
      </script>
<script>
    function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
    </script>
    <script type="text/javascript">
        document.getElementById("check").checked = false;
        </script>
 <script>

     
		$("#form").validate({
			rules: {
				
				uname: {
					required: true,
					minlength: 3
				},
                                                                                    
				
				email: {
					required: true,
                                      
					email: true
				},
        
                                mobile: {
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
                mobile: {
                            required: "Please Enter Your Mobile no.",
                            minlength: "Enter Your 10 digit Mobile no. only",
                            maxlength: "Enter Your 10 digit Mobile no. only",
                        },
                       
                        
				
                                
	      email: "Please enter a valid email address",
                          
                
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
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:53:11 GMT -->
</html>
