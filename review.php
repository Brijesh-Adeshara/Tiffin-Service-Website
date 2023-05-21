<?php 
$tiffinid = $_GET['tiffinid'];
$oid = $_GET['orderid'];
require './conn.php';
session_start();
$userid = $_SESSION['user_id'];
$username = $_SESSION['username'];
if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
}

if(isset($_POST['submitreview']))
{
    $rating = mysqli_real_escape_string($connection,$_POST['rating']);
    $feedback = mysqli_real_escape_string($connection,$_POST['text']);
    $currentdate = date('d-m-Y');
    $insertfeedback = mysqli_query($connection, "insert into feedback_tbl (user_id,user_name,tiffin_id,order_id,feedback,feedback_date) values ('{$userid}','{$username}','{$tiffinid}','{$oid}','{$feedback}','{$currentdate}')") or die(mysqli_error($connection));
    $insertrating = mysqli_query($connection, "insert into ratings_tbl (user_id,user_name,tiffin_id,ratings,rating_date) values ('{$userid}','{$username}','{$tiffinid}','{$rating}','{$currentdate}')") or die(mysqli_error($connection));
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_single_full.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:53:08 GMT -->
<head>
<meta charset="utf-8">
<title>Rate and Review</title>
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
<h2 class="text-uppercase">Reviews</h2>
<p></p>
</div>
</div>
</div>
</section>

<section class="shop-content">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
<div class="tab-style3">

<div class="align-center mb-40 mb-xs-30">
<ul class="nav nav-tabs tpl-minimal-tabs animate">
<li class="active">
<a aria-expanded="true" href="#mini-one" data-toggle="tab">Review</a>
</li>
</ul>
</div>


<div style="height: auto;" class="tab-content tpl-minimal-tabs-cont align-center section-text">
<div style="" class="tab-pane fade active in" id="mini-one">
<div class="col-md-12">
<h4 class="text-left">Other Reviews</h4>
<br>
<ul class="comment-list">
<?php
$feedbackq = mysqli_query($connection, "select * from feedback_tbl where tiffin_id = $tiffinid");
$ratingq = mysqli_query($connection, "select * from ratings_tbl where tiffin_id = $tiffinid");
while($row = mysqli_fetch_array($feedbackq) and $productrow = mysqli_fetch_array($ratingq))
{
echo '<li>';
echo '<a class="pull-left" href="#"></a>';
echo '<div class="comment-meta">';
echo "<a style='font-size:20px; margin-left:-70px'>{$row['user_name']}</a>";
echo '<span>';
echo "<em style='font-size:20px'>{$row['feedback_date']}</em>";
echo '</span>';
echo '</div>';
echo '<div class="rating2">';
echo "<p style='margin-left:-20px'>Rating:{$productrow['ratings']}&starf;</p>";
echo '</div>';
echo "<p style='margin-top:-30px; margin-left:0px'>{$row['feedback']}</p>";
echo '</li>';
}
?>
</ul>
<br>
<h4 class="text-left">Add a review</h4>
<br>
<form id="form" class="review-form" method="post" enctype="multipart/form-data">
<!--<div class="row">
<div class="col-md-6">
<input name="name" class="input-md form-control" id="name" placeholder="Name *" maxlength="100" required="" type="text">
</div>
<div class="col-md-6">
<input name="email" class="input-md form-control" id="email" placeholder="Email *" maxlength="100" required="" type="email">
</div>
</div>-->
<span>Your Ratings</span>
<div class="clearfix"></div>
<div class="rating3" id="stars">
    <select style="text-align: left;" name="rating">
        <option value="0" selected disabled>Enter Rating</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>
<div class="clearfix space20"></div>
<textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Add review.." maxlength="150" style="resize: none;" required=""></textarea>
<br>
<button type="submit" class="btn btn-default" name="submitreview">Submit Review</button>
</form>

</div>
</div>
<div class="clearfix space30"></div>
</div>
</div>
</div>
</section>
<div class="clearfix"></div>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--<script type="text/javascript">	
        function JSalert(){
            swal("Success!", "Review Submitted!", "success");
        }
    </script>
    
    <script>
        $(document).ready(function (){
        $(' #text').change(function(){
        if( $("#text").val().length){
                $("#review").prop('disabled', false);
        } else {
                $("#review").prop('disabled', true);
        }
    });
});
        </script>-->
        
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_single_full.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:53:10 GMT -->
</html>
