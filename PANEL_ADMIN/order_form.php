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
<!DOCTYPE HTML>
<html>
    <head>
        <style>
            .error{
                color:red;
            }
        </style>
        <title>Place Order</title>
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
                    <div class="forms">
                        <h2 class="title1">Order Form</h2>
                        <?php
                        echo $msg;
                        ?>
                        <div class=" form-grids row form-grids-right">
                            <div class="widget-shadow " data-example-id="basic-forms"> 

                                <div class="form-title">
                                    <h4>Add Order:</h4>
                                </div>
                                <div class="form-body" style="margin-bottom:200px;">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" id="form"> 
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label" >User ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))"   name="uid" placeholder="Enter User ID:" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" onkeypress="return /[a-z]/i.test(event.key)" name="uname" placeholder="Enter User Name:" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">TiffinSeller ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))"   name="tid" placeholder="Enter TiffinSeller ID:" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Order Date</label>
                                            <div class="col-sm-9">

                                                <input type="date" class="form-control"  name="odate" placeholder=" Enter Order Date:" >

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label" >Order Status</label>
                                            <div class="col-sm-9">

                                                <select name="status" class="form-control" required>
                                                    <option value=""selected disabled >
                                                        --Select Order Status--
                                                    </option>
                                                    <option value="pen" >
                                                        Pending
                                                    </option>
                                                    <option value="pun">
                                                        Confirmed

                                                    </option>
                                                    <option val="guj">
                                                        Out For Delivery

                                                    </option>
                                                    <option value="kat">
                                                        Delivered

                                                    </option>

                                                </select>
                                            </div>
                                        </div>

                                        <!--                                         <div class="form-group">
                                                                                    <label for="inputEmail3" class="col-sm-2 control-label">Order Status</label>
                                                                                    <div class="col-sm-9">
                                                                                        
                                                                                        <input type="text" class="form-control" id="inputEmail3" name="pprice" placeholder="Select Order Status:" required>
                                                                                       
                                                                                    </div>
                                                                                 </div>-->
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                                            <div class="col-sm-9">

                                                <input type="text" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))"  name="quantity" placeholder="Enter Quantity:" >

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Payment ID</label>
                                            <div class="col-sm-9">

                                                <input type="text" class="form-control"  onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))"   name="pid" placeholder="Enter Payment ID:" >

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile No</label>
                                            <div class="col-sm-9">

                                                <input type="text" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))"  name="mobile" placeholder="Enter Mobile No:" >

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Delivery Address</label>
                                            <div class="col-sm-9">

                                                <input type="text" class="form-control"  name="address" placeholder="Enter Delivery Address:" >

                                            </div>
                                        </div>




                                        <div class="col-sm-offset-2">
                                            <button type="submit" class="btn btn-success">Add </button>
                                            <button type="reset"  class="btn btn-danger">Reset</button>
                                            <button type="button" class="btn btn-primary" onclick="window.location = 'Orders_table.php';">View</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
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
        <script src="js/jquery-3.1.1.js"></script>    
        <script src="js/jquery.validate.js"></script>
        <script>

                                                $("#form").validate({
                                                    rules: {
                                                        uid: {
                                                            required: true

                                                        },
                                                        uname: {
                                                            required: true,
                                                            minlength: 3
                                                        },
                                                        tid: {
                                                            required: true

                                                        },
                                                        quantity: {
                                                            required: true

                                                        },

                                                        address: {
                                                            required: true,
                                                            minlength: 15

                                                        },
                                                        odate: {
                                                            required: true

                                                        },
                                                        status: {
                                                            required: true

                                                        },
                                                        pid: {
                                                            required: true

                                                        },
                                                        mobile: {
                                                            required: true,
                                                            minlength: 10,
                                                            maxlength: 10
                                                        },

                                                        price: {
                                                            required: true,
                                                            maxlength: 3
                                                        },

                                                    },
                                                    messages: {
                                                        uid: {
                                                            required: "Please Enter User ID"

                                                        },
                                                        uname: {
                                                            required: "Please Enter User Name",
                                                            minlength: "User Name consist of at least 3 characters"
                                                        },
                                                        tid: {
                                                            required: "Please Enter TiffinSeller ID"

                                                        },
                                                        mobile: {
                                                            required: "Please Enter Your Mobile no.",
                                                            minlength: "Enter Your 10 digit Mobile no. only",
                                                            maxlength: "Enter Your 10 digit Mobile no. only",
                                                        },

                                                        price: {
                                                            required: "Please Enter Tiffin Price",

                                                            maxlength: "Please Enter 3 digits only"
                                                        },
                                                        odate: {
                                                            required: "Please select Order Date"
                                                        },
                                                        pid: {
                                                            required: "Please Enter Payment ID"
                                                        },
                                                        status: {
                                                            required: "Please select Order Status"
                                                        },
                                                        quantity: {
                                                            required: "Please Enter Total Quantity"
                                                        },

                                                        address: {
                                                            required: "Please Enter Delivery Address",
                                                            minlength: "Delivery Address consist of at least 15 characters"
                                                        },

                                                    }
                                                });



        </script>

    </body>
</html>