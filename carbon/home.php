<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Carbon</title>

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
            <img src="img/core-img/recycle.png" alt="">
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
                        <a href="home.php class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

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
                        <?php   include "navBar.php";?>
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
    <style>
        #nav {
        position: absolute;
        top: 110px;  right: 100px;  bottom: 50px; left: 100px; z-index: 0;

         }
         #van {
        position: absolute;
        top: 110px;  right: 100px;  bottom: 50px; left: 750px;

         }
    </style>
    <!-- ##### Hero Area Start ##### -->
        <section class="hero-area">
            <div class="hero-post-slides owl-carousel">

                <!-- Single Hero Post -->
                <div class="single-hero-post bg-overlay">
                    <!-- Post Image -->
                    <div class="slide-img bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>
                    <div id="nav" style="width:700px;">
                        <div >
                            <div class="col-12">
                                <!-- Post Content -->
                                <div id="nav">
                                    <h2 style="color:white;" >最新公告</h2>
                                    <br>
                                    <p style="color:white;font-size:18px;" >新怪獸來嚕！</p>
                                    <p style="color:white;font-size:18px;" >系統維修公告！</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="van" style="width:700px;">
                        <div >
                            <div class="col-12">
                                <!-- Post Content -->
                                <div id="nav">
                                    <h2 style="color:white;" >相關資訊</h2>
                                    <br>
                                    <p><a href="https://udn.com/news/story/7238/7114442" target="_blank" style="font-size:18px;font-weight:bolder;color:white;"><u>15家標竿服務業響應 邁向2050淨零排放</u></a></p>
                                    <p><a href="https://udn.com/news/story/7238/7114291" target="_blank" style="font-size:18px;font-weight:bolder;color:white;"><u>金寶攜康展電力搶再生能源採購市場 拚2030達成碳中和</u></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ##### Hero Area End ##### -->







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


