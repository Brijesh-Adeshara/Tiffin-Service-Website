<?php
session_start();
require './conn.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    unset($_SESSION['qtycart'][$id]);
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:53:11 GMT -->
<head>
<meta charset="utf-8">
<title>View Cart</title>
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
<h2 class="text-uppercase">Cart</h2>
<p>Checkout or add some items to your cart</p>
</div>
</div>
</div>
</section>

<section class="shop-content">
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<?php
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
 
    echo '<table class="cart-table table table-bordered">';
    echo '<tr>';
    echo '<td></td>';
    echo '<td></td>';
    echo '<td>Name</td>';
    echo '<td>Price</td>';
    echo '<td>Quantity</td>';
    echo '<td>Total</td>';
    echo '</tr>';
    $i =0;
    $grandtotal = array();
    foreach ($_SESSION['cart'] as $key => $value) {
        $i++;
        $productq = mysqli_query($connection, "select * from tiffins_tbl where tiffin_id ='{$value}'") or die(mysqli_error($connection));
        $row = mysqli_fetch_array($productq);
        $qty = $_SESSION['qtycart'][$key];
        $subtotal = $row['tiffin_price'] * $qty;
        echo '<tr>';
        echo "<td>$i</td>";
        echo "<td><img src='UPLOAD/{$row['tiffin_image']}'</td>";
        echo "<td>{$row['tiffin_name']}</td>";
        echo "<td>{$row['tiffin_price']}</td>";
        echo "<td>$qty</td>";
        echo "<td>$subtotal</td>";
        echo "<td><a href='?id=$key'>Remove</a></td>";
        echo '</tr>';
        $grandtotal[] = $subtotal;
    }
    $finalsum = array_sum($grandtotal);
    echo '<tr>';
    echo "<td colspan='5'><b>Total Amount</b></td>";
    echo "<td>$finalsum</td>";
    echo '<td><a href="checkout.php">Checkout</a> OR <a href="category.php">Buy More</a></td>';
    echo '</tr>';
    echo '</table>';
}
else{
    echo "<script>alert('Cart is Empty')</script>";
}
?>
<!--<div class="cart_totals">
<div class="col-md-6 push-md-6 no-padding">
<h4 class="text-left">Cart Totals</h4>
<br>
<table class="table table-bordered col-md-6">
<tbody>
<tr>
<th>Cart Subtotal</th>
<td><span class="amount" id="cartsub">₹239</span></td>
</tr>
<tr>
<th>Delivery Charge</th>
<td>
Free Delivery
</td>
</tr>
<tr>
<th>Order Total</th>
<td><strong><span class="amount" id="carttotal">₹239</span></strong> </td>
</tr>
</tbody>
</table>
</div>
</div>-->
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
    <script type="text/javascript">
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
    </script> <!-- Only Numeric Input -->         
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/shop_cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:53:11 GMT -->
</html>
