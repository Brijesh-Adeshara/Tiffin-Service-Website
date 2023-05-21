
<div class="sticky-header header-section " style="background: #007bff;">
    <div class="header-left">

        <!--toggle button start-->
        <button id="showLeftPush" style="background: black;"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <div class="profile_details_left"><!--notifications of menu start -->
            <ul class="nofitications-dropdown">

<!--                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>You have 3 new notification</h3>
                            </div>
                        </li>
                        <li><a href="#">
                                <div class="user_img"><img src="images/4.jpg" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>	
                            </a></li>
                        <li class="odd"><a href="#">
                                <div class="user_img"><img src="images/1.jpg" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>	
                            </a></li>
                        <li><a href="#">
                                <div class="user_img"><img src="images/3.jpg" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>	
                            </a></li>
                        <li>
                            <div class="notification_bottom">
                                <a href="#">See all notifications</a>
                            </div> 
                        </li>
                    </ul>
                </li>	-->

            </ul>
            <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="clearfix"> </div>
    </div>
    <div class="header-right">


        <!--search-box-->


        <div class="profile_details">		
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">	
                            <span class="prfil-img"><i class="fa fa-user" style="padding: 10px; font-size: 30px; color:black;"></i></span> 
                            <div class="user-name">
                                <?php
                                    if(isset(($_SESSION['user_id']))) {
                                    echo '<p style="color: black;">Hi,'. $_SESSION['username'] . '</p>';
                                    echo '<span style="color: black;">Tiffin Seller</span>';
                                    }
                                    else{
                                        header('Location: ../Login.php');
                                    }
                                ?>
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>	
                        </div>	
                    </a>
                    <?php
                        echo '<ul class="dropdown-menu drp-mnu">';
                        echo '<li> <a href="tiffinseller_profile.php"><i class="fa fa-user"></i>My Account</a> </li>';
                        echo '<li> <a href="#"><i class="fa fa-gear"></i>Settings</a> </li>';
                        echo '<li> <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a> </li>';
                        echo '</ul>';
                     ?>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>				
    </div>
    <div class="clearfix"> </div>	
</div>