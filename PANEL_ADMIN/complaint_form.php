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
        <title>Register Complaint</title>
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
                        <h2 class="title1">Complaint Form</h2>
<?php
echo $msg;
?>
                        <div class=" form-grids row form-grids-right">
                            <div class="widget-shadow " data-example-id="basic-forms"> 

                                <div class="form-title">
                                    <h4> Add Complaint:</h4>
                                </div>
                                <div class="form-body" style="margin-bottom:200px;">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" id="form"> 
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">User ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))"   name="uid" placeholder="Enter User ID:" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">TiffinSeller ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))"   name="tid" placeholder="Enter TiffinSeller ID:" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Order ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))"   name="oid" placeholder="Enter Order ID:" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Complaint</label>
                                            <div class="col-sm-9">
                                                
                                                <input type="text" class="form-control"  name="complaint" placeholder="Type Complaint:" >
                                               
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Complaint Status</label>
                                         <div class="col-sm-9">

                                                <select  class="form-control" name="cstatus">
                                                    <option value="" selected disabled="">
                                                       Select Complaint Status
                                                    </option>
                                                    <option value="pen" >
                                                        Not Resolved
                                                    </option>
                                                    <option value="pun">
                                                       Resolved

                                                    </option>
                                                   

                                                </select>
                                            </div>
                                        </div>

                                         
                                    
                                       
                                            
                                     
                                        <div class="col-sm-offset-2">
                                            <button type="submit" class="btn btn-success">Add </button>
                                            <button type="reset"  class="btn btn-danger">Reset</button>
                                            <button type="button" class="btn btn-primary" onclick="window.location = 'Complaint_table.php';">View</button>
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
                                                           oid: {
                                                            required: true

                                                        },
                                                        uname: {
                                                            required: true,
                                                            minlength: 3
                                                        },
                                                        complaint: {
                                                            required: true

                                                        },
                                                        cstatus: {
                                                            required: true

                                                        },

                                                        address: {
                                                            required: true,
                                                            minlength: 15

                                                        },
                                                        pdate: {
                                                            required: true

                                                        },
                                                        pstatus: {
                                                            required: true

                                                        },
                                                        tid: {
                                                            required: true

                                                        },
                                                        mobile: {
                                                            required: true,
                                                            minlength: 10,
                                                            maxlength: 10
                                                        },

                                                        oamount: {
                                                            required: true,
                                                            
                                                        },

                                                    },
                                                    messages: {
                                                        uid: {
                                                            required: "Please Enter User ID"

                                                        },
                                                        oid: {
                                                            required: "Please Enter Order ID"

                                                        },
                                                        uname: {
                                                            required: "Please Enter User Name",
                                                            minlength: "User Name must consist of at least 3 characters"
                                                        },
                                                        complaint: {
                                                            required: "Please Type Complaint"

                                                        },
                                                        mobile: {
                                                            required: "Please Enter Your Mobile no.",
                                                            minlength: "Enter Your 10 digit Mobile no. only",
                                                            maxlength: "Enter Your 10 digit Mobile no. only",
                                                        },

                                                        oamount: {
                                                            required: "Please Enter Amount",

                                                            maxlength: "Please Enter 3 digits only"
                                                        },
                                                        pdate: {
                                                            required: "please select Payment Date"
                                                        },
                                                        tid: {
                                                            required: "Please Enter TiffinSeller ID"
                                                        },
                                                        cstatus: {
                                                            required: "Please select Complaint Status"
                                                        },
                                                        quantity: {
                                                            required: "Please Select Complaint Status"
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