<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Title -->
    <title>carbon</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php date_default_timezone_set("Asia/Taipei");?>
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
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="shop.html">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio.html">Portfolio</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                    <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-post.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

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
            <h2>碳排計算</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>首頁</a></li>
                            <li class="breadcrumb-item active" aria-current="page">碳排計算</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->


                    <!-- Progress Bar Content Area -->
                    <div class="alazea-progress-bar mb-50">
                        <canvas id="myChart"></canvas>
                                                <script src="myChart.js"></script>
                                                <form action="count4.php" method="get">
                                                                        <input type="hidden" value="display" name="display">
                                                                        <input type="hidden" value="<?php echo date('Y-m-d');?>" name="currentDate">
                                                                        <input type="submit" value="詳細資料" style="width: 100px;height: 30px; border-radius: 4px;background-color: #70c745; color: white; border-color: #DDDDDD;">
                                                                        </form>
                                                <?php if($_GET['display'] == "display"){
                                                                        include "recordToday.php";}?>

                    </div>
                </div>
                <style>
                    .mt25{
                        margin-top: 25px;
                    }
                </style>

                <div class="col-12 col-lg-6">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->

                                <div class="single-benefits-area">
                                    <img src="img/core-img/b1.png" alt="">
                                    <h5>環保交通</h5>
                                    <div class="purchasenum mt25">
                                        <form action="count_4_b.php" method="get">
                                            <span>公車：&nbsp;
                                               <input  type="number" min="0" step="1" value="1" name="bus">&nbsp;分鐘&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               火車：&nbsp;
                                               <input  type="number" min="0" step="1" value="1" name="train">&nbsp;分鐘<br><br>
                                            </span>
                                            <span>高鐵：&nbsp;
                                               <input  type="number" min="0" step="1" value="1" name="hsr">&nbsp;分鐘&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               捷運：&nbsp;
                                               <input  type="number" min="0" step="1" value="1" name="mrt">&nbsp;分鐘<br><br>
                                            </span>
                                            <span>腳踏車：</span>&nbsp;
                                            <input  type="number" min="0" step="1" value="1" name="bike">&nbsp;分鐘<br><br>
                                            <span>電動汽、機車：</span>&nbsp;
                                            <input  type="number" min="0" step="1" value="1" name="fcar">&nbsp;分鐘<br><br>
                                            <input type="submit" value="提交" name="提交" style="width: 70px;height: 30px; border-radius: 4px;background-color: #70c745; color: white; border-color:#DDDDDD ;">
                                        </form>
                                    </div>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->



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