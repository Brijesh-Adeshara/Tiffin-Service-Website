<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="img/header-logo.png" alt="nav-logo">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (!isset(($_SESSION['user_id']))) {
                    echo '<li class="dropdown">';
                    echo '<a href="Login.php">Login/Register</a>';
                    echo '</li>';
                }
                ?>
                <li class="dropdown">
                    <a href="index.php">Home</a>
                </li>
                <li class="dropdown">
                    <a href="Category.php">Tiffin Seller</a>
                </li>
                <li class="dropdown">
                    <a href="about.php">About Us</a>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="dropdown">
                    <?php
                    if (isset(($_SESSION['user_id']))) {
                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi,'. $_SESSION['username'] . ' <span class="caret"></span></a>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="userinfo.php">Profile</a></li>';
                        echo '<li><a href="Bookmarks.php">BookMarks</a></li>';
                        echo '<li><a href="user-settings.php">Change Password</a></li>';
                        echo '<li><a href="logout.php">Log Out</a></li>';
                        echo '</ul>';
                    }
                    ?>
                </li>
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi,' . $_SESSION['username'] . '<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="userinfo.php">Profile</a></li>
                        <li><a href="Bookmarks.php">BookMarks</a></li>
                        <li><a href="review.php">Reviews</a></li>
                        <li><a href="user-settings.php">Settings</a></li>
                        <li><a href="home.php">Log Out</a></li>

                    </ul>-->
                </li>

                <?php
                if (isset(($_SESSION['cart'])))
                {
                    echo '<li class="dropdown">';
                    echo "<a href='viewcart.php'><i class='fa fa-shopping-cart fsc pull-left'></i><span class='cart-number'></span></a>";
                }
                ?>
<!--                <li class="dropdown">
                    <a href="viewcart.php" class="css-pointer dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart fsc pull-left"></i><span class="cart-number">2</span><span class="caret"></span></a>
                    <div class="cart-content dropdown-menu">
                        <div class="cart-title">
                            <h4>Shopping Cart</h4>
                        </div>
                        <div class="cart-items">
                            <div class="cart-item clearfix">
                                <div class="cart-item-image">
                                    <img src="img/cart-img1.jpg" alt="Gujarati Thali"></a>
                                </div>
                                <div class="cart-item-desc">
                                    <a href="shop_single_full.html">Gujarati Thali</a>
                                    <span class="cart-item-price">₹99</span>
                                    <span class="cart-item-quantity">x 1</span>
                                    <i class="fa fa-times ci-close"></i>
                                </div>
                            </div>
                            <div class="cart-item clearfix">
                                <div class="cart-item-image">
                                    <img src="img/cart-img2.jpg" alt="Punjabi Thali"></a>
                                </div>
                                <div class="cart-item-desc">
                                    <a href="shop_single_full.html">Punjabi Thali</a>
                                    <span class="cart-item-price">₹140</span>
                                    <span class="cart-item-quantity">x 1</span>
                                    <i class="fa fa-times ci-close"></i>
                                </div>
                            </div>
                        </div>
                        <div class="cart-action clearfix">
                            <span class="pull-left checkout-price"> ₹239</span>
                            <a class="btn btn-default pull-right" href="viewcart.php">View Cart</a>
                        </div>
                    </div>
                </li>-->
            </ul>
        </div>

    </div>
</nav>