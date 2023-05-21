<?php
require './class/atclass.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        
        <title>Feedback</title>
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
                       <div class="tables">
                        <h2 class="title1">Feedback </h2>
                        <div class="panel-body widget-shadow">
<!--                            <h4><a href="feedback_form.php">Add Feedback</a></h4>-->
                            <h4>Feedback</h4>
                            <table class="table" id="table2">
                                <thead>
                                    <tr>
                                        <th>Feedback Id</th>
                                        <th>User Id</th>
                                        <th>User Name</th>
                                        <th>TiffinSeller ID</th>
                                        <th>Tiffin ID</th>
                                        <th>Order ID</th>
                                        <th>Feedback</th>
                                        <th>Feedback Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <?php
                                  $selectq = mysqli_query($connection, "select * from feedback_tbl") or die(mysqli_error($connection));
                                $count=mysqli_num_rows($selectq);
                                echo $count    .   " Records Found";
                                while ($productrow = mysqli_fetch_array($selectq)) {
                                    echo "<tr>";
                                    echo "<td>{$productrow['feedback_id'] }</td>";
                                    echo "<td>{$productrow['user_id'] }</td>";
                                    echo "<td>{$productrow['user_name'] }</td>";
                                    echo "<td>{$productrow['tiffin_id'] }</td>";
                                    echo "<td>{$productrow['order_id'] }</td>";
                                    echo "<td>{$productrow['feedback'] }</td>";
                                    echo "<td>{$productrow['feedback_date'] }</td>";
                                  

                                    echo "<tr>";
                                }
                                ?>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
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
<script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
        <script>
            $(document).ready(function () {
                $('#table2').DataTable();
            });
        </script>
    </body>
</html>