<?php session_start();
 require './conn.php';
if(isset($_POST['submit']))
{
    $string= mysqli_real_escape_string($connection, $_POST['search']);
    $sql = "select * from tiffins_tbl where tiffin_name like '%$string%' ";
    $result = mysqli_query($connection, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:51:47 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
        <link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

<title>Tiffin Service</title>
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


<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1530003103982991');
    fbq('track', "PageView");
    </script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1530003103982991&amp;ev=PageView&amp;noscript=1" /></noscript>

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

<section class="home">
<div class="tittle-block">
<div class="logo">
<a href="index.php">
<!--    <img src="img/centre-logo.png" alt="logo">-->
</a>
</div>
<h1>DELICIOUS Tiffins</h1>
<h4 style="color:white;">food is for eating and good food is to be enjoyed...</h4>

 </div>
    <div class="wrapper">
  <div class="search_box">
      <form method="get">
      <input type="text" name="search" placeholder="Search For Tiffinseller Or Tiffins">
      <a href='Category.php'><i class="fas fa-search"></i></a>
<!--      <input type='submit' name='submit' value="Search">-->
      </form>
  </div>
</div>
    
</section>

<section class="about" id="about">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1>Tiffin Service<small>A little about our Website</small></h1>
</div>
</div>
</div>
<div class="row wow fadeInUp">
<div class="col-md-4">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 hidden-sm about-photo">
<div class="image-thumb">
<img src="img/img1.jpg" data-mfp-src="img/img1.jpg" class="img-responsive" alt="logo">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 about-photo hidden-xs">
    <img src="img/img2.jpg" data-mfp-src="img/fullImages/pic2.jpg" class="img-responsive" alt="logo">
</div>
<div class="col-sm-6 about-photo hidden-xs">
    <img src="img/img3.jpg" data-mfp-src="img/fullImages/pic3.jpg" class="img-responsive" alt="logo">
</div>
</div>
</div>
</div>
<div class="col-md-8">
<p>
Tiffin Service is a website where all TiffinSeller are Registered in this website and user can order their Tiffins From multiple TiffinSellers so in this website user can order their tiffin from their favourite Tiffin Sellers 
</p>
<p> Tiffin Service is a website where user can order their tiffins and they get their tiffins quickly and safely. and user can also give ratings to tiffinsellers and give feedback also.</p>
<br>


</div>
</div>
</div>
</section>

<section class="special">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1 class="white">today's specials</h1>
</div>
</div>
</div>
<div class="row wow fadeInUp">
<div class="col-md-offset-1 col-md-10">
<div class="flexslider special-slider">
<ul class="slides">
<li>
<div class="slider-img">
    <img src="img/3_img.jpg" alt="" />
</div>
<div class="slider-content">
<div class="page-header">
    <h1>Gujarati Thali &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ₹99<small>Roti (6 pcs)+ 2 sabji + Rice + Dal.</small></h1>
</div>
<?php 
if(isset($_SESSION['user_id']))
{
echo '<a class="btn btn-default" href="viewcart.php" role="button">Add to cart</a>';
}
?>
</div>
</li>
<li>
<div class="slider-img">
    <img src="img/2_img.jpg" alt="" />
</div>
<div class="slider-content">
<div class="page-header">
<h1>Jain Gujarati Thali &nbsp; &nbsp; &nbsp; &nbsp;  ₹99<small>Roti (6 pcs) +2 sabji + Rice + Dal</small></h1>
</div>
<?php 
if(isset($_SESSION['user_id']))
{
echo '<a class="btn btn-default" href="viewcart.php" role="button">Add to cart</a>';
}
?>
</div>
</li>
<li>
<div class="slider-img">
    <img src="img/gujarati-thali-contains-different-kinds-dishes-which-served-meal-38492466.jpg" alt="" />
</div>
<div class="slider-content">
<div class="page-header">
<h1>Special Gujarati Thali &nbsp; &nbsp; &nbsp; &nbsp; ₹140<small>Roti (6pcs) + 2 sabji + Rice + Dal +Papad + Pickle + Sweet</small></h1>
</div>
<?php 
if(isset($_SESSION['user_id']))
{
echo '<a class="btn btn-default" href="viewcart.php" role="button">Add to cart</a>';
}
?>
</div>
</li>
</ul>
 <div class="direction-nav hidden-sm">
<div class="next">
<a><img src="img/right-arrow.png" alt="" /></a>
</div>
<div class="prev">
<a><img src="img/left-arrow.png" alt="" /></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="features">
<div class="container">
<div class="row">
<div class="col-md-12">

</div>
</div>

</div>
</section>

<section class="trusted">
<div class="trusted-quote">
<div class="container">
<div class="row">
<div class="col-md-offset-1 col-md-10">
<div class="trusted-slider">
<ul class="slides">
<li>
<img src="img/quote.png" alt="quote">
<p class="quote-body">FOOD IS ESSENTIAL TO LIFE, THEREFORE MAKE IT GOOD</p>

</li>

</ul>
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
<script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
<script src="js/vendor/mc/main.js"></script>
<script src="js/vendor/validate.js"></script>
<script src="js/reservation.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:52:32 GMT -->
</html>
