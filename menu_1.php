<?php
session_start();
$msg = "";
if(isset($_POST['submit']))
{
    include 'conn.php';

    $email = mysqli_real_escape_string($connection,$_POST['user_email']);
    $password = ($_POST['user_password']);

    $sql = "SELECT type_id, user_id, user_name, user_email FROM users_tbl WHERE user_email = '$email' AND user_password = '$password'";
    $result = mysqli_query($connection,$sql) or die('Query Failed');
    
    if(mysqli_num_rows($result) > 0)
    {
       while($row = mysqli_fetch_assoc($result))
       {
         session_start(); 
         $_SESSION["username"] = $row['user_name'];
         $_SESSION["user_id"] = $row['user_id'];
         if($row['type_id']==1)
         {
             header("Location:../TiffinSeller/Welcome.php");
         }
         else if($row['type_id']==3){
             header("Location:../AdminPanel/Welcome.php");
         }
         else{
             header('location:index.php');
         }
         
       }
    }
         
    else
    {
        $msg = '<div class="alert alert-danger" role="alert">
						Invalid Email Or Password </div> ';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:52:54 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Login</title>
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
                                <h2 class="text-uppercase">Account</h2>
                                <p>Please login or signup to continue </p>
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
                                                <h3 class="text-center">Login</h3>
                                                <br>
                                                <form action="<?php $_SERVER['PHP_SELF']; ?>" id="form" method="post" enctype="multipart/form-data" class="logregform" >
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <?php echo $msg; ?>
                                                                <br/>
                                                                <label>E-mail Address</label>
                                                                <input type="text" name="user_email" class="required email form-control" required value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie']; }?>">
                                                                <br/>
                                                                <label>Password</label>
                                                                <input type="password" id="user_password" name="user_password" class="required form-control" required value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie']; }?>"><br>
                                                                <a class="pull-left" href="ForgotPassword-link.php">(Forgot Password?)</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span class="remember-box checkbox">
                                                                <label for="rememberme">
                                                                    <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                                                                </label>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="submit" name="submit" class="btn btn-default pull-right">Login</button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <br/>
                                                            <button type="button" class="btn btn-default pull-right"  onclick="window.open('registration.php', '_self');">Not A User Yet?</button>
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
        <!--<script src="jquery-3.6.0.js" type="text/javascript"></script>
        <script src="jquery.validate.js" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                $("#myform").validate();
            });
            </script>-->
        <script>
           // validate signup form on keyup and submit

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

               },
               messages: {

                   user_password: {
                       required: "Please Enter Password",
                       minlength: "Your password must be at least 6 characters long"
                   },
       //				confirm_password: {
       //					required: "Please Confirm Password",
       //					minlength: "Your password must be at least 6 characters long",
       //					equalTo: "Please enter the same password as above"
       //				},

                   user_email: "Please enter a valid email address",

               }
           });



        </script>

    </body>

    <!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:52:54 GMT -->
</html>
