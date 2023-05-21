<?php 

session_start(); 
require './conn.php';
$tiffinsellerselectq = mysqli_query($connection, "select * from users_tbl where type_id=1") or die(mysqli_error($connection));
$tiffinselectq = mysqli_query($connection, "select * from tiffins_tbl") or die(mysqli_error($connection));
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/menu_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:52:48 GMT -->
<head>
<meta charset="utf-8">
<title>Categories</title>
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
<h2 class="text-uppercase">Tiffin Sellers</h2>
<p></p>
</div>
</div>
</div>
</section>
<section class="menu space60">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1>Popular Tiffin Sellers<small>Tiffin Sellers Everyone Loves</small></h1>
</div>
</div>
</div>
<div class="food-menu wow fadeInUp">
<div class="row menu-items">
<?php
//if(isset($_GET['userid']))
//{
//    $tiffinid = $_GET['userid'];
//    $tiffinselectq = mysqli_query($connection, "select * from tiffins_tbl where user_id ='{$tiffinid}' ") or die(mysqli_error($connection));
//
//}
//else{
//    $tiffinselectq = mysqli_query($connection, "select * from tiffins_tbl") or die(mysqli_error($connection));
//
//}
while($productrow = mysqli_fetch_array($tiffinsellerselectq))
{
    echo '<div class="menu-item col-sm-6 col-xs-12">';
    echo '<div class="clearfix menu-wrapper">';
    echo "<h4><a href='menu.php?userid={$productrow['user_id']}'>".$productrow['user_name']."</a></h4>";
    echo '<div class="dotted-bg"></div>';
    echo '</div>';
    echo '</div>';
}
?>
</div>
<!--<div class="row menu-items3">
<?php
    while ($productrow = mysqli_fetch_array($tiffinselectq))
    {
        echo '<div class="menu-item3 col-sm-6 col-xs-12 starter dinner desserts">';
        echo "<img src='UPLOAD/{$productrow['tiffin_image']}' class='img-responsive' alt='' />";
        echo '<div class="menu-wrapper">';
        echo '<h4>'.$productrow['tiffin_name'].'</h4>';
        if(isset($_SESSION['user_id']))
        {
            echo '<input type="submit" class="btn btn-success" id="btn-order" value="Add to cart">';
        }
        echo '<span class="price">₹'.$productrow['tiffin_price'].'</span>';
        echo '<div class="dotted-bg"></div>';
        echo '<p>'.$productrow['tiffin_items'].'</p>';
        echo '</div>';
        echo '</div>';
    }
?>    
</div>-->
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
<script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("toggle");
  var z = document.getElementById("hidebutton");
  if (x.style.visibility === 'hidden') {
    x.style.visibility = 'visible';
    z.style.display = 'none';
  } else {
    x.style.visibility === 'hidden';
  }
}
    </script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/menu_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:52:48 GMT -->
</html>


