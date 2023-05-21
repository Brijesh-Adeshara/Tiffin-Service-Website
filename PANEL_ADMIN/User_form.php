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
        <title>Add User</title>
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
                        <h2 class="title1">User Form</h2>
                        <?php
                        echo $msg;
                        ?>
                        <div class=" form-grids row form-grids-right">
                            <div class="widget-shadow " data-example-id="basic-forms"> 

                                <div class="form-title">
                                    <h4>Add User:</h4>
                                </div>
                                <div class="form-body" style="margin-bottom:200px;">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" id="form" > 
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">User Type Name</label>
                                            <div class="col-sm-9">
                                                <select   class="form-control" name="utype">
                                                    <option value="" selected disabled>
                                                        Please Select User Type
                                                    </option>
                                                    <option value="pen" >
                                                        User 
                                                    </option>
                                                    <option value="pun">
                                                        TiffinSeller

                                                    </option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" onkeypress="return /[a-z]/i.test(event.key)"  name="uname" placeholder="Enter User Name:" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number</label>
                                            <div class="col-sm-9">

                                                <input type="text" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))"  name="user_mobile" placeholder="Enter Mobile Number" >

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-9">

                                                <textarea class="form-control"   name="message" placeholder="Enter Address:" style="resize:none;" ></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Email ID</label>
                                            <div class="col-sm-9">

                                                <input type="text" class="form-control"   name="user_email" placeholder="Enter Email ID:" >

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-9">

                                                <input type="password" class="form-control"   name="user_password" id="user_password" placeholder="Enter password:" >

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
                                            <div class="col-sm-9">

                                                <input type="password" class="form-control"   name="confirm_password" id="confirm_password" placeholder="Confirm Password:" >

                                            </div>
                                        </div>







                                        <div class="col-sm-offset-2">
                                            <button type="submit" class="btn btn-success">Add </button>
                                            <button type="reset"  class="btn btn-danger">Reset</button>
                                            <button type="button" class="btn btn-primary" onclick="window.location = 'User_table.php';">View</button>
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

                                                        uname: {
                                                            required: true,
                                                            minlength: 3
                                                        },
                                                        utype: {
                                                            required: true
                                                       
                                                        },
                                                        item: {
                                                            required: true,

                                                        },
                                                        user_password: {
                                                            required: true,
                                                            minlength: 6
                                                        },
                                                        confirm_password: {
                                                            required: true,
                                                            minlength: 6,
                                                            equalTo: "#user_password"
                                                        },
                                                        user_email: {
                                                            required: true,

                                                            email: true
                                                        },

                                                        user_mobile: {
                                                            required: true,
                                                            minlength: 10,
                                                            maxlength: 10
                                                        },

                                                        message: {
                                                            required: true,
                                                            minlength: 10,
                                                            maxlength: 150
                                                        },

                                                    },
                                                    messages: {

                                                        uname: {
                                                            required: "Please Enter Name",
                                                            minlength: "Your name must consist of at least 3 characters"
                                                        },
                                                         utype: {
                                                            required: "Please Enter User Type"
                                                            
                                                        },
                                                        user_mobile: {
                                                            required: "Please Enter Your Mobile no.",
                                                            minlength: "Enter Your 10 digit Mobile no. only",
                                                            maxlength: "Enter Your 10 digit Mobile no. only",
                                                        },

                                                        user_password: {
                                                            required: "Please Enter Password",
                                                            minlength: "Your password must be at least 6 characters long"
                                                        },
                                                        confirm_password: {
                                                            required: "Please Confirm Password",
                                                            minlength: "Your password must be at least 6 characters long",
                                                            equalTo: "Please enter the same password as above"
                                                        },

                                                        user_email: "Please enter a valid email address",
                                                        item: "Please select user type",

                                                        message: {
                                                            required: "Please enter Address",
                                                            minlength: "Your address must be atleast 10 characters",
                                                            maxlength: "Your address must not be more than 150 characters"
                                                        }





                                                    }
                                                });
                                                function isEmail(user_email) {
                                                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                                    return regex.test(email);
                                                }

                                                function Validate(no) {
                                                    no.value = no.value.replace(/[^ 0-9\n\r]+/g, '');
                                                }

                                                function Validatestring(no) {
                                                    no.value = no.value.replace(/[^ a-z A-Z\n\r]+/g, '');
                                                }



        </script>

    </body>
</html>
