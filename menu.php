<?php 
 session_start(); 
 $msg="";
 include './conn.php';
 if(isset($_GET['userid']))
 {
     $id = $_GET['userid'];
 
     $productselectq = mysqli_query($connection, "select * from tiffins_tbl where user_id= $id") or die(mysqli_error($connection));

     
 }else
 {
     
 $tiffinsellerselectq = mysqli_query($connection, "select * from users_tbl ") or die(mysqli_error($connection));
 
 $productselectq = mysqli_query($connection, "select * from tiffins_tbl") or die(mysqli_error($connection));
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Menu</title>
<meta name="author" content="Surjith S M">
<meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
<meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">
<script src="../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script><link rel="shortcut icon" href="img/favicon.ico">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/plugin.css">
<link rel="stylesheet" href="css/main.css">
</head>
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
<h2 class="text-uppercase">Menu</h2>
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
    <?php if(isset($_SESSION['user_id']))
    {    
        echo '<h1>Our Menu</h1>';
        echo "<form method='get' action='Bookmarks.php'>";
        echo '<h4><button type="submit" class="btn btn-primary"><i class="fa fa-bookmark" aria-hidden="true">&nbsp;Add to Bookmark</i></button></h4>';
        echo "</form>";
    }
    ?>
</div>
</div>
</div>
<div class="food-menu wow fadeInUp">
<div class="row menu-items3">
<?php
    while ($productrow = mysqli_fetch_array($productselectq))
    {
        echo '<div class="menu-item3 col-sm-6 col-xs-12">';
        echo "<img src='upload/{$productrow['tiffin_image']}' class='img-responsive' alt='' />";
        echo '<div class="menu-wrapper">';
        echo '<h4>'.$productrow['tiffin_name'].'</h4>';
        echo '<span class="price">₹'.$productrow['tiffin_price'].'</span>';
        echo '<div class="dotted-bg"></div>';
        echo '<p style="padding-right:100px;">'.$productrow['tiffin_items'].'</p>';
        echo '</div>';
        if(isset($_SESSION['user_id']))
        {
            echo "<form method='get' action='cart-process.php'>";
            echo "<input type='hidden' name='tid' value='{$productrow['tiffin_id']}'>";
            echo "<br/><br/><br/><br/><input type='number' style='width:50px; float:left;' name='qty' value='1' min='1' max='10'>";
            echo "<br/><br/><input type='submit' style='float:left;' class='btn btn-success' id='btn-order' value='Add to cart'>";
            echo "</form>";
        }
        echo '</div>';
        
    }
?>    
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
<!--<script type="text/javascript">
    document.getElementById("btn-order").onclick = function () {
        location.href = "viewcart.php";
    };
</script>-->
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/menu_tile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:52:48 GMT -->
</html>