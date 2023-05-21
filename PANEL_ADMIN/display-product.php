<?php
require './class/atclass.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        
        <title>Tiffins</title>
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
                        <h2 class="title1">Tiffins Table</h2>
                        <div class="panel-body widget-shadow">
                            <h4><a href="add-product.php">Add Tiffin</a></h4>
                            
                            <table class="table" id="table2">
                                <thead>
                                    <tr>
                                        <th>Tiffin Id</th>
                                        <th>TiffinSeller Id</th>
                                        <th>Category Name</th>
                                        <th>Tiffin Name</th>
                                        <th> Tiffin Items</th>
                                        <th>Tiffin Image</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Punjabi</td>
                                        <td>Special Punjabi Thali</td>
                                        <td>Paneer Sabji , Dal Makhani , Naan and Papad</td>
                                        <td ><img src="images/punjabi/indian-traditional-thali-food-kadai-paneer-served-dal-makhani-tandoori-roti-papad-vintage-wooden-background-indian-158902118.jpg" alt="alt" width="70px"/></td>
                                        <td>160</td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>Gujarati</td>
                                        <td>Gujarati Thali</td>
                                        <td>Dal Rice with Fried Rice and Salad</td>
                                        <td ><img src="images/punjabi/indian-meal-consisting-roti-rice-dal-vegetable-kofta-32193992.jpg" alt="alt" width="70px"/></td>
                                        <td>120</td>
                                    </tr>
                                     <tr>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>Chinese</td>
                                        <td>Chinese Thali</td>
                                        <td>Momos and Manchurian Dry</td>
                                        <td ><img src="images/chinese/chinese-veg-combo-meal-consists-noodles-manchurian-fries-veggies-momos-selective-focus-225928485.jpg" alt="alt" width="70px"/></td>
                                        <td>140</td>
                                    </tr>
                                     <tr>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>Punjabi</td>
                                        <td>Punjabi Thali</td>
                                        <td>kadai Paneer with Naan</td>
                                        <td ><img src="images/punjabi/indian-cuisine-kadai-paneer-served-tandoori-indian-cuisine-kadai-paneer-served-tandoori-also-know-as-kadhai-paneer-158902238.jpg" alt="alt" width="70px"/></td>
                                        <td>110</td>
                                     </tr>
                                      <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>Chinese</td>
                                        <td>Special Chinese Thali</td>
                                        <td>Spring Rolls, Pulav and Manchurian</td>
                                        <td ><img src="images/chinese/indo-chinese-veg-combo-meal-consists-pulav-manchurian-spring-rolls-selective-focus-225928510.jpg" alt="alt" width="70px"/></td>
                                        <td>180</td>
                                    </tr>
                                      <tr>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>Punjabi</td>
                                        <td>Mini Punjabi Thali</td>
                                        <td>Cholle Puri</td>
                                        <td ><img src="images/punjabi/indian-breakfast-meal-consisting-chole-puris-as-main-dish-bhatura-bhature-birthday-bowl-bread-brekkie-chana-channa-137568942.jpg" alt="alt" width="70px"/></td>
                                        <td>99</td>
                                    </tr>
                                     <tr>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>South Indian</td>
                                        <td>South Indian Combo</td>
                                        <td>Plain Dosa Sambhar and Chutney</td>
                                        <td ><img src="images/south/dosa-sambar-chutney-south-indian-breakfast-masala-69295802.jpg" alt="alt" width="70px"/></td>
                                        <td>130</td>
                                    </tr>
                                     <tr>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>South Indian</td>
                                        <td>Special South Indian Thali</td>
                                        <td>Dosa with Vada and Idli</td>
                                        <td ><img src="images/south/south-indian-platter-idli-dosa-vada-idli-dosa-vada-banana-leaf-south-indian-breakfast-tea-time-snack-171494106.jpg" alt="alt" width="70px"/></td>
                                        <td>160</td>
                                    </tr>
                                     <tr>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>Gujarati</td>
                                        <td>Traditional Gujarati Thali</td>
                                        <td>Sev Tomato na Saak with Rice and Raita</td>
                                        <td><img src="images/guj/traditional-indian-thali-gujarati-meal-thaali-consisting-different-curries-like-sev-tomato-na-shak-aloo-gobhi-cauliflower-109346611.jpg" alt="alt" width="70px"/></td>
                                        <td>199</td>
                                     </tr>
                                      <tr>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>South Indian</td>
                                        <td>Mini South Indian</td>
                                        <td>Idli Chutney</td>
                                        <td ><img src="images/south/south-indian-breakfast-23154569.jpg" alt="alt" width="70px"/></td>
                                        <td>89</td>
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
                                    ?>-->
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