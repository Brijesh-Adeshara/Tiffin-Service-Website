<?php 
session_start();
$tid = $_GET['tid'];
$qty = $_GET['qty'];
if(isset($_SESSION['cart'])){
    
    $currentNo = $_SESSION['count']+1;
    $_SESSION['cart'][$currentNo] = $tid;
    $_SESSION['qtycart'][$currentNo] = $qty;
    $_SESSION['count'] = $currentNo;
}
else{
    $cart = array();
    $qtycart = array();
    $_SESSION['cart'][0] = $tid;
    $_SESSION['qtycart'][0] = $qty;
    $_SESSION['count']=0;
}
header('location:viewcart.php');
?>