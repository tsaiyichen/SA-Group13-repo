<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Alazea - Gardening &amp; Landscaping HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">




        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="shop.html">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.php">Shopping Cart</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio.php">Portfolio</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio.php">Portfolio</a></li>
                                                    <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.php">Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single-post.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>



                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>怪獸商店</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> 首頁</a></li>
                            <li class="breadcrumb-item active" aria-current="page">怪獸商店</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row">

            </div>

            <div class="row">
                <!-- Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop-sidebar-area">

                    </div>
                </div>

                <!-- All Products Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop-products-area">
                        <div class="row">

                            <!-- Single Product Area -->
                                    <?php
                                    $currentUserID = $_SESSION['userID'];
                                    $link = @mysqli_connect('localhost', 'root', '12345678', 'sa');

                                    $sql = "SELECT monsterID FROM monster";
                                    $sql2 = "SELECT * FROM purchase WHERE userID = '$currenUserID'";
                                    $count = 0;
                                    $numRow = [];

                                    $result = mysqli_query($link, $sql);
                                    $result2 = mysqli_query($link, $sql2);
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        $numRow[$count] = $row2['monsterID'];
                                        $count++;
                                    }

                                    while($row = mysqli_fetch_assoc($result)){?>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                    <?php
                                        $pickMonsterID = $row['monsterID'];
                                        if(in_array($pickMonsterID, $numRow)){
                                        $path = "eggDone/".$pickMonsterID.".jpg";?>
                                        <a href="shop_b.php?userID=$currentUserID&monsterID=$pickMonsterID"><img src="<?php echo $path;?>"></a><?php
                                        }else{
                                        $path = "egg/".$pickMonsterID.".jpg";
                                        ?>

                                        <a href="shop_b.php?userID=$currentUserID&monsterID=$pickMonsterID"><img src="<?php echo $path;?>"></a><?php
                                        echo '<div class="product-meta d-flex">';

                                        echo '<a href="shop_b.php?userID=$currentUserID&monsterID=$pickMonsterID" class="add-to-cart-btn" style="width: 300px; margin-left: auto; margin-right: auto;">BUY</a>';

                                        echo '</div></div>';?>
                                        <div class="product-info mt-15 text-center">
                                        <a href="shop_b.php?userID=$currentUserID&monsterID=$pickMonsterID">
                                        <?php
                                        $sql3 = "SELECT * FROM monster WHERE monsterID = '$pickMonsterID'";
                                        $result3 = mysqli_query($link, $sql3);
                                        $row3 = mysqli_fetch_assoc($result3);
                                        ?>
                                        <p>怪獸蛋</p>
                                        </a>
                                       <h6><?php echo "$".$row3['price'];?></h6>
                                           </div>
                                          </div>
                                        </div>
                                <?php
                                    }
                                    }
                                ?>
                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="shop-details.html"><img src="img/bg-img/egg2.jpg" alt=""></a>
                                        <div class="product-meta d-flex">

                                            <a href="cart.php" class="add-to-cart-btn" style="width: 300px; margin-left: auto; margin-right: auto;">BUY</a>
                                            </a>

                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.html">
                                            <p>怪物蛋</p>
                                        </a>
                                        <h6>$10.99</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="shop-details.html"><img src="img/bg-img/egg3.jpg" alt=""></a>
                                        <div class="product-meta d-flex">

                                            <a href="cart.php" class="add-to-cart-btn" style="width: 300px; margin-left: auto; margin-right: auto;">BUY</a>

                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.html">
                                            <p>怪物蛋</p>
                                        </a>
                                        <h6>$10.99</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="shop-details.html"><img src="img/bg-img/egg4.jpg" alt=""></a>
                                        <div class="product-meta d-flex">

                                            <a href="cart.php" class="add-to-cart-btn" style="width: 300px; margin-left: auto; margin-right: auto;">BUY</a>

                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.html">
                                            <p>怪物蛋</p>
                                        </a>
                                        <h6>$10.99</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="shop-details.html"><img src="img/bg-img/egg5.jpg" alt=""></a>
                                        <div class="product-meta d-flex">

                                            <a href="cart.php" class="add-to-cart-btn" style="width: 300px; margin-left: auto; margin-right: auto;">BUY</a>

                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.html">
                                            <p>怪物蛋</p>
                                        </a>
                                        <h6>$10.99</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="shop-details.html"><img src="img/bg-img/egg6.jpg" alt=""></a>
                                        <div class="product-meta d-flex">

                                            <a href="cart.php" class="add-to-cart-btn" style="width: 300px; margin-left: auto; margin-right: auto;">BUY</a>

                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.html">
                                            <p>怪物蛋</p>
                                        </a>
                                        <h6>$10.99</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="shop-details.html"><img src="img/bg-img/egg7.jpg" alt=""></a>
                                        <div class="product-meta d-flex">

                                            <a href="cart.php" class="add-to-cart-btn" style="width: 300px; margin-left: auto; margin-right: auto;">BUY</a>

                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.html">
                                            <p>怪物蛋</p>
                                        </a>
                                        <h6>$10.99</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="shop-details.html"><img src="img/bg-img/egg8.jpg" alt=""></a>

                                        <div class="product-meta d-flex">

                                            <a href="cart.php" class="add-to-cart-btn" style="width: 300px; margin-left: auto; margin-right: auto;">BUY</a>

                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.html">
                                            <p>怪物蛋</p>
                                        </a>
                                        <h6>$10.99</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="shop-details.html"><img src="img/bg-img/egg9.jpg" alt=""></a>
                                        <div class="product-meta d-flex">

                                            <a href="cart.php" class="add-to-cart-btn" style="width: 300px; margin-left: auto; margin-right: auto;">BUY</a>

                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.html">
                                            <p>怪物蛋</p>
                                        </a>
                                        <h6>$10.99</h6>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->



    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>