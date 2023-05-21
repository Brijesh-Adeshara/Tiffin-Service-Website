<?php
//
require './class/atclass.php';
$msg = "";
if ($_POST) {
    $pname = mysqli_real_escape_string($connection, $_POST['pname']);
    $pprice = mysqli_real_escape_string($connection, $_POST['pprice']);
    $pdetails = mysqli_real_escape_string($connection, $_POST['pdetails']);

    $query = mysqli_query($connection, "insert into tbl_product(pro_name,pro_price,pro_details) values('{$pname}','{$pprice}','{$pdetails}')") or die(mysqli_errno($connection));
    if ($query) {
        $msg = '<div class="alert alert-success" role="alert">
  Record Added
</div>';
    }
}
?>
<?php 

session_start(); 
if(!isset($_SESSION['user_id']))
{
    header("Location:../Login.php");
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <style>
            .error{
                color:red;
            }
        </style>
        <title>My Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />

        <!-- font-awesome icons CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons CSS -->

        <!-- side nav css file -->
        <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
        <!-- side nav css file -->

        <!-- js-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/modernizr.custom.js"></script>

        <!--webfonts-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//webfonts--> 

        <!-- Metis Menu -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->

    </head> 
    <body class="cbp-spmenu-push">
        <div class="main-content">

            <!--left-fixed -navigation-->
            <?php
            include './themepart/sidebar.php'
            ?>
            <!-- header-starts -->
            <?php
            include './themepart/header.php';
            ?>
            <!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
                <div class="main-page">
                    <div class="forms" style="margin-bottom:250px;">
                        <h2 class="title1">TiffinSeller Profile</h2>
                        <table class="table">
                                <tbody>
                                    <?php /*
                                    $query = mysqli_query($connect, "select * from tbl_user where user_type_id=1");
                                    while ($categoryrow = mysqli_fetch_array($query)) {
                                        echo "<tr>";
                                        echo "<th>Your User ID</th>";
                                        echo "<td>{$categoryrow['user_id']}</td>";
                                         echo "<td></td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>Your Name</th>";
                                        echo "<td>{$categoryrow['user_first_name']} {$categoryrow['user_last_name']}</td>";
                                         echo "<td></td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                       echo "<th>Your Gender</th>";
                                        echo "<td>{$categoryrow['user_gender']}</td>";
                                         echo "<td></td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>Your Mobile Number</th>";
                                        echo "<td>{$categoryrow['user_mobile_no']}</td>";
                                         echo "<td></td>";
                                       echo "</tr>";
                                       echo "<tr>";
                                       echo "<th>Your Address</th>";
                                        echo "<td>{$categoryrow['user_address']}</td>";
                                        echo "<td></td>";
                                        echo "</tr>";
                                         echo "<th>Your Password</th>";
                                        echo "<td>*****</td>";
                                        echo "<td><a href='edit-password.php?eid={$categoryrow['user_id']}'><img src='images/edit.png' title='Update Password' height='25' width='25'/></a></td>";
                                        echo "</tr>";                              
                                    }*/
                                    ?> 
                                    <tr>
                                        <th>Your User ID</th>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Your Name</th>
                                        <td>Yash Chhabra</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Your Email</th>
                                        <td>yash.chhabra2000@gmail.com</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Your Mobile Number</th>
                                        <td>9898123456</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Your Address</th>
                                        <td>Ahmedabad</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Your Password</th>
                                        <td>*****</td>
                                        <td><a href='edit-password.php?eid={$categoryrow['user_id']}'></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        
                    </div>
                </div>
            </div>
            <!--footer-->
            <?php
            include './themepart/footer.php';
            ?>
            <!--//footer-->
        </div>

        <!-- side nav js -->
        <script src='js/SidebarNav.min.js' type='text/javascript'></script>
        <script>
                                                $('.sidebar-menu').SidebarNav()
        </script>
        <!-- //side nav js -->

        <!-- Classie --><!-- for toggle left push menu script -->
        <script src="js/classie.js"></script>
        <script>
                                                var menuLeft = document.getElementById('cbp-spmenu-s1'),
                                                        showLeftPush = document.getElementById('showLeftPush'),
                                                        body = document.body;

                                                showLeftPush.onclick = function () {
                                                    classie.toggle(this, 'active');
                                                    classie.toggle(body, 'cbp-spmenu-push-toright');
                                                    classie.toggle(menuLeft, 'cbp-spmenu-open');
                                                    disableOther('showLeftPush');
                                                };

                                                function disableOther(button) {
                                                    if (button !== 'showLeftPush') {
                                                        classie.toggle(showLeftPush, 'disabled');
                                                    }
                                                }
        </script>
        <!-- //Classie --><!-- //for toggle left push menu script -->

        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery-3.1.1.js"></script>    
        <script src="js/jquery.validate.js"></script>
        <script>


                                                $("#form").validate({
                                                    rules: {

                                                        uname: {
                                                            required: true,
                                                            minlength: 6
                                                        },
                                                        image: {
                                                            required: true,

                                                        },
                                                        item: {
                                                            required: true,
                                                            minlength: 10

                                                        },
                                                        category: {
                                                            required: true,

                                                        },

                                                        price: {
                                                            required: true,
                                                            maxlength: 3
                                                        },

                                                    },
                                                    messages: {

                                                        uname: {
                                                            required: "Please Enter Tiffin Name",
                                                            minlength: "Tiffin name must consist of at least 6 characters"
                                                        },
                                                        image: {
                                                            required: "Please Select a photo"

                                                        },
                                                        price: {
                                                            required: "Please Enter Tiffin Price",

                                                            maxlength: "Please Enter 3 digits only"
                                                        },
                                                        category: {
                                                            required: "Please select a category",
                                                        },
                                                        item: {
                                                            required: "Please Enter Tiffin Items",
                                                            minlength: "Tiffin Items must consist of at least 10 characters"
                                                        },

                                                    }
                                                });


                                         



        </script>
    </body>
</html>