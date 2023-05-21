<?php
require './class/atclass.php';
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
        <title>Ratings</title>
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
                        <h2 class="title1">Ratings</h2>
                        <div class="panel-body widget-shadow">
<!--                            <h4><a href="rating_form.php">Add Ratings</a></h4>-->
                            <h4>Ratings</h4>
                            <table class="table" id="table2">
                                <thead>
                                    <tr>
                                        <th>Rating Id</th>
                                        <th>User ID</th>
                                        <th>User Name</th>
                                       <th>Tiffin ID</th>
                                        <th style="width: 130px; overflow: hidden;">Ratings(Out of 5)</th>
                                        <th>Rating Date</th>
                                    
                                    </tr>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Brijesh Adeshara</td>
                                    <td>1</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>10-01-22</td>
                                   
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>Yash Chhabra</td>
                                    <td>2</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>12-01-22</td>
                                     
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>Manan Gupta</td>
                                    <td>3</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>14-01-22</td>
                                
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>Akshay Pandey</td>
                                    <td>4</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>17-01-22</td>
                                  
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>Sourav Kumawat</td>
                                    <td>5</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>19-01-22</td>
                                  
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>6</td>
                                    <td>Ravi Surti</td>
                                    <td>6</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>23-01-22</td>
                                   
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>Yash Shah</td>
                                    <td>7</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>29-01-22</td>
                                     
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>8</td>
                                    <td>Shaurabh Tiwari</td>
                                    <td>8</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>30-01-22</td>
                                     
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>Vishal Thadani</td>
                                    <td>9</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>02-02-22</td>
                                  
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>Dhruv Patel</td>
                                    <td>10</td>
                                    <td>
                                        <select name="category" class="form-control" required>

                                            <option value="pen" >
                                                1
                                            </option>
                                            <option value="pun">
                                                2

                                            </option>
                                            <option value="pun">
                                                3

                                            </option><!-- comment -->
                                            <option value="pun">
                                                4

                                            </option><!-- comment -->
                                            <option value="pun">
                                                5

                                            </option>


                                        </select>
                                    </td>
                                    <td>26-01-22</td>
                   
                                </tr>
                                <!--							
                                <?php
                                if (isset($_GET['did'])) {
                                    $did = $_GET['did'];
                                    $deleteq = mysqli_query($connection, "delete from tbl_product where pro_id ='{$did}'") or die(mysqli_error($connection));

                                    if ($deleteq) {
                                        echo "<script>alert('Record Deleted');</script>";
                                    }
                                }
                                $selectq = mysqli_query($connection, "select * from tbl_product") or die(mysqli_error($connection));
                                $count = mysqli_num_rows($selectq);
                                echo $count . " Records Found";
                                while ($productrow = mysqli_fetch_array($selectq)) {
                                    echo "<tr>";
                                    echo "<td>{$productrow['pro_id']}</td>";
                                    echo "<td>{$productrow['pro_name']}</td>";
                                    echo "<td>{$productrow['pro_price']}</td>";
                                    echo "<td> <a href='edit-product.php?eid={$productrow['pro_id']}'>Edit</a> | <a href='display-product.php?did={$productrow['pro_id']}'>Delete</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                                        
                                        
                                --></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--
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