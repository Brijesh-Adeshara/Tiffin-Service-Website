<?php
include './conn.php';
session_start(); 
$userid = $_SESSION['user_id'];
if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_account_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:53:11 GMT -->
<head>
<meta charset="utf-8">
<title>My Profile</title>
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
<h2 class="text-uppercase">Your Profile</h2>
<p>Your recent orders will be displayed here</p>
</div>
</div>
</div>
</section>

<section class="shop-content">
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Recent Orders</h3>
<br>
<table class="cart-table account-table table table-bordered">
<thead>
<tr>
<th>Order</th>
<th>TIffin Name</th>
<th>Date</th>
<th>Status</th>
<th>Total</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$i=1;
$oquery = mysqli_query($connection, "select * from orders_tbl where user_id = $userid");
while ($row = mysqli_fetch_array($oquery)) {
    $oid = $row['order_id'];
    $odquery = mysqli_query($connection, "select * from orders_details_tbl where order_id = $oid");
    $result = mysqli_fetch_array($odquery);
    $tid = $result['tiffin_id'];
    $tquery = mysqli_query($connection, "select * from tiffins_tbl where tiffin_id = $tid");
    $tresult = mysqli_fetch_array($tquery);
    $qty = $result['quantity'];
    $rate = $result['rate'];
    $amount = $qty * $rate;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$tresult['tiffin_name']}</td>";
    echo "<td>{$row['order_date']}</td>";
    echo "<td>{$row['order_status']}</td>";
    echo "<td>$amount</td>";
    echo "<td><a href='review.php?tiffinid={$result['tiffin_id']}&orderid={$oid}'>Review</a></td>";
    echo "<td><a href='complaint.php?tiffinid={$result['tiffin_id']}&orderid={$oid}'>Complaint</a></td>";
    echo "</tr>";
    $i++;
}
?>
<!--<tr>
<td>
1
</td>
<td>
February 6 2022
</td>
<td>
Delivered
</td>
<td>
₹173 for 4 items
</td>
<td>
<a href="review.php">Review</a>
</td>
<td>
<a href="complaint.php">Complaint</a>
</td>
</tr>-->
</tbody>
</table>
<br>
<br>
<br>
<div class="ma-address">
<div class="row">
<div class="col-md-6">
<h4>Billing Address <a href="userdetails.php">Edit</a></h4>
<p>
<?php
$userq = mysqli_query($connection, "select * from users_tbl where user_id = $userid");
while($row = mysqli_fetch_array($userq))
{
    echo "Name: {$row['user_name']} <br/>";
    echo "Mobile Number: {$row['user_mobileno']}<br/>";
    echo "Email: {$row['user_email']}<br/>";
    echo "Address: {$row['user_address']}";
}
?>
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
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_account_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:53:11 GMT -->
</html>
